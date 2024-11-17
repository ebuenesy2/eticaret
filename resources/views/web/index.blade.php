<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.home') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h1> Web Anasayfa </h1>

  <!------- Bilgiler --->
  <h1>Bilgiler</h1>
  <p> lang: @lang('admin.lang')</p>
  <p> SiteAdı : {{ config('admin.Web_Title') }} </p> 
  <p> Url: {{asset('/assets/admin')}}/ </p>

  <!------- Css --->
  <div id="const_box"> Sabit kutu </div>

  <!------- Veri Tabanı --->
  <h1>Veritabandan Bilgiler</h1>

  <!------- Logo --->
  <a href="/@lang('admin.lang')/"><img src="{{ $DB_HomeSettings->logoUrl }}" alt=""></a>
  
  <p> SiteAdı : {{ $DB_HomeSettings->title }} </p> 
  <p> Url: {{ $DB_HomeSettings->siteUrl }} </p>


  <!------- Abone Ol ----------->
  <h1>@lang('admin.subscribe')</h1>
  <div style="display: flex;flex-direction: column;gap: 10px;margin-bottom: 15px;" >
    <input type="email" class="input-block-level" name="emailAdd" id="emailAdd" placeholder="@lang('admin.email')" value="" >
    <button id="subcribe_new" style="cursor: pointer;" >@lang('admin.send')</button>
  </div>
  <!------- Abone Ol Son ----------->
  
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

<!------- JS --->
<script src="{{asset('/assets/web')}}/js/subscribe.js"></script>

</footer>

</html>