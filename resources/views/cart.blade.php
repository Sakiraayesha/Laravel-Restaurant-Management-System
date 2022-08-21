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
        <link rel="stylesheet" href="assets/css/cart.css">

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
        <header class="navbarWrapper">
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
                                    <a href="/" class="navItemInner scrollNavItem">
                                        Home
                                    </a>  
                                </li>
                                <li class="headerNavItem">
                                    <a href="/#aboutSection" class="navItemInner scrollNavItem">
                                        About
                                    </a>
                                </li>
                                <li class="headerNavItem">
                                    <a href="/#menuSection" class="navItemInner scrollNavItem">
                                        Menu
                                    </a>
                                </li>
                                <li class="headerNavItem">
                                    <a href="/#chefsSection" class="navItemInner scrollNavItem">
                                        Chefs
                                    </a>
                                </li>
                                <li class="headerNavItem submenu submenuLg">
                                    Promotions
                                    <ul>
                                        <li><a href="/#promoSection" id="feature1">Breakfast</a></li>
                                        <li><a href="/#promoSection" id="feature2">Lunch</a></li>
                                        <li><a href="/#promoSection" id="feature3">Dinner</a></li>
                                    </ul>
                                </li>
                                <li class="headerNavItem">
                                    <a href="/#contactSection" class="navItemInner scrollNavItem">
                                        Contact
                                    </a>
                                </li>
                                <li class="headerNavItem">
                                    <a href="/cart" class="navItemInner selected">
                                        Cart
                                    </a>
                                </li>
                                <li class="headerNavItem">
                                    <a href="/order" class="navItemInner">
                                        Order
                                    </a>
                                </li>
                                <li class="headerNavItem text-nowrap">
                                    <x-app-layout></x-app-layout>
                                </li>
                            </ul>
                            <div class="navSm">
                                <img src="assets/images/menuSm.png">
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="cartContainer">
            <div class="container">
                <div class="row">
                    @if ($subtotal > 0)
                        <div class="cartContentWrapper col-md-6 offset-md-3 col-12">
                            <h2>CART</h2>
                            <div class="cartContent">
                                @foreach ($cart as $item)
                                <div class="tabItem">
                                    <div class="cartItemImg">
                                        <img src="storage/{{$item->menu->image}}" />
                                    </div>
                                    <div class="cartInfo">
                                        <h4>{{$item->menu->title}}</h4>
                                        <div class="updateCart">
                                            <form action="/updatecart" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value={{$item->id}} />
                                                <input type="hidden" name="quantity" value={{$item->quantity - 1}} />
                                                <button class="btn btn-outline-secondary updateCartButton">-</button>
                                            </form>
                                            <span>{{$item->quantity}}</span>
                                            <form action="/updatecart" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value={{$item->id}} />
                                                <input type="hidden" name="quantity" value={{$item->quantity + 1}} />
                                                <button class="btn btn-outline-secondary updateCartButton">+</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="cartPrice">
                                        ${{$item->menu->price * $item->quantity}}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="subtotalWrapper">
                                <h4 class="subTotalText">
                                    Subtotal
                                </h4>
                                <div class="subTotalPrice">
                                    ${{$subtotal}}
                                </div>
                            </div>
                            <form action="/checkout" method="post">
                                @csrf
                                <button type="submit" class="checkoutButton">CHECKOUT</button>
                            </form>
                        </div>
                    @else
                        <div class="col-md-6 offset-md-3 col-12">
                            <h2>Ooppss! You cart is empty...</h2>
                            <p class="checkoutMenu py-2 align-items-center"><a href="/">Check out our delicious menu!</a></p>
                        </div>
                    @endif    
                </div>
            </div>
        </div>

        <footer class="footerWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footerLeft">
                            <ul class="socials">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
