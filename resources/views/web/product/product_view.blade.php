<!DOCTYPE html>
<html lang="@lang('admin.lang')" >

<head>
  <title> Urun - {{$seoTitle}}  | {{ $DB_HomeSettings->title }} </title>
  
  <!------- Head --->
  @include('web.include.head')
   
</head>


<body>
  
  <!------- Header --->
  @include('web.include.header')
  
  <h1> Product Detay </h1>
  <p>{{$DB_Find->uid}}</p>
  <img src="{{$DB_Find->img_url}}" alt="" style="width: 150px;" >
  <p>{{$DB_Find->title}}</p>
  {!!$DB_Find->description!!}

  <!------- Yorumlar ----------->
  <h4> @lang('admin.comments') </h4>
  <ul style="display: flex;flex-direction: column;gap: 12px;">
      @for ($i = 0; $i < count($DB_Find_Product_Comment); $i++)
      <li style="display: flex;gap: 5px;">
          <a>{{$DB_Find_Product_Comment[$i]->userid}}</a>
          <div>{{$DB_Find_Product_Comment[$i]->comment}}</div>
          <button class="btn btn-danger" id="deleteItem" data_id="{{$DB_Find_Product_Comment[$i]->id}}" style="cursor: pointer;background-color: red;color: white;" >x</button>
      </li>
      @endfor
  </ul>
  <!------- Yorumlar Son ----------->


  <!------- Yorum Yap ----------->
  <h1>@lang('admin.commentMake')</h1>
  <div style="display: flex;flex-direction: column;gap: 10px;margin-bottom: 15px;" >
    <div id="product_comment" product_uid ="{{$DB_Find->uid}}" ></div>
    <textarea class="span12" id="comment" rows="5" cols="80" ></textarea>
    <button id="comment_new" style="cursor: pointer;" >@lang('admin.commentMake')</button>
  </div>
  <!------- Yorum Yap Son ----------->
  
</body>

<footer>

<!------- Footer --->
@include('web.include.footer')

<!------- JS --->
<script src="{{asset('/assets/web')}}/js/product/product_comments.js"></script>


</footer>

</html>