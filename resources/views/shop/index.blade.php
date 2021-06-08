
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Coffee-Shopper</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
{{--    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="{{asset( 'shop_templates/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset( 'shop_templates/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset( 'shop_templates/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset( 'shop_templates/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset( 'shop_templates/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset( 'shop_templates/css/main.css')}}" rel="stylesheet">
    <link href="{{asset( 'shop_templates/css/responsive.css')}}" rel="stylesheet">


<!--[if lt IE 9]>
    <script src="{{asset('shop_templates/js/html5shiv.js')}}"></script>
    <script src="{{asset('shop_templates/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('shop_templates/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('shop_templates/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('shop_templates/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('shop_templates/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('shop_templates/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
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
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="{{route('user-orders')}}"><i class="fa fa-star"></i> My_Orders</a></li>
                            <li><a href="checkout.blade.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i> Cart <span style="color: #0b2e13"> ( {{$cartsCount}} ) </span></a></li>
                            <li><a href="login.blade.php"><i class="fa fa-lock"></i> Login</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-user"></i> Logout</a></li>
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
                            <li><a href="" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.blade.php">Products</a></li>
                                    <li><a href="product-details.blade.php">Product Details</a></li>
                                    <li><a href="checkout.blade.php">Checkout</a></li>
                                    <li><a href="cart.blade.php">Cart</a></li>
                                    <li><a href="login.blade.php">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.blade.php">Blog List</a></li>
                                    <li><a href="blog-single.blade.php">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="404.blade.php">404</a></li>
                            <li><a href="contact-us.blade.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p id="clearInp" style="margin: 0 0 0 150px;position: absolute; font-size: 19px;">X</p>
                        <input type="search" class="form-controller" id="search" name="search" placeholder="search...">
                    </div>
                </div>
                <div id="tbody" class="tbody">

                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
{{--@dd($topImages)--}}
                    @if(isset($topImages[0]))
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span style="text-shadow: 2px 2px">Coffee</span>-SHOPPER</h1>
                                <h2>100% Natural Product</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/images') }}/{{ $topImages[0][0] }}" class="girl img-responsive" alt="" style="height: 400px;" />
                                <img src="{{ asset('shop_templates/images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span style="text-shadow: 2px 2px">Coffee</span>-SHOPPER</h1>
                                <h2>100% Natural Product</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/images') }}/{{ $topImages[1][0] }}" class="girl img-responsive" alt="" style="height: 400px;" />
                                <img src="{{ asset('shop_templates/images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span style="text-shadow: 2px 2px">Coffee</span>-SHOPPER</h1>
                                <h2>100% Natural Product</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('storage/images') }}/{{ $topImages[2][0] }}" class="girl img-responsive" alt="" style="height: 400px;" />
                                <img src="{{ asset('shop_templates/images/home/pricing.png')}}"  class="pricing" alt="" />
                            </div>
                        </div>

                    </div>
                    @endif
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Price Range</h2>
                    <div class="price-range"><!--price-range-->
{{--                        <h2>Price Range</h2>--}}
                        <div class="well text-center">
                            <form action="{{route('user-index')}}" method="get">
                                <input
                                    type="text"
                                    name="data_slider"
                                    class="span2"
                                    value="0,2000"
                                    data-slider-min="0"
                                    data-slider-max="2000"
                                    data-slider-step="20"
                                    data-slider-value="[0,2000]"
                                    id="sl2"
                                ><br />
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 2000</b>
                                <button type="submit" class="get">find</button>
                            </form>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr-pYoFUtqzsrlU3zcWFTTzTEgp1PqOYO8Akm0mLa3OvABw4s3Vhw21bBM_6U9PCsvCWU&usqp=CAU" alt="" style="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">All Products</h2>
                @foreach( $shopProducts as $shopProduct )
                    <div class="col-sm-4">
                        <div class="product-image-wrapper" >
                            <div class="single-products" >
                                <div class="productinfo text-center" style="background-color: #F1F1F1;">
                                        <img src="{{ asset('storage/images') }}/{{ $shopProduct->img[0] }}" alt="" style="height: 252px;"/>
                                    <h2>${{ $shopProduct->price }}</h2>
                                    <h5>Name : {{ $shopProduct->name }}</h5>
                                    <h4>Category : {{ $shopProduct->category->name }}</h4>
                                    <a href="/add-to-cart/{{ $shopProduct->id }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!--features_items-->
                <div style="float: right;">
                    {{ $shopProducts->links() }}
                </div>
                <div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>

                <div class="category-tab"><!--category-tab-->
                    <h2 class="title text-center">categories</h2>
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <?php
                                $j = 0;
                            ?>
                            @foreach( $categories as $categorie )
                                @if($j == 0)
                                    <li class="active"><a href="#{{$categorie->name}}" data-toggle="tab">{{ $categorie->name }}</a></li>
                                    @elseif( $j > 0 )
                                    <li><a href="#{{$categorie->name}}" data-toggle="tab">{{ $categorie->name }}</a></li>
                                    @endif
                                    <?php
                                        $j += 1;
                                    ?>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab-content">
                        @foreach( $categories as $category )
                            @if($category->name == 'americano')
                                <div class="tab-pane fade active in" id="{{ $category->name }}" >
                                    @foreach( $category->products as $product )
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center" style="background-color: #F1F1F1; max-height: 351px; border: 3px solid #705647;">
                                                        <img src="{{ asset('storage/images') }}/{{ json_decode($product->images)[0] }}" alt="" style="height: 228px;" />
                                                        <h2>{{ $product->price }}</h2>
                                                        <p>{{ $product->name }}</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="tab-pane fade" id="{{ $category->name }}" >
                                @foreach( $category->products as $product )
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center" style="background-color: #F1F1F1; max-height: 351px; border: 3px solid #705647;">
                                                        <img src="{{ asset('storage/images') }}/{{ json_decode($product->images)[0] }}" alt="" style="height: 228px;" />
                                                        <h2>{{ $product->price }}</h2>
                                                        <p>{{ $product->name }}</p>
                                                        <a href="/add-to-cart/{{ $product->id }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($showProducts->chunk(3) as $key => $imageArray)
                                <div class="item @if($key === 0) active @endif">
                                @foreach($imageArray as $image)
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center" style="background-color: #F1F1F1;">
                                                        <img src="{{ asset('storage/images') }}/{{ $image->img[0] }}" alt="" style="height: 252px;"/>
                                                        <h2>{{$image->price}}</h2>
                                                        <h3>{{$image->name}}</h3>
                                                        <a href="/add-to-cart/{{ $image->id }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                </div>
                            @endforeach
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-shopper</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('shop_templates/images/home/iframe1.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('shop_templates/images/home/iframe2.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('shop_templates/images/home/iframe3.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="{{asset('shop_templates/images/home/iframe4.png')}}" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="{{asset('shop_templates/images/home/map.png')}}" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->



<script src="{{asset('shop_templates/js/jquery.js')}}"></script>
<script src="{{asset('shop_templates/js/bootstrap.min.js')}}"></script>
<script src="{{asset('shop_templates/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('shop_templates/js/price-range.js')}}"></script>
<script src="{{asset('shop_templates/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('shop_templates/js/main.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $('#clearInp').on('click',function (){
        $('#search').val('');
        $('#tebleSearch').empty();
        $('.tbody').empty();
    });
    $('#search').on('keyup',function(){
            $value=$(this).val();
            console.log( $value === "")
        if ( $value !== "" ){
            $.ajax({
                type : 'get',
                url : '{{URL::to('search')}}',
                data:{'search':$value},
                success:function(data){
                    // console.log(!$.trim(data))
                    if ($.trim(data)){

                        $('.tbody').empty();
                        let table = `<table class="table table-bordered" id="tebleSearch">
                                    <thead>
                                        <tr>
                                            <th>N</th>
                                            <th>Name</th>
                                            <th>Descriptio</th>
                                            <th>Images</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>`;
                        for(let i = 0; i < data.length; i++ ){
                            table += `<tr>
                            <td>${ i + 1 }</td>
                            <td>${data[i].name}</td>
                            <td>${data[i].description}</td>
                            <td><img src="../storage/images/${data[i].img[0]}" style="height: 100px;width: 100px;"></td>
                            <td>${data[i].price}</td>
                            <td><button class="btn-success"><a href="/add-to-cart/${data[i].id}">Add To Cart</a></button></td>
                        </tr>`
                        }
                        table += '</tbody></table>';

                        $('.tbody').append(table);
                    }else if(!$.trim(data)){
                        $('.tbody').html('<p style="color: #ff0000;" id="textSearch">'+"this products dose not exist"+'<p>');
                    }

                }

            });

        }else if( $value === "" ){
            $('.tbody').empty();
            $('#textSearch').val('');
        }


    })


</script>
</body>
</html>
