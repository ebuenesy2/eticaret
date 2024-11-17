<header class="header header-28 bg-transparent">
            <div class="header-top font-weight-normal text-light">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="{{asset('/assets')}}/web/#">TL</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/#">TL</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Eur</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Usd</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-dropdown">
                            <a href="{{asset('/assets')}}/web/#">Türkçe</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/#">Türkçe</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">English</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">French</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="{{asset('/assets')}}/web/#" class="link">Links</a>
                                <ul>
                                    <li><a href="{{asset('/assets')}}/web/#" class="ff"><i class="fa fa-phone"></i>Ara: +0123 456 789</a></li>
                                    <li><a href="{{asset('/assets')}}/web/#">Sipariş Takip</a></li>
                                    <li><a href="{{asset('/assets')}}/web/faq.html">Sıkça Sorulan Sorular</a></li>
                                    <li><a href="{{asset('/assets')}}/web/contact.html">İletişim</a></li>
                                    <li><a href="{{asset('/assets')}}/web/about.html">Hakkımızda</a></li>
                                    <li><a href="{{asset('/assets')}}/web/login.html"><i class="fa fa-user"></i>Giriş Yap</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sticky-wrapper">
                <div class="header-middle sticky-header">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler" id="mobile-bar">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="fa fa-bars"></i>
                            </button>
                            <a href="{{asset('/assets')}}/web/#" class="logo"><img src="{{asset('/assets')}}/web/images/logo.png" alt="Yıldırımdev Logo" width="105" height="25"></a>
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="megamenu-container active"><a href="{{asset('/assets')}}/web/#" class="active">Anasayfa</a></li>
                                    <li class="megamenu-container "><a href="{{asset('/assets')}}/web/category.html" class="passive">Tüm Kategoriler</a></li>
                                    <li class="megamenu-container "><a href="{{asset('/assets')}}/web/category.html" class="passive">Yeni Ürünler</a></li>
                                    <li class="megamenu-container "><a href="{{asset('/assets')}}/web/category.html" class="passive">Çok Satanlar</a></li>
                                    <li class="megamenu-container "><a href="{{asset('/assets')}}/web/blog.html" class="passive">Blog</a></li>
                                    <li class="megamenu-list">
                                        <a href="{{asset('/assets')}}/web/#" class="sf-with-ul">Sayfalar</a>
                                        <ul>
                                            <li><a href="{{asset('/assets')}}/web/404.html">Hata 404</a></li>
                                            <li><a href="{{asset('/assets')}}/web/coming-soon.html">Yakında</a></li>
                                            <li><a href="{{asset('/assets')}}/web/cart.html">Cart</a></li>
                                            <li><a href="{{asset('/assets')}}/web/checkout.html">Checkout</a></li>
                                            <li><a href="{{asset('/assets')}}/web/wishlist.html">Wishlist</a></li>
                                            <li><a href="{{asset('/assets')}}/web/dashboard.html">My Account</a></li>
                                            <li><a href="{{asset('/assets')}}/web/product.html">Ürün</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <div class="header-search">
                                <a href="{{asset('/assets')}}/web/#" class="search-toggle" role="button"><i class="fa fa-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper">
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required="">
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
    
                            <a href="{{asset('/assets')}}/web/wishlist.html" class="wishlist-link">
                                <div class="icon position-relative">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="wishlist-count">3</span>
                                </div>
                            </a>
    
                            <div class="dropdown cart-dropdown">
                                <a href="{{asset('/assets')}}/web/#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <div class="icon position-relative">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="cart-count">2</span>
                                    </div>
                                    <span class="cart-txt font-weight-normal">$0.00</span>
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                        <div class="product mb-0 rounded-0 w-100">
                                            <div class="product-cart-details">
                                                <h4 class="product-title overflow-hidden letter-spacing-normal">
                                                    <a href="{{asset('/assets')}}/web/product.html">Beige knitted elastic runner shoes</a>
                                                </h4>
    
                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $84.00
                                                </span>
                                            </div><!-- End .product-cart-details -->
    
                                            <figure class="product-image-container">
                                                <a href="{{asset('/assets')}}/web/product.html" class="product-image">
                                                    <img src="{{asset('/assets')}}/web/images/products/cart/product-1.jpg" alt="product mb-0 rounded-0 w-100">
                                                </a>
                                            </figure>
                                            <a href="{{asset('/assets')}}/web/#" class="btn-remove" title="Remove Product"><i class="fa fa-close"></i></a>
                                        </div><!-- End .product -->
    
                                        <div class="product mb-0 rounded-0 w-100">
                                            <div class="product-cart-details">
                                                <h4 class="product-title overflow-hidden letter-spacing-normal">
                                                    <a href="{{asset('/assets')}}/web/product.html">Blue utility pinafore denim dress</a>
                                                </h4>
    
                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $76.00
                                                </span>
                                            </div><!-- End .product-cart-details -->
    
                                            <figure class="product-image-container">
                                                <a href="{{asset('/assets')}}/web/product.html" class="product-image">
                                                    <img src="{{asset('/assets')}}/web/images/products/cart/product-2.jpg" alt="product mb-0 rounded-0 w-100">
                                                </a>
                                            </figure>
                                            <a href="{{asset('/assets')}}/web/#" class="btn-remove" title="Remove Product"><i class="fa fa-close"></i></a>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->
    
                                    <div class="dropdown-cart-total">
                                        <span>Total</span>
    
                                        <span class="cart-total-price">$160.00</span>
                                    </div><!-- End .dropdown-cart-total -->
    
                                    <div class="dropdown-cart-action">
                                        <a href="{{asset('/assets')}}/web/cart.html" class="btn btn-primary">View Cart</a>
                                        <a href="{{asset('/assets')}}/web/checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->
                        </div>
                    </div>
                </div>
            </div>
        </header>