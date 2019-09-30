<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CDA online Shopping @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{ asset('frontend/themes/bootshop/bootstrap.min.css') }}" media="screen"/>
    <link href="{{ asset('frontend/themes/css/base.css') }}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="{{ asset('frontend/themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet"/>
	<link href="{{ asset('frontend/themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{ asset('frontend/themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('frontend/themes/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/themes/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/themes/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/themes/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/themes/images/ico/apple-touch-icon-57-precomposed.png') }}">

	<link class="main-stylesheet" href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

	 <!-- toastr -->
    <link class="main-stylesheet" href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" type="text/css" />

  @yield('styles')

	<!-- fb share section for products -->
	@yield('fbshare')

  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">

	<div class="span6">
		@guest
		@else
			Welcome!<strong> {{ Auth::user()->name }}</strong>
		@endguest
	</div>
	
	<div class="span6">
	<div class="pull-right">
		<!--<a href="product_summary.html"><span class="">Fr</span></a>-->
		<!--<a href="product_summary.html"><span class="">Es</span></a>-->
		<!-- <span class="btn btn-mini">En</span> -->
		<a href="{{ route('cart') }}"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i>[ {{ Cart::content()->count() }} ] Itemes in your cart </span> </a>
		<span class="btn btn-mini">${{ Cart::total() }}</span>

		@guest
		<a href="{{ route('login') }}" style="padding-right:0"><span class="btn btn-mini btn-success">Login</span></a>
		<a href="{{ route('register') }}" style="padding-right:0"><span class="btn btn-mini btn-info">Register</span></a>

		@else
            <a href="{{ route('logout') }}" style="padding-right:0" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
			    <span class="btn btn-mini btn-success">Logout</span>
			</a>    
			<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
			    {{ csrf_field() }}
			</form>
		@if(Auth::user()->isAdmin)
				<a href="{{ route('admin.home') }}" style="padding-right:0"><span class="btn btn-mini btn-info">Dashboard</span></a>
		@else
				<a href="{{ route('my_account.orders') }}" style="padding-right:0"><span class="btn btn-mini btn-info">My Orders</span></a>

		@endif
		@endguest
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>

  <div class="navbar-inner">
    <a class="brand" href="{{ route('home.index') }}"><img src="{{ asset('frontend/themes/images/logo.png') }}" alt="CDA"/></a>

    <ul id="topMenu" class="nav pull-right">
		<li class=""><a href="{{ route('home.index') }}">Home</a></li>
		<li class=""><a href="{{ route('shop') }}">Buy Products</a></li>
		<li class=""><a href="{{ route('faq') }}">FAQs</a></li>
	 	 <li class=""><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
	@yield('homeslider')

<div id="mainBody">
	<div class="container">
		@yield('content')
	</div>
</div>
<!-- Footer ================================================================== -->
<div  id="footerSection">
	<div class="container">
		<div class="row">
			{{--<div class="span12">--}}
				{{--<h5>ACCOUNT</h5>--}}

				{{--<a href="{{ route('my_account.orders') }}">MY ORDERS</a>--}}
			{{--</div>--}}
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="{{ route('contact') }}">CONTACT</a>
				<a href="{{ route('register') }}">REGISTRATION</a>
				<a href="{{ route('faq') }}">FAQ</a>
			</div>

			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="{{ asset('frontend/themes/images/facebook.png') }}" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="{{ asset('frontend/themes/images/twitter.png') }}" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="{{ asset('frontend/themes/images/youtube.png') }}" title="youtube" alt="youtube"/></a>
			</div>
		</div>
		<p class="pull-right">&copy; CDA</p>
	</div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{ asset('frontend/themes/js/jquery.js') }}" type="text/javascript"></script>
	<script src="{{ asset('frontend/themes/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('frontend/themes/js/google-code-prettify/prettify.js') }}"></script>
	
	<script src="{{ asset('frontend/themes/js/bootshop.js') }}"></script>
    <script src="{{ asset('frontend/themes/js/jquery.lightbox-0.5.js') }}"></script>

    <!-- toastr -->
    <script src="{{ asset('js/toastr.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
      @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}")

      @endif

      @if(Session::has('info'))

        toastr.info("{{ Session::get('info') }}")

      @endif

    </script>

	
	@yield('scripts')
	
</body>
</html>