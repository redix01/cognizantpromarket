

<!doctype html>
<html class="no-js" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="{{ asset("frontpage") }}/">
<link href="{{ asset("favicon.ico") }}" rel="icon" type="image/x-icon" />
<!-- Add icon library -->
<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" type="image/png" href="images/logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.form.js"></script>

<script src="js/moment.js"></script>
<script src="js/livestamp.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>

<link href="css/main60c6.css?r=365" rel="stylesheet"/>
<link href="css/tw81ce.css?r=334" rel="stylesheet"/>
<link href="css/animate.css" rel="stylesheet" />
<link rel="stylesheet" href="css/intlTelInput.css">

<title>Cognizant ProMarket</title>
<link rel="manifest" href="js/manifest.json">
<meta name="theme-color" content="#0C0F19">
<meta name="msapplication-navbutton-color" content="#0C0F19">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#0C0F19">


<meta name="theme-color" content="#0C0F19">
<meta name="msapplication-navbutton-color" content="#0C0F19">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#0C0F19">

<link href="{{ asset("favicon.ico") }}" rel="icon" type="image/x-icon" />
<link rel="icon" sizes="192x192" href="{{ asset("frontpage/images/logo.png") }}">

<meta name="keywords" content="Cognizant ProMarket, Options, Crypto" />
<meta property="og:image" content="images/logo.png" />
<meta property="og:site_name" content="Cognizant ProMarket">
<meta property="og:title" content="Crypto Trading With Cognizant ProMarket" />
<meta name="description" content="Crypto Trading With Cognizant ProMarket, is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:description" content="Crypto Trading With Cognizant ProMarket, is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:type" content="website" />

<script src="js/bootstrap-select.js"></script>
<script src="js/src/jquery.waypoints.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">


<script src="js/countUp.min.js"></script>
<script src="js/jquery.marquee.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>

<script>
$(document).ready(function(){
  var options = {
    useEasing: true,
    useGrouping: true,
    separator: ",",
    decimal: "."
  };
  var counter = $(".counter");
  $('#waypoint').waypoint(function(direction) {
    counter.each(function(index) {
        var value = $(counter[index])();
        var counterAnimation = new CountUp(counter[index], 0, value, 0, 3, options);
        counterAnimation.start();
    });
  }, {
    offset: '50%'
  });
});
</script>
<style>
.navbar.bg-dark {
background:#000 !important;
}
.btn-primary,
.bg-primary {
background:#2563eb !important;
border-color:#2563eb !important;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
background:#1d4ed8 !important;
border-color:#1d4ed8 !important;
}
</style>
</head>
<body>
<div class="overlay closeMenu"></div>
<div class="account-sidebar udex-collapse shadow-lg p-0" id="mySidebar">
  <div class="account-header px-3 py-3">
      <div class="d-flex  justify-content-between">
      <a class="navbar-brand mr-3 p-0" href="{{ url("/") }}">
      @include('frontpage.partials.logo', ['class' => 'wow slideInLeft d-inline-block', 'height' => '55px'])
    </a>
        <button class="navbar-toggler btn btn-link text-dark"><i class="fas fa-times text-white"></i></button>
      </div>
  </div>
  <div style="height: calc(100% - 64px); overflow:auto" class='mx-auto'>
  <ul class="navbar-nav wow slideInLeft ">
        <li class="nav-item text-center">
          <div class="dropdown">
            <a href="#" class="nav-link d-flex justify-content-between" data-toggle="dropdown">Products</a>
            <div class="dropdown-menu p-3">
              <a class="dropdown-item px-2 d-flex py-3 " href="{{ url("/copy") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/magic.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Copy Trading</h5>
                  <p class="mb-0">Experience the power of social trading</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item text-center">
          <div class="dropdown">
            <a href="#" class="nav-link d-flex justify-content-between" data-toggle="dropdown">Company</a>
            <div class="dropdown-menu p-3">
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/about") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/flag.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>About us</h5>
                  <p class="mb-0">Learn more about our mission</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/privacy-policy") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/smile.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Privacy Policy</h5>
                  <p class="mb-0">Learn we handle your data</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item text-center">
          <div class="dropdown">
            <a href="#" class="nav-link d-flex justify-content-between" data-toggle="dropdown">Resources</a>
            <div class="dropdown-menu p-3">
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/faqs") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/book.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>FAQ</h5>
                  <p class="mb-0">Questions we get asked most</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/stocks") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/dollar.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Stock Trading</h5>
                  <p class="mb-0">Trading the stock markets</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/forex") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/bank.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Forex Trading</h5>
                  <p class="mb-0">Trading foreign exchange</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/crypto") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/eth.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Crypto Trading</h5>
                  <p class="mb-0">Trading cryptocurrencies</p>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
    <div class="p-3 d-flex wow slideInLeft">
      
        <a href="{{ route("login") }}" class="btn btn-dark rounded-md my-2 btn-block">LOGIN</a>
        <a href="{{ route("register") }}" class="btn btn-primary rounded-md my-2 btn-block">SIGNUP</a>    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $(".navbar-toggler").click( function(){
    $("#mySidebar").toggle({ direction: "left" }, 1000);
    $(".closeMenu").fadeToggle();
  });
  $(".closeMenu").click( function(){
    $("#mySidebar").toggle({ direction: "left" }, 1000);
    $(".closeMenu").fadeToggle();
  });
  $('#mySidebar a[href!="#"]').click(function(){
    $("#mySidebar").toggle({ direction: "left" }, 1000);
    $(".closeMenu").fadeToggle();
  });
});
</script>
<style>
  .cg-container {
    border: 0 !important;
  }
  .skiptranslate {
    display: none !important;
  }
  body {
    top: 0 !important;
  }
</style>
<style>
.slick-dots{bottom: 10px !important; right: 10px !important;}
.slick-dots li button:hover:before,.slick-dots li button:focus:before{color:#05ae5a;}
.slick-dots li button:before{font-size: 12px;}
.slick-dots li.slick-active button:before{color:#05ae5a; font-size: 20px;}
.slick-dots li.slick-active button:before{opacity: 1;}
.slick-dotted.slick-slider{ margin-bottom: 0px;}
</style>

<script>
$(document).ready(function(){
  var nav = $('header');
  nav.removeClass('shadow-sm');
  /*--window Scroll functions--*/
  $(window).on('scroll', function () {
    /*--show and hide scroll to top --*/
    if ($(window).scrollTop() > 100) {
      nav.addClass('shadow-sm');
      nav.addClass('fixed-top');
      nav.addClass('bg-white');
      nav.children('nav').removeClass('navbar-dark').addClass('navbar-light');
      nav.find('.btn-light').removeClass('btn-light').addClass('btn-primary');
    } else {
      nav.removeClass('shadow-sm');
      nav.removeClass('fixed-top');
      nav.removeClass('bg-white');
      nav.children('nav').addClass('navbar-dark').removeClass('navbar-light');
      nav.find('.btn-primary').addClass('btn-light').removeClass('btn-primary');
    }
  });
});
</script>
<script>
  function functionConfirm(msg, myYes, myNo) {
    var confirmBox = $("#confirm");
    confirmBox.find(".message").text(msg);
    confirmBox.find(".yes,.no").unbind().click(function() {
      confirmBox.fadeOut();
    });
    confirmBox.find(".yes").click(myYes);
    confirmBox.find(".no").click(myNo);
    confirmBox.fadeIn();
  }
</script>
<div id="confirm">
  <div class="shadow rounded container border">
      <div class="message p-3"></div>
      <div class="text-right border-top p-3 bg-light">
        <button aria-label="Yes" class="btn btn-primary yes">Yes</button>
        <button aria-label="No" class="btn btn-primary no">No</button>
      </div>
  </div>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark text-light py-0">

    <!-- Brand -->
    <a class="navbar-brand mr-3 p-0 wow slideInLeft" href="{{ url("/") }}">
      @include('frontpage.partials.logo', ['class' => 'wow slideInLeft d-inline-block', 'height' => '55px'])
    </a>
  

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav wow slideInLeft">
        <li class="nav-item">
          <div class="dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">Products</a>
            <div class="dropdown-menu dropdown-menu-right p-3">
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/copy") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/magic.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Copy Trading</h5>
                  <p class="mb-0">Experience the power of social trading</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">Company</a>
            <div class="dropdown-menu dropdown-menu-right p-3">
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/about") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/flag.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>About us</h5>
                  <p class="mb-0">Learn more about our mission</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/privacy-policy") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/smile.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Privacy Policy</h5>
                  <p class="mb-0">Learn we handle your data</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">Resources</a>
            <div class="dropdown-menu dropdown-menu-right p-3">
            <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/faqs") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/book.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>FAQ</h5>
                  <p class="mb-0">Questions we get asked most</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/stocks") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/dollar.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Stock Trading</h5>
                  <p class="mb-0">Trading the stock markets</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/forex") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/bank.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Forex Trading</h5>
                  <p class="mb-0">Trading foreign exchange</p>
                </div>
              </a>
              <a class="dropdown-item px-2 d-flex py-3" href="{{ url("/crypto") }}">
                <div class="mx-2" style="flex: 0 0 30px">
                  <img src="images/eth.svg" alt="">
                </div>
                <div class="pr-2">
                  <h5>Crypto Trading</h5>
                  <p class="mb-0">Trading cryptocurrencies</p>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 ml-auto my-lg-0 wow slideInLeft">
        
          <a href="{{ route("login") }}" class="btn btn-link rounded-md my-2 mx-3">Login</a>
          <a href="{{ route("register") }}" class="btn btn-primary rounded-md my-2">Get started</a>      </form>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler py-4" type="button">
    <i class="ri-menu-3-line text-white"></i>
    </button>
</nav><div class="hero-image hero-banner">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-12">
				<div class="hero-text wow slideInLeft">
					<div class="mt-4 display-4 font-bolder">All your trading essentials integrated into one app</div>
					<p class="text-lightGray leading-[180%] pt-sm text-pretty text-lg">4000+ of your favourite assets, superior charts, and advanced trading tools to help you get ahead.</p>
					<div style="max-width: 800px" class="mx-auto">
						<p class="wow slideInLeft my-4"> </p>
					</div>
					<a href="{{ route("register") }}" class="btn btn-primary btn-lg px-4 rounded-md mr-1">Get Started</a>
					<a href="{{ route("login") }}" class="btn btn-outline-dark btn-lg px-4 rounded-md">Login</a>
				</div>
			</div>
			<div class="col-md-6 col-12 wow slideInRight">
			<video src="medias/play_720p.mp4" preload="auto" autoplay loop muted playsinline webkit-playsinline x5-playsinline style="width: 100%; height: 100%;"></video>
			</div>
		</div>
	</div>
</div>
<div class='hero-image'>
<div class="container text-center py-4 text-white">
	<section class="py-5 wow slideInUp">
		<h2 class='text-center text-white h2 font-bold mb-4 hyphenated'>Multiple ways to trade</h2>
		<p class='text-center text-lightGray text-lg font-normal leading-8'>Experience trading excellence on the go, from any browser or desktop, with Cognizant ProMarket .

Trade your way, every day!</p>

<div class=''>
<video preload="auto" autoplay loop muted  playsinline webkit-playsinline x5-playsinline style="width: 100%; height: 100%;" src="medias/play_721p.mp4"></video>
<a href="{{ route("register") }}" class="btn btn-primary mx-auto h2 px-2 mt-3">Try Now</a>
</div>
<ul class="nav nav-tabs wow slideInLeft" id="myTab" role="tablist">

<li class="nav-item">
    <a class="nav-link active" id="forex-tab" data-toggle="tab" href="#forex" role="tab" aria-controls="forex" aria-selected="false">Forex</a>
  </li>  
<li class="nav-item">
    <a class="nav-link" id="stocks-tab" data-toggle="tab" href="#stocks" role="tab" aria-controls="stocks" aria-selected="true">Stocks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="crypto-tab" data-toggle="tab" href="#crypto" role="tab" aria-controls="crypto" aria-selected="false">Crypto</a>
  </li>
</ul>
<div class="tab-content mb-4 mt-5 wow slideInUp" id="myTabContent">
  <div class="tab-pane fade" id="stocks" role="tabpanel" aria-labelledby="home-tab">
	
  <div class="w-full lg:px-sm"><ul class="text-uppercase InstrumentsTableHeader_InstrumentsTableHeader__a4duZ relative font-normal text-xs text-shadeBlue "><li class="min-w-[180px]"><div>Instrument</div></li><li class="min-w-[100px]"><div>Buy</div></li><li class="min-w-[100px]"><div>Sell</div></li><li class="invisible"><div></div></li></ul><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/FB.OQ.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">Facebook <span class="uppercase text-shadeBlue font-normal">(FB.OQ)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">666.85</span></li><li class="flex min-w-[100px]"><span class=" ">665.5163</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/NFLX.OQ.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">AMAZON <span class="uppercase text-shadeBlue font-normal">(AMZN.OQ)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">1217.94</span></li><li class="flex min-w-[100px]"><span class=" ">1216.478472</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/AAPL.OQ.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">APPLE <span class="uppercase text-shadeBlue font-normal">(AAPL.OQ)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">203.27</span></li><li class="flex min-w-[100px]"><span class=" ">202.985422</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/GOOGL.OQ.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">GOOGLE <span class="uppercase text-shadeBlue font-normal">(GOOGL.OQ)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">166.18</span></li><li class="flex min-w-[100px]"><span class=" ">165.84764</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div>
</div>
</div>
  <div class="tab-pane fade" id="crypto" role="tabpanel" aria-labelledby="profile-tab">
	<div class="w-full lg:px-sm"><ul class="text-uppercase InstrumentsTableHeader_InstrumentsTableHeader__a4duZ relative font-normal text-xs text-shadeBlue "><li class="min-w-[180px]"><div>Instrument</div></li><li class="min-w-[100px]"><div>Buy</div></li><li class="min-w-[100px]"><div>Sell</div></li><li class="invisible"><div></div></li></ul><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/XRPUSD.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">Ripple/USD <span class="uppercase text-shadeBlue font-normal">(XRPUSD)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">2.8390</span></li><li class="flex min-w-[100px]"><span class=" ">0.3529</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/BTCUSD.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">Bitcoin/USD <span class="uppercase text-shadeBlue font-normal">(BTCUSD)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">112,417.6541</span></li><li class="flex min-w-[100px]"><span class=" ">112,642.9399</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/ETHUSD.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">ETH/USD <span class="uppercase text-shadeBlue font-normal">(ETHUSD)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">4,188.2484</span></li><li class="flex min-w-[100px]"><span class=" ">4,179.8719</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/SOLUSD.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">Solana/USD <span class="uppercase text-shadeBlue font-normal">(SOLUSD)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">215.9811</span></li><li class="flex min-w-[100px]"><span class=" ">215.5491</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/ADAUSD.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">Cardano/USD <span class="uppercase text-shadeBlue font-normal">(ADAUSD)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">0.7909</span></li><li class="flex min-w-[100px]"><span class=" ">0.7893</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div></div>
  </div>
  <div class="tab-pane fade active show" id="forex" role="tabpanel" aria-labelledby="contact-tab">
	<div class="w-full lg:px-sm"><ul class="text-uppercase InstrumentsTableHeader_InstrumentsTableHeader__a4duZ relative font-normal text-xs text-shadeBlue "><li class="min-w-[180px]"><div>Instrument</div></li><li class="min-w-[100px]"><div>Buy</div></li><li class="min-w-[100px]"><div>Sell</div></li><li class="invisible"><div></div></li></ul><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/GBPJPY.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">GBP/JPY <span class="uppercase text-shadeBlue font-normal">(GBPJPY)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">199.66</span></li><li class="flex min-w-[100px]"><span class=" ">199.26</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/AUDCAD.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">AUD/CAD <span class="uppercase text-shadeBlue font-normal">(AUDCAD)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">0.9130</span></li><li class="flex min-w-[100px]"><span class=" ">0.9167</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/EURUSD.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">EUR/USD <span class="uppercase text-shadeBlue font-normal">(EURUSD)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">1.1801</span></li><li class="flex min-w-[100px]"><span class=" ">1.1777</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/EURTRY.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">EUR/TRY <span class="uppercase text-shadeBlue font-normal">(EURTRY)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">48.8973</span></li><li class="flex min-w-[100px]"><span class=" ">48.7995</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div><div class="border-sm"><ul class="InstrumentsTableRow_InstrumentsTableRow__qhq30 relative bg-darkBlack text-sm text-white border border-darkBlack/10 rounded-lg mb-xs hover:bg-[#0d0f13] "><li class="flex min-w-[180px]"><a href="{{ route("register") }}" target="_blank" class="flex flex-g items-center rtl:-mr-[0.75rem]" rel="noreferrer"><div class="sc-7dd21f41-9 gqhDtH" style="background-image: url(_https_/d2f911aicdllsf.cloudfront.net/symbol_icons/USDNOK.html), url(&quot;https://files.naga.com/A.png&quot;); width: 27px;"></div><div class="font-semibold uppercase rtl:mr-[0.75rem]">USD/NOK <span class="uppercase text-shadeBlue font-normal">(USDNOK)</span></div></a></li><li class="flex min-w-[100px]"><span class=" ">9.8960</span></li><li class="flex min-w-[100px]"><span class=" ">9.8762</span></li><li class="flex justify-end sm-none"><a href="{{ route("register") }}" target="_blank" rel="noreferrer"><div class="px-2 py-1.5 bg-danger text-decoration-none rounded"><div class="text-white text-xs font-semibold font-['Inter'] text-center">Trade</div></div></a></li></ul></div></div>
  </div>
</div>


		<div class="row">
		<h2 class="text-center text-white h2 mb-md hyphenated mx-auto mt-5 mb-2">4000+ assets. A world of trading possibilities</h2>
		<div class="text-center text-lightGray text-lg leading-8 mx-auto lg:max-w-[750px]">Access the world’s most sought-after assets. CFDs on stocks, Forex, indices, commodities, ETFs, bonds and crypto — you can trade them all.</div>
		<a href="{{ route("register") }}" class="btn btn-primary mx-auto my-3">Get started</a>
		</div>
	</section>
</div></div>
<div class="bg-light py-5" id="waypoint">
	<div class="container px-4">
		<h2 class="text-dark mb-5 text-center">Trusted by thousands of users worldwide</h2>
		
		
	</div>
</div>
<div class="container  py-4">
	<section class="py-5 row wow slideInRight">
		<div class="col-md-9 col-12 py-4 section-title">
			<div class='my-auto text-center'><h2 class="mb-4">All your financial assets in one place</h2>
			<p class="text-muted">Get a stock account, foreign exchange broker and cryptocurrency exchange—in one refreshingly easy solution.</p>
			<div class="row">
			<div class="col-md-3 py-3">
				<div class="border-left px-4" style="border-color: rgba(255, 255, 255, 0.2) !important">
					<h2 style="font-size: 40px" class="text-dark">$<span class="counter">100</span>M+</h2>
					<p class="text-dark">Paid out to traders</p>
				</div>
			</div>
			<div class="col-md-3 py-3">
				<div class="border-left px-4" style="border-color: rgba(255, 255, 255, 0.2) !important">
					<h2 style="font-size: 40px" class="text-dark"><span class="counter">120</span>+</h2>
					<p class="text-dark">Countries registered with us</p>
				</div>
			</div>
			<div class="col-md-3 py-3">
				<div class="border-left px-4" style="border-color: rgba(255, 255, 255, 0.2) !important">
					<h2 style="font-size: 40px" class="text-dark"><span class="counter">13</span>M+</h2>
					<p class="text-dark">Volume of trades monthly</p>
				</div>
			</div>
			<div class="col-md-3 py-3">
				<div class="border-left px-4" style="border-color: rgba(255, 255, 255, 0.2) !important">
					<h2 style="font-size: 40px" class="text-dark"><span class="counter">3</span>h</h2>
					<p class="text-dark">Avg. payout processing time</p>
				</div>
			</div>
		</div>
			<a href="{{ route("register") }}" class="btn btn-primary mx-auto my-3">Join Now</a></div>
		</div>
		
		<div class="text-center px-4 px-md-0 col-md-3 col-12 mx-auto" style='max-width:300px'>
		<video preload="auto" autoplay loop muted  playsinline webkit-playsinline x5-playsinline style="width: 100%; height: 100%;display: block;
margin: 0 auto;" src="medias/play_722p.mp4"></video>
		</div>
	</section>
	<section class="py-5 row">
	<div class="text-center px-4 px-md-0 col-md-6 col-12 mx-auto wow slideInUp">
		<video preload="auto" autoplay loop muted  playsinline webkit-playsinline x5-playsinline style="width: 100%; height: 100%;display: block;
margin: 0 auto;" src="medias/play_723p.mp4"></video>
		</div>
	<div class="col-md-6 col-12 py-4 section-title">
			<div class='my-auto text-center'><h2 class="mb-4">Introducing Autocopy</h2>
			<p class="text-muted">Learn, copy, and trade in one click. Tap into the experience of others and collaborate with a growing community of traders.</p>
			
			<a href="{{ route("register") }}" class="btn btn-primary mx-auto my-3">Try Autocopy</a></div>
		</div>
		<div class='row  gap-3'>
		<div class='col-mg-6 col-12'><video preload="auto" autoplay loop muted  playsinline webkit-playsinline x5-playsinline style="width: 100%; height: 100%;display: block;
margin: 0 auto;" src="medias/play_724p.mp4"></video></div>
		<div class='col-mg-6 col-12'>
<video preload="auto" autoplay loop muted  playsinline webkit-playsinline x5-playsinline style="width: 100%; height: 100%;display: block;
margin: 0 auto;" src="medias/play_725p.mp4"></video></div>
		</div>
	
	</section>
</div>
<div class="container text-center py-4">
	<section class="py-5">
		<div class="py-4 section-title">
			<h2 class="mb-4">Built for today’s ambitious earners</h2>
			<p class="text-muted">Thousands of forward-thinking users rely on Cognizant ProMarket everyday to turbo-charge their financial operations</p>
		</div>
		<div class="marquee-parent">
			<div class="row justify-content-center wow slideInLeft">
				<div class="col-md-4 py-3">
					<div class="marquee " style="height: 800px; overflow: hidden"><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color:#e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" style="color: #ccc"></i></div>
							<h5 class="my-3">"Really Good Experience"</h5>
							<p class="text-muted">Amazing experience, i have a really wonderful experience using this platfrom.</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0">Laurent Correia</h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/uploads/small/7331718407651.jpg') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="Laurent Correia">
								</div>
							</div>
						</div>
					</div><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color: #e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
							<h5 class="my-3">"Highly Recommended"</h5>
							<p class="text-muted">Great company, no issues with payouts, amazing customers support. Highly recommended  to experienced traders</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0"></h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/images/avatar.png') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="Profile avatar">
								</div>
							</div>
						</div>
					</div><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color: #e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
							<h5 class="my-3">"Compañía perfecta"</h5>
							<p class="text-muted">Este corredor es perfecto para un principiante, es fácil de entender y su equipo de soporte siempre está disponible para ayudar.</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0">Yanira Cordero</h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/uploads/small/9771718406954.jpg') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="Yanira Cordero">
								</div>
							</div>
						</div>
					</div><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color: #e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
							<h5 class="my-3">"Quick Funding and Withdrawal"</h5>
							<p class="text-muted">One of the most difficult situations for traders is funding their account and withdrawing, however eliteglobalhub have one of the quickest funding and withdrawal system. You literally get your withdrawal instantly in your crypto wallet.</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0">Aman Natt</h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/uploads/small/6441718405442.jpg') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="Aman Natt">
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>				<div class="col-md-4 py-3">
					<div class="marquee" style="height: 800px; overflow: hidden"><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color: #e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" style="color: #ccc"></i></div>
							<h5 class="my-3">"Easy to use"</h5>
							<p class="text-muted">This broker is very easy to use and very easy to understand, I must say this is one of the best brokers I’ve used.</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0">Kamila</h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/uploads/small/8861718405256.jpg') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="Kamila">
								</div>
							</div>
						</div>
					</div><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color: #e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" style="color: #ccc"></i></div>
							<h5 class="my-3">"Amazing Platform"</h5>
							<p class="text-muted">This is an amazing platform which gives you opportunity to achieve your goals and become successful trader.</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0">CryptoPUNK</h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/uploads/small/6251718405154.jpg') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="CryptoPUNK">
								</div>
							</div>
						</div>
					</div><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color: #e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
							<h5 class="my-3">"Highly Recommended"</h5>
							<p class="text-muted">Amazing broker, fast withdrawal and good excellent customer support. Highly recommended for pros and newbies</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0">Jeff Lobeck</h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/uploads/small/4871718271112.jpg') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="Jeff Lobeck">
								</div>
							</div>
						</div>
					</div><div class="card m-1 mb-3">
						<div class="card-body text-left shadow-sm rounded-lg">
							<div style="color: #e94a15"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
							<h5 class="my-3">"Amazing broker"</h5>
							<p class="text-muted">Cognizant ProMarket is one of the best trading broker I’ve used since i started crypto trading. With their advanced trading software and my personal knowledge I’ve managed to earn over $6m</p>
							<hr/>
							<div class="d-flex justify-content-center">
								<div class="mr-auto my-auto">
									<h6 class="mb-0">Mitch Ross</h6>
								</div>
								<div>
									<img src="{{ asset('frontpage/uploads/small/3341718223475.jpg') }}" style="width: 60px; height: 60px" class="rounded-circle" alt="Mitch Ross">
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>							</div>
		</div>
	</section>
</div>


<script>
$('.marquee').marquee({
	duration: 15000,
	gap: 20,
	delayBeforeStart: 0,
	direction: 'up',
	duplicated: true,
	startVisible: true
});
</script>

<style>
	.marquee {
		position: relative;
	}
	.marquee:before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		height: 150px;
		display: block;
		background: linear-gradient(white 20%, transparent);
		z-index: 10;
	}
	.marquee:after{
		content: '';
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		height: 150px;
		display: block;
		background: linear-gradient(transparent, white 80%);
		z-index: 10;
	}
</style>

<div class="bg-dark text-white border-bottom" style="border-color: rgba(255, 255, 255, 0.2) !important">
  <div class="container py-4 text-center">
    <section class="py-5">
      <div class="py-4 section-title">
        <h2 class="mb-4 text-white">Start your trading journey now</h2>
        <p class="text-muted">It’s easy to get started. Sign up today to start trading with us.</p>
      </div>
      <a href="{{ url("/about") }}" class="btn btn-outline-light mr-2">Learn more</a>
      <a href="{{ route("register") }}" class="btn btn-primary mr-2">Get started</a>
    </section>
  </div>
</div>
<footer>
	<div class="container">
    @include('frontpage.partials.logo', ['class' => 'wow slideInLeft d-inline-block', 'height' => '44px'])<br />
    <p class="mt-3 mb-5 wow slideInLeft d-flex flex-wrap wow slideInLeft">
      <a href="{{ url("/about") }}" class="font-weight-bold col-6 pl-3 py-2 col-md">About us</a>
      <a href="{{ url("/privacy-policy") }}" class="font-weight-bold col-6 pl-3 py-2 col-md">Privacy</a>
      <a href="{{ url("/rules") }}" class="font-weight-bold col-6 pl-3 py-2 col-md">Terms of service</a>
      <a href="{{ url("/forex") }}" class="font-weight-bold col-6 pl-3 py-2 col-md">Forex</a>
      <a href="{{ url("/crypto") }}" class="font-weight-bold col-6 pl-3 py-2 col-md">Crypto</a>
      <a href="{{ url("/stocks") }}" class="font-weight-bold col-6 pl-3 py-2 col-md mr-auto">Stocks</a>
    </p>
   <div class='wow slideInUp'>
    <p>The risk of loss in online trading of stocks, options, futures, currencies, foreign equities, and fixed Income can be substantial.</p>
    <p>Before trading, clients must read the relevant risk disclosure statements on our Warnings and Disclosures page. Trading on margin is only for experienced investors with high risk tolerance. You may lose more than your initial investment. For additional information about rates on margin loans, please see Margin Loan Rates. Security futures involve a high degree of risk and are not suitable for all investors. The amount you may lose may be greater than your initial investment.</p>
    <p>For trading security futures, read the Security Futures Risk Disclosure Statement. Structured products and fixed income products such as bonds are complex products that are more risky and are not suitable for all investors. Before trading, please read the Risk Warning and Disclosure Statement.</p>
    <hr class="my-3 my-md-5" style="border-color: rgba(255, 255, 255, 0.2) !important">
</div>
    <div class="gtranslate_wrapper mx-auto d-flex justify-content-center"></div>
<script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","flag_size":24,"switcher_horizontal_position":"inline","alt_flags":{"en":"usa"}}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
@if(!empty($livechatWidgetCode))
{!! $livechatWidgetCode !!}
@endif
    <p class="mb-0 mt-md-4 wow slideInLeft text-uppercase" >© 2016 - 2026 Cognizant ProMarket. All rights reserved.</p>
  </div>

</footer>

<div id="google_translate_element" style="display:none"></div>
<script type="text/javascript">

function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
}

function changeLanguageByButtonClick() {
  var language = document.getElementById("language").value;
  var selectField = document.querySelector("#google_translate_element select");
  for(var i=0; i < selectField.children.length; i++){
    var option = selectField.children[i];
    // find desired langauge and change the former language of the hidden selection-field 
    if(option.value==language){
       selectField.selectedIndex = i;
       // trigger change event afterwards to make google-lib translate this side
       selectField.dispatchEvent(new Event('change'));
       break;
    }
  }
}

function changeLanguageByButtonClick2() {
  var language = document.getElementById("language2").value;
  var selectField = document.querySelector("#google_translate_element select");
  for(var i=0; i < selectField.children.length; i++){
    var option = selectField.children[i];
    // find desired langauge and change the former language of the hidden selection-field 
    if(option.value==language){
       selectField.selectedIndex = i;
       // trigger change event afterwards to make google-lib translate this side
       selectField.dispatchEvent(new Event('change'));
       break;
    }
  }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$( document ).ready(function() { 
  new WOW().init();
});
</script>

</body>

</html>
