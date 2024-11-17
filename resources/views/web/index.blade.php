<!DOCTYPE html>
<html lang="UTF-8">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Yıldırımdev - Bootstrap eCommerce Template</title>

    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:200,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{asset('/assets')}}/web/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Yıldırımdev - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets')}}/web/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assets')}}/web/images/favicon.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets')}}/web/images/favicon.jpg">
    <link rel="manifest" href="{{asset('/assets')}}/web/images/icons/site.html">
    <link rel="mask-icon" href="{{asset('/assets')}}/web/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="{{asset('/assets')}}/web/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Yıldırımdev">
    <meta name="application-name" content="Yıldırımdev">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('/assets')}}/web/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/plugins/jquery.countdown.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/style.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/skins/skin-demo-28.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/demos/demo-28.css">
    <link rel="stylesheet" href="{{asset('/assets')}}/web/css/demos/carousel-layout.css">

    <!--------- Font - ıCON  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="page-wrapper">
        <header class="header header-28 bg-transparent">
            <div class="header-top font-weight-normal text-light">

                <!------- Header - Top --->
                @include('web.include.header-top')

            </div>
            <div class="sticky-wrapper">
                <div class="header-middle sticky-header">
                       
                    <!------- Header - Menu List --->
                    @include('web.include.header-menu-list')

                </div>
            </div>
        </header>
        <main class="main">
            <div class="page-content">
                <div class="intro-section bg-image" style="background-image: url({{asset('/assets')}}/web/images/demos/demo-28/background.jpg);">
                    <div class="container">
                        <div class="owl-carousel inner-carousel owl-simple rows cols-1" data-toggle="owl" data-owl-options='{"nav": false, "dots": true, "loop": true}'>
                            <div class="intro-slide" style="background-image: url({{asset('/assets')}}/web/images/demos/demo-28/intro-slider/1.jpg); background-color: #2a323e;">
                                <div class="intro-content intro-content-left">
                                    <h6 class="font-weight-normal text-primary my-2 mt-0">Clearout Sale</h6>
                                    <h3 class="intro-title font-weight-bold text-white mb-0">Only Organic<br>Large Box</h3>
                                    <h3 class="intro-desc mb-2 font-weight-light text-secondary">Sale 30% off</h3>
                                    <a href="{{asset('/assets')}}/web/#" class="btn btn-primary text-uppercase">Shop now</a>
                                </div>
                            </div>
                            <div class="intro-slide" style="background-image: url({{asset('/assets')}}/web/images/demos/demo-28/intro-slider/2.jpg); background-color: #dd6584;">
                                <div class="intro-content intro-content-right">
                                    <h6 class="font-weight-normal text-white my-2 mt-0">100% Recyclable Packaging</h6>
                                    <h3 class="intro-title font-weight-bold text-white mb-0">Good For You<br>And The Planet</h3>
                                    <h3 class="intro-desc mb-2 font-weight-light text-secondary">Fast Shipping</h3>
                                    <a href="{{asset('/assets')}}/web/#" class="btn btn-primary text-uppercase">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-group-1 mt-1 mb-1">
                    <div class="container">
                        <div class="owl-carousel owl-simple rows cols-1 cols-sm-2 cols-lg-3" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 10,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "576": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
                            <div class="banner mb-0">
                                <a href="{{asset('/assets')}}/web/#">
                                    <img src="{{asset('/assets')}}/web/images/demos/demo-28/banners/banner-1.jpg" width="460" height="210">
                                </a>
                                <div class="banner-content p-3">
                                    <h5 class="banner-subtitle font-weight-normal text-light mb-1">Fresh Fruit</h5>
                                    <h3 class="banner-title font-weight-bold">Organic Fresh Fruits<br>Get 25% Off</h3>
                                    <a href="{{asset('/assets')}}/web/#" class="banner-link text-decoration-none">Shop Now<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="banner mb-0">
                                <a href="{{asset('/assets')}}/web/#">
                                    <img src="{{asset('/assets')}}/web/images/demos/demo-28/banners/banner-2.jpg" width="460" height="210">
                                </a>
                                <div class="banner-content p-3">
                                    <h5 class="banner-subtitle font-weight-normal text-light mb-1">Our Standards</h5>
                                    <h3 class="banner-title font-weight-bold">Super Food Bundle<br>From $45.99</h3>
                                    <a href="{{asset('/assets')}}/web/#" class="banner-link text-decoration-none">Shop Now<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="banner mb-0">
                                <a href="{{asset('/assets')}}/web/#">
                                    <img src="{{asset('/assets')}}/web/images/demos/demo-28/banners/banner-3.jpg" width="460" height="210">
                                </a>
                                <div class="banner-content p-3">
                                    <h5 class="banner-subtitle font-weight-normal text-light mb-1">Diet Products</h5>
                                    <h3 class="banner-title font-weight-bold">Save Now<br>Detox &amp; Diuretics</h3>
                                    <a href="{{asset('/assets')}}/web/#" class="banner-link text-decoration-none">Shop Now<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr class="m-0">
                    <div class="cat-section mt-4 mb-3">
                        <div class="row">
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/1.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Meat</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/2.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Fruits</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/3.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Bakery</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">2 Products</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/4.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Vegetable</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">5 Products</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/5.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Seafood</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">3 Products</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/6.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Drinks</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/7.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Dairy &amp; Cheese</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/categories/8.jpg" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="{{asset('/assets')}}/web/#" class="cat-title">Wine</a>
                                        <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flash-section bg-lighter">
                    <div class="container">
                        <div class="heading d-flex flex-column flex-md-row">
                            <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">Yeni Ürünler</h2>
                        </div>
                        <div class="flash-content mt-2 py-2 pb-7">
                            <div class="owl-carousel carousel-equal-height owl-simple rows cols-2 cols-md-3 cols-lg-4 cols-xl-6" data-toggle="owl" data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "loop": true,
                                "margin": 0,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":6
                                    }
                                }
                            }'>
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/1.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Vegetables</a>
                                        </div>
                                        <a href="{{asset('/assets')}}/web/#"><h3 class="product-title overflow-hidden letter-spacing-normal">Broccoli (Each)</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$1.59</div>
                                        <div class="product-sold position-absolute">
                                            <div class="product-sold-val" style="width: 50%;"></div>
                                        </div>
                                        <span class="sold-text font-weight-normal text-light position-absolute">Sold: 54</span>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="ratings-container text-truncate">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div>
                                                    <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(5 reviews)</a>
                                                </div>
                                            </div>
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                                <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/2.jpg" width="192" height="192"></a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Bakery x</a>
                                        </div>
                                        <a href="{{asset('/assets')}}/web/#"><h3 class="product-title overflow-hidden letter-spacing-normal">Rye Bread (800g)</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$3.99</div>
                                        <div class="product-sold position-absolute">
                                            <div class="product-sold-val" style="width: 55%;"></div>
                                        </div>
                                        <span class="sold-text font-weight-normal text-light position-absolute">Sold: 31</span>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="ratings-container text-truncate">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 40%;"></div>
                                                    <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(10 reviews)</a>
                                                </div>
                                            </div>
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                                <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#">
                                            <span class="product-label label-top">Top</span>
                                            <span class="product-label label-sale">Save: 30%</span>
                                            <img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/3.jpg" width="192" height="192">
                                        </a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                        <div class="product-labels">
                                        </div>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Seafood</a>
                                        </div>
                                        <a href="{{asset('/assets')}}/web/#"><h3 class="product-title overflow-hidden letter-spacing-normal">Shrimp - Jumbo (5 lb)</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                            <h4 class="new-price font-weight-bold mb-0">$35.80</h4>
                                            <h4 class="old-price font-weight-normal mb-0">$42.90</h4>
                                        </div>
                                        <div class="product-sold position-absolute">
                                            <div class="product-sold-val" style="width: 22%;"></div>
                                        </div>
                                        <span class="sold-text font-weight-normal text-light position-absolute">Sold: 10</span>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="ratings-container text-truncate">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>
                                                    <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                                </div>
                                            </div>
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                                <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/4.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Vegetables</a>
                                        </div>
                                        <a href="{{asset('/assets')}}/web/#"><h3 class="product-title overflow-hidden letter-spacing-normal">Tomato (Each)</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$0.59</div>
                                        <div class="product-sold position-absolute">
                                            <div class="product-sold-val" style="width: 75%;"></div>
                                        </div>
                                        <span class="sold-text font-weight-normal text-light position-absolute">Sold: 52</span>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="ratings-container text-truncate">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>
                                                    <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                                </div>
                                            </div>
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                                <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/5.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                        <div class="product-label label-sale">Save: 30%</div>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Vegetables</a>
                                        </div>
                                        <a href="{{asset('/assets')}}/web/#"><h3 class="product-title overflow-hidden letter-spacing-normal">Coconut ripe and tasty (Each)</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                            <h4 class="new-price font-weight-bold mb-0">$3.59</h4>
                                            <h4 class="old-price font-weight-normal mb-0">$42.90</h4>
                                        </div>
                                        <div class="product-sold position-absolute">
                                            <div class="product-sold-val" style="width: 55%;"></div>
                                        </div>
                                        <span class="sold-text font-weight-normal text-light position-absolute">Sold: 31</span>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="ratings-container text-truncate">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>
                                                    <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                                </div>
                                            </div>
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                                <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/6.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Vegetables</a>
                                        </div>
                                        <a href="{{asset('/assets')}}/web/#"><h3 class="product-title overflow-hidden letter-spacing-normal">Almonds (240g)</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$8.59</div>
                                        <div class="product-sold position-absolute">
                                            <div class="product-sold-val" style="width: 45%;"></div>
                                        </div>
                                        <span class="sold-text font-weight-normal text-light position-absolute">Sold: 24</span>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="ratings-container text-truncate">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>
                                                    <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                                </div>
                                            </div>
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                                <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/6.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Vegetables</a>
                                        </div>
                                        <a href="{{asset('/assets')}}/web/#"><h3 class="product-title overflow-hidden letter-spacing-normal">Almonds (240g)</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$8.59</div>
                                        <div class="product-sold position-absolute">
                                            <div class="product-sold-val" style="width: 45%;"></div>
                                        </div>
                                        <span class="sold-text font-weight-normal text-light position-absolute">Sold: 24</span>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="ratings-container text-truncate">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div>
                                                    <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                                </div>
                                            </div>
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                                <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="recommend-section py-2 pb-5 border-0">
                    <div class="container">
                        <div class="heading">
                            <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">Tüm Ürün Türleri</h2>
                        </div>
                        <div class="products owl-carousel owl-simple owl-nav-inside carousel-equal-height rows cols-2 cols-md-3 cols-lg-4 cols-xl-6" data-toggle="owl" data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "loop": true,
                                "margin": 0,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":6
                                    }
                                }
                            }'>
                            <div class="product mb-0 rounded-0 w-100">
                                <div class="product-change">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/7.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                        <div class="deal-container inline-type letter-spacing-normal d-block mr-0">
                                            <div class="deal-countdown" data-until="+10h"></div>
                                            <div class="product-label label-sale">Save: 30%</div>
                                        </div>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Bakery</a>
                                        </div>
                                        <h3 class="product-title overflow-hidden letter-spacing-normal">Rye Bread (800g)</h3>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$3.99</div>
                                    </div>
                                    <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                        <div class="ratings-container text-truncate">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div>
                                                <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(5 reviews)</a>
                                            </div>
                                        </div>
                                        <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                            <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                            <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product mb-0 rounded-0 w-100">
                                <div class="product-change">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/8.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                        <div class="product-label label-top">Top</div>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Seafood</a>
                                        </div>
                                        <h3 class="product-title overflow-hidden letter-spacing-normal">Shrimp - Jumbo (5 lb)</h3>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$38.00</div>
                                    </div>
                                    <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                        <div class="ratings-container text-truncate">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div>
                                                <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(10 reviews)</a>
                                            </div>
                                        </div>
                                        <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                            <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                            <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product mb-0 rounded-0 w-100">
                                <div class="product-change">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/9.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                        <div class="product-label label-sale">Save: 30%</div>
                                        <div class="product-label label-top">Top</div>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Seafood</a>
                                        </div>
                                        <h3 class="product-title overflow-hidden letter-spacing-normal">Fresh Mussel (500g)</h3>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                            <h4 class="new-price font-weight-bold mb-0">$12.80</h4>
                                            <h4 class="old-price font-weight-normal mb-0">$22.90</h4>
                                        </div>
                                    </div>
                                    <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                        <div class="ratings-container text-truncate">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div>
                                                <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                            </div>
                                        </div>
                                        <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                            <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                            <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product mb-0 rounded-0 w-100">
                                <div class="product-change">
                                    <figure class="product-media bg-white ">
                                        <a href="{{asset('/assets')}}/web/#"><img src="{{asset('/assets')}}/web/images/demos/demo-28/flash/10.jpg" width="192" height="192"></a>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="{{asset('/assets')}}/web/#">Drinks</a>
                                        </div>
                                        <h3 class="product-title overflow-hidden letter-spacing-normal">Organic Pure Juice Fresh Pressed Orange - 32 fl oz</h3>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">$4.89</div>
                                    </div>
                                    <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                        <div class="ratings-container text-truncate">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div>
                                                <a href="{{asset('/assets')}}/web/product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                            </div>
                                        </div>
                                        <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                            <a href="{{asset('/assets')}}/web/#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                            <a href="{{asset('/assets')}}/web/#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>Add to wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-lighter blog-section pt-6 pb-5">
                    <div class="container">
                        <div class="heading py-2 pb-0">
                            <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">From Our Blog</h2>
                        </div>
                        <div class="owl-carousel owl-simple shadow-carousel rows cols-1 cols-sm-2 cols-lg-3 cols-xl-4" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "items": 4,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "576": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                },
                                "1200": {
                                    "items":4
                                }
                            }
                        }'>  
                            <article class="entry">
                                <figure class="entry-media mb-0">
                                    <a href="{{asset('/assets')}}/web/single.html">
                                        <img src="{{asset('/assets')}}/web/images/demos/demo-28/blog/1.jpg" alt="image desc" width="334" height="200">
                                    </a>
                                </figure> 

                                <div class="entry-body text-left">
                                    <div class="entry-meta">
                                        <a href="{{asset('/assets')}}/web/#">Jan 12, 2020</a>&nbsp;/&nbsp;<a href="{{asset('/assets')}}/web/#">0 Comments</a>
                                    </div> 

                                    <h3 class="entry-title text-dark">
                                        <a href="{{asset('/assets')}}/web/single.html">Aenean dignissim felis.</a>
                                    </h3> 

                                    <div class="entry-content">
                                        <p class="font-weight-light text-light">Morbi in sem quis dui placerat ornare. Pelle
                                            ntesque odio nisi, euismod in, pharetra ultricies in, diam. Sed arcu. </p>
                                        <a href="{{asset('/assets')}}/web/single.html" class="read-more m-0 p-0">Read More</a>
                                    </div> 
                                </div> 
                            </article> 
                        
                            <article class="entry">
                                <figure class="entry-media mb-0">
                                    <a href="{{asset('/assets')}}/web/single.html">
                                        <img src="{{asset('/assets')}}/web/images/demos/demo-28/blog/2.jpg" alt="image desc" width="334" height="200">
                                    </a>
                                </figure> 

                                <div class="entry-body text-left">
                                    <div class="entry-meta">
                                        <a href="{{asset('/assets')}}/web/#">Jan 12, 2020</a>&nbsp;/&nbsp;<a href="{{asset('/assets')}}/web/#">2 Comments</a>
                                    </div> 

                                    <h3 class="entry-title text-dark">
                                        <a href="{{asset('/assets')}}/web/single.html">Fusce pellentesque.</a>
                                    </h3> 

                                    <div class="entry-content">
                                        <p class="font-weight-light text-light">
                                            Lorem ipsum dolor sit amet, consectetuer 
                                            adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.
                                        </p>
                                        <a href="{{asset('/assets')}}/web/single.html" class="read-more m-0 p-0">Read More</a>
                                    </div> 
                                </div> 
                            </article> 

                            <article class="entry">
                                <figure class="entry-media mb-0">
                                    <a href="{{asset('/assets')}}/web/single.html">
                                        <img src="{{asset('/assets')}}/web/images/demos/demo-28/blog/3.jpg" alt="image desc" width="334" height="200">
                                    </a>
                                </figure> 

                                <div class="entry-body text-left">
                                    <div class="entry-meta">
                                        <a href="{{asset('/assets')}}/web/#">Jan 12, 2020</a>&nbsp;/&nbsp;<a href="{{asset('/assets')}}/web/#">4 Comments</a>
                                    </div> 

                                    <h3 class="entry-title text-dark">
                                        <a href="{{asset('/assets')}}/web/single.html">Quisque a lectus.</a>
                                    </h3> 

                                    <div class="entry-content">
                                        <p class="font-weight-light text-light">
                                            Phasellus hendrerit. Pellentesque aliqunibh  nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium ligula ...
                                        </p>
                                        <a href="{{asset('/assets')}}/web/single.html" class="read-more m-0 p-0">Read More</a>
                                    </div> 
                                </div> 
                            </article> 

                            <article class="entry">
                                <figure class="entry-media mb-0">
                                    <a href="{{asset('/assets')}}/web/single.html">
                                        <img src="{{asset('/assets')}}/web/images/demos/demo-28/blog/4.jpg" alt="image desc" width="334" height="200">
                                    </a>
                                </figure> 

                                <div class="entry-body text-left">
                                    <div class="entry-meta">
                                        <a href="{{asset('/assets')}}/web/#">Jan 12, 2020</a>&nbsp;/&nbsp;<a href="{{asset('/assets')}}/web/#">0 Comments</a>
                                    </div> 

                                    <h3 class="entry-title text-dark">
                                        <a href="{{asset('/assets')}}/web/single.html">Morbi in sem quis duiplacerat.</a>
                                    </h3> 

                                    <div class="entry-content">
                                        <p class="font-weight-light text-light">
                                            Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero ...
                                        </p>
                                        <a href="{{asset('/assets')}}/web/single.html" class="read-more m-0 p-0">Read More</a>
                                    </div> 
                                </div> 
                            </article> 
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <footer class="footer footer-2 font-weight-normal second-primary-color" style="background-color: #222">
            <div class="footer-middle border-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-2-5cols">
                            <div class="widget widget-about mb-4">
                                <img src="{{asset('/assets')}}/web/images/demos/demo-26/logo-footer.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                <p class="font-weight-light second-primary-color text-light">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>
                                
                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <span class="widget-about-title text-white">Got Question? Call us 24/7</span>
                                            <a href="{{asset('/assets')}}/web/tel:123456789" class="text-primary">+0123 456 789</a>
                                        </div><!-- End .col-sm-6 -->
                                        <div class="col-sm-6 col-md-8">
                                            <span class="pl-3 widget-about-title text-white">Payment Method</span>
                                            <figure class="pl-3 mb-0 footer-payments">
                                                <img src="{{asset('/assets')}}/web/images/payments.png" alt="Payment methods" width="272" height="20">
                                            </figure><!-- End .footer-payments -->
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget-about-info -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-12 col-lg-3 -->

                        <div class="col-sm-4 col-lg-5cols">
                            <div class="widget mb-4">
                                <h4 class="widget-title text-white">Information</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="{{asset('/assets')}}/web/about.html">About Yıldırımdev</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">How to shop on Yıldırımdev</a></li>
                                    <li><a href="{{asset('/assets')}}/web/faq.html">FAQ</a></li>
                                    <li><a href="{{asset('/assets')}}/web/contact.html">Contact us</a></li>
                                    <li><a href="{{asset('/assets')}}/web/login.html">Log in</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-5cols">
                            <div class="widget mb-4">
                                <h4 class="widget-title text-white">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="{{asset('/assets')}}/web/#">Payment Methods</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Money-back guarantee!</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Returns</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Shipping</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Terms and conditions</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-5cols">
                            <div class="widget mb-4">
                                <h4 class="widget-title text-white">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="{{asset('/assets')}}/web/#">Sign In</a></li>
                                    <li><a href="{{asset('/assets')}}/web/cart.html">View Cart</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">My Wishlist</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Track My Order</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-64 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom font-weight-normal">
                <div class="container">
                    <p class="footer-copyright font-weight-light text-light">Copyright © 2020 Yıldırımdev Store. All Rights Reserved. </p><!-- End .footer-copyright -->
                    <ul class="footer-menu justify-content-center">
                        <li><a href="{{asset('/assets')}}/web/#">Terms Of Use</a></li>
                        <li><a href="{{asset('/assets')}}/web/#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                    <div class="social-icons social-icons-color justify-content-center">
                        <span class="social-label">Social Media</span>
                        <a href="{{asset('/assets')}}/web/#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a href="{{asset('/assets')}}/web/#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="{{asset('/assets')}}/web/#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="{{asset('/assets')}}/web/#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="{{asset('/assets')}}/web/#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div>

    <button id="scroll-top" title="Back to Top"><i class="fa fa-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"> <a href="{{asset('/assets')}}/web/index.html">Anasayfa</a> </li>
                    <li>
                        <a href="{{asset('/assets')}}/web/category.html">Shop</a>
                        <ul>
                            <li><a href="{{asset('/assets')}}/web/category-list.html">Shop List</a></li>
                            <li><a href="{{asset('/assets')}}/web/category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="{{asset('/assets')}}/web/category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="{{asset('/assets')}}/web/category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="{{asset('/assets')}}/web/category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="{{asset('/assets')}}/web/category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="{{asset('/assets')}}/web/cart.html">Cart</a></li>
                            <li><a href="{{asset('/assets')}}/web/checkout.html">Checkout</a></li>
                            <li><a href="{{asset('/assets')}}/web/wishlist.html">Wishlist</a></li>
                            <li><a href="{{asset('/assets')}}/web/#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('/assets')}}/web/product.html" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="{{asset('/assets')}}/web/product.html">Default</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-centered.html">Centered</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="{{asset('/assets')}}/web/product-gallery.html">Gallery</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-sticky.html">Sticky Info</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-fullwidth.html">Full Width</a></li>
                            <li><a href="{{asset('/assets')}}/web/product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('/assets')}}/web/#">Pages</a>
                        <ul>
                            <li>
                                <a href="{{asset('/assets')}}/web/about.html">About</a>

                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/about.html">About 01</a></li>
                                    <li><a href="{{asset('/assets')}}/web/about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('/assets')}}/web/contact.html">Contact</a>

                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/contact.html">Contact 01</a></li>
                                    <li><a href="{{asset('/assets')}}/web/contact-2.html">Contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('/assets')}}/web/login.html">Login</a></li>
                            <li><a href="{{asset('/assets')}}/web/faq.html">FAQs</a></li>
                            <li><a href="{{asset('/assets')}}/web/404.html">Error 404</a></li>
                            <li><a href="{{asset('/assets')}}/web/coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('/assets')}}/web/blog.html">Blog</a>

                        <ul>
                            <li><a href="{{asset('/assets')}}/web/blog.html">Classic</a></li>
                            <li><a href="{{asset('/assets')}}/web/blog-listing.html">Listing</a></li>
                            <li>
                                <a href="{{asset('/assets')}}/web/#">Grid</a>
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="{{asset('/assets')}}/web/blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="{{asset('/assets')}}/web/blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="{{asset('/assets')}}/web/blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('/assets')}}/web/#">Masonry</a>
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="{{asset('/assets')}}/web/blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="{{asset('/assets')}}/web/blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="{{asset('/assets')}}/web/blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('/assets')}}/web/#">Mask</a>
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="{{asset('/assets')}}/web/blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{asset('/assets')}}/web/#">Single Post</a>
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/single.html">Default with sidebar</a></li>
                                    <li><a href="{{asset('/assets')}}/web/single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="{{asset('/assets')}}/web/single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{asset('/assets')}}/web/elements-list.html">Elements</a>
                        <ul>
                            <li><a href="{{asset('/assets')}}/web/elements-products.html">Products</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-typography.html">Typography</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-titles.html">Titles</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-banners.html">Banners</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-product-category.html">Product Category</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-video-banners.html">Video Banners</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-buttons.html">Buttons</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-accordions.html">Accordions</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-tabs.html">Tabs</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-testimonials.html">Testimonials</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-portfolio.html">Portfolio</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-cta.html">Call to Action</a></li>
                            <li><a href="{{asset('/assets')}}/web/elements-fa fa-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="{{asset('/assets')}}/web/#" class="social-icon" target="_blank" title="Facebook"><i class="fa fa-facebook-f"></i></a>
                <a href="{{asset('/assets')}}/web/#" class="social-icon" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="{{asset('/assets')}}/web/#" class="social-icon" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="{{asset('/assets')}}/web/#" class="social-icon" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="{{asset('/assets')}}/web/#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="{{asset('/assets')}}/web/#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="fa fa-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="{{asset('/assets')}}/web/#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-login btn-g">
                                                    <i class="fa fa-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-login btn-f">
                                                    <i class="fa fa-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="fa fa-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="{{asset('/assets')}}/web/#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-login btn-g">
                                                    <i class="fa fa-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-login  btn-f">
                                                    <i class="fa fa-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->
  

    <script src="{{asset('/assets')}}/web/js/jquery.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/jquery.hoverIntent.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/superfish.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/owl.carousel.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/bootstrap-input-spinner.js"></script>
    <script src="{{asset('/assets')}}/web/js/jquery.plugin.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/jquery.countdown.min.js"></script>
    <script src="{{asset('/assets')}}/web/js/jquery.magnific-popup.min.js"></script>

    <script src="{{asset('/assets')}}/web/js/main.js"></script>
    <script src="{{asset('/assets')}}/web/js/demos/demo-2.js"></script>
</body>

<!-- Yıldırımdev/html/Yıldırımdev/index-28.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Nov 2022 14:18:00 GMT -->
</html>