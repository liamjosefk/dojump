<li class="nav-item {{ Request::is('admin/support*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is('admin/support*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseSupport" aria-expanded="{{ Request::is('admin/support*') ? 'true' : '' }}" aria-controls="collapseSupport">
        <i class="fas fa-fw fa-solid fa-user"></i>
        <span>Support</span>
    </a>
    <div id="collapseSupport" class="collapse {{ Request::is('admin/support*') ? 'show' : '' }}" aria-labelledby="headingSupport" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">Tutorials: </h6>
            <a class="collapse-item {{ Request::is('admin/support*') ? 'active' : '' }}" href="#"><span class="text-primary">Introductory</span> Videos</a>
            <a class="collapse-item {{ Request::is('admin/support*') ? 'active' : '' }}" href="#">View <span class="text-primary">"How-To"</span> Videos</a>

            <br>
            <h6 class="collapse-header">Get in Touch: </h6>
            <a class="collapse-item {{ Request::is('admin/support*') ? 'active' : '' }}" href="#">Submit a <span class="text-primary">Ticket</span></a>
            <a class="collapse-item {{ Request::is('admin/support*') ? 'active' : '' }}" href="#">Send an <span class="text-primary">Email</span></a>
        </div>
    </div>
</li>
