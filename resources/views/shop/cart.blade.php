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
                            <li><a href="{{route('user-orders')}}"><i class="fa fa-star"></i> My_Orders</a></li>
                            <li><a href="checkout.blade.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html" class="active"><i class="fa fa-shopping-cart"></i> Cart</a></li>
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
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="name">Name</td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total_prod">Total</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
                    ?>
                @foreach( $cartProducts as $cartProduct )
                    <?php
                        $i += 1;
                    ?>
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="{{ asset('storage/images') }}/{{ $cartProduct->img[0] }}" alt="" style="height: 110px; width: 110px;"></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="">{{ $cartProduct->product->name }}</a></h4>
                        <p class="product_id{{$i}}">{{ $cartProduct->product->id }}</p>
                    </td>
                    <td class="cart_price">
                        <p class="cart_price_val">{{ $cartProduct->product->price }}</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0BiRYo70IoIdfqiZcxJVTt0N01eSOokMqHg&usqp=CAU" style="width: 15px;" alt="" />
                            </button>
                            <input type="text" name="quantity{{$i}}" value="1" style="width: 40px;">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOOGF2YV2tkMnO2cePvFOIK_bq8PI7BvwdtZYvFyQCITi8bx3qyB2wjnc99zsnwlMt7wA&usqp=CAU" style="width: 15px;" alt="" />
                            </button>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price" id="prod_total_price{{$i}}">{{ $cartProduct->product->price }}</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete"  href="delete-cart-product/{{ $cartProduct->product->id }}"  onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                <p class="quantity_product" style="display: none;">{{$i}}</p>
                </tbody>
            </table>
            <div>
                <h3 style="float: right">Total Sum : <span class="total-sum">0.00</span></h3>
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <h3>For order</h3>
                <p>You can choose all columns and click __check out__ button after that our compani very fast will send your orders</p>
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span class="total-sum">0.00</span></li>
                        <li>Shipping Cost <span>10$</span></li>
                        <li>Total <span class="total">0.00</span></li>

                    </ul>
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Country:</label>
                            <select name="country">
                                <option>Armenia</option>
                                <option>Gorgia</option>
                                <option>United States</option>
                                <option>Bangladesh</option>
                                <option>UK</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Ucrane</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field">
                            <label>Region / State:</label>
                            <select name="city">
                                <option>Abovyan </option>
                                <option>Vanadzor</option>
                                <option>Vagharshapat</option>
                                <option>Yeghegnadzor</option>
                                <option>Hrazdan</option>
                                <option>London</option>
                                <option>Gori</option>
                                <option>Kutaisi</option>
                                <option>Stepantsminda</option>
                                <option>Borjomi</option>
                                <option>Batumi</option>
                                <option>Lahore</option>
                                <option>Alaska</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field zip-field">
                            <label>Zip Code:</label>
                            <input type="text" name="zip_cod">
                            <div class="alert-danger" id="zip_codError"></div>
                        </li>
                        <li>
                            <input type="text" name="address" placeholder="write your address" />
                            <div class="alert-danger" id="addressError"></div>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-default check_out">Check Out</button>
                </div>

            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
</section><!--/#do_action-->

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
                            <li><a href="">Online Help</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Order Status</a></li>
                            <li><a href="">Change Location</a></li>
                            <li><a href="">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">T-Shirt</a></li>
                            <li><a href="">Mens</a></li>
                            <li><a href="">Womens</a></li>
                            <li><a href="">Gift Cards</a></li>
                            <li><a href="">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Terms of Use</a></li>
                            <li><a href="">Privecy Policy</a></li>
                            <li><a href="">Refund Policy</a></li>
                            <li><a href="">Billing System</a></li>
                            <li><a href="">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="">Company Information</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Store Location</a></li>
                            <li><a href="">Affillate Program</a></li>
                            <li><a href="">Copyright</a></li>
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
<script src="{{asset('shop_templates/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('shop_templates/js/main.js')}}"></script>
<script>
    $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());
        let price = $(this).closest('tr').find('.cart_price_val').text();

        if ( value > 1 ) {
            value = value - 1;
        } else {
            value = 1;
        }

        var total_price = price * value ;
        $(this).closest('tr').find('.cart_total_price')[0].innerHTML = total_price;
        $input.val(value);

        let elementsPrice = $(".cart_total_price");
        var sum = 0;
        for (let i = 0 ; i < elementsPrice.length ; i++ )
        {

            let elementPrice = parseInt( elementsPrice.eq(i).html() );
            sum += elementPrice;
        }
        $(".total-sum").text(sum + '$');
        $(".total").text(sum + 10 + '$');
        // console.log(sum)

    });

    $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());
        let price = $(this).closest('tr').find('.cart_price_val').text();

        if ( value < 100 ) {
            value = value + 1;
        }else {
            value =100;
        }

        var total_price = price * value ;
        $(this).closest('tr').find('.cart_total_price')[0].innerHTML = total_price;
        $input.val(value);

        let elementsPrice = $(".cart_total_price");
        var sum = 0;
        for (let i = 0 ; i < elementsPrice.length ; i++ )
        {

            let elementPrice = parseInt( elementsPrice.eq(i).html() );
            sum += elementPrice;
        }
        $(".total-sum").text(sum + '$');
        $(".total").text(sum + 10 + '$');
        // console.log(sum)

    });


    let elementsPrice = $(".cart_total_price");
    var sum = 0;
    for (let i = 0 ; i < elementsPrice.length ; i++ )
    {

        let elementPrice = parseInt( elementsPrice.eq(i).html() );
        sum += elementPrice;
    }
    $(".total-sum").text(sum + '$');
    $(".total").text(sum + 10 + '$');



    $(".check_out").click(function(event){
        event.preventDefault();

        let quantit_product = $(".quantity_product").html();
        const a = [];
        var quantity = [[]];
        var id = [[]];
        var prod_total = [[]];
        const obj = {}
        for (var i = 0 ; i < quantit_product ; i++){
            //bring tags class name
            var quantity_product = 'quantity' + (i + 1) ;
            var product_id = 'product_id' + (i + 1) ;
            quantity[i] = $("input[name= "+ quantity_product +"]").val();

            let aaa = $("." + product_id).html()
            obj[aaa] = $("input[name= "+ quantity_product +"]").val()

        }

        let country = $("select[name=country]").val();
        let city = $("select[name=city]").val();
        let zip_code = $("input[name=zip_cod]").val();
        let address = $("input[name=address]").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/cart-ajax-request",
            method:"POST",
            dataType: "json",
            data:{
                obj,
                country:country,
                city:city,
                zip_code:zip_code,
                address:address,
                status:"new",
            },
            success   : function(data) {
                if (data.success){
                    window.location.href = '/index'
                }
            },
            error : function(response){
                $('#addressError').text(response.responseJSON.errors.address);
                $('#zipcodError').text(response.responseJSON.errors.zip_cod);
            }
        });
    });

</script>
</body>
</html>
