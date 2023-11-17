<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        return view('admin.employee.index');
    }

    #store
    public function store(Request $request)
    {
        $formField = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone|min:10',
            'branch' => 'required',
            'level' => 'required',
        ]);
        $formField['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        if ($request->level == 'register') {
            $request->validate(['office' => 'required',]);
            $formField['office'] = $request->office;
        }
        // if level is driver
        if ($request->level == 'driver') {
            $request->validate(['driverRole' => 'required', 'driving_category' => 'required', 'driving_licence' => 'required',]);
            $formField['driving_category'] = $request->driving_category;
            $formField['driverRole'] = $request->driverRole;
            // driving_licence upload
            if ($request->hasFile('driving_licence')) {
                $file = $request->file('driving_licence');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/driving_licence/', $filename);
                $formField['driving_license'] = $filename;
            }
        }

        User::create($formField);
        return to_route('admin.employee.index')->with('success', 'Employee Added Successfully');
    }
    #update
    public function update(Request $request, $id)
    {
        $formField = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|numeric|unique:users,phone,' . $id,
            'branch' => 'required',
            'level' => 'required',
        ]);
        if ($request->level == 'register') {
            $request->validate(['office' => 'required',]);
            $formField['office'] = $request->office;
        }
        // if level is driver
        if ($request->level == 'driver') {
            $request->validate(['driverRole' => 'required', 'driving_category' => 'required', 'driving_licence' => 'required',]);
            $formField['driving_category'] = $request->driving_category;
            $formField['driverRole'] = $request->driverRole;
            // driving_licence upload
            if ($request->hasFile('driving_licence')) {
                $file = $request->file('driving_licence');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/driving_licence/', $filename);
                $formField['driving_license'] = $filename;
            }
        }
        User::findorfail($id)->update($formField);
        return to_route('admin.employee.index')->with('success', 'Employee Updated Successfully');
    }
    #destroy
    public function destroy($id)
    {
        User::findorfail($id)->delete();
        return to_route('admin.employee.index')->with('success', 'Employee Deleted Successfully');
    }
    public function api()
    {
        $employees = User::all();
        return response()->json([
            'success' => true,
            'data' => $employees
        ]);
        // return response()->json($employees);
    }
    #profile
    public function profile($id)
    {
        $user = User::findorfail($id);
        $roles = Role::pluck('name')->toArray();
        return view('admin.employee.profile', compact('user', 'roles'));
    }
    public function profileEdit()
    {
        $user = User::findorfail(auth()->user()->id);
        $roles = Role::pluck('name')->toArray();
        return view('admin.employee.profile', compact('user', 'roles'));
    }
    // profileUpdate
    public function profileUpdate(Request $request)
    {
        $formField = $request->validate([
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'phone' => 'required|numeric|unique:users,phone,' . auth()->user()->id,
        ]);
        User::findorfail(auth()->user()->id)->update($formField);
        return back()->with('success', 'Profile Updated Successfully');
    }
    // changePassword
    public function changePassword(Request $request)
    {

        $formField = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = User::findorfail(auth()->user()->id);
        if (Hash::check($request->old_password, $user->password)) {
            $user->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'Password Changed Successfully');
        } else {
            return back()->with('error', 'Old Password Not Matched');
        }
    }

}
