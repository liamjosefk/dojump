<li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is('admin/dashboard*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="{{ Request::is('admin/users*') ? 'true' : '' }}" aria-controls="collapseUsers">
        <i class="fas fa-fw fa-solid fa-users"></i>
        <span>Users</span>
    </a>
    <div id="collapseUsers" class="collapse {{ Request::is('admin/users*') ? 'show' : '' }}" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">Users Menu: </h6>
            <a class="collapse-item {{ Request::is('admin/users/index*') ? 'active' : '' }}" href="{{route('admin.users')}}"><span class="text-primary">Active</span> Users</a>
            <a class="collapse-item {{ Request::is('admin/users/add-user*') ? 'active' : '' }}" href="{{route('admin.users.add')}}">Add <span class="text-primary">User</span> </a>
            <a class="collapse-item {{ Request::is('admin/users/inactive*') ? 'active' : '' }}" href="{{route('admin.users.inactive')}}"><span class="text-primary">Disabled</span> Users</a>
        </div>
    </div>
</li>
