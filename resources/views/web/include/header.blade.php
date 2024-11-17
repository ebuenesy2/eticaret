  <!------- Link --->
  <h1>Web</h1>
  <ul>
    <li><a href="/@lang('admin.lang')/test">Web - Test</a></li>
    <li><a href="/@lang('admin.lang')/test/view">Web - Test View</a></li>
    <li><a href="/@lang('admin.lang')/fixed">Web - @lang('admin.const')</a></li>
    <li></li>
    <li><a href="/@lang('admin.lang')/slider">Web - Slider</a></li>
    <li><a href="/@lang('admin.lang')/contact">Web - @lang('admin.contact')</a></li>
    <li></li>
    <li><a href="/@lang('admin.lang')/faq">@lang('admin.frequentlyAskedQuestions')</a></li>
    <li></li>
    <li><a href="/@lang('admin.lang')/comments">@lang('admin.comments')</a></li>
    <li></li>
    <li><a href="/@lang('admin.lang')/ourteam">@lang('admin.ourTeam')</a></li>
    <li></li>
    <li><a href="/@lang('admin.lang')/admin">Admin</a></li>
  </ul>

  <h1>@lang('admin.institutional')</h1>
  <ul>
    <li><a href="/@lang('admin.lang')/about">@lang('admin.about')</a></li>
    <li><a href="/@lang('admin.lang')/cookie-policy">@lang('admin.cookiePolicy')</a></li>
    <li><a href="/@lang('admin.lang')/terms-of-use">@lang('admin.termsOfUse')</a></li>
    <li><a href="/@lang('admin.lang')/terms-of-conditions">@lang('admin.termsOfConditions')</a></li>
    <li><a href="/@lang('admin.lang')/privacy-policy">@lang('admin.privacyPolicy')</a></li>
    <li><a href="/@lang('admin.lang')/personal-data-protection-law">@lang('admin.personalDataProtectionLaw')</a></li>
  </ul>

  <h1>Blog</h1>
  <ul>
    <li><a href="/@lang('admin.lang')/blog/category">@lang('admin.blogCategory') </a></li>
    <li><a href="/@lang('admin.lang')/blog/list">Blog  @lang('admin.list') </a></li>
  </ul>

  <h1>@lang('admin.product')</h1>
  <ul>
    <li><a href="/@lang('admin.lang')/product/category">@lang('admin.productCategory') </a></li>
    <li><a href="/@lang('admin.lang')/product/list">@lang('admin.product') - @lang('admin.list') </a></li>
  </ul>

  <h1>@lang('admin.service')</h1>
  <ul>
    <li><a href="/@lang('admin.lang')/service/category"> @lang('admin.serviceCategory') </a></li>
    <li><a href="/@lang('admin.lang')/service/list">@lang('admin.service') - @lang('admin.list') </a></li>
  </ul>



  <h1>@lang('admin.user')</h1>
  <ul>
    
    @if(isset($_COOKIE["userId"])) 
    <li><a href="/@lang('admin.lang')/user/profile">@lang('admin.myProfile') </a></li>
    <li><a href="/@lang('admin.lang')/user/logout">@lang('admin.logout')  </a></li>
    @else
    <li><a href="/@lang('admin.lang')/user/register">@lang('admin.register') </a></li>
    <li><a href="/@lang('admin.lang')/user/login">@lang('admin.login') </a></li>
    @endif

  </ul>

  <div style="width: 100%;height: 5px;border: 1px solid;background-color: blue;"></div>