@extends('layouts.admin-app')

@section('styles')

@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Add New Event</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Events</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
          </div>
          @endif
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('events.store')}}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Event Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="event_name" placeholder="Enter Equipment Name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Event Venue</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="event_venue" placeholder="Enter Equipment Price">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Event Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="event_date" placeholder="Enter Equipment Type">
              </div>
            </div>
            <!-- /.card-body -->
            <input type="hidden" class="form-control" id="exampleInputPassword1" name="qt_id" value="0">
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-warning">reset</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection