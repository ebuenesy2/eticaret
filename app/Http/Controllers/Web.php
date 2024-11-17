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

                return view('web/index',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Index Son


    //! Web - Abone Ol - Post
    public function Subscribe(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try {

            //! Veri Ekleme
            DB::table('subscribe')->insert([
                'email' => $request->email,
                'created_byId'=>$request->created_byId,
            ]); //! Veri Ekleme Son

            $response = array(
                'status' => 'success',
                'msg' => __('admin.transactionSuccessful'),
                'error' => null, 
            );

            return response()->json($response);
    
        } catch (\Throwable $th) {
            
            $response = array(
                'status' => 'error',
                'msg' => __('admin.transactionFailed'),
                'error' => $th,            
            );
    
            return response()->json($response);
        }

    } //! Web - Abone Ol - Post - Son

    
    //************* Slider ***************** */

    //! Slider - Listesi
    public function Slider($site_lang="tr")
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

                return view('web/slider/sliders',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Slider - Listesi Son

    //************* İletişim ***************** */

    //! İletişim
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

    } //! İletişim Son

    //! Web - İletişim Mesaj Yaz - Post
    public function ContactMessage(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try {

            //! Veri Ekleme
            DB::table('contact_message')->insert([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'created_byId'=>$request->created_byId,
            ]); //! Veri Ekleme Son

            $response = array(
                'status' => 'success',
                'msg' => __('admin.transactionSuccessful'),
                'error' => null, 
            );

            return response()->json($response);
    
        } catch (\Throwable $th) {
            
            $response = array(
                'status' => 'error',
                'msg' => __('admin.transactionFailed'),
                'error' => $th,            
            );
    
            return response()->json($response);
        }

    } //! Web - İletişim Mesaj Yaz - Post - Son

    //************* Kurumsal ***************** */

    //! Hakkımızda
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

                //! Kurumsal
                $DB_Institutional= DB::table('institutional')->where('lang','=',__('admin.lang'))->first();
                //echo "<pre>"; print_r($DB_Institutional); die();

                //! Return
                $DB["DB_Institutional"] =  $DB_Institutional;
                //! Kurumsal Son

                return view('web/institutional/about',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Hakkımızda Son

    //! Çerez Politikası
    public function CookiePolicy($site_lang="tr")
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

                //! Kurumsal
                $DB_Institutional= DB::table('institutional')->where('lang','=',__('admin.lang'))->first();
                //echo "<pre>"; print_r($DB_Institutional); die();

                //! Return
                $DB["DB_Institutional"] =  $DB_Institutional;
                //! Kurumsal Son

                return view('web/institutional/cookiePolicy',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Çerez Politikası Son
    
    //! Kullanım Koşulları
    public function TermsOfUse($site_lang="tr")
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

                //! Kurumsal
                $DB_Institutional= DB::table('institutional')->where('lang','=',__('admin.lang'))->first();
                //echo "<pre>"; print_r($DB_Institutional); die();

                //! Return
                $DB["DB_Institutional"] =  $DB_Institutional;
                //! Kurumsal Son

                return view('web/institutional/termsOfUse',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kullanım Koşulları Son

    //! Kullanım Şartları
    public function TermsOfConditions($site_lang="tr")
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

                //! Kurumsal
                $DB_Institutional= DB::table('institutional')->where('lang','=',__('admin.lang'))->first();
                //echo "<pre>"; print_r($DB_Institutional); die();

                //! Return
                $DB["DB_Institutional"] =  $DB_Institutional;
                //! Kurumsal Son

                return view('web/institutional/termsOfConditions',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kullanım Şartları Son

    //! Gizlilik Politikası
    public function PrivacyPolicy($site_lang="tr")
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

                //! Kurumsal
                $DB_Institutional= DB::table('institutional')->where('lang','=',__('admin.lang'))->first();
                //echo "<pre>"; print_r($DB_Institutional); die();

                //! Return
                $DB["DB_Institutional"] =  $DB_Institutional;
                //! Kurumsal Son

                return view('web/institutional/privacyPolicy',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Gizlilik PolitikasıSon

    //! Kişisel Verilerin Korunması Kanunu
    public function PersonalDataProtectionLaw($site_lang="tr")
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

                //! Kurumsal
                $DB_Institutional= DB::table('institutional')->where('lang','=',__('admin.lang'))->first();
                //echo "<pre>"; print_r($DB_Institutional); die();

                //! Return
                $DB["DB_Institutional"] =  $DB_Institutional;
                //! Kurumsal Son

                return view('web/institutional/personalDataProtectionLaw',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kişisel Verilerin Korunması Kanunu Son

    //************* Sık Sorulan Sorular ***************** */

    //! Sık Sorulan Sorular
    public function FaqList($site_lang="tr")
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

                //! Sık Sorulan Sorular
                $DB_Faq= DB::table('faq')
                ->orderBy('faq.uid','desc')
                ->where('faq.lang','=',__('admin.lang'))
                ->where('faq.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Faq); die();

                //! Return
                $DB["DB_Faq"] =  $DB_Faq;
                //! Sık Sorulan Sorular Son

                return view('web/faq',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Sık Sorulan Sorular Son

    //************* Yorumlar ***************** */

    //! Yorumlar
    public function CommentList($site_lang="tr")
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

                //! Yorumlar
                $DB_Comments= DB::table('comments')
                ->orderBy('comments.uid','desc')
                ->where('comments.lang','=',__('admin.lang'))
                ->where('comments.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Comments); die();

                //! Return
                $DB["DB_Comments"] =  $DB_Comments;
                //! Yorumlar Son

                return view('web/comments',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Yorumlar Son
    
    //************* Ekibimiz ***************** */

    //! Ekibimiz
    public function OurTeamList($site_lang="tr")
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

                //! Ekibimiz
                $DB_Teams= DB::table('teams')
                ->orderBy('teams.id','desc')
                ->where('teams.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Teams); die();

                //! Return
                $DB["DB_Teams"] =  $DB_Teams;
                //! Ekibimiz Son

                return view('web/ourteam',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Ekibimiz Son

    //************* Blog - Kategori ***************** */

    //! Blog - Kategori
    public function BlogCategoryList($site_lang="tr")
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

                //! Blog Category
                $DB_blogs_categories= DB::table('blogs_categories')
                ->orderBy('blogs_categories.uid','desc')
                ->where('blogs_categories.lang','=',__('admin.lang'))
                ->where('blogs_categories.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_blogs_categories); die();

                //! Return
                $DB["DB_blogs_categories"] =  $DB_blogs_categories;
                //! Sık Sorulan Sorular Son

                return view('web/blog/blog_category',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Blog - Kategori Son

    //************* Blog ***************** */

    //! Blog - Listesi
    public function BlogList($site_lang="tr")
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

                //! Blog 
                $DB_Blogs= DB::table('blogs')
                ->orderBy('blogs.uid','desc')
                ->where('blogs.lang','=',__('admin.lang'))
                ->where('blogs.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Blogs); die();

                //! Return
                $DB["DB_Blogs"] =  $DB_Blogs;
                //! Blog Son

                return view('web/blog/blog_list',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Blog - Listesi Son

    //! Blog - Detay
    public function BlogView($site_lang="tr",$uid)
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

                //! Blog Verileri
                $DB_Find= DB::table('blogs')->where('blogs.lang','=',__('admin.lang'))->where('blogs.uid','=',$uid)->first();
                //echo "<pre>"; print_r($DB_Find); die();
            
                //! Return
                $DB["DB_Find"] =  $DB_Find;
                //! Blog Verileri Son

                //! Blog Yorum
                $DB_Find_Blog_Comment= DB::table('blogs_comment')
                ->orderBy('blogs_comment.id','desc')
                ->where('blogs_comment.lang','=',__('admin.lang'))
                ->where('blog_uid','=',$uid)
                ->where('blogs_comment.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Find_Blog_Comment); die();

                //! Return
                $DB["DB_Find_Blog_Comment"] =  $DB_Find_Blog_Comment;
                //! Blog Yorum Son
    

                return view('web/blog/blog_view',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Blog - Detay Son
    
    //! Blog - Detay - Seo
    public function BlogViewSeo($site_lang="tr",$seo_url)
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

                //! Uid
                $dizi=explode("-",$seo_url); //! Parçıyor
                $uid = $dizi[0]; //! uid
                //echo "uid:"; echo $uid; //! uid
              
                //! Blog Verileri
                $DB_Find= DB::table('blogs')->where('blogs.lang','=',__('admin.lang'))->where('blogs.uid','=',$uid)->first();
                //echo "<pre>"; print_r($DB_Find); die();
            
                //! Return
                $DB["DB_Find"] =  $DB_Find;
                $DB["seoTitle"] =  $DB_Find->seo_url;
                $DB["seo_keywords"] = $DB_Find->seo_keywords =="" ? $seo_keywords : $seo_keywords.",".$DB_Find->seo_keywords;
                //! Blog Verileri Son

                //! Blog Yorum
                $DB_Find_Blog_Comment= DB::table('blogs_comment')
                ->orderBy('blogs_comment.id','desc')
                ->where('blogs_comment.lang','=',__('admin.lang'))
                ->where('blog_uid','=',$uid)
                ->where('blogs_comment.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Find_Blog_Comment); die();

                //! Return
                $DB["DB_Find_Blog_Comment"] =  $DB_Find_Blog_Comment;
                //! Blog Yorum Son
    

                return view('web/blog/blog_view',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Blog - Detay - Seo Son

    //! Blog - Yorum Yap Post
    public function BlogCommentAddPost(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try {

            //! Veri Ekleme
            DB::table('blogs_comment')->insert([
                'lang' => $request->lang,
                'blog_uid' => $request->blog_uid,
                'comment' => $request->comment,
                'userid'=>$request->created_byId,
                'created_byId'=>$request->created_byId,
            ]); //! Veri Ekleme Son

            $response = array(
                'status' => 'success',
                'msg' => __('admin.transactionSuccessful'),
                'error' => null, 
            );

            return response()->json($response);
    
        } catch (\Throwable $th) {
            
            $response = array(
                'status' => 'error',
                'msg' => __('admin.transactionFailed'),
                'error' => $th,            
            );
    
            return response()->json($response);
        }

    } //! Blog - Yorum Yap Post - Son

    //! Blog - Yorum Sil Post
    public function BlogCommentDeletePost(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try {

            //! Veri Arama
            $table = 'blogs_comment';
            $DB_Find = DB::table($table)->where('id',$request->id)->first(); //Tüm verileri çekiyor

            if($DB_Find) {

                //! Veri Silme
                $DB_Status = DB::table($table)->where('id',$request->id)->delete();

                $response = array(
                    'status' => $DB_Status ? 'success' : 'error',
                    'msg' =>  $DB_Status ? __('admin.transactionSuccessful') : __('admin.transactionFailed'),
                    'error' => null, 
                );

                return response()->json($response);
            }
            else {

                $response = array(
                    'status' => 'error',
                    'msg' => __('admin.dataNotFound'),
                    'error' => null,  
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

    } //! Blog - Yorum Sil Post Son
    
    //************* Product - Kategori ***************** */

    //! Product - Kategori
    public function ProductCategoryList($site_lang="tr")
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

                //! Product Category
                $DB_product_categories= DB::table('product_categories')
                ->orderBy('product_categories.id','desc')
                ->where('product_categories.lang','=',__('admin.lang'))
                ->where('product_categories.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_product_categories); die();

                //! Return
                $DB["DB_product_categories"] =  $DB_product_categories;
                //! Product Category Son

                return view('web/product/product_category',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Product - Kategori Son

    //! Product - Listesi
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

                //! Product
                $DB_Products= DB::table('products')
                ->orderBy('products.uid','desc')
                ->where('products.lang','=',__('admin.lang'))
                ->where('products.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Products); die();

                //! Return
                $DB["DB_Products"] =  $DB_Products;
                //! Product Son

                return view('web/product/product_list',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Product - Listesi Son

    //! Product - Detay
    public function ProductView($site_lang="tr",$uid)
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
                $DB_Find= DB::table('products')->where('products.lang','=',__('admin.lang'))->where('products.uid','=',$uid)->first();
                //echo "<pre>"; print_r($DB_Find); die();

                //! Product Yorum
                $DB_Find_Product_Comment= DB::table('product_comment')
                ->orderBy('product_comment.id','desc')
                ->where('product_comment.lang','=',__('admin.lang'))
                ->where('product_comment.product_uid','=',$uid)
                ->where('product_comment.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Find_Product_Comment); die();

                //! Return
                $DB["DB_Find_Product_Comment"] =  $DB_Find_Product_Comment;
                //! Product Yorum Son
            
                //! Return
                $DB["DB_Find"] =  $DB_Find;
                //! Product Verileri Son

                return view('web/product/product_view',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Product - Detay Son

    //! Product - Detay - Seo
    public function ProductViewSeo($site_lang="tr",$seo_url)
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
                //$DB["seo_keywords"] =  $seo_keywords;
                //! Site Bilgileri Son

                //! Uid
                $dizi=explode("-",$seo_url); //! Parçıyor
                $uid = $dizi[0]; //! uid
                //echo "uid:"; echo $uid; //! uid

                //! Product Verileri
                $DB_Find= DB::table('products')->where('products.lang','=',__('admin.lang'))->where('products.uid','=',$uid)->first();
                //echo "<pre>"; print_r($DB_Find); die();

                //! Product Yorum
                $DB_Find_Product_Comment= DB::table('product_comment')
                ->orderBy('product_comment.id','desc')
                ->where('product_comment.lang','=',__('admin.lang'))
                ->where('product_comment.product_uid','=',$uid)
                ->where('product_comment.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Find_Product_Comment); die();

                //! Return
                $DB["DB_Find_Product_Comment"] =  $DB_Find_Product_Comment;
                //! Product Yorum Son
            
                //! Return
                $DB["DB_Find"] =  $DB_Find;
                $DB["seoTitle"] =  $DB_Find->seo_url;
                $DB["seo_keywords"] = $DB_Find->seo_keywords =="" ? $seo_keywords : $seo_keywords.",".$DB_Find->seo_keywords;
                //! Product Verileri Son

                return view('web/product/product_view',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Product - Detay  - Seo Son

    //! Product - Yorum Yap Post
    public function ProductCommentAddPost(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try {

            //! Veri Ekleme
            DB::table('product_comment')->insert([
                'lang' => $request->lang,
                'product_uid' => $request->product_uid,
                'comment' => $request->comment,
                'userid'=>$request->created_byId,
                'created_byId'=>$request->created_byId,
            ]); //! Veri Ekleme Son

            $response = array(
                'status' => 'success',
                'msg' => __('admin.transactionSuccessful'),
                'error' => null, 
            );

            return response()->json($response);
    
        } catch (\Throwable $th) {
            
            $response = array(
                'status' => 'error',
                'msg' => __('admin.transactionFailed'),
                'error' => $th,            
            );
    
            return response()->json($response);
        }

    } //! Product - Yorum Yap Post - Son
    
    //! Product - Yorum Sil Post
    public function ProductCommentDeletePost(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try {

            //! Veri Arama
            $table = 'product_comment';
            $DB_Find = DB::table($table)->where('id',$request->id)->first(); //Tüm verileri çekiyor

            if($DB_Find) {

                //! Veri Silme
                $DB_Status = DB::table($table)->where('id',$request->id)->delete();

                $response = array(
                    'status' => $DB_Status ? 'success' : 'error',
                    'msg' =>  $DB_Status ? __('admin.transactionSuccessful') : __('admin.transactionFailed'),
                    'error' => null, 
                );

                return response()->json($response);
            }
            else {

                $response = array(
                    'status' => 'error',
                    'msg' => __('admin.dataNotFound'),
                    'error' => null,  
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

    } //! Product - Yorum Sil Post Son

    //************* Servis - Kategori ***************** */

    //! Servis - Kategori
    public function ServiceCategoryList($site_lang="tr")
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

                //! Servis Kategori
                $DB_service_categories= DB::table('service_categories')
                ->orderBy('service_categories.id','desc')
                ->where('service_categories.lang','=',__('admin.lang'))
                ->where('service_categories.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_service_categories); die();

                //! Return
                $DB["DB_service_categories"] =  $DB_service_categories;
                //! Servis Kategori Son

                return view('web/service/service_category',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Servis - Kategori Son
    
    //! Servis - Listesi
    public function ServiceList($site_lang="tr")
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

                //! Servis
                $DB_Service= DB::table('services')
                ->orderBy('services.uid','desc')
                ->where('services.lang','=',__('admin.lang'))
                ->where('services.isActive','=',1)->get();
                //echo "<pre>"; print_r($DB_Service); die();

                //! Return
                $DB["DB_Service"] =  $DB_Service;
                //! Servis Son

                return view('web/service/service_list',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Servis - Listesi Son

    //! Servis - Detay
    public function ServiceView($site_lang="tr",$uid)
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

                //! Servis Verileri
                $DB_Find= DB::table('services')->where('services.lang','=',__('admin.lang'))->where('services.uid','=',$uid)->first();
                //echo "<pre>"; print_r($DB_Find); die();
            
                //! Return
                $DB["DB_Find"] =  $DB_Find;
                //! Servis Verileri Son

                return view('web/service/service_view',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Servis - Detay Son

    //! Servis - Detay - Seo
    public function ServiceViewSeo($site_lang="tr",$seo_url)
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

                //! Uid
                $dizi=explode("-",$seo_url); //! Parçıyor
                $uid = $dizi[0]; //! uid
                //echo "uid:"; echo $uid; //! uid

                //! Servis Verileri
                $DB_Find= DB::table('services')->where('services.lang','=',__('admin.lang'))->where('services.uid','=',$uid)->first();
                //echo "<pre>"; print_r($DB_Find); die();
            
                //! Return
                $DB["DB_Find"] =  $DB_Find;
                $DB["seoTitle"] =  $DB_Find->seo_url;
                $DB["seo_keywords"] = $DB_Find->seo_keywords =="" ? $seo_keywords : $seo_keywords.",".$DB_Find->seo_keywords;
                //! Servis Verileri Son

                return view('web/service/service_view',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Servis - Detay  - Seo Son


    //************* Kullanıcı Kayıt ***************** */

    //! Kullanıcı - Kayıt
    public function UserRegister($site_lang="tr")
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

                return view('web/user/register',$DB);
            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kullanıcı - Kayıt Son

    
    //! Kullanıcı - Kayıt Post
    public function UserRegisterPost(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try { 

            //! Veri Arama
            $DB_Find = DB::table('web_users')->where('email',$request->email)->first(); //Tüm verileri çekiyor

            if($DB_Find) {

                $response = array(
                    'status' => 'error',
                    'msg' =>  "Email Kayıtlıdır",
                    'error' => null,  
                );

                return response()->json($response);
            }
            else {

                //! Veri Ekleme
                DB::table('web_users')->insert([
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'phone' => $request->phone,
                    'role_id' => 2,
                    'img_url'=> config('admin.Default_UserImgUrl'),

                    'email' => $request->email,
                    'password' => $request->password,

                    'city' => $request->city,
                    'district' => $request->district,
                    'neighborhood' => $request->neighborhood,
                    'address' => $request->address,

                    'service_type' => $request->service_type,
                    'type' => $request->type,
                    'description' => $request->description,

                    'created_byId'=>$request->created_byId,
                ]); //! Veri Ekleme Son

                $response = array(
                    'status' => 'success',
                    'msg' => __('admin.transactionSuccessful'),
                    'error' => null, 
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

    } //! Kullanıcı -  Kayıt Post Son


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

    
    //************* Kullanıcı Profil ***************** */

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


                //! Çerez Bilgileri
                if(isset($_COOKIE["userId"])) {


                    //! Profil Bilgileri
                    $userId = $_COOKIE['userId'];
                    //echo "userId:"; echo $userId; die();

                    $DB_web_users = DB::table('web_users')->where('id','=',$userId)->first();
                    //echo "<pre>"; print_r($DB_web_users); die();

                    $DB["DB_web_users"] =  $DB_web_users;
                    //! Profil Bilgileri Son
                    
                    return view('web/user/profile',$DB);

                }
                else { return view('web/user/login',$DB); }

            } //! Web
        
        } catch (\Throwable $th) {  throw $th; }

    } //! Kullanıcı - Profil Son

    //! Kullanıcı - Profil - Güncelleme
    public function UserProfileEdit(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try {  

            //! Veri Arama
            $DB = DB::table('web_users')->where('id',$request->id); //Veri Tabanı
            $DB_Find = $DB->first(); //Tüm verileri çekiyor

            if($DB_Find) {

                //! Veri Güncelle
                $DB_Status = $DB->update([            
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'phone' => $request->phone,
                  
                    'isUpdated'=>true,
                    'updated_at'=>Carbon::now(),
                    'updated_byId'=>$request->updated_byId,
                ]);
                
                $response = array(
                    'status' => $DB_Status ? 'success' : 'error',
                    'msg' =>  $DB_Status ? __('admin.transactionSuccessful') : __('admin.transactionFailed'),
                    'error' => null,
                );

                return response()->json($response);
            }
            else {

                $response = array(
                    'status' => 'error',
                    'msg' => __('admin.dataNotFound'),
                    'error' => null,
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

    } //! Kullanıcı - Profil - Güncelleme Son
    
    //! Kullanıcı - Profil - Şifre - Güncelleme
    public function UserSettingsPasswordEdit(Request $request)
    {
        $siteLang= $request->siteLang; //! Çoklu Dil
        \Illuminate\Support\Facades\App::setLocale($siteLang); //! Çoklu Dil
        //echo "Dil:"; echo $site_lang;  echo "<br/>";  die();

        try { 

            //! Veri Arama
            $DB = DB::table('web_users')->where('id',$request->id)->where('password',$request->oldPassword); //Veri Tabanı
            $DB_Find = $DB->first(); //Tüm verileri çekiyor

            if($DB_Find) { 

                //! Veri Güncelle
                $DB_Status = $DB->update([
                    'password' => $request->password,

                    'isUpdated'=>true,
                    'updated_at'=>Carbon::now(),
                    'updated_byId'=>$request->updated_byId,
                ]);
                
                $response = array(
                    'status' => $DB_Status ? 'success' : 'error',
                    'msg' =>  $DB_Status ? __('admin.transactionSuccessful') : __('admin.transactionFailed'),
                    'error' => null,
                );

                return response()->json($response);
            }
            else {

                $response = array(
                    'status' => 'error',
                    'msg' => __('admin.dataNotFound'),
                    'error' => null,
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
    } //! Kullanıcı - Profil - Şifre - Güncelleme Son

}
