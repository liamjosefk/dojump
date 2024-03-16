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
        Edit: {{$feed->title}}
    @endsection


    @section('styles')

    @endsection


    @section('content')

        <h1>Edit Feed: <span class="text-primary">{{$feed->title}}</span></h1>


        <form action="{{route('admin.feed.update', $feed->id)}}" method="post" enctype="multipart/form-data">
{{--        <form action="#" method="post" enctype="multipart/form-data">--}}
            @csrf
            @method('PATCH')
            <div class="card shadow mb-5">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Content</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$feed->content}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea name="title" id="title" cols="30" rows="3" class="form-control">{{$feed->title}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                                <img src="{{asset('storage/'. $feed->image)}}" alt="{{$feed->title}}" height="auto" class="img-responsive mt-3">
                            </div>
                            <button class="btn btn-primary width-100 mt-3" type="submit">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    @endsection


    @section('scripts')

    @endsection

</x-admin-master>
