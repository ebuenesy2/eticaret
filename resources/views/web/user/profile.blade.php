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
  
  <h1> Profil </h1>
  <p>ID: {{$DB_web_users->id}} </p>

  <!------- Bilgi ----------->
  <div id="userInfo" userId="{{$DB_web_users->id}}" > Kullanıcı Bilgisi </div>

  
  <!------- Bilgileri Güncelle ----------->
  <h1>@lang('admin.userInfo')</h1>
  <div style="display: flex;flex-direction: column;gap: 10px;margin-bottom: 15px;" >
    <div>
      <label for="name">Adınız</label>
      <input type="text" class="input-block-level" name="name" id="name" placeholder="@lang('admin.name')" value="{{$DB_web_users->name}}" >
    </div>
    <div>
      <label for="surname">Soyadınız</label>
      <input type="text" class="input-block-level" name="surname" id="surname" placeholder="@lang('admin.surname')" value="{{$DB_web_users->surname}}" >
    </div>
    <div>
      <label for="phone">Cep Telefon Numaranız</label>
      <input type="tel" id="phone" name="phone" placeholder="05XX XXX XX XX" value="{{$DB_web_users->phone}}">
    </div>
    
    <!-- Gönder Butonu -->
    <button type="button" id="profileEdit" style="cursor: pointer;"  >@lang('admin.save')</button>
    
  </div>
  <!------- Bilgileri Güncelle Son ----------->


  <!------- Şifre Güncelle ----------->
  <h1>Şifre Güncelleme</h1>
  <div style="display: flex;flex-direction: column;gap: 10px;margin-bottom: 15px;" >
    <div>
      <label for="oldPassword">Eski Şifre</label>
      <input type="password" id="oldPassword" name="oldPassword" placeholder="*" >
    </div>
    <div>
      <label for="password">Yeni Şifre</label>
      <input type="password" id="password" name="password" placeholder="*">
    </div>
    <div>
      <label for="confirmPassword">Şifre Tekrarı</label>
      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="*" >
    </div>
    
    <!-- Gönder Butonu -->
    <button type="button" id="settingPasswordSave" style="cursor: pointer;"  >@lang('admin.save')</button>
    
  </div>
  <!------- Şifre Güncelle Son ----------->
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')


<!------- JS --->
<script src="{{asset('/assets/web')}}/js/user/user.js"></script>

</footer>

</html>