<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nextgen</title>
    <link rel="stylesheet" href="{{url('assets/css/login_style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{url('assets/js/login_page.js')}}"></script>
</head>

<body>
    <div class="loginarea">
        <div class="container">
            <!-- <div class="dec1 dec"></div>
            <div class="dec2 dec"></div>
            <div class="dec3 dec"></div> -->
            <form class="log" action="/registration/dologin" method="POST">
                <div class="cvdec cvdec1"></div>
                <div class="cvdec cvdec2"></div>
                <div class="chdec chdec1"></div>
                <div class="chdec chdec2"></div>
                @csrf
                <div class="caption">LOGIN</div>

                <div class="text">User Name</div>
                <input type="text" name="username" id="uname">
                <div class="error">
                    @if ($errors->has('username'))
                    @error("username")
                    {{$message}}
                    @enderror
                    @endif
                </div>
                <div class="text">Password</div>
                <input type="password" name="password" id="password">
                
                <div class="error">
                    @if ($errors->has('password'))
                    @error("password"){{$message}}@enderror
                    @endif
                </div>
                <input type="submit" value="Login" name="Submit">
                {{-- <button id="loginbtn">Login</button> --}}
            </form>
        </div>
    </div>
</body>

</html>