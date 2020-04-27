<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    My Bootstrap Assignments
                </div>

                <div class="links">
                    <a href="{{url('/bootstrap/as3') }}">Assignment3</a>
                    <a href="{{url('/bootstrap/as4') }}">Assignment4</a>
                    <a href="{{url('/bootstrap/as5') }}">Assignment5</a>
                    <a href="{{url('/bootstrap/as6') }}">Assignment6</a>
                    <a href="{{url('/bootstrap/as8') }}">Assignment8</a><br>
                    <a href="{{url('/bootstrap/as15') }}">Assignment15</a>
                    <a href="{{url('/bootstrap/as19') }}">Assignment19</a>
                    <a href="{{url('/bootstrap/as21') }}">Assignment21</a>
                    <a href="{{url('/bootstrap/as22') }}">Assignment22</a>
                    <a href="{{url('/bootstrap/as29') }}">Assignment29</a><br>
                    <!--<a href="{{url('/bootstrap/as51') }}">Assignment51</a><br>-->
                    <br><a href="{{url('/') }}">Home</a>
                    <!--<a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>-->
                </div>
            </div>
        </div>
    </body>
</html>
