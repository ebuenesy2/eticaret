<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.contact') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h1> İletişim Sayfası </h1>


  <!------- İletişim Mesaj ----------->
  <h1>@lang('admin.contactMessage')</h1>
  <div style="display: flex;flex-direction: column;gap: 10px;margin-bottom: 15px;" >
    <div>
      <input type="text" class="input-block-level" name="nameAdd" id="nameAdd" placeholder="@lang('admin.name')" value="" >
      <input type="text" class="input-block-level" name="surnameAdd" id="surnameAdd" placeholder="@lang('admin.surname')" value="" >
    </div>
    <div>
      <input type="email" class="input-block-level" name="emailAdd" id="emailAdd" placeholder="@lang('admin.email')" value="" >
      <input type="text" class="input-block-level" name="subjectAdd" id="subjectAdd" placeholder="@lang('admin.subject')" value="" >
    </div>
    <textarea class="span12" id="messageAdd" rows="5" cols="80" ></textarea>
    <button id="contact_message_new" style="cursor: pointer;" >@lang('admin.send')</button>
  </div>
  <!------- İletişim Mesaj Son ----------->
  
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')


<!------- JS --->
<script src="{{asset('/assets/web')}}/js/contact/contact_message.js"></script>

</footer>

</html>