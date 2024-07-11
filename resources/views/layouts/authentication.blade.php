<!DOCTYPE html>
<html lang="en">
<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="description" content="Indo Greenlife Harvest" />
		<meta name="keywords" content="Indo Greenlife Harvest" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Indo Greenlife Harvest" />
		<meta property="og:url" content="https://indogreenlifeharvest.com" />
		<meta property="og:site_name" content="Indogreenlife Harvest" />
		<link rel="canonical" href="http://authentication/layouts/creative/sign-in.html" />
		<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/igh.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        @yield('css')
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">

	@yield('content')

		<!--end::Root-->
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
		<!--end::Custom Javascript-->
        @yield('js')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
