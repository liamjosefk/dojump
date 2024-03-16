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
        Add User
    @endsection


    @section('styles')

    @endsection


    @section('content')



        <div class="row">
            <div class="col-sm-10">
                <h1>Add <span class="text-primary">User</span></h1>
            </div>
        </div>


        <div class="card shadow mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.user.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">First Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                                            @error('name')
                                                <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name">
                                            @error('last_name')
                                                <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                                            @error('email')
                                                  <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone">
                                            @error('phone')
                                                <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control format @error('password') is-invalid @enderror" name="password">
                                            @error('password')
                                                <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control format" name="password_confirmation" autocomplete="new-password">
                                            @error('password-confirmation')
                                                <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="avatar" class="hidden">Avatar</label>
                                        <input type="hidden" name="avatar" id="avatar" class="form-control format" value="" />
                                    </div>

                                    <input type="hidden" class="form-control" name="is_active" value="1">
                                    <input type="hidden" class="form-control" value="1">
                                    <button class="btn btn-primary width-100 mt-4" type="submit">Add User</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>






    @endsection


    @section('scripts')

    @endsection

</x-admin-master>
