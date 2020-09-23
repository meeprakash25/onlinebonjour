<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo asset('public/favicon.png'); ?>"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HRM Plus') }}</title>


    <link href="{{ asset('public/auth/fonts/stylesheet.css') }}" rel="stylesheet">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('public/auth/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/auth/font-awesome/css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/auth/plugins/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('public/auth/css/auth.css') }}">
</head>
<body class="login-page">

<div class="login-box">
    <div class="login-logo">
        @if(empty($web_setting[15]->value) or !file_exists(asset('').$web_setting[15]->value))
            @if($web_setting[66]->value=='1' and $web_setting[67]->value=='0')
                <a href="{{url('/')}}"><img src="{{asset('/resources/views/admin/images/admin_logo/logo.png')}}" height="50" class="ionic-hide"></a>
                <a href="{{url('/')}}"><img src="{{asset('/resources/views/admin/images/admin_logo/logo.png')}}" height="50" class="android-hide"></a>
            @elseif($web_setting[66]->value=='1' and $web_setting[67]->value=='1' or $web_setting[66]->value=='0' and $web_setting[67]->value=='1')
                <a href="{{url('/')}}"><img src="{{asset('/resources/views/admin/images/admin_logo/logo.png')}}" height="50" class="website-hide"></a>
            @endif
        @else
            <a href="{{url('/')}}"><img style="width: 60%" src="{{asset('').$web_setting[15]->value}}"></a>
        @endif
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        @if(Session::has('loginError'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">{{ trans('labels.Error') }}:</span>
                {!! session('loginError') !!}
            </div>
        @endif
        <p class="login-box-msg"> Admin Sign In</p>
        <form action="{{url('admin/checkLogin')}}" method="post">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <label for="email">Email <span class="required">*</span> </label>
                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"
                       id="email"
                       placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>
            <div class="form-group has-feedback }}">
                <label for="password">Password <span class="required">*</span></label>
                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"
                       placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="checkbox icheck">
                        <input id="remember" type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}}>
                        <label for="remember">Remember me</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"> Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
    <div class="panel panel-body text-center" style="margin-top: 16px">
        <span class="support-heading"><b>For Any Support</b></span><br>
        <p>Tel : 01-5546763/5524273 <br>
            Mobile : 9851096919/9851096918 <br>
            Email : info@ininepal.com</p>
    </div>
</div><!-- /.login-box -->

<script src="{{ asset('public/auth/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('public/auth/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/auth/plugins/iCheck/icheck.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
