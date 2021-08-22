{{--
 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

 --}}




 <!DOCTYPE html>
 <html lang="{{ app()->getLocale() }}">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Styles -->
     {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{asset('styles/one-health/assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('styles/one-health/assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('styles/one-health/assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('styles/one-health/assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('styles/one-health/assets/css/theme.css')}}">

     <style type="text/css">
         .banner{
             background-image:url('{{asset('photos/background2.jpg')}}');
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             height: 1000px;
             background-color: lightblue;
         }
         .container1{
             width:100%;
         }

         @media screen and (max-width: 600px) {
             .banner{
                 display: none;
             }
         }

         @media screen and (max-width: 600px) {
             .container1{
                 font-size: 8px;
             }
         }
         .progressbar{
             counter-reset: step;
         }

         .progressbar li{
             list-style-type: none;
             float: left;
             width:19.25%;
             position: relative;
             text-align: center;
         }

         .progressbar li:before{
             content: counter(step);
             counter-increment: step;
             width: 40px;
             height: 40px;
             line-height: 40px;
             border: 1px solid #ddd;
             display: block;
             text-align: center;
             margin: 0 auto 10px auto;
             border-radius: 50%;
             background-color: white;
         }

         .progressbar li:after{
             content: '';
             position: absolute;
             width: 100%;
             height: 1px;
             background-color: #ddd;
             top: 15px;
             left: -50%;
             z-index: -1;
         }
         .progressbar li:first-child:after{
             content: none;
         }


         .progressbar li.active{
             color: #e9eee9;
         }
         .progressbar li.active:before{
             background-color: #d90000;
             color: white;
         }

         .progressbar li.active+li:after{
             background-color:  #d90000;
             font-weight: bold;
         }

         .progressbar li.active {
             color: #0c820c;
             font-weight: bold;
         }

         .bg-dark {
             background-color: #28304e!important;
             height:200px;
         }
         .bg-red{
             margin-top: -50px;
         }

         .login-page {
             width: 360px;
             padding: 8% 0 0;
             margin: auto;
         }
         .form {
             position: relative;
             background: #FFFFFF;
             max-width: 360px;
             margin: 0 auto 100px;
             padding: 45px;
             text-align: center;
             /*box-shadow: 0 0 0px 0 rgba(0, 0, 0, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.1);*/
         }
         .form input {
             font-family: "Roboto", sans-serif;
             outline: 0;
             background: #f2f2f2;
             width: 100%;
             border: 0;
             margin: 0 0 15px;
             padding: 15px;
             box-sizing: border-box;
             font-size: 14px;
         }
         .form button {
             font-family: "Roboto", sans-serif;
             text-transform: uppercase;
             outline: 0;
             background: #4CAF50;
             width: 100%;
             border: 0;
             padding: 15px;
             color: #FFFFFF;
             font-size: 14px;
             -webkit-transition: all 0.3 ease;
             transition: all 0.3 ease;
             cursor: pointer;
         }
         .form button:hover,.form button:active,.form button:focus {
             background: #43A047;
         }
         .form .message {
             margin: 15px 0 0;
             color: #b3b3b3;
             font-size: 12px;
         }
         .form .message a {
             color: #4CAF50;
             text-decoration: none;
         }
         .form .register-form {
             display: none;
             box-sizing: border-box;
         }

     </style>

 </head>
 <body>
 <div class="container-fluid">
     <div class="row" style="background-color:#FFFFFF">
         <div class="col-lg-3" style="height: 900px; padding-top: 100px; background-color:#FFFFFF">
             @yield('content')
         </div>
         <div class="col-lg-9 banner">

         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="{{asset('styles/one-health/assets/vendor/wow/wow.min.js')}}"></script>
     <script src="{{asset('styles/one-health/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('styles/one-health/assets/vendor/wow/wow.min.js')}}"></script>

    <script src="{{asset('styles/one-health/assets/js/google-maps.js')}}"></script>

    <script src="{{asset('styles/one-health/assets/js/theme.js')}}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
    
 </body>
 </html>


