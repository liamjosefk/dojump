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
        Users
    @endsection


    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


    @section('content')

        <h1><span class="text-primary">Users</span></h1>

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
                                        <div class="col-sm-3">
                                            <p class="c3t">Email</p>
                                        </div>
                                        <div class="col-sm-2">
                                           <p class="c4t">Phone</p>
                                        </div>
                                        <div class="col-sm-1">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-1">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-1">
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
                                        <div class="col-sm-3">
                                            <p class="c3"><a href="mailto:{{$user->email}}">{{$user->email}}</a></p>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="c4 visible-xs"><a href="tel:{{$user->phone}}">{{$user->phone}}</a></p>
                                            <p class="c4 hidden-xs">{{$user->phone}}</p>
                                        </div>
                                        <div class="col-6 col-sm-1">
                                            <a href={{route('admin.user.profile', $user->id)}}#" class="btn btn-primary width-100">View</a>
                                        </div>
                                        <div class="col-6 col-sm-1">
                                            <a href="#" class="btn btn-secondary width-100" data-toggle="modal" data-target="#userEdit{{$user->id}}">Edit</a>
                                        </div>
                                        <div class="col-12 col-sm-1">
                                            <form action="{{route('admin.users.disable', $user->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" class="form-control" name="is_active" value="0">
                                                <button type="submit" class="btn btn-info width-100">Disable</button>
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


        @foreach($users as $user)
            <!-- Profile Modal-->
            <div class="modal fade" id="userEdit{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{route('admin.user.update.userPage', $user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update <span class="text-primary"> {{$user->name}}'s</span> Profile</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="name">First Name</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$user->name}}">
                                                    @error('name')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{$user->last_name}}">
                                                    @error('last_name')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{$user->email}}">
                                            @error('email')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Phone</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{$user->phone}}">
                                            @error('phone')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="avatar">Avatar</label>
                                            <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" name="avatar" value="{{$user->avatar}}">
                                            <img src="{{asset('storage/'. $user->avatar)}}" alt="{{$user->name}} Avatar" class="img-responsive mt-3">
                                            @error('avatar')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit">Update Profile</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        @endforeach

    @endsection


    @section('scripts')
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/datatables.js')}}"></script>
    @endsection

</x-admin-master>
