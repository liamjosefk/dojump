@extends('layouts.admin')

@section('browser-title')
    Donations | DoJump
@endsection


@section('page-description')
    Admin Dashboard - View Donations
@endsection



@section('styles')

@endsection


@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h1 class="m-0 font-weight-bold text-primary">Donations</h1>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-primary btn-right mt-2 hidden" data-toggle="modal" data-target="#addDonationModal">Add Donation</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Donation</th>
                            <th>Message</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($donations as $donation)
                            <tr>
                                <td>{{$donation->name}}</td>
                                <td>
                                    <a href="mailto:{{$donation->email}}">{{$donation->email}}</a>
                                </td>
                                <td>
                                    <a href="tel:{{$donation->phone}}">{{$donation->phone}}</a>
                                </td>
                                <td>
                                    @if(is_numeric($donation->donation))
                                        $ {{ number_format($donation->donation, 2) }}
                                    @else
                                        {{ $donation->donation }}
                                    @endif

                                </td>
                                <td>{{ \Illuminate\Support\Str::limit($donation->message, 75, '[...]') }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#" class="tableBtn" data-toggle="modal" data-target="#viewDonation{{$donation->id}}">
                                                <i class="fa fa-eye fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="tableBtn" data-toggle="modal" data-target="#archiveDonation{{$donation->id}}">
                                                <i class="fa fa-archive fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- View Donation Modal --->
                            <div class="modal fade mt-5" id="viewDonation{{$donation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">{{$donation->name}}
                                                &nbsp;
                                                <i class="fa fa-chevron-right"></i>
                                                &nbsp;
                                                @if(is_numeric($donation->donation))
                                                    $ {{ number_format($donation->donation, 2) }}
                                                @else
                                                    {{ $donation->donation }}
                                                @endif
                                            </h3>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h4 class="text-white">
                                                {{$donation->message}}
                                            </h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /View Donation Modal --->

                            <!-- Archive Donation Modal --->
                            <div class="modal fade mt-5" id="archiveDonation{{$donation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{route('donation.archive', $donation->id)}}" method="post">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Are you sure you want to ARCHIVE this donation?</h3>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="text-gray-600"><em>Archived donations are not deleted, but won't be viewable on the Donations page.</em></h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row width-100">
                                                        <div class="col-6">
                                                            <button class="btn btn-secondary btn-100 text-white" type="button" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="hidden" name="is_active" value="0">
                                                            <button class="btn btn-primary width-100 text-white" type="submit">Archive Donation</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /Archive Donation Modal --->

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