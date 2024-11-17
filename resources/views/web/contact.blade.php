<!DOCTYPE html>
<html lang="@lang('admin.lang')" >
<head>
    
    <title> İletişim | {{ $DB_HomeSettings->title }} </title>
    
    <!------- Head --->
    @include('web.include.head')
    
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="{{asset('/assets')}}/web/#">Usd</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/#">Eur</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Usd</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">
                            <a href="{{asset('/assets')}}/web/#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/#">English</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">French</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Spanish</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="{{asset('/assets')}}/web/#">Links</a>
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                    <li><a href="{{asset('/assets')}}/web/wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                                    <li><a href="{{asset('/assets')}}/web/about.html">About Us</a></li>
                                    <li><a href="{{asset('/assets')}}/web/contact.html">Contact Us</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{asset('/assets')}}/web/index.html" class="logo">
                            <img src="{{asset('/assets')}}/web/images/logo.png" alt="Yıldırımdev Logo" width="105" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{asset('/assets')}}/web/index.html" class="sf-with-ul">Home</a>

                                    <div class="megamenu demo">
                                        <div class="menu-col">
                                            <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                            <div class="demo-list">
                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-1.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/1.jpg);"></span>
                                                        <span class="demo-title">01 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-2.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/2.jpg);"></span>
                                                        <span class="demo-title">02 - furniture store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-3.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/3.jpg);"></span>
                                                        <span class="demo-title">03 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-4.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/4.jpg);"></span>
                                                        <span class="demo-title">04 - electronic store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-5.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/5.jpg);"></span>
                                                        <span class="demo-title">05 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-6.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/6.jpg);"></span>
                                                        <span class="demo-title">06 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-7.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/7.jpg);"></span>
                                                        <span class="demo-title">07 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-8.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/8.jpg);"></span>
                                                        <span class="demo-title">08 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-9.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/9.jpg);"></span>
                                                        <span class="demo-title">09 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item">
                                                    <a href="{{asset('/assets')}}/web/index-10.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/10.jpg);"></span>
                                                        <span class="demo-title">10 - shoes store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-11.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/11.jpg);"></span>
                                                        <span class="demo-title">11 - furniture simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-12.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/12.jpg);"></span>
                                                        <span class="demo-title">12 - fashion simple store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-13.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/13.jpg);"></span>
                                                        <span class="demo-title">13 - market</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-14.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/14.jpg);"></span>
                                                        <span class="demo-title">14 - market fullwidth</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-15.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/15.jpg);"></span>
                                                        <span class="demo-title">15 - lookbook 1</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-16.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/16.jpg);"></span>
                                                        <span class="demo-title">16 - lookbook 2</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-17.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/17.jpg);"></span>
                                                        <span class="demo-title">17 - fashion store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-18.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/18.jpg);"></span>
                                                        <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-19.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/19.jpg);"></span>
                                                        <span class="demo-title">19 - games store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-20.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/20.jpg);"></span>
                                                        <span class="demo-title">20 - book store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-21.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/21.jpg);"></span>
                                                        <span class="demo-title">21 - sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-22.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/22.jpg);"></span>
                                                        <span class="demo-title">22 - tools store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-23.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/23.jpg);"></span>
                                                        <span class="demo-title">23 - fashion left navigation store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                                <div class="demo-item hidden">
                                                    <a href="{{asset('/assets')}}/web/index-24.html">
                                                        <span class="demo-bg" style="background-image: url({{asset('/assets')}}/web/images/menu/demos/24.jpg);"></span>
                                                        <span class="demo-title">24 - extreme sport store</span>
                                                    </a>
                                                </div><!-- End .demo-item -->

                                            </div><!-- End .demo-list -->

                                            <div class="megamenu-action text-center">
                                                <a href="{{asset('/assets')}}/web/#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .text-center -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="{{asset('/assets')}}/web/category.html" class="sf-with-ul">Shop</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{asset('/assets')}}/web/category-list.html">Shop List</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/category-2cols.html">Shop Grid 2 Columns</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/category.html">Shop Grid 3 Columns</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/category-4cols.html">Shop Grid 4 Columns</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{asset('/assets')}}/web/category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="{{asset('/assets')}}/web/category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{asset('/assets')}}/web/product-category-boxed.html">Product Category Boxed</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                            </ul>
                                                            <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="{{asset('/assets')}}/web/cart.html">Cart</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/checkout.html">Checkout</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/wishlist.html">Wishlist</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/dashboard.html">My Account</a></li>
                                                                <li><a href="{{asset('/assets')}}/web/#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="{{asset('/assets')}}/web/category.html" class="banner banner-menu">
                                                        <img src="{{asset('/assets')}}/web/images/menu/banner-1.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="{{asset('/assets')}}/web/product.html" class="sf-with-ul">Product</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div><!-- End .menu-title -->
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
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="{{asset('/assets')}}/web/category.html">
                                                        <img src="{{asset('/assets')}}/web/images/menu/banner-2.jpg" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="{{asset('/assets')}}/web/#" class="sf-with-ul">Pages</a>

                                    <ul>
                                        <li>
                                            <a href="{{asset('/assets')}}/web/about.html" class="sf-with-ul">About</a>

                                            <ul>
                                                <li><a href="{{asset('/assets')}}/web/about.html">About 01</a></li>
                                                <li><a href="{{asset('/assets')}}/web/about-2.html">About 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{asset('/assets')}}/web/contact.html" class="sf-with-ul">Contact</a>

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
                                    <a href="{{asset('/assets')}}/web/blog.html" class="sf-with-ul">Blog</a>

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
                                    <a href="{{asset('/assets')}}/web/elements-list.html" class="sf-with-ul">Elements</a>

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
                                        <li><a href="{{asset('/assets')}}/web/elements-icon-boxes.html">Icon Boxes</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="{{asset('/assets')}}/web/#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <div class="dropdown compare-dropdown">
                            <a href="{{asset('/assets')}}/web/#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                <i class="icon-random"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="{{asset('/assets')}}/web/#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="{{asset('/assets')}}/web/product.html">Blue Night Dress</a></h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="{{asset('/assets')}}/web/#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="{{asset('/assets')}}/web/product.html">White Long Skirt</a></h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="{{asset('/assets')}}/web/#" class="action-link">Clear All</a>
                                    <a href="{{asset('/assets')}}/web/#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="{{asset('/assets')}}/web/#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="{{asset('/assets')}}/web/product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="{{asset('/assets')}}/web/product.html" class="product-image">
                                                <img src="{{asset('/assets')}}/web/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="{{asset('/assets')}}/web/product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="{{asset('/assets')}}/web/product.html" class="product-image">
                                                <img src="{{asset('/assets')}}/web/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="{{asset('/assets')}}/web/#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{asset('/assets')}}/web/cart.html" class="btn btn-primary">View Cart</a>
                                    <a href="{{asset('/assets')}}/web/checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('/assets')}}/web/index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{asset('/assets')}}/web/#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('{{asset('/assets')}}/web/images/contact-header-bg.jpg')">
        			<h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                			<p class="mb-3">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							70 Washington Square South New York, NY 10012, United States
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="{{asset('/assets')}}/web/tel:#">+92 423 567</a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="{{asset('/assets')}}/web/mailto:#">info@Yıldırımdev.com</a>
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->

                				<div class="col-sm-5">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-clock-o"></i>
	                							<span class="text-dark">Monday-Saturday</span> <br>11am-7pm ET
	                						</li>
                							<li>
                								<i class="icon-calendar"></i>
                								<span class="text-dark">Sunday</span> <br>11am-6pm ET
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Use the form below to get in touch with the sales team</p>

                			<form action="#" class="contact-form mb-3">
                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cname" class="sr-only">Name</label>
                						<input type="text" class="form-control" id="cname" placeholder="Name *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="cemail" class="sr-only">Email</label>
                						<input type="email" class="form-control" id="cemail" placeholder="Email *" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cphone" class="sr-only">Phone</label>
                						<input type="tel" class="form-control" id="cphone" placeholder="Phone">
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="csubject" class="sr-only">Subject</label>
                						<input type="text" class="form-control" id="csubject" placeholder="Subject">
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                                <label for="cmessage" class="sr-only">Message</label>
                				<textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                				<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
                		</div><!-- End .col-lg-6 -->
                	</div><!-- End .row -->

                	<hr class="mt-4 mb-5">

                	<div class="stores mb-4 mb-lg-5">
	                	<h2 class="title text-center mb-3">Our Stores</h2><!-- End .title text-center mb-2 -->

	                	<div class="row">
	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="{{asset('/assets')}}/web/images/stores/img-1.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->
	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">Wall Street Plaza</h3><!-- End .store-title -->
	                							<address>88 Pine St, New York, NY 10005, USA</address>
	                							<div><a href="{{asset('/assets')}}/web/tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                								<div>Monday - Saturday 11am to 7pm</div>
                								<div>Sunday 11am to 6pm</div>

                								<a href="{{asset('/assets')}}/web/#" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->

	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="{{asset('/assets')}}/web/images/stores/img-2.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->

	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">One New York Plaza</h3><!-- End .store-title -->
	                							<address>88 Pine St, New York, NY 10005, USA</address>
	                							<div><a href="{{asset('/assets')}}/web/tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
												<div>Monday - Friday 9am to 8pm</div>
												<div>Saturday - 9am to 2pm</div>
												<div>Sunday - Closed</div>

                								<a href="{{asset('/assets')}}/web/#" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->
	                	</div><!-- End .row -->
                	</div><!-- End .stores -->
                </div><!-- End .container -->
            	<div id="map"></div><!-- End #map -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	<div class="footer-middle">
	                         
                <!------- Footer - Container --->
                @include('web.include.footer-container')

	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		                                    
                    <!------- Footer - Copyright --->
                    @include('web.include.footer-copyright')
                    
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
             
    <!------- Footer - Bottom --->
    @include('web.include.footer-bottom')

</body>

</html>