<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> @lang('admin.frequentlyAskedQuestions') | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h4>@lang('admin.frequentlyAskedQuestions')</h4>
  <div class="included-box">
    <div class="accordion-box">
        
        @for ($i = 0; $i < count($DB_Faq); $i++)
        <!--Block-->
        <div class="accordion block">
            <div class="acc-btn">{{$DB_Faq[$i]->question}}<div class="icon flaticon-down-arrow"></div></div>
            <div class="acc-content">
                <div class="content">
                    <div class="text">{!! $DB_Faq[$i]->answer !!}</div>
                </div>
            </div>
            <hr>
        </div>
        @endfor

    </div>
  </div>
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

</footer>

</html>