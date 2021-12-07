
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
     <style type="text/css">
         body{
             background-image:url('{{asset('/photos/momobanner1.jpg')}}');
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             height: 100vh;
             width: 100vw;
         }


        .thumbnail{
          height:400px;
        }


         .login-page {
             width: 200px;
             padding: 8% 0 0;
             margin: 50px;
         }
         .form {
             position: relative;
             max-width: 360px;
             margin: 0 auto 100px;
             text-align: center;

             /*box-shadow: 0 0 0px 0 rgba(0, 0, 0, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.1);*/
         }
         .form input {
             font-family: "Roboto", sans-serif;
             outline: 0;
             background: #f2f2f2;
             border: 0;
             padding:4px;
             background-color:#ffe92b;
              width: 100%;
             margin: 0 0 15px;
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
             font-size: 10px;
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
    @yield('content')
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>


