<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CompanionCloud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height column">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/orders') }}">Home</a>
                    @else
                        <a class="button is-primary" href="{{ route('login') }}">Login</a>
                        <a class="button is-warning" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CompanionCloud
                </div>
            </div>
        </div>
    </body>
</html>
