@extends('layouts.admin')

@section('browser-title')
    Gallery Images | DoJump
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
                        <h1 class="m-0 font-weight-bold text-primary">Gallery Images</h1>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-primary btn-right mt-2" data-toggle="modal" data-target="#addImageModal">Add Image</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Alt Text</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($images as $image)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/' . $image->image_thumb) }}" alt="{{$image->alt}}" class="img-responsive width-80" style="max-width: 400px;">
                                    </td>
                                    <td>{{$image->alt}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#" class="tableBtn" data-toggle="modal" data-target="#editImage{{$image->id}}">
                                                    <i class="fa fa-pen-square fa-2x" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                <div class="modal fade mt-5" id="editImage{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{route('image.update', $image->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group text-white">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="exampleModalLabel">Update Image</h3>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="image">Image</label>
                                                                <input type="file" name="image" class="form-control-file">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="image_thumb" class="mt-4">Thumbnail Image <small>(max-width: 400px)</small></label>
                                                                <input type="file" name="image_thumb" class="form-control-file">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="alt" class="mt-4">Alt Text</label>
                                                                <input type="text" class="form-control" name="alt" value="{{ $image->alt }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="row width-100">
                                                            <div class="col-6">
                                                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <button class="btn btn-primary btn-100" type="submit">Update Image</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

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