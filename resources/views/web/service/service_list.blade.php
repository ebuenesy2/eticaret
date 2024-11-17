<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.service') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h4> Servis </h4>
  <ul style="display: flex;flex-direction: row;gap: 10px;margin-bottom: 150px;" >
    @for ($i = 0; $i < count($DB_Service); $i++)
      <li>
         <div style="width: 150px;height: 50px;">
            <img src="{{$DB_Service[$i]->img_url}}" alt="" style="width: 100%;height: max-content;">
            <a href="/@lang('admin.lang')/service/view/seo/{{$DB_Service[$i]->uid}}-{{$DB_Service[$i]->seo_url}}">{{$DB_Service[$i]->title}} </a>
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