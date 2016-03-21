<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
        @if(session()->has('data') && session('data')['logout'])

        {{session_unset()}}    
        {{setcookie('laravel_session', "", -1, "/")}}
        
        @endif
        
        @if (Auth::guest())
        <a href="auth/login">
            <button class="btn btn-default">
                        <i class="fa fa-plus"></i> Login
                    </button>
        </a> 
        @else
        <a href="auth/logout">
            <button class="btn btn-default">
                       {{ Auth::user()->name}} <i class="fa fa-plus"></i> Logout
                    </button>
        </a> 

        @endif
        <hr>
            <div class="content">
                <div class="title">Contact Management System</div>
            </div>
        </div>
    </body>
</html>
