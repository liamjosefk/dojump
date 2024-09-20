@extends('layouts.admin')

@section('browser-title')
    Portfolio Projects | DoJump
@endsection


@section('page-description')
    Admin Dashboard - View Portfolio Projects
@endsection



@section('styles')

    <style>
        img.img-responsive {
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
@endsection


@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h1 class="m-0 font-weight-bold text-primary">Portfolio Projects</h1>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-primary btn-right mt-2" data-toggle="modal" data-target="#addProjectModal">Add Project</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($combinedData as $item)
                            <tr>
                                <td><h4>{{ $item->type }}</h4></td>
                                <td>
                                    @if($item->type == 'Stage')
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }} Image" class="img-responsive width-80">
                                    @elseif($item->type == 'Video')
                                        <iframe title="vimeo-player" src="{{ $item->link }}" width="100%" height="200" frameborder="0" allowfullscreen></iframe>
                                    @endif
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if($item->description != '')
                                        {{ $item->description }}
                                    @else
                                        No Description needed for videos.
                                    @endif
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#" class="tableBtn" data-toggle="modal"
                                               @if($item->type == 'Stage')
                                               data-target="#viewStage{{ $item->id }}"
                                               @else
                                               data-target="#viewVideo{{ $item->id }}"
                                                    @endif>
                                                <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- View Modals (Stage and Video) -->
                            @if($item->type == 'Stage')
                                <!-- View Stage Modal -->
                                <div class="modal fade mt-5" id="viewStage{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">{{$item->title}}                                                </h3>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{$item->title}} Image" class="img-responsive width-100">
                                                <h4 class="text-white mt-4">
                                                    {{$item->description}}
                                                </h4>
                                                <div class="mt-4">
                                                    <iframe title="vimeo-player" src="{{$item->link}}" width="100%" height="250px" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row width-100">
                                                    <div class="col-6">
                                                        <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Close</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-primary width-100" data-dismiss="modal" data-toggle="modal" data-target="#updateStage{{$item->id}}">Edit Project</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($item->type == 'Video')
                                <!-- View Video Modal -->
                                <div class="modal fade mt-5" id="viewVideo{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">{{ $item->title }}</h3>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <iframe title="vimeo-player" src="{{ $item->link }}" width="100%" height="250" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#" class="btn btn-primary width-100" data-dismiss="modal" data-toggle="modal" data-target="#updateVideo{{ $item->id }}">Edit Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Edit Modals (Stage and Video) -->
                            @if($item->type == 'Stage')
                                <!-- Edit Stage Modal -->
                                <div class="modal fade mt-5" id="updateStage{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Edit: {{$item->title}}</h3>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('project.update_stage', $item->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="title" class="text-white">Title <span class="text-red">*</span></label>
                                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $item->title }}" required>
                                                            @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="description" class="text-white mt-3">Description <span class="text-red">*</span></label>
                                                            <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" required>{{ $item->description }}</textarea>
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="link" class="text-white mt-3">Link</label>
                                                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ $item->link }}">
                                                            @error('link')
                                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="image" class="text-white mt-3">Image</label>
                                                            <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                                                            @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row width-100">
                                                        <div class="col-6">
                                                            <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <button class="btn btn-primary btn-100" type="submit">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @elseif($item->type == 'Video')
                                <!-- Edit Video Modal -->
                                <div class="modal fade mt-5" id="updateVideo{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ route('project.update_video', $item->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h3 class="modal-title">{{ $item->title }}</h3>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" name="title" value="{{ $item->title }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="link">Link</label>
                                                        <input type="text" class="form-control" name="link" value="{{ $item->link }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Update Video</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
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