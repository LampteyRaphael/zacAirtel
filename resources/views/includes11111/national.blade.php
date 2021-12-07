<ul class="nav">
<!-- ui -->
<li>
    <a href="javascript:;">
        <i class="fa fa-flask"></i>
        <span>Dashboard</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('dashboard.index')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li>
            {{--<a href="{{route('users.create')}}">--}}
            <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form1').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                  </a>
                  <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
            {{--</a>--}}
        </li>
    </ul>
</li>
<!-- /ui -->

<!-- /dashboard -->

<!-- ui -->
<li>
    <a href="javascript:;">
        <i class="fa fa-toggle-on"></i>
        <span>Admins</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('users.index')}}">
                <i class="fa fa-users"></i>
                <span>National Admins</span>
            </a>
        <li>
            <a href="{{route('adminLocals.show',urlencode('AreaAdmins'))}}">
                <i class="fa fa-user-secret"></i>
                <span>Area Admins</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminLocals.edit',urldecode('DistrictAdmins'))}}">
                <i class="fa fa-user-secret"></i>
                <span>District Admins</span>
            </a>
        </li>
        <li>
            <a href="{{route('adminLocals.index')}}">
                <i class="fa fa-user-secret"></i>
                <span>Local Admins</span>
            </a>
        </li>

        <li>
            <a href="{{route('Anonymous.index')}}">
                <i class="fa fa-users"></i>
                <span>Anonymous</span>
            </a>
        </li>
        <li>
            <a href="{{route('users.create')}}">
                <i class="fa fa-plus"></i>
                <span>Add Member</span>
            </a>
        </li>
    </ul>
</li>
<!-- /ui -->

{{--church members--}}

<li>
    <a href="javascript:;">
        <i class="fa fa-toggle-on"></i>
        <span>General Search</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('admin.create')}}">
                <i class="fa fa-search"></i>
                <span>Search Member</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin.index')}}">
                <i class="fa fa-search-plus"></i>
                <span>Non Active</span>
            </a>
        </li>
        <li>
            <a href="{{route('searchPost.index')}}">
                <i class="fa fa-search-minus"></i>
                <span>Deceased</span>
            </a>
        </li>
    </ul>
</li>
{{--ending of church members--}}

<!-- forms -->
<li>
    <a href="javascript:;">
        <i class="fa fa-tint"></i>
        <span>Church Levels</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('region.index')}}">
                <i class="fa fa-bookmark-o"></i>
                <span>National</span>
            </a>
        </li>
        <li>
            <a href="{{route('area.index')}}">
                <i class="fa fa-area-chart"></i>
                <span>Areas</span>
            </a>
        </li>
        <li>
            <a href="{{route('district.index')}}">
                <i class="fa fa-diamond"></i>
                <span>Districts</span>
            </a>
        </li>
        <li>
            <a href="{{route('locals.index')}}">
                <i class="fa fa-location-arrow"></i>
                <span>Locals</span>
            </a>
        </li>
        <li>
            <a href="{{route('region.create')}}">
                <i class="fa fa-plus"></i>
                <span>Add Region</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:;">
        <i class="fa fa-pie-chart"></i>
        <span>Church Account</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('IncomeNa.create')}}">
                <i class="fa fa-money"></i>
                Add Income
            </a>
        </li>
        <li>
            <a href="{{route('Ex.create')}}">
                <i class="fa fa-money"></i>
                Add Expenditure
            </a>
        </li>

        <li>
            <a href="">
                <i class="fa fa-tag"></i>
                <span>Income</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('categoryNa.index')}}">
                        <i class="fa fa-bookmark"></i>
                        <span>
                    All Categories
                  </span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                <i class="fa fa-tag"></i>
                <span>Expenditure</span>
            </a>
            <ul class="sub-menu">
                <li class="active">
                    <a href="{{route('ExCategory.index')}}">
                        <i class="fa fa-bookmark-o"></i>
                        <span>All Categories</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;">
                <i class="fa fa-pie-chart"></i>
                <span>Tithe Report</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="{{route('NDaily')}}">
                        <i class="fa fa-calendar"></i>
                        <span>Daily Tithe</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('NMonthly')}}">
                        <i class="fa fa-calendar"></i>
                        <span>Monthly Tithe</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('NRange')}}">
                        <i class="fa fa-calendar"></i>
                        <span>Range of Tithe</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('NYear')}}">
                        <i class="fa fa-calendar"></i>
                        <span>Yearly Tithe</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<!-- /forms -->
<li>
    <a href="javascript:;">
        <i class="fa fa-map-marker"></i>
        <span>Announcement</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('regioncircular.index')}}">
                <i class="fa fa-share"></i>
                <span>Local Announcement</span>
            </a>
        </li>
        <li>
            <a href="{{route('districtCircular.index')}}">
                <i class="fa fa-share"></i>
                <span>District Announcement</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:;">
        <i class="fa fa-wrench"></i>
        <span>Attendance</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="">
                <i class="fa fa-reply-all"></i>
                <span>Report</span>
            </a>
        </li>
        <li>
            <a href="{{route('districtCircular.index')}}">
                <i class="fa fa-calendar"></i>
                <span>Daily</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="{{route('nationalauditLogin')}}">
        <i class="fa fa-wrench"></i>
        <span class="">Audit Trail</span>
    </a>
</li>
<li>
    <a href="{{route('NationalChart.index')}}">
        <i class="fa fa-line-chart"></i>
        <span class="">Chat Room</span>
    </a>
</li>
<!-- charts -->

<li>
    <a href="javascript:;">
        <i class="fa fa-toggle-on"></i>
        <span>Transfer</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('searchPost.create')}}">
                <i class="fa fa-search"></i>
                <span>Range</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:;">
        <i class="fa fa-exchange"></i>
        <span>Swapping</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('swapping.index')}}">
                <i class="fa fa-search"></i>
                <span>Local To Local</span>
            </a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:;">
        <i class="fa fa-signal"></i>
        <span>SMS</span>
    </a>
    <ul class="sub-menu">
        <li>
            <a href="{{route('nationalSms.index')}}">
                <i class="fa fa-send"></i>
                <span>Notifications</span>
            </a>
        </li>
        <li>
            <a href="{{route('nationalSms.create')}}">
                <i class="fa fa-send-o"></i>
                <span>Add SMS Users</span>
            </a>
        </li>
    </ul>
</li>
</ul>