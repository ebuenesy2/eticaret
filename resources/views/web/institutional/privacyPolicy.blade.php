<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.institutional') - @lang('admin.privacyPolicy') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  {!!$DB_Institutional->privacyPolicy!!}
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

</footer>

</html>