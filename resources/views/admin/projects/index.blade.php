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
                                    <td>{{$project->type}}</td>
                                    <td>{{$project->image}}</td>
                                    <td>{{$project->title}}</td>
                                    <td>
                                        @if($project->description != '')
                                            {{$project->description}}
                                        @else
                                            No Description
                                        @endif

                                    </td>
                                </tr>
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