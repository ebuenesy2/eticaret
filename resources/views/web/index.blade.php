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
                            
                            @for ($i = 0; $i < count($DB_Slider); $i++)
                            <div class="intro-slide" style="background-image: url({{$DB_Slider[$i]->img_url}}); background-color: #2a323e; background-size: cover; ">
                                <div class="intro-content intro-content-left">
                                    <h6 class="font-weight-normal text-primary my-2 mt-0">{{$DB_Slider[$i]->title}}</h6>
                                    <h3 class="intro-title font-weight-bold text-white mb-0">{{$DB_Slider[$i]->title2}}</h3>
                                    <h3 class="intro-desc mb-2 font-weight-light text-secondary">{!!$DB_Slider[$i]->description!!}</h3>
                                    
                                    @if($DB_Slider[$i]->url !="" )
                                    <a href="{{$DB_Slider[$i]->url}}" class="btn btn-primary text-uppercase">{{$DB_Slider[$i]->url}}</a>
                                    @endif
                                </div>
                            </div>
                            @endfor

                        </div>
                    </div>
                </div>
                   
                <!--- Kategoriler -->
                <div class="container">
                    <hr class="m-0">
                    <div class="cat-section mt-4 mb-3">
                        <div class="row">

                            @for ($i = 0; $i < count($DB_product_categories); $i++)
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                                <div class="cat bg-white pt-1 mb-2">
                                    <div class="cat-image d-flex justify-content-center align-items-center">
                                        <a href="/@lang('admin.lang')/product/category/{{$DB_product_categories[$i]->uid}}-{{$DB_product_categories[$i]->seo_url}}"><img src="{{$DB_product_categories[$i]->img_url}}" width="137" height="137"></a>
                                    </div>
                                    <div class="cat-content text-center">
                                        <a href="/@lang('admin.lang')/product/category/{{$DB_product_categories[$i]->uid}}-{{$DB_product_categories[$i]->seo_url}}" class="cat-title">{{$DB_product_categories[$i]->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            
                        </div>
                    </div>
                </div>
                <!--- Kategoriler Son -->

                <!--- EDİTÖRÜN ÖNERİSİ -->
                <div class="flash-section bg-lighter">
                    <div class="container">
                        <div class="heading d-flex flex-column flex-md-row">
                            <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">EDİTÖRÜN ÖNERİSİ</h2>
                        </div>
                        <div class="flash-content mt-2 py-2 pb-7">
                            <div class="owl-carousel carousel-equal-height owl-simple rows cols-2 cols-md-3 cols-lg-4 cols-xl-6" data-toggle="owl" data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "loop": false   ,
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

                                @for ($i = 0; $i < count($DB_Products_Editor_Suggestion); $i++)
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="/@lang('admin.lang')/product/view/{{$DB_Products_Editor_Suggestion[$i]->uid}}-{{$DB_Products_Editor_Suggestion[$i]->seo_url}}">
                                            @if($DB_Products_Editor_Suggestion[$i]->discounted_price_percent !="0")<span class="product-label label-sale" style="margin-top: -40px;" >@lang('admin.discount'): {{$DB_Products_Editor_Suggestion[$i]->discounted_price_percent}}%</span> @endif
                                            <img src="{{$DB_Products_Editor_Suggestion[$i]->img_url}}"  style="width: 200px;height: 200px;object-fit: contain;">
                                        </a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="/@lang('admin.lang')/product/view/{{$DB_Products_Editor_Suggestion[$i]->uid}}-{{$DB_Products_Editor_Suggestion[$i]->seo_url}}">{{$DB_Products_Editor_Suggestion[$i]->CategoryTitle}}</a>
                                        </div>
                                        <a href="/@lang('admin.lang')/product/view/{{$DB_Products_Editor_Suggestion[$i]->uid}}-{{$DB_Products_Editor_Suggestion[$i]->seo_url}}"><h3 class="product-title overflow-hidden letter-spacing-normal">{{$DB_Products_Editor_Suggestion[$i]->title}}</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                            @if($DB_Products_Editor_Suggestion[$i]->discounted_price_percent !="0")
                                            <h4 class="new-price font-weight-bold mb-0" style="color: green;" >{{$DB_Products_Editor_Suggestion[$i]->discounted_price}} {{$DB_Products_Editor_Suggestion[$i]->currency}}</h4>
                                            <h4 class="old-price font-weight-normal mb-0">{{$DB_Products_Editor_Suggestion[$i]->sale_price}} {{$DB_Products_Editor_Suggestion[$i]->currency}}</h4>
                                            @else<h4 class="new-price font-weight-bold mb-0" style="color: green;" >{{$DB_Products_Editor_Suggestion[$i]->sale_price}} {{$DB_Products_Editor_Suggestion[$i]->currency}}</h4>
                                            @endif
                                        </div>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="/@lang('admin.lang')/product/view/{{$DB_Products_Editor_Suggestion[$i]->uid}}-{{$DB_Products_Editor_Suggestion[$i]->seo_url}}" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Sepete Ekle</span></a>
                                                <a href="/@lang('admin.lang')/product/view/{{$DB_Products_Editor_Suggestion[$i]->uid}}-{{$DB_Products_Editor_Suggestion[$i]->seo_url}}" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>İstek Listesine Ekle</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
                <!--- EDİTÖRÜN ÖNERİSİ Son -->
                
                <hr>
                
                <!--- ÇOK SATANLAR -->
                <div class="flash-section bg-lighter">
                    <div class="container">
                        <div class="heading d-flex flex-column flex-md-row">
                            <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">ÇOK SATANLAR</h2>
                        </div>
                        <div class="flash-content mt-2 py-2 pb-7">
                            <div class="owl-carousel carousel-equal-height owl-simple rows cols-2 cols-md-3 cols-lg-4 cols-xl-6" data-toggle="owl" data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "loop": false   ,
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

                                @for ($i = 0; $i < count($DB_Products_bestseller); $i++)
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="/@lang('admin.lang')/product/view/{{$DB_Products_bestseller[$i]->uid}}-{{$DB_Products_bestseller[$i]->seo_url}}">
                                            @if($DB_Products_bestseller[$i]->discounted_price_percent !="0")<span class="product-label label-sale" style="margin-top: -40px;" >@lang('admin.discount'): {{$DB_Products_bestseller[$i]->discounted_price_percent}}%</span> @endif
                                            <img src="{{$DB_Products_bestseller[$i]->img_url}}"  style="width: 200px;height: 200px;object-fit: contain;">
                                        </a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="/@lang('admin.lang')/product/view/{{$DB_Products_bestseller[$i]->uid}}-{{$DB_Products_bestseller[$i]->seo_url}}">{{$DB_Products_bestseller[$i]->CategoryTitle}}</a>
                                        </div>
                                        <a href="/@lang('admin.lang')/product/view/{{$DB_Products_bestseller[$i]->uid}}-{{$DB_Products_bestseller[$i]->seo_url}}"><h3 class="product-title overflow-hidden letter-spacing-normal">{{$DB_Products_bestseller[$i]->title}}</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                            @if($DB_Products_bestseller[$i]->discounted_price_percent !="0")
                                            <h4 class="new-price font-weight-bold mb-0" style="color: green;" >{{$DB_Products_bestseller[$i]->discounted_price}} {{$DB_Products_bestseller[$i]->currency}}</h4>
                                            <h4 class="old-price font-weight-normal mb-0">{{$DB_Products_bestseller[$i]->sale_price}} {{$DB_Products_bestseller[$i]->currency}}</h4>
                                            @else<h4 class="new-price font-weight-bold mb-0" style="color: green;" >{{$DB_Products_bestseller[$i]->sale_price}} {{$DB_Products_bestseller[$i]->currency}}</h4>
                                            @endif
                                        </div>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="/@lang('admin.lang')/product/view/{{$DB_Products_bestseller[$i]->uid}}-{{$DB_Products_bestseller[$i]->seo_url}}" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Sepete Ekle</span></a>
                                                <a href="/@lang('admin.lang')/product/view/{{$DB_Products_bestseller[$i]->uid}}-{{$DB_Products_bestseller[$i]->seo_url}}" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>İstek Listesine Ekle</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
                <!--- ÇOK SATANLAR Son -->

                <hr>
                
                <!--- YENİ ÇIKANLAR -->
                <div class="flash-section bg-lighter">
                    <div class="container">
                        <div class="heading d-flex flex-column flex-md-row">
                            <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">Yeni Ürünler</h2>
                        </div>
                        <div class="flash-content mt-2 py-2 pb-7">
                            <div class="owl-carousel carousel-equal-height owl-simple rows cols-2 cols-md-3 cols-lg-4 cols-xl-6" data-toggle="owl" data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "loop": false   ,
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

                                @for ($i = 0; $i < count($DB_Products); $i++)
                                <div class="product mb-0 rounded-0 w-100">
                                    <figure class="product-media bg-white ">
                                        <a href="/@lang('admin.lang')/product/view/{{$DB_Products[$i]->uid}}-{{$DB_Products[$i]->seo_url}}">
                                            @if($DB_Products[$i]->discounted_price_percent !="0")<span class="product-label label-sale" style="margin-top: -40px;" >@lang('admin.discount'): {{$DB_Products[$i]->discounted_price_percent}}%</span> @endif
                                            <img src="{{$DB_Products[$i]->img_url}}"  style="width: 200px;height: 200px;object-fit: contain;">
                                        </a>
                                    </figure>
                                    <div class="product-body position-static bg-transparent">
                                        <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                            <a href="/@lang('admin.lang')/product/view/{{$DB_Products[$i]->uid}}-{{$DB_Products[$i]->seo_url}}">{{$DB_Products[$i]->CategoryTitle}}</a>
                                        </div>
                                        <a href="/@lang('admin.lang')/product/view/{{$DB_Products[$i]->uid}}-{{$DB_Products[$i]->seo_url}}"><h3 class="product-title overflow-hidden letter-spacing-normal">{{$DB_Products[$i]->title}}</h3></a>
                                        <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                            @if($DB_Products[$i]->discounted_price_percent !="0")
                                            <h4 class="new-price font-weight-bold mb-0" style="color: green;" >{{$DB_Products[$i]->discounted_price}} {{$DB_Products[$i]->currency}}</h4>
                                            <h4 class="old-price font-weight-normal mb-0">{{$DB_Products[$i]->sale_price}} {{$DB_Products[$i]->currency}}</h4>
                                            @else<h4 class="new-price font-weight-bold mb-0" style="color: green;" >{{$DB_Products[$i]->sale_price}} {{$DB_Products[$i]->currency}}</h4>
                                            @endif
                                        </div>
                                        <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                            <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                                <a href="/@lang('admin.lang')/product/view/{{$DB_Products[$i]->uid}}-{{$DB_Products[$i]->seo_url}}" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Sepete Ekle</span></a>
                                                <a href="/@lang('admin.lang')/product/view/{{$DB_Products[$i]->uid}}-{{$DB_Products[$i]->seo_url}}" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="fa fa-heart-o"></i><span>İstek Listesine Ekle</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
                <!--- YENİ ÇIKANLAR Son -->
                
                <!--- Blog -->
                <div class="bg-lighter blog-section pt-6 pb-5">
                    <div class="container">
                        <div class="heading py-2 pb-0">
                            <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">Blog Yazılarımız</h2>
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

                            @for ($i = 0; $i < count($DB_Blogs); $i++)
                            <article class="entry">
                                <figure class="entry-media mb-0">
                                    <a href="{{asset('/assets')}}/web/single.html">
                                        <img src="{{$DB_Blogs[$i]->img_url}}" alt="image desc" style="width: 100%;height: 200px;object-fit: contain;" >
                                    </a>
                                </figure> 

                                <div class="entry-body text-left">
                                    <div class="entry-meta">
                                        <a href="{{asset('/assets')}}/web/#">{{\Carbon\Carbon::parse($DB_Blogs[$i]->created_at)->isoFormat('Do MMMM YYYY, HH:mm:ss')}}</a>
                                    </div> 

                                    <h3 class="entry-title text-dark">
                                        <a href="{{asset('/assets')}}/web/single.html">{{$DB_Blogs[$i]->title}}</a>
                                    </h3> 

                                    <div class="entry-content">
                                        {!! strlen($DB_Blogs[$i]->description) > 150 ? substr($DB_Blogs[$i]->description,0,80).'...' : $DB_Blogs[$i]->description !!} 
                                        <a href="{{asset('/assets')}}/web/single.html" class="read-more m-0 p-0">Daha Fazla Oku</a>
                                    </div> 
                                </div> 
                            </article> 
                            @endfor

                        </div>

                    </div>
                </div>
                <!--- Blog Son -->

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