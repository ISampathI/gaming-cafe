<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{url('assets/css/userpanel_style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/pc_style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/pcbook_style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/loader_style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/calendar_style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="{{url('assets/js/user_page.js')}}"></script>
    <script src="{{url('assets/js/calendar.js')}}"></script>
</head>

<body>
    <div class="adminarea">
        <div class="container">
            <nav>
                <div class="logo" id="mainlogo"><i class="fa-solid fa-bars"></i>
                    <div class="text"><span>N</span>EXTGEN</div>
                </div>
                <div class="hiuser" style="opacity: 0.8;">Hi <span></span></div>
                <div class="logout"><a href="{{route("logout")}}" id="logoutbtn">Logout</a></div>
            </nav>
            <div class="admin">
                <div class="subcontainer" id="mainsubcontainer">
                    <div class="ul">
                        <input type="radio" name="slidmenu" value="Home" id="menu6" checked>
                        <label for="menu6">
                            <i class="fa-solid fa-house"></i>
                            <div class="text">Home</div>
                        </label>
                        <input type="radio" name="slidmenu" value="Reservations" id="menu1">
                        <label for="menu1">
                            <i class="fa-solid fa-calendar-days"></i>
                            <div class="text">Reservations</div>
                        </label>
                        <input type="radio" name="slidmenu" value="Computers" id="menu2">
                        <label for="menu2">
                            <i class="fa-solid fa-desktop"></i>
                            <div class="text">Computers</div>
                        </label>
                        <input type="radio" name="slidmenu" value="Games" id="menu4">
                        <label for="menu4">
                            <i class="fa-solid fa-gamepad"></i>
                            <div class="text">Games</div>
                        </label>
                        <input type="radio" name="slidmenu" value="Settings" id="menu5">
                        <label for="menu5">
                            <i class="fa-solid fa-gear"></i>
                            <div class="text">Settings</div>
                        </label>
                    </div>
                </div>
                <div class="subcontainer2" id="mainsubcontainer2">
                    <!-- <div class="caption">
                        <div class="text">Reservations</div>
                    </div> -->
                    <div class="homedata">
                        <div class="datatcontainer">
                            <div class="hdsubcontainer">
                                <div class="dashboard" id="userdash">
                                    {{-- <div class="cvdec cvdec1"></div>
                                    <div class="cvdec cvdec2"></div>
                                    <div class="chdec chdec1"></div>
                                    <div class="chdec chdec2"></div> --}}
                                    <!-- <div class="part1"></div>
                                    <div class="part1"></div>
                                    <div class="part1"></div> -->
                                    <div class="medleContainer">
                                        <div class="medle" id="dashmedle">
                                        </div>
                                    </div>
                                    <!-- <div class="part2"></div>
                                    <div class="part2"></div>
                                    <div class="part2"></div> -->
                                    <div class="progress">
                                        <div class="memberType"></div>
                                        <div class="progressBar">
                                            <div class="progressBarline">
                                                <div class="progressBarinner"></div>
                                            </div>
                                            <div class="progressNum"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="expbtn">
                                    <div class="text">New Games</div>
                                    <div class="viewmore">View More</div>
                                </div>
                                <div class="gameselector homeselector">
                                    <div class="list ">
                                    </div>
                                </div>
                                <div class="expbtn">
                                    <div class="text">Most Populer Computers</div>
                                    <div class="viewmore">View More</div>
                                </div>
                                <div class="computerselector homeselector">
                                    <div class="list">
                                    </div>
                                </div>
                            </div>
                            <div class="hdsubcontainer2">
                                <div class="eventcalendar">
                                    <div class="datecontainer">
                                        <div class="icon">
                                            <i class="fa-solid fa-calendar-plus"></i>
                                        </div>
                                        <div class="details">
                                            <div class="today">Today</div>
                                            <div class="date">07-06-2022 </div>
                                        </div>
                                    </div>
                                    <div class="events">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reservationsdata">
                        <div class="datatcontainer">
                            <table id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Computer</th>
                                        <th>Package</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="computersdata">
                        <div class="datatcontainer">
                            <div class="pc">
                                <div class="con">
                                    <div class="pcname" id="computername">PC - 01</div>
                                    <div class="pcdetail">
                                        <div class="pcimg"></div>
                                        <div class="linecon">
                                            <div class="line"></div>
                                        </div>
                                        <div class="pcspec">
                                            <ul id="pcspecul">
                                            </ul>
                                            <div class="booknow"> <button id="booknowbtn">Book Now</button></div>
                                        </div>
                                    </div>
                                    <div class="dec"></div>
                                    <div class="pcselector">
                                        <div class="bluredec"></div>
                                        <div class="pclist">
                                            <div class="dumy"></div>
                                            <div class="dumy"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="con2">
                                    <div class="games">
                                        <div class="gamecaption">Games</div>
                                        <div class="gamelist">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gamesdata">
                        <div class="datatcontainer">
                            <div class="gameline">
                            </div>
                            <div class="btnline">
                                <div class="innerline">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="settingsdata">
                        <div class="datatcontainer">
                            <div class="stcontainer">
                                <div class="propic"></div>
                                <div class="text">Select a profile picture</div>
                                <div class="propiclist">
                                </div>
                            </div>
                            <div class="stcontainer2">
                                <div class="profiledata">
                                    <div class="row1">
                                        <div class="col1">
                                            <div class="text">First Name</div>
                                            <input type="text" name="firstname" id="fname">
                                            <div class="error" id="uufname"></div>
                                        </div>
                                        <div class="col1">
                                            <div class="text">Last Name</div>
                                            <input type="text" name="lastname" id="lname">
                                            <div class="error" id="uulname"></div>
                                        </div>
                                    </div>
                                    <div class="row1">
                                        <div class="col1">
                                            <div class="text">User Name</div>
                                            <input type="text" name="username" id="uname">
                                            <div class="error" id="uuuname"></div>
                                        </div>
                                        <div class="col1">
                                            <div class="text">Phone Number</div>
                                            <input type="text" name="phonenumber" id="pnumber">
                                            <div class="error" id="uupnumber"></div>
                                        </div>
                                    </div>

                                    <div class="row1">
                                        <div class="col1">
                                            <div class="text">Address</div>
                                            <input type="text" name="address" id="address">
                                            <div class="error" id="uuaddress"></div>
                                        </div>
                                        <div class="col1">
                                            <div class="text">Email Address</div>
                                            <input type="text" name="email" id="email">
                                            <div class="error" id="uuemail"></div>
                                        </div>
                                    </div>
                                    <button id="updateProFileBtn">Update Profile</button>
                                </div>
                                {{-- <div class="text">Change your password</div> --}}
                                <div class="passwordcontainer">
                                    <div class="row1">
                                        <div class="col1">
                                            <div class="text">Current Password</div>
                                            <input type="text" name="oldpassword" id="oldpassword">
                                            <div class="error" id="uuoldpass"></div>
                                        </div>
                                        <div class="col1">
                                            <div class="text">New Password</div>
                                            <input type="text" name="newpassword" id="newpassword">
                                            <div class="error" id="uunewpass"></div>
                                        </div>
                                    </div>
                                    <div class="row1">
                                        <div class="col1">
                                            <div class="text">&nbsp;</div>
                                            <button id="changePasswordBtn">Change Password</button>
                                            <div class="error"></div>
                                        </div>
                                        <div class="col1">
                                            <div class="text">Retype New Password</div>
                                            <input type="text" name="confirmPassword" id="confirmPassword">
                                            <div class="error" id="uuconpass"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pcbookarea">
        <div class="container">
            <div class="close"><button id="closebtn"><i class="fa-solid fa-xmark"></i></button></div>
            <div class="book">
                <div class="capclose">
                    <div class="caption">Book Now</div>
                </div>
                <div class="detail">
                    <div class="dec dec1"></div>
                    <div class="dec dec2"></div>
                    <div class="pc">
                        <div class="pcimg"></div>
                        <div class="pcname">PC - 01</div>
                    </div>
                    <div class="pkg">
                        <div class="exp">Slect a Date<span> *</span></div>
                        <div class="date">
                            <input type="date" name="" id="date">
                        </div>
                        <div class="exp">Slect a pakage<span> *</span></div>
                        <div class="pkglist">
                        </div>
                    </div>
                    <div class="time">
                        <div class="exp">Slect a time slot<span> *</span></span></div>
                        <div class="timelist">
                        </div>
                        <div class="paynow">
                            <button id="paynowbtn">Pay Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="loadercontainer">
        <div class="innercontainer">
            <div class="loader"></div>
        </div>
    </div>
</body>

</html>