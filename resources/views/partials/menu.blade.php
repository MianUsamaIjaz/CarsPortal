<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('car_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.cars.index") }}" class="nav-link {{ request()->is("admin/cars") || request()->is("admin/cars/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-taxi">

                            </i>
                            <p>
                                {{ trans('cruds.car.title') }}
                            </p>
                        </a>
                    </li>
                @endcan

                
                    <li class="nav-item">
                        <a href="{{ route("admin.colors.index") }}" class="nav-link {{ request()->is("admin/colors") || request()->is("admin/colors/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-taxi">

                            </i>
                            <p>
                                {{ trans('cruds.color.title') }}
                            </p>
                        </a>
                    </li>

                    
                

                
                    <li class="nav-item">
                        <a href="{{ route("admin.franchises.index") }}" class="nav-link {{ request()->is("admin/franchises") || request()->is("admin/franchises/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-taxi">

                            </i>
                            <p>
                                {{ trans('cruds.franchise.title') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.manufacturers.index") }}" class="nav-link {{ request()->is("admin/manufacturers") || request()->is("admin/manufacturers/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-taxi">

                            </i>
                            <p>
                                {{ trans('cruds.manufacturer.title') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.carModels.index") }}" class="nav-link {{ request()->is("admin/carModels") || request()->is("admin/carModels/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-taxi">

                            </i>
                            <p>
                                {{ trans('cruds.carModel.title') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route("admin.years.index") }}" class="nav-link {{ request()->is("admin/years") || request()->is("admin/years/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-taxi">

                            </i>
                            <p>
                                {{ trans('cruds.year.title') }}
                            </p>
                        </a>
                    </li>
                


                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>