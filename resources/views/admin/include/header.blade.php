<div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" ></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class="brand" href="/@lang('admin.lang')/admin">
                   <img src="{{ config('admin.Admin_Logo') }}" alt="{{ config('admin.Admin_Logo_Alt_Description') }}" style="width: 140px;height: 60px;margin-top: -14px;object-fit: fill;" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="/#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="{{$CookieData['yildirimdev_img_url']}}" alt="profile url" style="width: 33px;margin: auto;" >
                               <span class="username">{{$CookieData["yildirimdev_name"]}} {{$CookieData["yildirimdev_surname"]}}</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               
                               @if($CookieData['yildirimdev_userID'] == '0')
                               <li><a><i class="icon-user"></i>Yıldırımdev</a></li>
                               @else
                               <li><a href="/@lang('admin.lang')/admin/info/{{$CookieData['yildirimdev_userID']}}" ><i class="icon-user"></i>@lang('admin.myProfile')</a></li>
                               @endif

                               <li><a href="/@lang('admin.lang')/admin/login"><i class="icon-key"></i>@lang('admin.logout')</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>