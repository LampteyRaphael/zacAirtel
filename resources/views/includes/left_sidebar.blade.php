@include('includes.slideHeader')
<div class="app layout-fixed-header">

  <!-- sidebar panel -->
  <div class="sidebar-panel offscreen-left">

    <div class="brand">
      <span style="color: white; font-size:x-large; font-weight: bolder">Zidimall</span>
      {{--<img src="{{asset('photos/logo4.png')}}" height="30" alt="">--}}
        {{--<h1 class="bg-white">TACMS</h1>--}}
      <!-- logo -->
      <div class="brand-logo">

      </div>
      <!-- /logo -->

      <!-- toggle small sidebar menu -->
      <a href="javascript:;" class="toggle-sidebar hidden-xs hamburger-icon v3" data-toggle="layout-small-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
      <!-- /toggle small sidebar menu -->

    </div>

    <!-- main navigation -->
    <nav role="navigation">

      <img class="img img-circle img-responsive" src="/photos/logo.jpg" alt="banner" width="20%" height="20%" style="margin-left: 50px;">


      <ul class="nav">
          <li>
                <a href="{{route('service.index')}}">
                    <i class="fa fa-chain-broken"></i>
                    <span>Dashboard</span>
                </a>
            </li>
           {{-- <li><a href="{{ route('service.index') }}">Service</a></li> --}}
          <li>
        <a href="javascript:;">
            <i class="fa fa-pie-chart"></i>
            <span>TopUp</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="">
                    <i class="fa fa-tag"></i>
                    Add
                </a>
            </li>
        </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-tag"></i>
                    <span>Data TopUp</span>
                </a>
                <ul class="sub-menu">
                    <li class="active">
                        <a href="">
                            <i class="fa fa-level-down"></i>
                            <span>Add</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-pie-chart"></i>
                    <span>Bills</span>

                </a>

                <ul class="sub-menu">
                    <li>
                        <a href="">
                            <i class="fa fa-chain-broken"></i>
                            <span>Add</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-pie-chart"></i>
                    <span>All</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="">
                            <i class="fa fa-calendar"></i>
                            <span>Add</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <!-- /charts -->
    {{--@endif--}}

      </ul>
    </nav>
    <!-- /main navigation -->
  </div>
