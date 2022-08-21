<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
        <meta name="description" content="Connect with your most favourite restaurant in town!">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&display=swap" rel="stylesheet">
        <link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/index.js"></script>

        <title>Olive You</title>
    </head>
    <body>
        @if (session('reservationSuccess'))
        <div class="alert alert-success fixed-bottom" role="alert" style="width:300px;left:30px;bottom:20px">
            {{ session('reservationSuccess') }}
        </div>
        @endif
        <header class="appHeader">
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
                                    <a href="#topSection" class="navItemInner scrollNavItem selected">
                                        Home
                                    </a>  
                                </li>
                                <li class="headerNavItem">
                                    <a href="#aboutSection" class="navItemInner scrollNavItem">
                                        About
                                    </a>
                                </li>
                                <li class="headerNavItem">
                                    <a href="#menuSection" class="navItemInner scrollNavItem">
                                        Menu
                                    </a>
                                </li>
                                <li class="headerNavItem">
                                    <a href="#chefsSection" class="navItemInner scrollNavItem">
                                        Chefs
                                    </a>
                                </li>
                                <li class="headerNavItem submenu submenuLg">
                                    Promotions
                                    <ul>
                                        <li><a href="#promoSection" id="feature1">Breakfast</a></li>
                                        <li><a href="#promoSection" id="feature2">Lunch</a></li>
                                        <li><a href="#promoSection" id="feature3">Dinner</a></li>
                                    </ul>
                                </li>
                                <li class="headerNavItem">
                                    <a href="#contactSection" class="navItemInner scrollNavItem">
                                        Contact
                                    </a>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        @if( Auth::user()->usertype == '1')
                                            <li class="headerNavItem">
                                                <a href="/admindashboard" class="navItemInner">
                                                    Dashboard
                                                </a>
                                            </li>
                                        @else
                                            <li class="headerNavItem">
                                                <a href="/cart" class="navItemInner">
                                                    Cart
                                                </a>
                                                @if(session('cartTotal'))
                                                <span class="badge badge-success cartBadge">{{ session('cartTotal') }}</span>
                                                @endif
                                            </li>
                                            <li class="headerNavItem">
                                                <a href="/order" class="navItemInner">
                                                    Order
                                                </a>
                                            </li>
                                        @endif    
                                        <li class="headerNavItem text-nowrap">
                                            <x-app-layout></x-app-layout>
                                        </li>
                                    @else
                                        <li class="headerNavItem">
                                            <a href="{{ route('login') }}" class="navItemInner text-nowrap">Log in</a>
                                        </li>        
                                        @if (Route::has('register'))
                                            <li class="headerNavItem">
                                                <a href="{{ route('register') }}" class="navItemInner">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                            <div class="navSm">
                                <img src="assets/images/menuSm.png">
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div id="topSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 px-0">
                        <div class="leftContent">
                            <div class="innerContent">
                                <h2>olive you</h2>
                                <h6>YOUR ALL THYME FAVORITE</h6>
                                <button class="reservebutton"><a href="#contactSection">Make A Reservation</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 px-0">
                        <div class="carouselWrapper">
                            <div class="carouseInner">
                                <div class="carouselItem">
                                    <div class="carouselImgWrapper">
                                        <img src="assets/images/banner1.jpg" alt="" class="carouselImg">
                                    </div>
                                </div>
                                <div class="carouselItem">
                                    <div class="carouselImgWrapper">
                                        <img src="assets/images/banner2.jpg" alt="" class="carouselImg">
                                   </div>
                                </div>
                                <div class="carouselItem">
                                    <div class="carouselImgWrapper">
                                        <img src="assets/images/banner3.jpg" alt="" class="carouselImg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="aboutSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="aboutLeft">
                            <div class="commonHeading">
                                <h6>ABOUT US</h6>
                                <h2>Nice To Meat You!</h2>
                            </div>
                            <p class="aboutText">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nesciunt, doloribus animi modi ad dicta sapiente sunt recusandae suscipit, veritatis nemo, laudantium odit porro eius molestiae placeat assumenda quia quidem.
                                <br><br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iste suscipit quaerat facere asperiores quis!
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <img src="assets/images/about1.jpg"/>
                                </div>
                                <div class="col-4">
                                    <img src="assets/images/about2.jpg"/>
                                </div>
                                <div class="col-4">
                                    <img src="assets/images/about3.jpg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutRight">
                            <div class="rightInner">
                                <a href="https://www.youtube.com/">
                                    <i class="fa fa-play"></i>
                                </a>
                                <img src="assets/images/videoThumbnail.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="menuSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="commonHeading">
                            <h6>OUR MENU</h6>
                            <h2>Y’all bready for this?</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menuCarouselWrapper">
                <div class="col">
                    <div class="menuCarousel owl-carousel">
                        @foreach ($menu as $item)
                            <div class="menuCarouselItem">
                                <div class="card" style="background-image: url(/storage/{{$item->image}})">
                                    <div class="price">
                                        <h6>${{$item->price}}</h6>
                                    </div>
                                    <div class="info">
                                        <h1 class="title">{{$item->title}}</h1>
                                        <p class="desc">{{$item->desc}}</p>
                                        <div class="cartHolder">
                                            <form action="/addcart" method="post">
                                                @csrf
                                                <input type="hidden" name="menu_id" value={{$item->id}} />
                                                <input type="number" id="quantity" name="quantity" value="1" min="1" max="10"/>
                                                <button class="addCartBtn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                                            </form>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="chefsSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="commonHeading">
                            <h6>OUR CHEFS</h6>
                            <h2>Meet the whisk takers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($chefs as $chef)
                        <div class="col-lg-4">
                            <div class="chefItem">
                                <div class="chefTop">
                                    <div class="overlay"></div>
                                    <ul class="socials">
                                        @isset($chef->facebook)
                                        <li>
                                            <a href={{$chef->facebook}}>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        @endisset
                                        <li>
                                            <a href={{$chef->twitter}}>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href={{$chef->instagram}}>
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <img class="chefImg" src="/storage/{{$chef->image}}" />
                                </div>
                                <div class="chefBottom">
                                    <h6>{{$chef->name}}</h6>
                                    <span>{{$chef->rank}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="section" id="contactSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contactLeft">
                            <div class="commonHeading">
                                <h6>CONTACT US</h6>
                                <h2>Here’s our number, so Kale us maybe?</h2>
                            </div>
                            <p class="contactText">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima nesciunt veritatis nemo, laudantium odit porro eius molestiae placeat assumenda quia quidem.
                            </p>
                            <div class="row contactBoxWrapper">
                                <div class="col-md-4 col-lg-6">
                                    <div class="contactBox">
                                        <i class="fa fa-phone"></i>
                                        <h6>Phone</h6>
                                        <span>
                                            <a href="#">012-345-6789</a>
                                            <a href="#">000-000-0000</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-6">
                                    <div class="contactBox">
                                        <i class="fa fa-envelope"></i>
                                        <h6>Email</h6>
                                        <span>
                                            <a href="#">contact@oliveyou.com</a>
                                            <a href="#">info@oliveyou.com</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contactRight">
                            <form class="contactForm" action="/makereservation" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="contactFormTitle">Table Resevation</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Your Name*" required/>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input name="email" type="email" id="email" placeholder="Your Email Address"/>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone" placeholder="Phone Number*" required/>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <select value="guestNumbers" name="guests" id="guests">
                                                <option value="guestNumbers" selected disabled>No. Of Guests*</option>
                                                <option value="1" id="1">1</option>
                                                <option value="2" id="2">2</option>
                                                <option value="3" id="3">3</option>
                                                <option value="4" id="4">4</option>
                                                <option value="5" id="5">5</option>
                                                <option value="6" id="6">6</option>
                                                <option value="7" id="7">7</option>
                                                <option value="8" id="8">8</option>
                                                <option value="9" id="9">9</option>
                                                <option value="10" id="10">10</option>
                                                <option value="11" id="11">11</option>
                                                <option value="12" id="12">12</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" name="date" id="date" class="form-control" placeholder="dd/mm/yyyy*" required>
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <select value="time" name="time" id="time">
                                                <option value="time" selected disabled>Time*</option>
                                                <option value="Breakfast" id="Breakfast">Breakfast</option>
                                                <option value="Brunch" id="Brunch">Brunch</option>
                                                <option value="Lunch" id="Lunch">Lunch</option>
                                                <option value="Tea" id="Tea">Tea</option>
                                                <option value="Dinner" id="Dinner">Dinner</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Would you like to add something?"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <fieldset>
                                            <button type="submit" id="formSubmit" class="submitButton">Make A Reservation</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="promoSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="commonHeading">
                            <h6>WEEKS'S SPECIAL</h6>
                            <h2>Life doesn’t get feta than this!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row" id="tabs">
                            <div class="col-12">
                                <div class="tabsHeading">
                                    <ul>
                                        <li>
                                            <a href="#tab1">
                                                <img src="assets/images/breakfast.png"/>
                                                <span>Breakfast</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2">
                                                <img src="assets/images/lunch.png"/>
                                                <span>Lunch</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3">
                                                <img src="assets/images/dinner.png"/>
                                                <span>Dinner</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tabsContent">
                                    <article id="tab1">
                                        <div class="tabLeft">
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/704569/pexels-photo-704569.jpeg?auto=compress&cs=tinysrgb&w=600" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Sunny-Side Up Eggs & Toasts</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $15
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/357573/pexels-photo-357573.jpeg?cs=srgb&dl=pexels-pixabay-357573.jpg&fm=jpg" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Pancake With Honey</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $23
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/461431/pexels-photo-461431.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Cupcake With Strawberry Toppings</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $26
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabRight">
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/718739/pexels-photo-718739.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Pancake With Maple Syrup</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $18
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/221083/pexels-photo-221083.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Waffles With Cream</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $16
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/236813/pexels-photo-236813.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Bread With Guacamole, Salad & Eggs</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $22
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article id="tab2">
                                        <div class="tabLeft">
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/675951/pexels-photo-675951.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Steaks With Goulash Sauce & Green Beans</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $42
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/792026/pexels-photo-792026.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Vegetable Salad With Meat</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $33
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Cheese Burger</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $23
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabRight">
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/2474661/pexels-photo-2474661.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Butter Chicken Masala & Naan</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $36.99
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/792028/pexels-photo-792028.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Vegetable Salad With Flat Bread</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $20
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/1624487/pexels-photo-1624487.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Chicken Biriyani</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $39.99
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article id="tab3">
                                        <div class="tabLeft">
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/1833349/pexels-photo-1833349.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Steamed SeaFood With Greens</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $52
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>BBQ Chicken Pizza</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $29
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/10201775/pexels-photo-10201775.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Thai Red Curry Shrimp Soup</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $37.50
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabRight">
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/5175628/pexels-photo-5175628.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Adana Kebab & Urfa Kebab</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $48
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/2092906/pexels-photo-2092906.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Shrimp Pasta</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $26
                                                </div>
                                            </div>
                                            <div class="tabItem">
                                                <div class="tabItemImg">
                                                    <img src="https://images.pexels.com/photos/5409015/pexels-photo-5409015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                                                </div>
                                                <div class="tabInfo">
                                                    <h4>Soup with Dimsums and Vegetables</h4>
                                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, adipisci reprehenderit impedit provident cum eligendi ab explicabo.</span>
                                                </div>
                                                <div class="price">
                                                    $33
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footerLeft">
                            <ul class="socials">
                                <li>
                                    <a href="/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a class="logoWrapper" href="/">
                            <div class="logoImgWrapper">
                                <img class="logoImg" src="assets/images/logo.png">
                            </div>
                            <div class="logoTexts">
                                <span class="logoTextTop">olive you</span>
                                <span class="logoTextBottom">SINCE 1988</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="footerRight">
                            <p>Olive You Co. &copy; 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
