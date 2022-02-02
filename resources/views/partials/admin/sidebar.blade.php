<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('images/avatar.jpeg') }}" class="img-circle user-img-circle"
                                alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>{{ Auth::user()->name ?? 'John Doe' }}</p>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                    Online</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item start active open">
                    <a href="{{ route('admin.home') }}" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                {{-- ========================================== superadmin access start ==================================== --}}
                @can('superadmin_management_access')
                    @can('showroom_access')
                        <li
                            class="nav-item {{ request()->is('admin/showrooms*') ? 'active open' : '' }} {{ request()->is('admin/showrooms*') ? 'active open' : '' }} {{ request()->is('admin/showrooms*') ? 'active open' : '' }}">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
                                <span class="title">Showrooms</span> <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li
                                    class="nav-item {{ request()->is('admin/showrooms') || request()->is('admin/showrooms/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.showrooms.index') }}" class="nav-link ">
                                        <i class="fa fa-plus-circle"></i>
                                        <span class="title">All Showrooms</span>
                                    </a>
                                </li>
                                @can('showroom_create')
                                    <li
                                        class="nav-item {{ request()->is('admin/showrooms') || request()->is('admin/showrooms/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.showrooms.create') }}" class="nav-link ">
                                            <i class="fa fa-list"></i>
                                            <span class="title">Add Showroom</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('showroom_show')
                                    <li class="nav-item {{ request()->is('admin/showrooms-admins') || request()->is('admin/showrooms-admins/*') ? 'active' : '' }}">
                                        <a href="{{ route('admin.showrooms.admin.list') }}" class="nav-link ">
                                            <i class="fa fa-plus-circle"></i>
                                            <span class="title">Showroom Admins</span>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                            <span class="title"> Auctions</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-group"></i>
                                    <span class="title">All Auctions</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-user-plus"></i>
                                    <span class="title">Add Auctioneer</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-user-plus"></i>
                                    <span class="title">Manage Admins</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @can('user_management_access')
                        <li
                            class="nav-item {{ request()->is('admin/permissions*') ? 'active open' : '' }} {{ request()->is('admin/roles*') ? 'active open' : '' }} {{ request()->is('admin/users*') ? 'active open' : '' }}">
                            <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                                <span class="title">Users</span> <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li
                                    class="nav-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.users.index') }}" class="nav-link ">
                                        <i class="fa fa-user"></i>
                                        <span class="title">{{ trans('cruds.user.title') }}</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li
                                    class="nav-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.roles.index') }}" class="nav-link ">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="title">{{ trans('cruds.role.title') }}</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                {{-- <li
                                    class="nav-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.permissions.index') }}" class="nav-link ">
                                        <i class="fa fa-unlock"></i>
                                        <span class="title">{{ trans('cruds.permission.title') }}</span>
                                        <span class="selected"></span>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">Showroom Admins</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">Showroom Staff</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">Showroom Clients</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">Auction Admin</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">Auction Biders</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">Bid Winers</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endcan
                @endcan
                {{-- ========================================== superadmin access end ==================================== --}}
                {{-- ========================================== showroomadmin access start ==================================== --}}
                @can('showroom_admin_access')
                    <li
                        class="nav-item {{ request()->is('admin/inventories*') ? 'active open' : '' }} {{ request()->is('admin/inventories/create*') ? 'active open' : '' }}">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
                            <span class="title">Inventory</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            @can('inventory_access')
                                <li
                                    class="nav-item {{ request()->is('admin/inventories') || request()->is('admin/inventories/*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.inventories.index') }}" class="nav-link ">
                                        <i class="fa fa-list"></i>
                                        <span class="title">All Inventory</span>
                                    </a>
                                </li>
                            @endcan
                            @can('inventory_create')
                                <li
                                    class="nav-item {{ request()->is('admin/inventories/create') || request()->is('admin/inventories/create*') ? 'active' : '' }}">
                                    <a href="{{ route('admin.inventories.create') }}" class="nav-link ">
                                        <i class="fa fa-plus-circle"></i>
                                        <span class="title">Add Inventory</span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                            <span class="title"> Staff</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-group"></i>
                                    <span class="title">All Staff</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-user-plus"></i>
                                    <span class="title">Add Staff</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="material-icons">dvr</i>
                            <span class="title">Sales</span>
                            <span class="label label-rouded label-menu label-warning">new</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-plus-circle"></i>
                                    <span class="title">Record Sales</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-list"></i>
                                    <span class="title">Sales Overview</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">settings</i>
                            <span class="title">settings</span>
                            <span class="arrow"></span>
                        </a>
                    </li> --}}
                @endcan
                {{-- ========================================== showroomadmin access end ==================================== --}}

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();"> <i
                            class="fa fa-power-off"></i>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
