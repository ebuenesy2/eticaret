<div class="container">
    <div class="header-left">
        <button class="mobile-menu-toggler" id="mobile-bar">
            <span class="sr-only">Toggle mobile menu</span>
            <i class="fa fa-bars"></i>
        </button>
        <a href="/" class="logo"><img src="{{asset('/assets')}}/web/images/logo.png" alt="Yıldırımdev Logo" width="105" height="25"></a>
        <nav class="main-nav">
            <ul class="menu sf-arrows">
                <li class="megamenu-container {{Route::current()->getName() == 'web.index' ? 'active' : 'passive'}}"><a href="/@lang('admin.lang')" class="{{Route::current()->getName() == 'web.index' ? 'active' : 'passive'}}">Anasayfa</a></li>
                <li class="megamenu-container {{Route::current()->getName() == 'web.product.category' ? 'active' : 'passive'}}"><a href="/@lang('admin.lang')/product/category" class="{{Route::current()->getName() == 'web.product.category' ? 'active' : 'passive'}}">Tüm Kategoriler</a></li>
                <li class="megamenu-container {{Route::current()->getName() == 'web.product' ? 'active' : 'passive'}}"><a href="/@lang('admin.lang')/product/list" class="{{Route::current()->getName() == 'web.product' ? 'active' : 'passive'}}">Tüm Ürünler</a></li>
                <li class="megamenu-container {{Route::current()->getName() == 'web.product' ? 'active' : 'passive'}}"><a href="/@lang('admin.lang')/product/list" class="{{Route::current()->getName() == 'web.product' ? 'active' : 'passive'}}">Yeni Ürünler</a></li>
                <li class="megamenu-container {{Route::current()->getName() == 'web.product' ? 'active' : 'passive'}}"><a href="/@lang('admin.lang')/product/list" class="{{Route::current()->getName() == 'web.product' ? 'active' : 'passive'}}">Çok Satanlar</a></li>
                <li class="megamenu-container {{Route::current()->getName() == 'web.blog' ? 'active' : 'passive'}}"><a href="/@lang('admin.lang')/blog" class="{{Route::current()->getName() == 'web.blog' ? 'active' : 'passive'}}">Blog</a></li>
                <li class="megamenu-list">
                    <a href="{{asset('/assets')}}/web/#" class="sf-with-ul">Sayfalar</a>
                    <ul>
                        <li><a href="/@lang('admin.lang')/error404">Hata 404</a></li>
                        <li><a href="/@lang('admin.lang')/coming-soon">Yakında</a></li>
                        <li><a href="/@lang('admin.lang')/user/checkout">Checkout</a></li>
                        <li><a href="/@lang('admin.lang')/blog-single">Blog Detay</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>