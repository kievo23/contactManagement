

@extends('layouts.app')
@section('content')

<div class="jumbotron">
    <h1>Register</h1> 
  </div>

<div class="panel-body">
        <!-- Display Validation Errors -->
@include('common.errors')
        <!-- New Task Form -->
        <form method="POST" action="register" class="form-horizontal">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Password Confirmation</label>
                <div class="col-sm-6">
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
            </div>

            <div class="col-sm-6 col-sm-offset-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

@endsection