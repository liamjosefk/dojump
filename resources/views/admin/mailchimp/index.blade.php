@extends('layouts.admin')

@section('browser-title')
    MailChimp Emails | DoJump
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
                    <div class="col-sm-8">
                        <h1 class="m-0 font-weight-bold text-primary">MailChimp Emails </h1>
                        <span>(Emails submitted to mailchimp through the website)</span>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn btn-primary btn-right mt-2" data-toggle="modal" data-target="#addEmailModal">Add Email</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>First Name</th>
                            <th>Last Name</th>
{{--                            <th></th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leads as $lead)
                            <tr>
                                <td>{{$lead->email}}</td>
                                <td>{{$lead->first_name}}</td>
                                <td>{{$lead->last_name}}</td>
{{--                                <td>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-4">--}}
{{--                                            <a href="#" class="tableBtn" data-toggle="modal" data-target="#editLead{{$lead->id}}">--}}
{{--                                                <i class="fa fa-eye fa-2x" aria-hidden="true"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-4">--}}
{{--                                            <a href="#" class="tableBtn" data-toggle="modal" data-target="#archiveLead{{$lead->id}}">--}}
{{--                                                <i class="fa fa-archive fa-2x" aria-hidden="true"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
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