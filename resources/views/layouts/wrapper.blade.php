<!DOCTYPE html>
<html lang="en">
<head>
    <title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!-- Custom Theme files -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/fasthover.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}" /> <!-- countdown -->
    <!-- //js -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
</head>
<body>
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->

<!-- header -->
<div class="header" id="home1">
    <div class="container">
        @if(Auth::check())
            <div class="w3l_login mr-2">
                <a href="/" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            </div>
            <div class="w3l_login">
                <a href="/signout" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
            </div>
        @else
            <div class="w3l_login">
                <a href="{{ route('RegAuth.auth') }}" data-target="#myModal88"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>
            </div>
        @endif
        <div class="w3l_logo">
            <h1><a href="/">Electronic Store<span>Your stores. Your place.</span></a></h1>
        </div>
        <div class="search">
            <input class="search_box" type="checkbox" id="search_box">
            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
            <div class="search_form">
                <form action="/search" method="get">
                    <input type="text" name="Search" placeholder="Search...">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
        <div class="cart cart box_1">
            <form action="#" method="post" class="last">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- header -->
<!-- navigation -->
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Mobiles</h6>
                                        <li><a href="{{route('prod')}}">Mobile Phones</a></li>
                                        <li><a href="{{route('prod')}}">Mp3 Players <span>New</span></a></li>
                                        <li><a href="{{route('prod')}}">Popular Models</a></li>
                                        <li><a href="{{route('prod')}}">All Tablets<span>New</span></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="multi-column-dropdown">
                                        <h6>Accessories</h6>
                                        <li><a href="{{route('prod1')}}">Laptop</a></li>
                                        <li><a href="{{route('prod1')}}">Desktop</a></li>
                                        <li><a href="{{route('prod1')}}">Wearables <span>New</span></a></li>
                                        <li><a href="{{route('prod1')}}"><i>Summer Store</i></a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-2">
                                    <ul class="multi-column-dropdown">
                                        <h6>Home</h6>
                                        <li><a href="{{route('prod2')}}">Tv</a></li>
                                        <li><a href="{{route('prod2')}}">Camera</a></li>
                                        <li><a href="{{route('prod2')}}">AC</a></li>
                                        <li><a href="{{route('prod2')}}">Grinders</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w3ls_products_pos">
                                        <h4>30%<i>Off/-</i></h4>
                                        <img src="{{asset('/images/1.jpg')}}" alt=" " class="img-responsive" />
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('icons')}}">Web Icons</a></li>
                            <li><a href="{{route('codes')}}">Short Codes</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('mail')}}">Mail Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->
@yield('content')
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Contact</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Manas st. 34/1 <span>Almaty Kazakhstan</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@edu.iitu.kz</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+7(727)-337-85-60</li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Information</h3>
                <ul class="info">
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('mail')}}">Contact Us</a></li>
                    <li><a href="{{route('codes')}}">Short Codes</a></li>
                    <li><a href="faq.html">FAQ's</a></li>
                    <li><a href="{{route('prod')}}">Special Products</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Category</h3>
                <ul class="info">
                    <li><a href="{{route('prod')}}">Mobiles</a></li>
                    <li><a href="{{route('prod1')}}">Laptops</a></li>
                    <li><a href="{{route('prod')}}">Purifiers</a></li>
                    <li><a href="{{route('prod1')}}">Wearables</a></li>
                    <li><a href="{{route('prod2')}}">Kitchen</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Profile</h3>
                <ul class="info">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('prod')}}">Today's Deals</a></li>
                </ul>
                <h4>Follow Us</h4>
                <div class="agileits_social_button">
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="twitter"> </a></li>
                        <li><a href="#" class="google"> </a></li>
                        <li><a href="#" class="pinterest"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy1">
            <div class="footer-copy-pos">
                <a href="#home1" class="scroll"><img src="{{asset('images/arrow.png')}}" alt=" " class="img-responsive" /></a>
            </div>
        </div>
        <div class="container">
            <p>&copy; 2020 Electronic Store. All rights reserved</p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- cart-js -->
<script src="{{asset('js/minicart.js')}}"></script>
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->
</body>
</html>
