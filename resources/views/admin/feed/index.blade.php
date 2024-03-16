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
        Feed
    @endsection


    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


    @section('content')

        <h1><span class="text-primary">Feed</span></h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header">
                    @if(Session::has('message'))
                        <h3 class="text-center mb-0">
                            {{Session::get('message')}}
                        </h3>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Created</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($feeds as $feed)
                                    <tr>
                                        <td>{{$feed->id}}</td>
                                        <td>
                                            <img src="{{asset('storage/'. $feed->image)}}" alt="{{$feed->title}} Image" width="75px" height="auto">
                                        </td>
                                        <td>{{$feed->title}}</td>
                                        <td>{{$feed->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('admin.feed.show', $feed->id)}}" class="btn btn-primary width-100">View</a>
                                        </td>
                                        <td>
                                            @can('view', $feed)
                                                <a href="{{route('admin.feed.edit', $feed->id)}}" class="btn btn-secondary width-100">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('view', $feed)
                                                <form action="{{route('admin.feed.delete', $feed->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger width-100" type="submit">Delete</button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        @endsection


    @section('scripts')
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
            <script src="{{asset('js/datatables.js')}}"></script>
    @endsection

</x-admin-master>
