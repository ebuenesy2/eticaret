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
  
  
    <!------- Giriş ----------->
    <h1>@lang('admin.login')</h1>
    <div id='loader' style="display: flex;width: 20px;margin-bottom: 15px;"><img src="/upload/images/loader.gif" alt=""></div>
    <div style="display: flex;flex-direction: column;gap: 10px;margin-bottom: 15px;" >
        <div class="form-group">
            <label for="email">E-posta</label>
            <input type="email" id="email" name="email" required placeholder="E-Mail Adresiniz">
        </div>
        <div class="form-group">
            <label for="password">Şifre</label>
            <input type="password" id="password" name="password" required placeholder="Şifrenizi Girin">
        </div>
        <button id="login" style="cursor: pointer;" >@lang('admin.send')</button>
    </div>
    <!------- Giriş Son ----------->


  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

<!------- JS --->
<script src="{{asset('/assets/web')}}/js/user/user.js"></script>

</footer>

</html>
