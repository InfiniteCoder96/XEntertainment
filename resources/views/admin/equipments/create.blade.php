@extends('layouts.admin-app')

@section('styles')

@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add New Equipment</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Equipments</li>
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
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('equipments.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Equipment Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="eq_name" placeholder="Enter Equipment Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Equipment Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="eq_price" placeholder="Enter Equipment Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Equipment Type</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="eq_type" placeholder="Enter Equipment Type">
                  </div>
                </div>
                <!-- /.card-body -->

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