<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.product') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h4> Product </h4>
  <ul style="display: flex;flex-direction: row;gap: 10px;margin-bottom: 150px;" >
    @for ($i = 0; $i < count($DB_Products); $i++)
      <li>
         <div style="width: 150px;height: 50px;">
            <img src="{{$DB_Products[$i]->img_url}}" alt="" style="width: 100%;height: max-content;">
            <a href="/@lang('admin.lang')/product/view/seo/{{$DB_Products[$i]->uid}}-{{$DB_Products[$i]->seo_url}}">{{$DB_Products[$i]->title}} </a>
         </div>
      </li>
    @endfor
  </ul>
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

</footer>

</html>