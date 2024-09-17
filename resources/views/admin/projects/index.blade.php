@extends('layouts.admin')

@section('browser-title')
    Portfolio Projects | DoJump
@endsection


@section('page-description')
    Admin Dashboard - View Portfolio Projects
@endsection



@section('styles')

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

                            @foreach($combinedData as $project)
                                <tr>
                                    <td>
                                        <h4>
                                            {{$project->type}}
                                        </h4>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{$project->title}} Image" class="img-responsive width-80">
                                    </td>
                                    <td>{{$project->title}}</td>
                                    <td>
                                        @if($project->description != '')
                                            {{$project->description}}
                                        @else
                                            No Description
                                        @endif

                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#" class="tableBtn" data-toggle="modal" data-target="#viewProject{{$project->id}}">
                                                    <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                                </a>
                                            </div>
{{--                                            <div class="col-4">--}}
{{--                                                <a href="#" class="tableBtn" data-toggle="modal" data-target="#editProject{{$project->id}}">--}}
{{--                                                    <i class="fa fa-pen fa-2x" aria-hidden="true"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </td>
                                </tr>


                                <!-- View Project Modal --->
                                <div class="modal fade mt-5" id="viewProject{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">{{$project->title}}                                                </h3>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{$project->title}} Image" class="img-responsive width-100">
                                                <h4 class="text-white mt-4">
                                                    {{$project->description}}
                                                </h4>
                                                <div class="mt-4">
                                                    <iframe title="vimeo-player" src="{{$project->link}}" width="100%" height="250px" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row width-100">
                                                    <div class="col-6">
                                                        <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Close</button>
                                                    </div>
                                                    <div class="col-6">
                                                        @if($project->type == 'Stage')
                                                            <a href="#" class="btn btn-primary width-100" data-dismiss="modal" data-toggle="modal" data-target="#updateProjectStage{{$project->id}}">Edit Project</a>
                                                        @else
                                                            <a href="#" class="btn btn-primary width-100" data-dismiss="modal" data-toggle="modal" data-target="#updateProjectVideo{{$project->id}}">Edit Project</a>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /View Project Modal --->

                                <!-- Edit Project-Stage Modal --->
                                <div class="modal fade mt-5" id="updateProjectStage{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">{{$project->title}}</h3>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('project.update_stage', $project->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="title" class="text-white">Title <span class="text-red">*</span></label>
                                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $project->title }}" required>
                                                            @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="description" class="text-white mt-3">Description <span class="text-red">*</span></label>
                                                            <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" required>{{ $project->description }}</textarea>
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="link" class="text-white mt-3">Link</label>
                                                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ $project->link }}">
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

                                <!-- /Edit Project-Stage Modal --->

                                <!-- Edit Project-Video Modal --->
                                <div class="modal fade mt-5" id="updateProjectVideo{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">{{$project->title}}</h3>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="{{route('project.update_video', $project->id)}}" method="post">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="title" class="text-white">Title <span class="text-red">*</span></label>
                                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$project->title}}">
                                                            @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="description" class="text-white mt-3">Description <span class="text-red">*</span></label>
                                                            <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $project->description }}</textarea>
                                                            @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="link" class="text-white mt-3">Link</label>
                                                            <input type="text" name="link" class="form-control-file @error('link') is-invalid @enderror" value="{{$project->link}}">
                                                            @error('link')
                                                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="image" class="text-white mt-3">Image <span class="text-red">*</span></label>
                                                            <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" required>
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
                                <!-- /Edit Project-Video Modal --->


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