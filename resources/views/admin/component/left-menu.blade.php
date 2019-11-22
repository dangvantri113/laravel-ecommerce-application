<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">{{Auth::user()->email}}</p>
            <p class="app-sidebar__user-designation">Admin Dashboard</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href="{{route('admin.dashboard')}}">
                <i class="app-menu__icon fa fa-dashboard">
                </i><span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.users')}}">
                <i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">User Management</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.shops')}}">
                <i class="app-menu__icon fa fa-shopping-cart"></i>
                <span class="app-menu__label">Shop Management</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.categories')}}">
                <i class="app-menu__icon fa fa-list"></i>
                <span class="app-menu__label">Category Management</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.myProfile')}}">
                <i class="app-menu__icon fa fa-user-circle-o"></i>
                <span class="app-menu__label">My Profile</span>
            </a>
        </li>

    </ul>
</aside>
