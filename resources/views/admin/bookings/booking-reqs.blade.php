@extends ('admin.layouts.app')

@section('page-css')
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard - Booking Requests</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Booking Requests</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Room Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $key=>$booking)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{$booking->name}}</td>
                    <td><span class="bg-danger text-white p-1">{{$booking->mobile}}</span></td>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->check_in}}</td>
                    <td>{{$booking->check_out}}</td>
                    <td>{{$booking->guests}}</td>
                    <td><span class="badge badge-info">{{$booking->room_type}}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $bookings->links() !!}
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection


@section('page-script')

@endsection