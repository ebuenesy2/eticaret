<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.institutional') - @lang('admin.termsOfUse') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  {!!$DB_Institutional->termsOfUse!!}
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

</footer>

</html>