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
            Inactive Users
    @endsection


    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


    @section('content')

        <h1><span class="text-primary">Inactive Users</span></h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="hidden-xs-table hidden-sm-table width-100">
                            <th class="width-100">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <p class="c1t">ID</p>
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-2">
                                        <p class="text-center-sm c2t">Name</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="c3t">Email</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="c4t">Phone</p>
                                    </div>
                                    <div class="col-sm-2">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-2">
                                        &nbsp;
                                    </div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr class="p-1">
                                <td>
                                    <div class="row">
                                        <div class="col-1">
                                            <p class="c1">{{$user->id}}</p>
                                        </div>
                                        <div class="col-sm-1">
                                            <img src="{{asset('storage/'. $user->avatar)}}" alt="{{$user->name}} Image" width="75px" height="auto">
                                        </div>
                                        <div class="col-11 col-sm-2">
                                            <p class="text-center-sm c2">{{$user->name}} {{$user->last_name}}</p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="c3"><a href="mailto:{{$user->email}}">{{$user->email}}</a></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="c4 visible-xs"><a href="tel:{{$user->phone}}">{{$user->phone}}</a></p>
                                            <p class="c4 hidden-xs">{{$user->phone}}</p>
                                        </div>
                                        <div class="col-6 col-sm-2">
                                            <a href={{route('admin.user.profile', $user->id)}}#" class="btn btn-primary width-100">View</a>
                                        </div>
                                        <div class="col-6 col-sm-2">
                                            <form action="{{route('admin.users.enable', $user->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" class="form-control" name="is_active" value="1">
                                                <button type="submit" class="btn btn-secondary width-100">Enable</button>
                                            </form>
                                        </div>
                                    </div>
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
