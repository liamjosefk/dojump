@extends('layouts.admin')

@section('browser-title')
    Users | DoJump
@endsection


@section('page-description')
    Admin Dashboard - View Users
@endsection



@section('styles')

@endsection


@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h1 class="m-0 font-weight-bold text-primary">Users</h1>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-primary btn-right mt-2" data-toggle="modal" data-target="#addUserModal">Add User</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td></td>
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