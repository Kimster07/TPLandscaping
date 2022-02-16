<!--Common Layout App-->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TPLandscaping') }}</title>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
             $( "#date" ).datepicker({
                 minDate: 0
             });
        });
    </script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>




<body>

    <div id="app">
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">

            <div class="container">
                <!--auth for app name button-->
                @if (Route::has('login'))
                    <div class="top-right links">
                        <!--for user-->
                        @auth
                            <a class="navbar-brand" href="{{ url('/home') }}">
                                {{ config('app.name', 'TPLandscaping') }}
                            </a>         
                        <!--for guest-->          
                        @else
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'TPLandscaping') }}
                            </a>                    
                        @endauth
                    </div>
                @endif
                <!--auth for app name button end-->


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                                <!--Services and About only for placement-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ ('services') }}">{{ __('Services') }}</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="{{ ('about') }}">{{ __('About') }}</a>
                            </li>
    

                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ ('book') }}">{{ __('Book Appointment') }}</a>
                            </li>

                            <!--Services and About only for placement-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ ('services') }}">{{ __('Services') }}</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="{{ ('about') }}">{{ __('About') }}</a>
                            </li>
    


                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </div>

                                </li>

                        @endguest
                        <!-- Authentication Links end -->



                    </ul>

                </div>

            </div>
            
        </nav>
        <!--Navbar End-->

        <!--main content for all the pages-->
        <main>
            @yield('content')
        </main>

    </div>





</body>

<!--Footer Section-->
<footer class="footer-section bg-light text-center"><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 offset-5" align="center">
                <div> 
                    <p>TPLandscaping</p>
                </div>
                <div class="copyright">
                    <p>Laravel Booking System</p>
                </div>
            </div>
        </div>
    </div>
</footer>


</html>
