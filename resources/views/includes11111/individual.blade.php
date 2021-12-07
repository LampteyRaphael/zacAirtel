<ul class="nav">

    <!-- dashboard -->
    <li>
        <a href="javascript:;">
            <i class="fa fa-flask"></i>
            <span>Dashboard</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="">
                    <span>Home</span>
                </a>
            </li>

            <li>
                {{--<a href="{{route('users.create')}}">--}}
                <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form5').submit();">Logout</a>
                  <form id="logout-form5" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
                {{--</a>--}}
            </li>
        </ul>
    </li>
    <!-- /dashboard -->

    <!-- ui -->
    <li>
        <a href="{{route('MDashboard.create')}}">
            <i class="fa fa-toggle-on"></i>
            <span>Profile</span>
        </a>
    <li>
        <a href="">
            <i class="fa fa-toggle-on"></i>
            <span>Password Reset</span>
        </a>
    </li>
    <!-- /ui -->


    <!-- tables -->


    <!-- charts -->
    <li>
        <a href="{{route('MDashboard.index')}}">
            <i class="fa fa-pie-chart"></i>
            <span>Tithe</span>
        </a>
    </li>
    <li>
        <a href="">
            <i class="fa fa-tag"></i>
            <span>Announcement</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{route('tolocalAnnouncement')}}">
                    <span>Church Announcement</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <span>District Announcement</span>
                </a>
            </li>
            <li class="active">
                <a href="">
                    <span>Area Announcement</span>
                </a>
            </li>
            <li class="active">
                <a href="{{route('membersAnnouncement')}}">
                    <span>National Announcement</span>
                </a>
            </li>
        </ul>
    </li>
</ul>