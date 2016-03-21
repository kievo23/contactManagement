<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Management System</title>
    <link href="{{ URL::asset('assets/less/bootstrap.min.css')}}" rel="stylesheet">
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
        {{ Auth::user()->name}}
        @if (Auth::guest())
        <a href="auth/login">
            <button class="btn btn-default">
                        <i class="fa fa-plus"></i> Login
                    </button>
        </a> 
        @else
        <a href="auth/logout">
            <button class="btn btn-default">
                        <i class="fa fa-plus"></i> Logout
                    </button>
        </a> 

        @endif
        @yield('content')
        </div>

        
    </body>
</html>