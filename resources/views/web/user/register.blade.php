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
  
  
    <!------- Kayıt ----------->
    <h1>@lang('admin.register')</h1>
    <div id='loader' style="display: flex;width: 20px;margin-bottom: 15px;"><img src="/upload/images/loader.gif" alt=""></div>
    <div style="display: flex;flex-direction: column;gap: 10px;margin-bottom: 15px;" >
        <div>
            <input type="text" class="input-block-level" name="name" id="name" placeholder="@lang('admin.name')" value="" >
            <input type="text" class="input-block-level" name="surname" id="surname" placeholder="@lang('admin.surname')" value="" >
            <input type="text" class="input-block-level" name="phone" id="phone" placeholder="@lang('admin.phone')" value="" >
        </div>
        <div>
            <input type="email" class="input-block-level" name="email" id="email" placeholder="@lang('admin.email')" value="" >
            <input type="password" class="input-block-level" name="password" id="password" placeholder="@lang('admin.password')" value="" >
            <input type="password" class="input-block-level" name="confirmPassword" id="confirmPassword" placeholder="@lang('admin.repeatPassword')" value="" >
        </div>
        <div>
            <input type="text" class="input-block-level" name="city" id="city" placeholder="@lang('admin.city')" value="" >
            <input type="text" class="input-block-level" name="district" id="district" placeholder="@lang('admin.district')" value="" >
            <input type="text" class="input-block-level" name="neighborhood" id="neighborhood" placeholder="@lang('admin.neighborhood')" value="" >
        </div>
        <div>
            <label for="address">@lang('admin.address')</label>
            <textarea class="span12" id="address" rows="5" cols="80" ></textarea>
        </div>
        <div>
            <input type="text" class="input-block-level" name="service_type" id="service_type" placeholder="@lang('admin.serviceType')" value="" >
            <input type="text" class="input-block-level" name="type" id="type" placeholder="@lang('admin.type')" value="" >
        </div>
        <div>
            <label for="description">@lang('admin.description')</label>
            <textarea class="span12" id="description" rows="5" cols="80" ></textarea>
        </div>

        <button id="register" style="cursor: pointer;" >@lang('admin.send')</button>
    </div>
    <!------- Kayıt Son ----------->


  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

<!------- JS --->
<script src="{{asset('/assets/web')}}/js/user/user.js"></script>

</footer>

</html>
