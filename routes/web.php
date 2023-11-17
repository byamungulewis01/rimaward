<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\TeamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    // Customer Login
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/about-us', 'about')->name('about');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::get('/leadership', 'leadership')->name('leadership');
    });

    Route::controller(ClientController::class)->prefix('client')->name('client.')->group(function () {
        // Route::get('/', 'index')->na me('index');
        Route::post('login', 'login')->name('login');
        Route::post('register', 'register')->name('register');
    });


    Route::controller(AdminAuthController::class)->name('admin.')->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'login')->name('loginAuth');
        Route::get('/reset-password', 'resetPassword')->name('resetPassword');
    });
});

// Route::group(['middleware' => 'auth'], function () {
Route::name('admin.')->middleware('auth')->group(function () {
    //    Admin Dashboard
    Route::get('/dashboard', [AdminDashController::class, 'index'])->name('dashboard');
    //    Employees
    Route::controller(EmployeeController::class)->name('employee.')->group(function () {
        Route::get('/employees', 'index')->name('index');
        Route::post('/employees', 'store')->name('store');
        Route::put('/employees/{id}', 'update')->name('update');
        Route::delete('/employees/{id}', 'destroy')->name('destroy');
        #employee profile
        Route::get('/employees/profile/{id}', 'profile')->name('profile');
        Route::get('/employees/profile', 'profileEdit')->name('profileEdit');
        Route::put('/employees/profile/update', 'profileUpdate')->name('profileUpdate');
        Route::put('/employees/profile/change-password', 'changePassword')->name('changePassword');

    });
    //  End Employees
    //    Posts
    Route::controller(PostController::class)->name('posts.')->group(function () {
        Route::get('/posts', 'index')->name('index');
        Route::post('/posts', 'store')->name('store');
        Route::put('/posts/{id}', 'update')->name('update');
        Route::delete('/posts/{id}', 'destroy')->name('destroy');
    });
    //   End Posts
    //    Team
    Route::controller(TeamController::class)->name('team.')->group(function () {
        Route::get('/team', 'index')->name('index');
        Route::post('/team', 'store')->name('store');
        Route::put('/team/{id}', 'update')->name('update');
        Route::delete('/team/{id}', 'destroy')->name('destroy');
    });
    //   End Team
    //    Roles
    Route::controller(RolesController::class)->name('roles.')->group(function () {
        Route::get('/roles', 'index')->name('index')->middleware('can:read roles');
        Route::post('/roles', 'store')->name('store');
        Route::put('/roles/{id}', 'assignRole')->name('assignRole');
        Route::delete('/roles/{id}', 'destroy')->name('destroy');
    });
    //   End Roles

    //    Permissions
    Route::controller(PermissionsController::class)->name('permissions.')->group(function () {
        Route::get('/permissions', 'index')->name('index')->middleware('can:read permission');
        Route::post('/permissions', 'store')->name('store');
        Route::put('/permissions/{id}', 'update')->name('update');
        Route::delete('/permissions/{id}', 'destroy')->name('destroy');
    });
    //   End Permissions

    //    Settings
    Route::controller(SettingController::class)->name('setting.')->group(function () {
        Route::get('/setting', 'index')->name('index')->middleware('can:read setting');
        Route::prefix('setting')->group(function () {
            Route::post('/activity', 'activityStore')->name('store');
            Route::put('/activity/{id}', 'activityUpdate')->name('update');
            Route::delete('/activity/{id}', 'activityDestroy')->name('destroy');
        });
    });
    //   End Settings

    // change password
    Route::get('/change-password', [AdminAuthController::class, 'changePassword'])->name('changePassword');
    Route::put('/change-password/{id}', [AdminAuthController::class, 'changePasswordStore'])->name('changePasswordStore');

    //    Logout
    Route::get('/logout', [LogoutController::class, 'adminLogout'])->name('logout');
});



Route::get('/test', function () {
    return view('index.index');
});

// });
