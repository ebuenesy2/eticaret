<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB; //Veri Tabanı İşlemleri

//! Zaman
use Carbon\Carbon;
Carbon::now('Europe/Istanbul');
Carbon::setLocale('tr');
date_default_timezone_set('Etc/GMT-3');
//! Zaman Son

//! Sabit Fonksiyonlar
include(app_path() . '/Functions/test.php'); //! Test

class Web extends Controller
{

    //************* Test ***************** */

    //! Test
    public function Test($site_lang="tr")
    {
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        
        try {
            
            echo "Dil:"; echo $site_lang;  echo "<br/>";
            echo "web test"; echo "<br/>"; 

            //! Zaman
            $currentTime = Carbon::now(); //! 2023-02-23 08:05:04
            echo "currentTime:"; echo $currentTime;  echo "<br/>";
            
        } catch (\Throwable $th) {  throw $th; }

    } //! Test Son
     
    //! Test View
    public function TestView($site_lang="tr")
    {
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {  return view('web/test'); } 
        catch (\Throwable $th) {  throw $th; }

    } //! Test View Son

    //************* Sabit ***************** */

    //! Sabit
    public function Fixed($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

                //! Site Bilgileri
                $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
                $seo_keywords =  $DB_HomeSettings->seo_keywords;
                //echo "<pre>"; print_r($DB_HomeSettings); die();

                $DB["DB_HomeSettings"] =  $DB_HomeSettings;
                $DB["seo_keywords"] =  $seo_keywords;
                //! Site Bilgileri Son
                  
                return view('web/sabit',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Sabit Son

    //************* Web ***************** */

    //! Index
    public function Index($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

                //! Site Bilgileri
                $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
                $seo_keywords =  $DB_HomeSettings->seo_keywords;
                //echo "<pre>"; print_r($DB_HomeSettings); die();

                $DB["DB_HomeSettings"] =  $DB_HomeSettings;
                $DB["seo_keywords"] =  $seo_keywords;
                //! Site Bilgileri Son

                //! Slider
                $DB_Slider= DB::table('sliders')->where('sliders.lang','=',__('admin.lang'))->where('isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Slider); die();

                //! Return
                $DB["DB_Slider"] =  $DB_Slider;
                //! Slider Son

                //! Ürün Kategorisi
                $DB_product_categories= DB::table('product_categories')
                ->orderBy('product_categories.id','desc')
                ->where('product_categories.lang','=',__('admin.lang'))
                ->where('product_categories.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_product_categories); die();

                //! Return
                $DB["DB_product_categories"] =  $DB_product_categories;
                //! Ürün Kategorisi Son

                //! Ürünler - Editörün Önerisi
                $DB_Products_Editor_Suggestion= DB::table('products')
                ->join('product_categories', 'product_categories.uid', '=', 'products.category')
                ->select('products.*', 'product_categories.title as CategoryTitle')
                ->where('products.lang','=',__('admin.lang'))
                ->where('products.editor_suggestion','=',1)
                ->where('products.isActive','=',1)
                ->skip(0)->take(20)
                ->orderBy('products.uid','desc')
                ->get();
                //echo "<pre>"; print_r($DB_Products_Editor_Suggestion); die();

                //! Return
                $DB["DB_Products_Editor_Suggestion"] =  $DB_Products_Editor_Suggestion;
                //! Ürünler - Editörün Önerisi Son

                //! Ürünler - Çok Satanlar
                $DB_Products_bestseller= DB::table('products')
                ->join('product_categories', 'product_categories.uid', '=', 'products.category')
                ->select('products.*', 'product_categories.title as CategoryTitle')
                ->where('products.lang','=',__('admin.lang'))
                ->where('products.bestseller','=',1)
                ->where('products.isActive','=',1)
                ->skip(0)->take(20)
                ->orderBy('products.uid','desc')
                ->get();
                //echo "<pre>"; print_r($DB_Products_bestseller); die();

                //! Return
                $DB["DB_Products_bestseller"] =  $DB_Products_bestseller;
                //! Ürünler - Çok Satanlar Son

                //! Ürünler - Yeni Ürünler
                $DB_Products= DB::table('products')
                ->join('product_categories', 'product_categories.uid', '=', 'products.category')
                ->select('products.*', 'product_categories.title as CategoryTitle')
                ->where('products.lang','=',__('admin.lang'))
                ->where('products.new_product','=',1)
                ->where('products.isActive','=',1)
                ->skip(0)->take(20)
                ->orderBy('products.uid','desc')
                ->get();
                //echo "<pre>"; print_r($DB_Products); die();

                //! Return
                $DB["DB_Products"] =  $DB_Products;
                //! Ürünler - Yeni Ürünler Son

                //! Blog 
                $DB_Blogs= DB::table('blogs')
                ->skip(0)->take(3)
                ->orderBy('blogs.uid','desc')
                ->where('blogs.lang','=',__('admin.lang'))
                ->where('blogs.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Blogs); die();

                //! Return
                $DB["DB_Blogs"] =  $DB_Blogs;
                //! Blog Son


                return view('web/index',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Index Son

    
    //************* Web - Ürün ***************** */

    //! Category
    public function Category($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/product/category',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Category Son

    //! Ürün Listesi
    public function ProductList($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

                //! Site Bilgileri
                $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
                $seo_keywords =  $DB_HomeSettings->seo_keywords;
                //echo "<pre>"; print_r($DB_HomeSettings); die();

                $DB["DB_HomeSettings"] =  $DB_HomeSettings;
                $DB["seo_keywords"] =  $seo_keywords;
                //! Site Bilgileri Son

                //! Params - Url Veri Alma
                // ?page=10&rowcount=10&order=desc

                $page = request('page'); //! Sayfa Numarası
                $rowcount = request('rowcount') ? request('rowcount') : 20; //! Sayfada Gösterecek Veri Sayısı
                $orderBy = request('orderBy') ? request('orderBy') : "products.uid";  //! Sıralama Türü
                $order = request('order') ? request('order') : "desc";  //! Sıralama [asc = Küçükten -> Büyüğe] [ desc = Büyükten -> Küçüğe ]
                //echo "orderBy: "; echo $orderBy; die();

                //! Sayfada veri gösterme sayısı hesaplama
                if($page) {
                    $page = $page - 1; //! Sayfa Numarası
                    if($page <= 0) { $page = 0; }
                } else { $page = 0; }

                 
                //! Ürünler Listesi Kontrol
                $DB_Products= DB::table('products')
                ->join('product_categories', 'product_categories.uid', '=', 'products.category')
                ->select('products.*', 'product_categories.title as CategoryTitle')
                ->where('products.lang','=',__('admin.lang'))
                ->where('products.new_product','=',1)
                ->where('products.isActive','=',1);

                //! Sayfa Sayısı Hesaplama
                $DB_Count = $DB_Products->count(); //! Veri Sayısı
                $pageNow = $page+1; //! Bulunduğu Sayfa
                $pageTop = ceil($DB_Count / $rowcount); //! Toplam Sayfa
                //echo "pageTop: "; echo $pageTop; die();
                
                //! Ürün Listesi
                $DB_Products_List = $DB_Products
                ->skip($page)->take($rowcount)
                ->orderBy($orderBy,$order)
                ->get();
                //echo "<pre>"; print_r($DB_Products_List); die();

                //! Return
                $DB["page"] =  $page; //! Params Sayfa Sayısı
                $DB["rowcount"] =  $rowcount; //! Params Sayfada Gösterilecek Veri Sayısı
                $DB["orderBy"] =  $orderBy; //! Params Sıralama Türü
                $DB["order"] =  $order; //! Params Sıralama
                
                $DB["pageNow"] =  $pageNow; //! Şimdiki Sayfa
                $DB["pageTop"] =  $pageTop; //! Toplam Sayfa
                $DB["DB_Count"] =  $DB_Count; //! Toplam Ürün Sayısı

                $DB["DB_Products"] =  $DB_Products_List; //! Toplam Ürün Listesi
                $DB["DB_Products_Count"] =  count($DB_Products_List); //! Gösterilen Ürün Sayısı
                //! Ürünler Listesi Kontrol - Son

                return view('web/product/productList',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Ürün Listesi Son
    
    //! Ürün Detay
    public function ProductView($site_lang="tr",$seo_url)
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

                //! Site Bilgileri
                $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
                $seo_keywords =  $DB_HomeSettings->seo_keywords;
                //echo "<pre>"; print_r($DB_HomeSettings); die();

                $DB["DB_HomeSettings"] =  $DB_HomeSettings;
                $DB["seo_keywords"] =  $seo_keywords;
                //! Site Bilgileri Son

                //! Product Verileri
               
                //! Uid
                $dizi=explode("-",$seo_url); //! Parçıyor
                $uid = $dizi[0]; //! uid
                //echo "uid:"; echo $uid; //! uid

                $DB_Find= DB::table('products')->where('lang','=',__('admin.lang'))->where('uid','=',$uid)->first();
                //echo "<pre>"; print_r($DB_Find); die();
            
                //! Return
                $DB["DB_Find"] =  $DB_Find;
                $DB["seoTitle"] =  $DB_Find->seo_url;
                //! Blog Verileri Son

                return view('web/product/product_view',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Ürün Detay Son

    //************* Web - Blog ***************** */

    //! Blog
    public function Blog($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/blog/blog',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Blog Son
    
    //! Blog - Detay
    public function BlogSingle($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/blog/blog-single',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! BlogSingle Son
    
    //************* Web - Sayfalar ***************** */

    //! Faq
    public function Faq($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/faq',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Faq Son

    //! Contact
    public function Contact($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/contact',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Contact Son
    
    //! About
    public function About($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/about',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! About Son
        
    //! Error404
    public function Error404($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/error404',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Error404 Son
            
    //! ComingSoon
    public function ComingSoon($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/comingSoon',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! ComingSoon Son

    //************* Web - Kullanıcı ***************** */

    

    //************* Kullanıcı Giriş ***************** */

    //! Kullanıcı - Giriş
    public function UserLogin($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                setcookie("userId","", time() - 86400,'/'); //! Cookie Silme
                setcookie("roleId","", time() - 86400,'/'); //! Cookie Silme


                return view('web/user/login',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kullanıcı - Giriş Son

    //! Kullanıcı - Giriş Post
    public function UserLoginPost(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try { 

            //! Veri Arama
            $DB_Find = DB::table('web_users')
            ->where('email',$request->email)
            ->where('password',$request->password)
            ->first(); //Tüm verileri çekiyor

            if($DB_Find) {
                
                $url = ""; //! Yönlendiren Url
                $url = "/". __('admin.lang')."/user/profile";

                // if($DB_Find->role_id == 1) { $url = "/". __('admin.lang')."/customer/profile"; }
                // if($DB_Find->role_id == 2) { $url = "/". __('admin.lang')."/company/profile"; }

                $response = array(
                    'status' => 'success',
                    'msg' => __('admin.transactionSuccessful'),
                    'url' =>  $url,
                    'userId' =>  $DB_Find->id,
                    'roleId' =>  $DB_Find->role_id,
                    'error' => null,  
                );

                return response()->json($response);
               
            }
            else {

                $response = array(
                    'status' => 'error',
                    'msg' => __('admin.theEmailPasswordMayBeIncorrect'),
                    'error' => $th,            
                );
        
                return response()->json($response);
                
            }
            
    
        } catch (\Throwable $th) {
            
            $response = array(
                'status' => 'error',
                'msg' => __('admin.transactionFailed'),
                'error' => $th,            
            );
    
            return response()->json($response);
        }

    } //! Kullanıcı - Giriş Post Son

    //! Kullanıcı - Çıkış
    public function UserLogout($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

                setcookie("userId","", time() - 86400,'/'); //! Cookie Silme
                setcookie("roleId","", time() - 86400,'/'); //! Cookie Silme

                return redirect('/'.__('admin.lang').'/'.'user/login');
                
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kullanıcı - Çıkış Son

    //! Kullanıcı - Profil
    public function UserProfile($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

                //! Site Bilgileri
                $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
                $seo_keywords =  $DB_HomeSettings->seo_keywords;
                //echo "<pre>"; print_r($DB_HomeSettings); die();

                $DB["DB_HomeSettings"] =  $DB_HomeSettings;
                $DB["seo_keywords"] =  $seo_keywords;
                //! Site Bilgileri Son

                return view('web/user/profile',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kullanıcı - Profil Son

    
    //! UserCart
    public function UserCart($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/user/cart',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! UserCart Son
        
    //! UserCheckout
    public function UserCheckout($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/user/checkout',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! UserCheckout Son
            
    //! UserWishlist
    public function UserWishlist($site_lang="tr")
    {
        
        \Illuminate\Support\Facades\App::setLocale($site_lang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>"; die();

        try {

            //! Sayfa Kontrol
            if($site_lang == "admin") {  return redirect('/'.__('admin.lang').'/'.'admin/');  } //! Admin
            else { 

               //! Site Bilgileri
               $DB_HomeSettings= DB::table('homesettings')->where('id','=',2)->first();
               $seo_keywords =  $DB_HomeSettings->seo_keywords;
               //echo "<pre>"; print_r($DB_HomeSettings); die();

               $DB["DB_HomeSettings"] =  $DB_HomeSettings;
               $DB["seo_keywords"] =  $seo_keywords;
               //! Site Bilgileri Son

                return view('web/user/wishlist',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! UserWishlist Son
                

   
}
