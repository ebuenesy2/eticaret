<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.blogCategory') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h4> @lang('admin.blogCategory') </h4>
  <ul>
    @for ($i = 0; $i < count($DB_blogs_categories); $i++)
      <li>{{$DB_blogs_categories[$i]->title}}</li>
    @endfor
  </ul>
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

</footer>

</html>