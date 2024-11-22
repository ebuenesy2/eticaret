<div class="container">
    <div class="header-left">
        <button class="mobile-menu-toggler" id="mobile-bar">
            <span class="sr-only">Toggle mobile menu</span>
            <i class="fa fa-bars"></i>
        </button>
        <a href="/" class="logo"><img src="{{asset('/assets')}}/web/images/logo.png" alt="Yıldırımdev Logo" width="105" height="25"></a>
        <nav class="main-nav">
            <ul class="menu sf-arrows">
                <li class="megamenu-container active"><a href="/@lang('admin.lang')" class="active">Anasayfa</a></li>
                <li class="megamenu-container "><a href="/@lang('admin.lang')/product/category" class="passive">Tüm Kategoriler</a></li>
                <li class="megamenu-container "><a href="/@lang('admin.lang')/product/list" class="passive">Tüm Ürünler</a></li>
                <li class="megamenu-container "><a href="/@lang('admin.lang')/product/list" class="passive">Yeni Ürünler</a></li>
                <li class="megamenu-container "><a href="/@lang('admin.lang')/category" class="passive">Çok Satanlar</a></li>
                <li class="megamenu-container "><a href="/@lang('admin.lang')/blog" class="passive">Blog</a></li>
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