<x-home-master>

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

        @section('navbar-logo')
            <img src="{{asset('storage/'. $website->logo_horizontal_1)}}" alt="{{$website->name}}" height="25px" width="auto">
        @endsection
    @endforeach


    @section('styles')

    @endsection

    @section('content')

        <h1>Home Page Title</h1>

            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- Blog Post -->
            @foreach($feeds as $feed)
                <div class="card mb-4">
                    <img class="card-img-top" src="{{asset('storage/'. $feed->image)}}" alt="{{$feed->title}} Image">
                    <div class="card-body">
                        <h2 class="card-title">{{$feed->title}}</h2>
                        <p class="card-text">{{Str::limit($feed->content, '50', '...')}}</p>
                        <a href="{{route('feed.show', $feed->id)}}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{$feed->created_at->diffForHumans()}} by
                        <a href="#">{{$feed->user->name}}</a>
                    </div>
                </div>
            @endforeach


            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>

    @endsection


    @section('scripts')

    @endsection



</x-home-master>
