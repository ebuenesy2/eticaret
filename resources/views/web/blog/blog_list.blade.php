<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> Blog | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h4> Blog </h4>
  <ul style="display: flex;flex-direction: row;gap: 10px;margin-bottom: 150px;" >
    @for ($i = 0; $i < count($DB_Blogs); $i++)
      <li>
         <div style="width: 150px;height: 50px;">
            <img src="{{$DB_Blogs[$i]->img_url}}" alt="" style="width: 100%;height: max-content;">
            <a href="/@lang('admin.lang')/blog/view/seo/{{$DB_Blogs[$i]->uid}}-{{$DB_Blogs[$i]->seo_url}}">{{$DB_Blogs[$i]->title}} </a>
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