
@extends('layouts.app')

@section('content')




<div class="row align-items-center m-h-50">
    <div class="mx-auto ">
    {{-- NavBar Header --}}

<nav class="navbar navbar-expand-sm ">

      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
             <a class="nav-link text-white" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
        </li>
      </ul>
</nav>
    {{-- End Of NavBar --}}
        
    </div>
</div>
<div class="login-page" style="padding-top: 0%;  background-color: " >
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <br>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
    <div class="form" style="background-color:">
        <form class="login-form form-group{{ $errors->has('email') ? ' has-error' : '' }}" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
                <input name="email" type="email" placeholder="Enter Your Email"/>
                
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
               <input  name="password" type="password" placeholder="Enter Your Password"/>
                
            </div>

            <button class='btn btn-primary' type="submit" id="btn">login</button>
        </form>
    </div>
</div>

@endsection
