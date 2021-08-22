{{-- @extends('layouts.app-login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app-login')

@section('content')

    <div class="row align-items-center m-h-100">
        <div class="mx-auto col-md-8 pt5 text-center m-auto">
        {{-- NavBar Header --}}

    <nav class="navbar navbar-expand-sm navbar-light">
   
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
            </li>
          </ul>
    </nav>
        {{-- End Of NavBar --}}
            <p>
               <h5>Ghana Electricals Delears</h5>
            </p>
        </div>
    </div>
    <div class="login-page" style="padding-top: 0%;  background-color: #FFFFFF" >
        <div class="form" style="background-color:#FFFFFF">
            <form class="login-form form-group{{ $errors->has('email') ? ' has-error' : '' }}" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} wow fadeInRight">
                    <input name="email" type="email" placeholder="Enter Your Email"/>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} wow fadeInLeft">
                   <input  name="password" type="password" placeholder="Enter Your Password"/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <button class='btn btn-primary wow fadeInUp' type="submit" id="btn">login</button>
            </form>
        </div>
    </div>

@endsection
