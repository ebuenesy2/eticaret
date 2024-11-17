<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="{{ $DB_HomeSettings->title }}">
<meta name="author" content="{{ config('admin.Admin_Meta_Author') }}">
<meta name="description" content="{{ $DB_HomeSettings->seo_description }}">
<meta name="keywords" content="{{ $seo_keywords }}">

<!--------- Css  --> 
<link rel="stylesheet" type="text/css" href="{{asset('/assets/web')}}/css/sabit/0_const.css" />

<!--- Alert toastr css -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<!-- Sweet Alert css-->
<link href="{{asset('/assets/js')}}/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />