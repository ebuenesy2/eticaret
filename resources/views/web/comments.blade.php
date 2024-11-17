<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.comments') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h4>@lang('admin.comments')</h4>
  <ul style="display: flex;flex-direction: row;gap: 10px;margin-bottom: 150px;" >
    @for ($i = 0; $i < count($DB_Comments); $i++)
      <li>
         <div style="width: 150px;height: 50px;">
            <img src="{{$DB_Comments[$i]->img_url}}" alt="" style="width: 100%;height: max-content;">
            <a>{{$DB_Comments[$i]->name}} - {{$DB_Comments[$i]->surname}} - [{{$DB_Comments[$i]->role}} ]  </a>
            <a>{!!$DB_Comments[$i]->comment!!}  </a>
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