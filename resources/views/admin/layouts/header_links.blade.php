<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="Thrill trekkers club"/>
<meta name="author" content="Mufar"/>

<link rel="icon" href="{{ asset('assets/img/navedev-logo/black-white-social-icon.png') }}">

<title>{{ isset($main_menu) ? $main_menu : "Welcome" }}</title>

<link rel="stylesheet" href="{{ asset('admin_asset/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin_asset/css/font-icons/entypo/css/entypo.css') }}">
<link rel="stylesheet" href="{{ asset('admin_asset/css/font-icons/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="{{ asset('admin_asset/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('admin_asset/css/neon-core.css') }}">
<link rel="stylesheet" href="{{ asset('admin_asset/css/neon-theme.css') }}">
<link rel="stylesheet" href="{{ asset('admin_asset/css/neon-forms.css') }}">
<link rel="stylesheet" href="{{ asset('admin_asset/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('admin_asset/css/custom.css') }}">

<!-- Global site tag (gtag.js) - Google Analytics -->

@if (isset($config->skin[0]->skin))
    <link rel="stylesheet" href="{{asset('admin_asset/css/skins/'.$config->skin[1]->skin.'.css') }}">
@endif

<script src="{{asset('admin_asset/js/jquery-1.11.3.min.js') }}"></script>

<script src="{{asset('admin_asset/js/ie8-responsive-file-warning.js')}}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

