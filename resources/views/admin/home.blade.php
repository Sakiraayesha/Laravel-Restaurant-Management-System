<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <base href="/public">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&display=swap" rel="stylesheet">
    <link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/admin.js"></script>

    <title>Admin</title>
</head>
<body>
    <div class="adminWrapper">
        <div class="navbarWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="appNav">
                            <a class="logoWrapper" href="/">
                                <div class="logoImgWrapper">
                                    <img class="logoImg" src="assets/images/logo.png">
                                </div>
                                <div class="logoTexts">
                                    <span class="logoTextTop">olive you</span>
                                    <span class="logoTextBottom">SINCE 1988</span>
                                </div>
                            </a>
                            <ul class="nav">
                                <li class="headerNavItem">
                                    <a href="/" class="navItemInner">
                                        Home
                                    </a>  
                                </li>
                                <li class="headerNavItem text-nowrap">
                                    <x-app-layout></x-app-layout>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerWrapper">
            <div class="sidebarWrapper">
                <div class="container">
                    <ul class="sidebarInner">
                        <li class="sidebarItemWrapper">
                            <a href="{{url('/admindashboard')}}">
                                <div class="sidebarItem">
                                    <i class="fa fa-tachometer"></i>
                                    <span>Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebarItemWrapper">
                            <a href="{{url('/admins')}}">
                                <div class="sidebarItem">
                                    <i class="fa fa-keyboard"></i>
                                    <span>Admins</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebarItemWrapper">
                            <a href="{{url('/users')}}">
                                <div class="sidebarItem">
                                    <i class="fa fa-users"></i>
                                    <span>Guests</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebarItemWrapper">
                            <a href="{{url('/chefs')}}">
                                <div class="sidebarItem">
                                    <i class="fa fa-cutlery"></i>
                                    <span>Chefs</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebarItemWrapper">
                            <a href="{{url('/menu')}}">
                                <div class="sidebarItem">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebarItemWrapper">
                            <a href="{{url('/orders')}}">
                                <div class="sidebarItem">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Orders</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebarItemWrapper">
                            <a href="{{url('/reservations')}}">
                                <div class="sidebarItem">
                                    <i class="fa fa-calendar"></i>
                                    <span>Reservations</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contentWrapper">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>