@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
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
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/auth/facebook"><i class="fa fa-facebook-official" style="font-size:36px; color: blue; margin-left: 15px;"></i></a>
                                <a href="/auth/google"><i class="fa fa-google-plus" style="font-size:36px; color: blue; margin-left: 15px;"></i></a>
                                <a href="/auth/yahoo"><i class="fa fa-hacker-news" style="font-size:36px; color: blue; margin-left: 15px;"></i></a>
                                <a href="/auth/line"><i style="font-size:36px; color: blue; margin-left: 15px;">Line</i></a>
                                <a href="/auth/twitter"><i class="fa fa-twitter" style="font-size:36px; color: blue; margin-left: 15px;"></i></a>
                                <a href="/auth/8ppy"><i style="font-size:36px; color: red; margin-left: 15px; background-color:green; padding: 10px;"> 8ppy</i></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
