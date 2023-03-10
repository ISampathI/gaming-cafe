<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nextgen</title>
    <link rel="stylesheet" href="{{url('assets/css/registration_style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{url('assets/js/reg_page.js')}}"></script>
</head>

<body>
    <div class="loginarea">
        <div class="container">
            <form method="POST" action="/registration/store" class="log">
                {{-- <div class="cvdec cvdec1"></div>
                <div class="cvdec cvdec2"></div>
                <div class="chdec chdec1"></div>
                <div class="chdec chdec2"></div> --}}
                @csrf
                <div class="caption">Register</div>

                <div class="row1">
                    <div class="col1">
                        <div class="text">First Name</div>
                        <input type="text" name="firstname" id="fname">
                        <div class="error">
                            @if ($errors->has('firstname'))
                            @error("firstname")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="col1">
                        <div class="text">Last Name</div>
                        <input type="text" name="lastname" id="lname">
                        <div class="error">
                            @if ($errors->has('lastname'))
                            @error("lastname")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row1">
                    <div class="col1">
                        <div class="text">User Name</div>
                        <input type="text" name="username" id="uname">
                        <div class="error">
                            @if ($errors->has('username'))
                            @error("username")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="col1">
                        <div class="text">Phone Number</div>
                        <input type="text" name="phonenumber" id="pnumber">
                        <div class="error">
                            @if ($errors->has('phonenumber'))
                            @error("phonenumber")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row1">
                    <div class="col1">
                        <div class="text">Address</div>
                        <input type="text" name="address" id="address">
                        <div class="error">
                            @if ($errors->has('address'))
                            @error("address")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="col1">
                        <div class="text">Email Address</div>
                        <input type="text" name="email" id="email">
                        <div class="error">
                            @if ($errors->has('email'))
                            @error("email")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row1">
                    <div class="col1">
                        <div class="text">Password</div>
                        <input type="text" name="password" id="password">
                        <div class="error">
                            @if ($errors->has('password'))
                            @error("password")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="col1">
                        <div class="text">Confirm Password</div>
                        <input type="text" name="password_confirmation" id="cpassword">
                        <div class="error">
                            @if ($errors->has('password_confirmation'))
                            @error("password_confirmation")
                            {{$message}}
                            @enderror
                            @endif
                        </div>
                    </div>
                </div>
                <input type="submit" value=Register>
            </div>
        </div>
    </div>
</body>

</html>