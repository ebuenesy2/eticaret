<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.ourTeam') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h4>@lang('admin.ourTeam')</h4>
  <ul style="display: flex;flex-direction: row;gap: 10px;margin-bottom: 250px;" >
    @for ($i = 0; $i < count($DB_Teams); $i++)
      <li>
         <div style="width: 150px;height: 50px;">
            <img src="{{$DB_Teams[$i]->img_url}}" alt="" style="width: 100%;height: max-content;">
            <a>{{$DB_Teams[$i]->name}} - {{$DB_Teams[$i]->surname}} </a> <br>
            <a> [ {{$DB_Teams[$i]->role}} ]  </a> <br>
            <a> {{$DB_Teams[$i]->phone}}  </a> <br>
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