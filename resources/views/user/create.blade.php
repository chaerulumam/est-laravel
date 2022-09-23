@extends('layouts.app')

@section('content')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('create-user') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Full name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection