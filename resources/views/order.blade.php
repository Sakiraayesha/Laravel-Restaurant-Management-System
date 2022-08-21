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
        <link rel="stylesheet" href="assets/css/order.css">

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
                                    <a href="/cart" class="navItemInner">
                                        Cart
                                    </a>
                                </li>
                                <li class="headerNavItem">
                                    <a href="/order" class="navItemInner selected">
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

        <div class="orderContainer">
            <div class="container">
                @if($activeOrder)
                    <div class="row">
                        <div class="orderHeader">
                            <div class="headerLeft">
                                <h2>Order #{{$activeOrder->id}}</h2>
                                <span>{{$activeOrder->created_at}}</span>
                            </div>
                            <div class="headerRight">
                                <span class="badge badge-warning">Pending</span>
                            </div>
                        </div>
                    </div>
                    <div class="row py-4 align-items-start">
                        <div class="col-md-7 col-12 activeOrder">
                            <h4 class="activeOrderTitle">Your Cart</h4>
                            @foreach ($activeOrder->carts as $item)
                            <div class="orderItem">
                                <div class="orderimg">
                                    <img src="storage/{{$item->menu->image}}"/>
                                </div>
                                <h6>{{$item->menu->title}}</h6>
                                <div class="orderPrice">
                                    <span>${{$item->menu->price}}</span>
                                    <span><small>x</small>{{$item->quantity}}</span>
                                    <span>${{number_format($item->menu->price * $item->quantity, 2)}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-4 offset-md-1 col-12 orderSummary">
                            <h4 class="activeOrderTitle">Order Summary</h4>
                            <div class="summaryTop">
                                <div class="summarydetails">
                                    <p>Subtotal</p>
                                    <p>${{$subtotal = $activeOrder->subTotal()}}</p>
                                </div>
                                <div class="summarydetails">
                                    <p>Tax (5%)</p>
                                    <p>${{$tax = $activeOrder->getTax($subtotal)}}</p>
                                </div>
                                <div class="summarydetails">
                                    <p>Delivery</p>
                                    <p>$3.50</p>
                                </div>
                            </div>
                            <div class="summaryBottom">
                                <div class="summarydetailsBottom">
                                    <p>Total</p>
                                    <p>${{$activeOrder->totalPrice($subtotal,$tax)}}</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                @else
                <div class="row">
                    <div class="headerLeft">
                        <h2>You don't have any active order...</h2>
                        <p class="checkoutMenu py-3"><a href="/">Check out our delicious menu!</a></p>
                    </div>
                </div> 
                @endif
                @if($prevOrders->count())
                    <div class="row prevOrders">
                        <div class="col-12">
                            <h4 class="prevOrderTitle">Previous Orders</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prevOrders as $order)
                                        <tr>
                                            <td scope="row">#{{$order->id}}</td>
                                            <td scope="row">{{$order->created_at}}</td>
                                            <td scope="row">${{$order->getPrevOrdersTotalPrice()}}</td>
                                            <td scope="row">
                                                @if($order->status == true)
                                                 <span class="badge badge-success">Delivered</span>
                                                @else 
                                                <span class="badge badge-warning">Pending</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
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
