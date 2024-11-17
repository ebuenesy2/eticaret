<div style="width: 100%;height: 5px;border: 1px solid;background-color: blue;"></div>
<h1>Footer </h1>

<!------- Logo --->
<a href="/@lang('admin.lang')/"><img src="{{ $DB_HomeSettings->footerLogo }}" alt=""></a>

<h2>Sosyal Medya</h2>
<div>@lang('admin.address'): {{ $DB_HomeSettings->address }} </div>
<br>

<a href="tel:{{ $DB_HomeSettings->phone }}">{{ $DB_HomeSettings->phone }}</a> <br>
<a href="mailto:{{ $DB_HomeSettings->email }}">{{ $DB_HomeSettings->email }} </a> <br> <br>

<ul>
    <li><a href="{{ $DB_HomeSettings->facebook_Url }}"><span class="fab fa-facebook-f"></span> Facebook </a></li>
    <li><a href="{{ $DB_HomeSettings->twitter_Url }}"><span class="fab fa-twitter"></span> Twitter </a></li>
    <li><a href="{{ $DB_HomeSettings->instagram_Url }}"><span class="fab fa-instagram"></span> Instagram </a></li>
    <li><a href="{{ $DB_HomeSettings->linkedln_Url }}"><span class="fab fa-linkedin"></span> Linkedln </a></li>
    <li><a href="{{ $DB_HomeSettings->youtube_Url }}"><span class="fab fa-youtube"></span> Youtube </a></li>
</ul>

<!--------- Jquery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!--- Alert toastr js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Sweet Alerts js -->
<script src="{{asset('/assets/js')}}/sweetalert2/sweetalert2.min.js"></script>

<!------- Controller --->
<script src="{{asset('/assets/admin')}}/js/00_0_sabit/4_0_controllersToSettingLocalStorage.js"></script>