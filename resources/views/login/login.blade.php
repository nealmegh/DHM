<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bluwebz</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/animate.css">
    <link href="{{ asset('/css/login/style.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="{{ asset('/css/login/style.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<div class="container">

    <div class="top">
        <h1 id="title" class="hidden"><span id="logo">Bluwebz <span>Log IN</span></span></h1>
    </div>
    {!! Form::open(['method' => 'post', 'url' => 'dashboard']) !!}
    <div class="login-box animated fadeInUp">
        <div class="box-header">
            <h2>Log In</h2>
        </div>    
        @if($errors->any())
            <h4>{{$errors->first()}}</h4>
        @endif
        <label for="username">Username</label>
        <br/>
        <input type="text" id="username" name="name">
        <br/>
        <label for="password">Password</label>
        <br/>
        <input type="password" id="password" name="pass">
        <br/>
        <button type="submit">Sign In</button>
        <br/>
        <a href="#"><p class="small">Forgot your password?</p></a>
    </div>
    {!! Form::close() !!}
    <!-- <div class="login-box animated fadeInUp">
        <div class="box-header">
            <h2>Check Authenticity</h2>
        </div>
                {{--<button type="submit">Sign In</button>--}}
        <br/>
        <a href="/check-authenticity"><h4 class="small">Check Authenticity</h4></a>
        {{--<a href="#"><p class="small">Forgot your password?</p></a>--}}
    </div> -->
</div>

</body>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function() {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function() {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function() {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function() {
        $('label[for="password"]').removeClass('selected');
    });
</script>

</html>