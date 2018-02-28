@extends('layouts.app')

@section('content')
<div class="" style='background-image: url(img/background_subpage.jpg);
    margin-top: -25px;
    margin-bottom: -100px;
    height: 1000px;'>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style='margin-top:50px;'>
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>

                        <div class='form-group'>
                          <div class="col-md-8 col-md-offset-4">

                            <!-- social login -->
                            <!-- <a href='/home'>
                              <div style='display:inline-block'class="fb-login-button" data-width="77" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div><br>
                            </a>
                            <div style='display:inline-block'class="g-signin2" data-onsuccess="onSignIn"></div><br>
                            <img style='display:inline-block'src="{{asset('img/Sign-in-Small---Default.png')}}"></img><br>
                            <a href='/home'>
                              <img style='display:inline-block'src="{{asset('img/sign-in-with-twitter-gray.png')}}"></img><br>
                            </a> -->
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
