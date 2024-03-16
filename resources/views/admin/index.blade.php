<x-admin-master>

    @foreach($websites as $website)

        @section('square-logo')
            <img src="{{asset('storage/'. $website->logo_square_1)}}" alt="{{$website->name}}" height="30px" width="auto">
        @endsection

        @section('favicon')
            <link rel="icon" type="image/x-icon" href="{{asset('storage/' . $website->favicon)}}">
        @endsection

        @section('navbar-brand')
            {{$website->name}}
        @endsection

        @section('analytic-links')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/index*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseAnalytics" aria-expanded="" aria-controls="collapseAnalytics">
                    <i class="fas fa-fw fa-solid fa-code-branch"></i>
                    <span>Analytics</span>
                </a>
                <div id="collapseAnalytics" class="collapse" aria-labelledby="headingAnalytics" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Google Analytics: </h6>
                        @if($website->google_link_1 != '')
                            <a class="collapse-item" href="{{$website->google_link_1}}" target="_blank">Analytics <span class="text-primary">Main</span></a>
                        @endif
                        @if($website->google_link_2 != '')
                            <a class="collapse-item" href="{{$website->google_link_2}}" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                        @endif
                        @if($website->google_link_3 != '')
                            <a class="collapse-item" href="{{$website->google_link_3}}" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                        @endif
                        @if($website->google_link_4 != '')
                            <a class="collapse-item" href="{{$website->google_link_4}}" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                        @endif
                        @if($website->google_link_5 != '')
                            <a class="collapse-item" href="{{$website->google_link_5}}" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                        @endif
                    </div>
                </div>
            </li>
        @endsection
    @endforeach


    @section('page-name')
        Dashboard
    @endsection


    @section('styles')

    @endsection


    @section('content')

        <h1 class="text-primary">Dashboard</h1>



    @endsection


    @section('scripts')

    @endsection

</x-admin-master>
