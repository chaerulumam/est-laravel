@extends('layouts.app')

@section('content')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/update/{{ $user->id }}" method="POST">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Full name</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="name" placeholder="Enter full name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="email" placeholder="Enter email">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
@endsection