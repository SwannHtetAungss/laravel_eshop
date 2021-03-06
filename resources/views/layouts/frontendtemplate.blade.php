<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Tag  -->
    <title>Eshop - @yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png')}}">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css')}}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/niceselect.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/flex-slider.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl-carousel.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css')}}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">



</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    <header class="header shop">

        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('frontend.home')}}"><img src="{{ asset('frontend/images/logo.png')}}"
                                    alt="logo"></a>
                        </div>
                        <!--/ End Logo -->

                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->

                        <div class="mobile-nav"></div>
                    </div>

                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <form action="#" method="get">
                                    <div class="header-search-wrapper search-wrapper-wide">
                                        <input name="search" placeholder="Search Products Here....." type="search"
                                            id="search">
                                        <button class="btnn"><i class="ti-search"></i></button>
                                    </div>
                                    <div id="search-dropdown" class="search-dropdown dropdown-search-products">



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>


                            <div class="sinlge-bar shopping">
                                <a href="{{route('frontend.cart')}}" class="single-icon"><i class="ti-bag"></i>
                                    <span class="count"> </span>
                                </a>

                            </div>

                            {{-- user login --}}

                            <div class="sinlge-bar shopping">
                                <a class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                </a>
                                <div class="shopping-item">

                                    @guest
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount" id="total_amount"> </span>
                                        </div>
                                        <a href="{{ route('login') }}" class="btn animate">Login</a>
                                        <a href="{{ route('register') }}" class="btn animate">Register</a>
                                    </div>
                                    @else
                                    <div class="dropdown-cart-header">
                                        <span> {{ Auth::user()->name }} </span>
                                        {{-- <a href="{{route('frontend.cart')}}">View Cart</a> --}}
                                    </div>

                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount" id="total_amount"> </span>
                                        </div>
                                        <a href="{{ route('logout') }}" class="btn animate" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    @endguest

                                </div>
                            </div>

                            {{-- end user login --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="{{ Request::is('frontend/home') ? 'active' : '' }}"><a
                                                        href="{{route('frontend.home')}}">Home</a></li>
                                                <li class="{{ Request::is('frontend/shop') ? 'active' : '' }}"><a
                                                        href="{{route('frontend.shop')}}">Product</a></li>
                                                <li><a href="#">Service</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    @yield('content')

    <!-- Start Shop Services Area  -->
    <section class="shop-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->


    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                            aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <!-- Product Slider -->
                            <div class="product-gallery">
                                <div class="quickview-slider-active">
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid">
                                    </div>
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid">
                                    </div>
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid">
                                    </div>
                                    <div class="single-slider">
                                        <img src="#" alt="#" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- End Product slider -->
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h2 id="item_name"></h2>
                                <div class="quickview-ratting-review">
                                    <div class="quickview-ratting-wrap">
                                        <div class="quickview-ratting">
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="yellow fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="#"> (1 customer review)</a>
                                    </div>
                                    <div class="quickview-stock">
                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                    </div>
                                </div>
                                <h3 id="item_price"> </h3>
                                <div class="quickview-peragraph mb-3">
                                    <p id="item_description"> </p>
                                </div>

                                <div class="quantity">
                                    <!-- Input Order -->
                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                                data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number input-qty" data-min="1"
                                            data-max="1000" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                                data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/ End Input Order -->
                                </div>
                                <div class="add-to-cart addtocard-item">
                                    <a class="btn addtocartBtn">Add to cart</a>
                                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                    <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                </div>
                                <div class="default-social">
                                    <h4 class="share-now">Share:</h4>
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Modal end -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('frontend/images/logo2.png')}}" alt="#"></a>
                            </div>
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna
                                eros eu erat.
                                Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                                        789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Get In Tuch</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@eshop.com</li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright ?? 2020 <a href="http://www.wpthemesgrid.com"
                                        target="_blank">Wpthemesgrid</a> - All Rights
                                    Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="{{asset('frontend/images/payments.png')}}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->

    <!-- Jquery -->
    <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- Color JS -->
    {{-- <script src="{{ asset('frontend/js/colors.js')}}"></script> --}}
    <!-- Slicknav JS -->
    <script src="{{ asset('frontend/js/slicknav.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('frontend/js/owl-carousel.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('frontend/js/magnific-popup.js')}}"></script>
    <!-- Fancybox JS -->
    <script src="{{ asset('frontend/js/facnybox.min.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('frontend/js/finalcountdown.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('frontend/js/nicesellect.js')}}"></script>
    <!-- Ytplayer JS -->
    <script src="{{ asset('frontend/js/ytplayer.min.js')}}"></script>
    <!-- Flex Slider JS -->
    <script src="{{ asset('frontend/js/flex-slider.js')}}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('frontend/js/scrollup.js')}}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ asset('frontend/js/onepage-nav.min.js')}}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('frontend/js/easing.js')}}"></script>
    <!-- Active JS -->
    <script src="{{ asset('frontend/js/active.js')}}"></script>
    <!-- Sweet Alert JS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- <script type="text/javascript" src="{{ asset('frontend/js/cart.js')}}"></script> --}}
    <script type="text/javascript">
        $(document).ready(function(){

    count();
    getData();

    $('.addtocard-item').on('click','.addtocartBtn',function(){
    // $('.addtocartBtn').on('click',function(){
      // alert('hi');

      var id=$(this).data('id');
      var name=$(this).data('name');
      var price=$(this).data('price');
      var discount=$(this).data('discount');
      var photo=$(this).data('photo');
      var codeno=$(this).data('codeno');
      var description=$(this).data('description');

      var multi=$(this).data('multi');
      var qty=1;

      if(multi){

        var qty = Number($('.input-number').val());

        var item={
              id : id,
              name : name,
              price : price,
              discount : discount,
              photo : photo,
              codeno : codeno,
              description : description,
              qty : qty
            };
      }else{
        var item={
              id : id,
              name : name,
              price : price,
              discount : discount,
              photo : photo,
              codeno : codeno,
              description : description,
              qty : 1
            };
      }

      var shop_str=localStorage.getItem('eshop');
      var shop_arr;

      if(shop_str==null){
        shop_arr=Array();
      }else{
        shop_arr=JSON.parse(shop_str);
      }

      var status=false;

      $.each(shop_arr,function(i,v){
        if(id==v.id){

          v.qty+=qty;
          status=true;
        }
      })

      if(status==false){
        shop_arr.push(item);
      }

      var shopData=JSON.stringify(shop_arr);

      localStorage.setItem('eshop',shopData);

      count();
      getData();

    });

    function count()
    {
      //alert('hello');
      var shop_str=localStorage.getItem('eshop');
      //console.log(shop_str);
      if (shop_str){
        var shop_arr=JSON.parse(shop_str);
        var count=0;
        $.each(shop_arr,function(i,v){
          count+=v.qty;
          if(v.discount){
            var cart_amount=cart_amount+parseInt(v.discount);
          }else{
            var cart_amount=cart_amount+parseInt(v.price);
          }
        });
        $('.count').html(count);
      }else{
        $('.count').html(0);
      }
    };


    function getData(){
      var shop_str=localStorage.getItem('eshop');
      if(shop_str){
        $('.shoppingcart_div').show();
        $('.noneshoppingcart_div').hide();

        var shop_arr=JSON.parse(shop_str);
        if (shop_arr.length>0){
        var html='';
        var total=0;
        $.each(shop_arr,function(i,v){
          if(v.discount){
            var sub_total=v.qty*v.discount;
          }else{
            var sub_total=v.qty*v.price;
          }

          if(v.discount){
          var rows=`<tr>
                        <td class="image" data-title="No">
                        <img src="{{ asset('storage/${v.photo}') }}" alt="#"></td>
                        <td class="product-des" data-title="Description">
                          <p class="product-name"><a href="#"> ${v.name} </a></p>
                          <p class="product-des"></p>
                        </td>
                        <td class="price" data-title="Price"><span> ${v.discount} MMK </span></td>
                        <td class="qty" data-title="Qty"><!-- Input Order -->
                          <div class="input-group">
                            <div class="button minus">
                              <button type="button" class="btn btn-primary btn-number minus_btn" data-key="${i}" data-type="minus" data-field="quant[1]">
                                <i class="ti-minus"></i>
                              </button>
                            </div>
                            <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="${v.qty}">
                            <div class="button plus">
                              <button type="button" class="btn btn-primary btn-number plus_btn" data-key="${i}" data-type="plus" data-field="quant[1]">
                                <i class="ti-plus"></i>
                              </button>
                            </div>
                          </div>
                          <!--/ End Input Order -->
                        </td>
                        <td class="total-amount" data-title="Total"><span> ${sub_total} MMK </span></td>
                        <td class="action" data-title="Remove"><a class="remove" data-key="${i}"><i class="ti-trash remove-icon"></i></a></td>
                      </tr>`;
          }else{
            var rows=`<tr>
                        <td class="image" data-title="No">
                        <img src="{{ asset('storage/${v.photo}') }}" alt="#"></td>
                        <td class="product-des" data-title="Description">
                          <p class="product-name"><a href="#"> ${v.name} </a></p>
                          <p class="product-des"></p>
                        </td>
                        <td class="price" data-title="Price"><span> ${v.price} MMK </span></td>
                        <td class="qty" data-title="Qty"><!-- Input Order -->
                          <div class="input-group">
                            <div class="button minus">
                              <button type="button" class="btn btn-primary btn-number minus_btn" data-key="${i}" data-type="minus" data-field="quant[1]">
                                <i class="ti-minus"></i>
                              </button>
                            </div>
                            <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="${v.qty}">
                            <div class="button plus">
                              <button type="button" class="btn btn-primary btn-number plus_btn" data-key="${i}" data-type="plus" data-field="quant[1]">
                                <i class="ti-plus"></i>
                              </button>
                            </div>
                          </div>
                          <!--/ End Input Order -->
                        </td>
                        <td class="total-amount" data-title="Total"><span> ${sub_total} MMK </span></td>
                        <td class="action" data-title="Remove"><a class="remove" data-key="${i}"><i class="ti-trash remove-icon"></i></a></td>
                      </tr>`;
          }
          html+=rows;
          total+=sub_total;
        })

        $('#shoppingcart_table').html(html);
        $('#cart_total').html('Total : '+ total +' Ks');
        $('.cart_amount').html(total+' Ks');
        $('#total_amount').html(total+' Ks');
        $('.checkout').attr('data-total',total);
      }else{
        $('.shoppingcart_div').hide();
        $('.noneshoppingcart_div').show();
      }
      }else{
        $('.shoppingcart_div').hide();
        $('.noneshoppingcart_div').show();
      }
    };

    $('#shoppingcart_table').on('click','.plus_btn',function(){
      var key=$(this).data('key');
      // alert(key);

      var shop_str=localStorage.getItem('eshop');
      if(shop_str){
        var shop_arr=JSON.parse(shop_str);

        $.each(shop_arr,function(i,v){
          if(key==i){
            v.qty++;
          }

          var shopData=JSON.stringify(shop_arr);
          localStorage.setItem('eshop',shopData);
          getData();
          count();
        })
      }
    })

    $('#shoppingcart_table').on('click','.minus_btn',function(){
      var key=$(this).data('key');
      var shop_str=localStorage.getItem('eshop');
      if(shop_str){
        var shop_arr=JSON.parse(shop_str);

        $.each(shop_arr,function(i,v){
          if(key==i){
            v.qty--;
            if(v.qty==0){
              shop_arr.splice(key,1);
            }
          }

          var shopData=JSON.stringify(shop_arr);
          localStorage.setItem('eshop', shopData);
          getData();
          count();
        })
      }
    })

    $('#shoppingcart_table').on('click','.remove',function(){
      // alert('hi');
      var id=$(this).data('key');

      let ans=confirm('Are you sure to remove?');
      if(ans){
        var shop_str=localStorage.getItem('eshop');
        if(shop_str){
          var shop_arr=JSON.parse(shop_str);

          shop_arr.splice(id, 1);
          var shopData=JSON.stringify(shop_arr);
          localStorage.setItem('eshop',shopData);
          getData();
          count();
        }
      }
    })

    // checkout process
    $(document).on("click",".checkout",function(){
      // alert('hi');
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var shop_str=localStorage.getItem('eshop');
      var total=$(this).data('total');

      $.post("/order-management/order",{data:shop_str,total:total},function(res){
        console.log(res);

        if(res=="success"){

          swal("Order Successfully !", "", "success")

        }

        if(res=="fail"){
          swal("Please Order Again !","","warning")

        }

        // remove LocalStorage
        localStorage.removeItem('eshop');

        $('#total_amount').html(0+' Ks');

        // use sweetalert
        getData();
        count();
      });
    });

    // shop page Category filter process
    $(document).on("click",".category_filter",function(){
      // alert('hi');
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var cat_id=$(this).data('id');
      // alert(cat_id);

      $.post("/frontend/category-filter",{cat_id:cat_id},function(res){
        // console.log(res.items);

        var subcategories = res.subcategories;
        var items = res.items;
        var html='';

        $.each(subcategories,function(i,sub){
          $.each(items,function(i,item){
            var id = item.id;
            if(item.subcategory_id==sub.id){
              // console.log(item.name);
              if(item.discount){
              html +=`<div class="col-lg-4 col-md-6 col-12">
                <div class="single-product">
                  <div class="product-img">
                    <a href="item/${id}">
                      <img class="default-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                      <img class="hover-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a data-toggle="modal" class="modal-view" data-target="#exampleModal" title="Quick View" href="#" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-description="${item.description}" data-photo="${item.photo}" data-codeno="${item.codeno}"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" class="addtocartBtn text-decoration-none" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-photo="${item.photo}" data-codeno="${item.codeno}" data-description="${item.description}">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="item/${id}"> ${item.name} </a></h3>
                    <div class="product-price">
                      <span class="old"> $ ${item.price} </span>
                      <span> $ ${item.discount} </span>
                    </div>
                  </div>
                </div>
              </div>`;
              }else{
                html +=`<div class="col-lg-4 col-md-6 col-12">
                <div class="single-product">
                  <div class="product-img">
                    <a href="item/${id}">
                      <img class="default-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                      <img class="hover-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                    </a>
                    <div class="button-head">
                      <div class="product-action">
                        <a data-toggle="modal" class="modal-view" data-target="#exampleModal" title="Quick View" href="#" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-description="${item.description}" data-photo="${item.photo}" data-codeno="${item.codeno}"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                      </div>
                      <div class="product-action-2">
                        <a title="Add to cart" class="addtocartBtn text-decoration-none" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-photo="${item.photo}" data-codeno="${item.codeno}" data-description="${item.description}">Add to cart</a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3><a href="item/${id}"> ${item.name} </a></h3>
                    <div class="product-price">
                      <span> $ ${item.price} </span>
                    </div>
                  </div>
                </div>
              </div>`;
              }
            }
          });

        });

        $('#item_filter').html(html);

      });
    });

    // shop page All Category filter process
    $(document).on("click",".categoryAll_filter",function(){
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.post("/frontend/categoryAll-filter",function(res){
        var items = res.items;
        var html='';

        $.each(items,function(i,item){
          var id = item.id;

          if(item.discount){
            html +=`<div class="col-lg-4 col-md-6 col-12">
              <div class="single-product">
                <div class="product-img">
                  <a href="item/${id}">
                    <img class="default-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                    <img class="hover-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                  </a>
                  <div class="button-head">
                    <div class="product-action">
                      <a data-toggle="modal" class="modal-view" data-target="#exampleModal" title="Quick View" href="#" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-description="${item.description}" data-photo="${item.photo}" data-codeno="${item.codeno}"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                      <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                      <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div>
                    <div class="product-action-2">
                      <a title="Add to cart" class="addtocartBtn text-decoration-none" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-photo="${item.photo}" data-codeno="${item.codeno}" data-description="${item.description}">Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3><a href="item/${id}"> ${item.name} </a></h3>
                  <div class="product-price">
                    <span class="old"> $ ${item.price} </span>
                    <span> $ ${item.discount} </span>
                  </div>
                </div>
              </div>
            </div>`;
          }else{
            html +=`<div class="col-lg-4 col-md-6 col-12">
            <div class="single-product">
              <div class="product-img">
                <a href="item/${id}">
                  <img class="default-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                  <img class="hover-img" src="{{ asset('storage/${item.photo}') }}" alt="550x750">
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" class="modal-view" data-target="#exampleModal" title="Quick View" href="#" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-description="${item.description}" data-photo="${item.photo}" data-codeno="${item.codeno}"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" class="addtocartBtn text-decoration-none" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}" data-discount="${item.discount}" data-photo="${item.photo}" data-codeno="${item.codeno}" data-description="${item.description}">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="item/${id}"> ${item.name} </a></h3>
                <div class="product-price">
                  <span> $ ${item.price} </span>
                </div>
              </div>
            </div>
          </div>`;
          }
        });

        $('#item_filter').html(html);
      });
    });

    // ID Modal Passing Data
    $(document).on("click",".modal-view",function(){
      // alert('hi');
      var id=$(this).data('id');
      var name=$(this).data('name');
      var price=$(this).data('price');
      var discount=$(this).data('discount');
      var description=$(this).data('description');
      var photo=$(this).data('photo');
      var viewphoto=`{{ asset('storage/${photo}') }}`;
      var codeno=$(this).data('codeno');

      // alert(photo);

      // $(".modal-body #item_name").val( name );
      $('.modal-body #item_name').html(name);
      if(discount){
        $('.modal-body #item_price').html(discount+' Ks');
      }else{
        $('.modal-body #item_price').html(price+' Ks');
      }
      $('.modal-body #item_description').html(description);
      // $('.modal-body #item_photo').html(photo);
      $('.modal-body img').attr("src", viewphoto);


      // add to cart button
      $('.addtocartBtn').attr("data-id",id);
      $('.addtocartBtn').attr("data-name",name);
      $('.addtocartBtn').attr("data-price",price);
      $('.addtocartBtn').attr("data-discount",discount);
      $('.addtocartBtn').attr("data-description",description);
      $('.addtocartBtn').attr("data-photo",photo);
      $('.addtocartBtn').attr("data-codeno",codeno);
      $('.modal-body .addtocartBtn').attr("data-multi","multi");

      // - qty +
      // var modal_qty = $('.input-qty').val();
      // alert(qty);
    });




    // Search process

    $('#search').on('keyup',function(){

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var searchData = $(this).val();
      // console.log(searchData);

      $.ajax({
        url: "/search",
        method: "POST",
        data: {
          data: searchData
        },
        dataType: "json",
        beforeSend: function() {
          $("#search-dropdown").html(`
            <div class="text-center">
              <div class="spinner-border my-5" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          `);
        },

        success: function(res) {

          // console.log(res.length);

          var html = "";

          if (res.length > 0) {
              $.each(res, function(i, data) {
                  if (data.discount) {
                      price_html = `
                        <span class="product-search-price"><strike>${data.price.toLocaleString()} Ks</strike></span>
                        <span class="product-search-price new-price ml-2">${data.discount.toLocaleString()} Ks</span>
                      `;
                  } else {
                      price_html = `
                        <span class="product-search-price">${data.price.toLocaleString()} Ks</span>
                      `;
                  }

                  html += `
                    <div class="product">
                      <figure class="search-image-container">
                        <a href="" class="product-image">
                          <img src="{{ asset('storage/${data.photo}') }}"
                            alt="${data.name}">
                        </a>
                      </figure>
                      <div class="product-search-details">
                        <h4 class="product-search-title">
                          <a href="item/${data.id}">${data.name}</a>
                        </h4>
                        ${price_html}
                      </div>
                    </div>
                  `;
              });

              $("#search-dropdown")
                  .html(html)
                  .addClass("show");
          } else {
              html += `
                <div class='product-search-title text-center my-5'>
                  <i class='icon-exclamation-circle mr-3'></i>No products were found with your search keyword.
                </div>
              `;

              $("#search-dropdown")
                  .html(html)
                  .addClass("show");
          }

        }

      });

    });


    // Hiding live search products on click outside
    $(document).on("click", function(e) {
        if (!($(e.target).closest("#search-dropdown").length > 0)) {
            $("#search-dropdown").removeClass("show");
        }
    });


  });

    </script>
</body>

</html>
