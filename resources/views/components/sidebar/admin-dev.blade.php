<li class="nav-item {{ Request::is('admin/dev*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is('admin/index*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseDev" aria-expanded="{{ Request::is('admin/dev*') ? 'true' : '' }}" aria-controls="collapseDev">
        <i class="fas fa-fw fa-solid fa-code"></i>
        <span>Dev</span>
    </a>
    <div id="collapseDev" class="collapse {{ Request::is('admin/dev*') ? 'show' : '' }}" aria-labelledby="headingDev" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">App Control: </h6>
            <a class="collapse-item {{ Request::is('admin/dev/site-info*') ? 'active' : '' }}" href="{{route('admin.dev.siteInfo')}}"><span class="text-primary">App</span> Info</a>
        </div>
    </div>
</li>
