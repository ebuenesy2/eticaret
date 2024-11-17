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
              	                         
                <!------- Footer - Container --->
                @include('web.include.footer-container')

            </div><!-- End .footer-middle -->

            <div class="footer-bottom font-weight-normal">
                <div class="container">
                    
                    <!------- Footer - Copyright --->
                    @include('web.include.footer-copyright')

                </div>
            </div>

        </footer><!-- End .footer -->
    </div>
              
    <!------- Footer - Bottom --->
    @include('web.include.footer-bottom')

</body>

</html>