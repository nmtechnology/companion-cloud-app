<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CompanionCloud') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    <div id="app">

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://imagesharing.com/uploads/20200518/ccc9ccad5ab9aee46a8696793b4fbc317a3ed564.png" width="195" height="105">
                </a>


            </div>
            @auth

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="#" class="navbar-link" aria-haspopup="true" aria-controls="dropdown-menu3" hidden="true">
                            {{ Auth::user()->name }} </a>

                        <div class="navbar-dropdown">

                                @guest
                                    <a href="{{ route('login') }}" class="dropdown-item">
                                        Login
                                    </a>
                                    <a href="{{ route('register') }}" class="dropdown-item">
                                        Register
                                    </a>
                                @else
                                    <a class="dropdown-item">Notifications
                                        @include('partials.notifications-dropdown')
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Contact Support
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Logout
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        @endguest
                                    </a>
                                    </a>
                        </div>
                        @endauth
                        </div>
                    </div>
                </div>
        </nav>




        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    @yield('extra-js')
</body>
</html>
