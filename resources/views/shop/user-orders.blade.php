<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="{{asset('shop_templates/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop_templates/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop_templates/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('shop_templates/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('shop_templates/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('shop_templates/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('shop_templates/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('shop_templates/js/html5shiv.js')}}'"></script>
    <script src="{{asset('shop_templates/js/respond.min.js')}}"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('shop_templates/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('shop_templates/mages/ico/apple-touch-icon-144-precomposed.png')}}'">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('shop_templates/mages/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('shop_templates/mages/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('shop_templates/mages/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-phone"></i> +374 -77-795-919</a></li>
                            <li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left" >
                        <a href="{{route('user-index')}}" >
                            <img src="https://i.pinimg.com/originals/86/8f/18/868f18a96f2ac779313404e7ac2efc04.jpg" style="width: 102px; margin-bottom: -71px; margin-top: -20px; height: 112px;" alt="" />
                        </a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canada</a></li>
                                <li><a href="">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Canadian Dollar</a></li>
                                <li><a href="">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="{{route('user-orders')}}" class="active"><i class="fa fa-star"></i> My_Orders</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('user-index')}}">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="cart.html" class="active">Cart</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">My_Orders</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="name">Name</td>
                    <td class="price">Date</td>
                    <td class="quantity">Quantity</td>
                    <td class="quantity">Status</td>
                    <td class="total_prod">Total</td>
                    <td class="total_prod">Action</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @foreach( $orders as $order )
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{ asset('storage/images') }}/{{ $order->img[0] }}" alt="" style="height: 110px; width: 110px;"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{ $order->product->name }}</a></h4>
                        </td>
                        <td class="cart_price">
                            <p class="cart_price_val">{{ $order->created_at->format('d M H:i') }}</p>
                        </td>
                        <td class="cart_price">
                            <p class="cart_price_val">{{ $order->quantity }}</p>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price" id="prod_total_price">{{ $order->status }}</p>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price" id="prod_total_price">{{ $order->total_price }}</p>
                        </td>
                        @if( $order->status !== 'new' && $order->status !== 'sended' )
                            <td class="cart_delete">
                                <a class="cart_quantity_delete"  href="delete-user-order/{{ $order->id }}"  onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="float: right;margin-top: -30px; ">
            {{ $orders->links() }}
        </div>
    </div>
</section> <!--/#cart_items-->




<script src="{{asset('shop_templates/js/jquery.js')}}"></script>
<script src="{{asset('shop_templates/js/bootstrap.min.js')}}"></script>
<script src="{{asset('shop_templates/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('shop_templates/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('shop_templates/js/main.js')}}"></script>
<script>

</script>
</body>
</html>
