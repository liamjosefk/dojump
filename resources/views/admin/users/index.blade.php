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
                                    <td>
                                        <div class="row">
{{--                                            <div class="col-3">--}}
{{--                                                <a href="#" class="tableBtn" data-toggle="modal" data-target="#viewUser{{ $user->id }}">--}}
{{--                                                    <i class="fa fa-eye fa-2x" aria-hidden="true"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-1"></div>--}}
                                            <div class="col-3">
                                                @if(auth()->check() && auth()->user()->id == $user->id)
                                                    <a href="#" class="tableBtn" data-toggle="modal" data-target="#editUser{{$user->id}}">
                                                        <i class="fa fa-pen-square fa-2x" aria-hidden="true"></i>
                                                    </a>
                                                @endif

                                            </div>
{{--                                            <div class="col-1"></div>--}}
                                        </div>
                                    </td>
                                </tr>



                                <!-- Edit User Modal -->
                                <div class="modal fade mt-5" id="editUser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">

                                        <form action="{{ route('user.edit', $user->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="exampleModalLabel">Update User</h3>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="name" class="text-white">Name</label>
                                                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="email" class="mt-3 text-white">Email</label>
                                                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="password" class="mt-3 text-white">Password (Leave blank to keep current)</label>
                                                                <input type="password" name="password" class="form-control">
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="password_confirmation" class="mt-3 text-white">Confirm Password</label>
                                                                <input type="password" name="password_confirmation" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="row width-100">
                                                            <div class="col-6">
                                                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <button class="btn btn-primary btn-100" type="submit">Update {{ $user->name }}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                                <!-- /Edit User Modal -->
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