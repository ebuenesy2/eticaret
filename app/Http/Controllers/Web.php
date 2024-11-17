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
   
}
