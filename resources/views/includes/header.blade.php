<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('photos/log.png')}}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#4285f4">

    <title>Zidimall</title>
    <link rel="stylesheet" href="{{asset('styles/climacons-font.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rickshaw/rickshaw.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/datatables/media/css/jquery.dataTables.css')}}">
    <link rel="stylesheet" href="{{asset('styles/roboto.css')}}">
    <link rel="stylesheet" href="{{asset('styles/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('styles/panel.css')}}">
    <link rel="stylesheet" href="{{asset('styles/feather.css')}}">
    <link rel="stylesheet" href="{{asset('styles/animate.css')}}">
    <link rel="stylesheet" href="{{asset('styles/urban.css')}}">
    <link rel="stylesheet" href="{{asset('styles/urban.skins.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap-select/dist/css/bootstrap-select.css')}}">
    <script src="{{asset('bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('bootstrap-notify/dist/bootstrap-notify.min.js')}}"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <style type="text/css">
        body{
            font-family:
            font-size: 16px;
        }
                 /*;*/
        .sidebar-panel {
            background-color:#0e0c28;
            {{-- box-shadow: 0 0 10px 0 rgba(0, 0, 0, 3), 0 5px 5px 0 rgba(0, 0, 0, 0.1); --}}
        }
        .sidebar-panel > .brand {
            background-color: #0e0c28;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1), 0 5px 5px 0 rgba(0, 0, 0, 0.1);
        }
        .sidebar-panel > nav > ul > li > ul
        {
            background-color: #24274a;
            padding-left: 12px;
            padding-right: 12px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1), 0 5px 5px 0 rgba(0, 0, 0, 0.1);
        }


        .sidebar-panel > nav > ul > li > a:hover,
        .sidebar-panel > nav > ul > li.open > a,
        .sidebar-panel > nav > ul > li.open > a:hover,
        .sidebar-panel > nav > ul > li.open > a:focus{
        background-color: #24274a;
        padding-left: 12px;
        padding-right: 12px;
        font-size: 12px;
        color:#7a80b4;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1), 0 5px 5px 0 rgba(0, 0, 0, 0.1);

        }


    .shadow{
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1), 0 5px 5px 0 rgba(0, 0, 0, 0.1);
    }
    </style>
</head>
<body data-spy="scroll" data-target="#affix" >
{{--<button class="btn btn-primary" id="chatB">Click</button>--}}
{{--    <div class="preloader">--}}
{{--    </div>--}}
