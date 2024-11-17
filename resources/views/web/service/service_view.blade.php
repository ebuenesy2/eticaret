<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.service') - {{$seoTitle}}  | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h1> Servis Detay </h1>
  <p>{{$DB_Find->uid}}</p>
  <img src="{{$DB_Find->img_url}}" alt="" style="width: 150px;" >
  <p>{{$DB_Find->title}}</p>
  {!!$DB_Find->description!!}

  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

<!------- JS --->
<script src="{{asset('/assets/web')}}/js/product/product_comments.js"></script>


</footer>

</html>