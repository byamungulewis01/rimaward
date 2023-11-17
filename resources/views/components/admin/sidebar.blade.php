<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('admin.employee.index') ? 'active' : '' }}"
                        href="{{ route('admin.employee.index') }}">
                        <i class="ri-account-circle-line"></i> <span data-key="t-employees">Employees</span>
                    </a>

                </li>

                {{-- posts --}}
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('admin.posts.index') ? 'active' : '' }}"
                        href="{{ route('admin.posts.index') }}">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-posts">Posts</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('admin.team.index') ? 'active' : '' }}"
                        href="{{ route('admin.team.index') }}">
                        <i class="ri-team-line"></i> <span data-key="t-team">Team</span>
                    </a>
                </li>

                {{-- @endcan --}}
                {{-- driver --}}


                @can('read roles', 'read permissions')
                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#permission" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="permission">
                            <i class="ri-settings-5-line"></i> <span data-key="t-landing">Roles & Permissions</span>
                        </a>
                        <div class="collapse menu-dropdown" id="permission">
                            <ul class="nav nav-sm flex-column">
                                {{-- can read roles --}}
                                @can('read roles')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.roles.index') }}"
                                            class="nav-link {{ Request::routeIs('admin.roles.index') ? 'active' : '' }}"
                                            data-key="t-one-role"> Roles </a>
                                    </li>
                                @endcan

                                {{-- can read permission --}}
                                @can('read permission')
                                    <li class="nav-item">
                                        <a href="{{ route('admin.permissions.index') }}"
                                            class="nav-link {{ Request::routeIs('admin.permissions.index') ? 'active' : '' }}"
                                            data-key="t-nft-permission"> Permission </a>
                                    </li>
                                @endcan

                            </ul>
                        </div>
                    </li>
                @endcan

                {{-- can read setting --}}
                @can('read setting')
                    <li class="nav-item">
                        <a class="nav-link menu-link {{ Request::routeIs('admin.setting.index') ? 'active' : '' }}"
                            href="{{ route('admin.setting.index') }}">
                            <i class="ri-equalizer-fill"></i> <span data-key="t-base-hu">System Sitting</span>
                        </a>

                    </li>
                @endcan

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
