

@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <h1>Login</h1> 
  </div>
<div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <!-- resources/views/auth/login.blade.php -->
        @include('common.errors')
        <form method="POST" action="login" class="form-horizontal">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Remember me</label>
                <div class="col-sm-6">
                    <input type="checkbox" name="remember" class="form-control"> 
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <div>
                        <button type="submit" class="form-control btn btn-primary">Login</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection