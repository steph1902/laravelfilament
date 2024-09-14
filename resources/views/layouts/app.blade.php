<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
	<link rel="stylesheet" href="{{asset('malefashion-master/css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('malefashion-master/css/font-awesome.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('malefashion-master/css/elegant-icons.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('malefashion-master/css/magnific-popup.css')}}" type="text/css">    
	<link rel="stylesheet" href="{{asset('nice-select.css')}}" type="text/css">	
	<link rel="stylesheet" href="{{asset('malefashion-master/css/owl.carousel.min.css')}}" type="text/css">    	
	<link rel="stylesheet" href="{{asset('malefashion-master/css/slicknav.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('malefashion-master/css/style.css')}}" type="text/css">



</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
                <a href="#">FAQs</a>
            </div>


            <div class="offcanvas__top__hover">
                <select id="currency-selector-mobile">
                    <option value="khr" selected>KHR</option>
                    <option value="vnd">VND</option>
                    <option value="thb">THB</option>
                </select>
                {{-- <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul> --}}
            </div>

            <!-- Add a dropdown menu or button group to select the currency -->
            



        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Sign in</a>
                                <a href="#">FAQs</a>
                            </div>
                            <div class="header__top__hover">
                                {{-- <span>Usd <i class="arrow_carrot-down"></i></span> --}}
                                {{-- <ul>
                                    <li>USD</li>
                                    <li>EUR</li>
                                    <li>USD</li>
                                </ul> --}}
                                <select class="currency-select" id="currency-selector">
                                    <option value="khr" selected>KHR</option>
                                    <option value="vnd">VND</option>
                                    <option value="thb">THB</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container first-section">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    {{-- <div class="header__logo">
                        <a href="{{url('/')}}"><img src="{{asset('logo/logo.png')}}" alt="" height="100px" ></a>
                    </div> --}}

                    {{--  --}}
                    <div class="header__logo">
                        <a href="{{ url('/') }}">
                            @if(Request::is('/'))
                                <img src="{{ asset('logo/logo-white.png') }}" alt="" height="100px">
                            @else
                                <img src="{{ asset('logo/logo.png') }}" alt="" height="100px">
                            @endif
                        </a>
                    </div>
                    {{--  --}}


                </div>

                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('all-products')}}">Shop</a></li>
                            <li><a href="{{route('hot-items')}}">Hot Items</a></li>
                            <li><a href="{{route('new-collections')}}">New Collections</a></li>
                            <li><a href="{{route('tops')}}">Tops</a></li>
                            <li><a href="{{route('pants')}}">Pants</a></li>
                            <li><a href="{{route('dresses')}}">Dress</a></li>
                            <li><a href="{{route('skirts')}}">Skirts</a></li>


                            {{-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="active"><a href="./blog.html">Blog</a></li> --}}
                            {{-- <li><a href="./contact.html">Contacts</a></li> --}}
                        </ul>
                    </nav>
                </div>
                {{-- <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div> --}}
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->


    

    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>About Us</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Breadcrumb Section End -->

	@yield('content')

    

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{url('/')}}"><img src="{{asset('logo/logo-white.png')}}" alt=""></a>
                        </div>
                        {{-- <p>The customer is at the heart of our unique business model, which includes design.</p> --}}
                        {{-- <p>Outari is a luxury women’s clothing brand that combines elegance, comfort, and modernity. 
                            With versatile pieces for every occasion, 
                            Outari empowers women to express their unique style confidently.
                        </p> --}}
                        {{-- <a href="#"><img src="img/payment.png" alt=""></a> --}}
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Information</h6>
                        <ul>
                            <li><a href="{{route('all-products')}}">All Products</a></li>
                            <li><a href="{{route('about-us')}}">About Us</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">

                    <div class="footer__widget">
                        <ul>
                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('return-exchanges-refund-policy')}}">Return Exchanges and Refund Policy</a></li>
                        <li><a href="{{route('shipping-delivery')}}">Shipping and Delivery</a></li>
                        <li><a href="{{route('customer-appreciation')}}">Customer Appreciation</a></li>
                        </ul>
                        {{-- #todo
                        #replace footer links with routes
                        the routes:

                        Route::get('privacy-policy', function () {
                            return view('privacy-policy');
                        })->name('privacy-policy');

                        Route::get('return-exchanges-refund-policy', function () {
                            return view('return-exchanges-refund-policy');
                        })->name('return-exchanges-refund-policy');

                        Route::get('shipping-delivery', function () {
                            return view('shipping-delivery');
                        })->name('shipping-delivery');

                        Route::get('customer-appreciation', function () {
                            return view('customer-appreciation');
                        })->name('customer-appreciation'); --}}
                        {{-- replace: --}}
                        {{-- <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewsLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!
                                Join our telegram!
                            </p>
                            <style>
                                .telegram-btn {
                                    position: fixed;
                                    bottom: 40px;
                                    right: 40px;
                                    background-color: #2ca5e0;
                                    border-radius: 50%;
                                    width: 60px;
                                    height: 60px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    cursor: pointer;
                                    transition: all 0.3s ease;
                                }
                                .telegram-btn:hover {
                                    background-color: #2980b9;
                                }
                                .telegram-btn svg {
                                    width: 30px;
                                    height: 30px;
                                    fill: #fff;
                                }
                            </style>
                            <a href="https://t.me/+2JsS2nzNsrRkMGE9" target="_blank" class="telegram-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div> --}}
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    

	<script src="{{asset('malefashion-master/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/jquery.slicknav.js')}}"></script>
	<script src="{{asset('malefashion-master/js/mixitup.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('malefashion-master/js/main.js')}}"></script>



    



</body>


<script>
    $(document).ready(function() {
        console.log('jQuery is ready!');
        var currencySelector = $('#currency-selector');
        if (currencySelector.length) {
            $('.price-vnd, .price-thb').hide(); 

            currencySelector.on('change', function() {
                var selectedCurrency = $(this).val(); 
                if (selectedCurrency) {
                    console.log('Selected currency:', selectedCurrency);

                    $('.price-khr, .price-vnd, .price-thb').hide();

                    $('.price-' + selectedCurrency).show();
                }
            });
        }

        // Category Filter Script
        $('.category-button').on('click', function() {
            var category = $(this).attr('category');  
            console.log('Category:', category);

            if (category === 'all') {
                // $('.product').show();  
                $('.product').fadeIn(400);  // Fade in all products

            } else {
                $('.product').fadeOut(200, function() {  // First fade out all products
                    $('.product.' + category).fadeIn(400);  // Then fade in only the selected category
                });
                // $('.product').hide();  
                // $('.product.' + category).show();  
            }
        });
    });
</script>


{{-- 
<script>
    $(document).ready(function() {
      $('.category-button').on('click', function() {
        var category = $(this).attr('data-category');
        console.log('Category:', category);
        $('.product').not('.' + category).hide();
        $('.product.' + category).show();
      });
    });
</script> --}}


</html>
