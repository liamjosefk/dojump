@extends('layouts.admin')

@section('browser-title')
    Reviews | DoJump
@endsection


@section('page-description')
    Admin Dashboard - View All Reviews
@endsection



@section('styles')

@endsection


@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h1 class="m-0 font-weight-bold text-primary">Reviews</h1>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-primary btn-right mt-2" data-toggle="modal" data-target="#addReviewModal">Add Review</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Image</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($reviews as $review)
                            <tr>
                                <td>
                                    @if($review->critic == '1')
                                        <h5>Critic</h5>
                                    @else
                                        @if($review->projects->isNotEmpty())
                                            @foreach($review->projects as $review_project)
                                                {{ \Illuminate\Support\Str::limit($review_project->title, 10, '[...]') }}
                                            @endforeach
                                        @else
                                            General
                                        @endif
                                    @endif
                                </td>

                                <td><img src="{{asset('storage/' . $review->image)}}" alt="" class="img-responsive" style="max-height: 50px;"> </td>
                                <td> {{$review->author}} </td>
                                <td> {{$review->title}} </td>
                                <td> {{ \Illuminate\Support\Str::limit($review->content, 50, '[...]') }} </td>
                                <td>
                                    <div class="row">
                                        <div class="col-3">
                                            <a href="#" class="tableBtn" data-toggle="modal" data-target="#viewReview{{ $review->id }}">
                                                <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="col-1"></div>
                                        <div class="col-3">
                                            <a href="#" class="tableBtn" data-toggle="modal" data-target="#editReview{{$review->id}}">
                                                <i class="fa fa-pen-square fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="col-1"></div>
                                        <div class="col-3">



                                            @if($review->critic != '1')
                                                @if($review->projects->isNotEmpty())
                                                    <a href="#" class="tableBtn" data-toggle="modal" data-target="#catReview{{ $review->id }}">
                                                        <i class="fa fa-film fa-2x text-gray-400" aria-hidden="true"></i>
                                                    </a>
                                                @else
                                                    <a href="#" class="tableBtn" data-toggle="modal" data-target="#catReview{{ $review->id }}">
                                                        <i class="fa fa-film fa-2x" aria-hidden="true"></i>
                                                    </a>
                                                @endif



                                            @else
                                                &nbsp;
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>



                            <!-- Review Modals -->
                            <div class="modal fade mt-5" id="viewReview{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{ route('admin.user.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">{{$review->author}}</h3>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="text-gray-500">{{$review->title}}</h3>
                                                <h5 class="text-gray-300">
                                                    {!! $review->content !!}
                                                </h5>
                                            </div>
                                            <div class="modal-footer pb-5">
                                                <div class="row width-100">
                                                    <div class="col-6">
                                                        <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Close</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-primary btn-100" data-dismiss="modal" data-toggle="modal" data-target="#editReview{{$review->id}}">
                                                            Edit Review
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="modal fade mt-5" id="editReview{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{route('review.edit', $review->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')


                                        <div class="form-group">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Edit Review</h3>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="author">Author <span class="text-red">*</span></label>
                                                            <input type="text" class="form-control" name="author" value="{{$review->author}}" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="title" class="mt-3">Title <span class="text-red">*</span></label>
                                                            <input type="text" class="form-control" name="title" value="{{$review->title}}" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="content" class="mt-3">Review Content <span class="text-red">*</span></label>
                                                            <textarea name="content" cols="30" rows="10" class="form-control" required>{{$review->content}}</textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="image" class="mt-3">Image</label>
                                                            <input type="file" name="image" class="form-control-file">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="link" class="mt-3">Link</label>
                                                            <input type="text" name="link" class="form-control" value="{{$review->link}}">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="critic" class="mt-3">Critic Review?</label>
                                                            <select name="critic" class="form-control">
                                                                <option value="0"
                                                                @if($review->critic == '0')
                                                                    selected
                                                                @else

                                                                @endif
                                                                >No</option>
                                                                <option value="1"
                                                                @if($review->critic == '1')
                                                                    selected
                                                                @else

                                                                @endif
                                                                >Yes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer pb-5">
                                                    <div class="row width-100">
                                                        <div class="col-6">
                                                            <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button class="btn btn-primary btn-100" type="submit">Update Review</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="modal fade mt-5" id="catReview{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{route('review.attach_project', $review->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Attach to Project</h3>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="critic" class="mt-3">Critic Review?</label>
                                                            <select name="project" class="form-control">
                                                                <option value="0">General Review</option> <!-- General Review Option -->
                                                                @foreach($projects as $project)
                                                                    <option value="{{$project->id}}" {{ $review->projects->contains($project->id) ? 'selected' : '' }}>{{$project->title}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer pb-5">
                                                    <div class="row width-100">
                                                        <div class="col-6">
                                                            <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                        <div class="col-6">
                                                            @if($review->projects->isNotEmpty())
                                                                <button class="btn btn-primary btn-100" type="submit">Change Project</button>
                                                            @else
                                                                <button class="btn btn-primary btn-100" type="submit">Attach Project</button>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- /Review Modals -->
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection



@section('scripts')

@endsection