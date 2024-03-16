<li class="nav-item {{ Request::is('admin/feed*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is('admin/index*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseFeed" aria-expanded="{{ Request::is('admin/feed*') ? 'true' : '' }}" aria-controls="collapseFeed">
        <i class="fas fa-fw fa-solid fa-rss"></i>
        <span>Feed</span>
    </a>
    <div id="collapseFeed" class="collapse {{ Request::is('admin/feed*') ? 'show' : '' }}" aria-labelledby="headingFeed" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">Feed: </h6>
            <a class="collapse-item {{ Request::is('admin/feed/index*') ? 'active' : '' }}" href="{{route('admin.feed.index')}}"><span class="text-primary">All</span> Feeds</a>
            <a class="collapse-item {{ Request::is('admin/feed/create*') ? 'active' : '' }}" href="{{route('admin.feed.create')}}">Add <span class="text-primary">Feed</span></a>
        </div>
    </div>
</li>
