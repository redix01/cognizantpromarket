

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

<link href="css/main25ff.css?r=278" rel="stylesheet"/>
<link href="css/tw5244.css?r=303" rel="stylesheet"/>
<link href="css/animate.css" rel="stylesheet" />
<link rel="stylesheet" href="css/intlTelInput.css">

<title>WexMarket</title>
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

<meta name="keywords" content="WexMarket, Options, Crypto" />
<meta property="og:image" content="images/logo.png" />
<meta property="og:site_name" content="WexMarket">
<meta property="og:title" content="Crypto Trading With WexMarket" />
<meta name="description" content="Crypto Trading With WexMarket, is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:description" content="Crypto Trading With WexMarket, is totally different from its competitors trying to achieve something special starting with the...">
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
</nav><section class="bg-dark text-light">
<div class="container py-5 text-container">
		<h1>About us</h1>
		<h1 class="mb-4 text-white">We bring honesty and transparency to financial services technology</h1>
		<p>Welcome to WexMarket, an international online trading firm offering 24 hours access to a diverse range of trading products including forex currency pairs, commodities, futures, indices and stocks.</p>
		<p>Through WexMarket and the world renowned MetaTrader 5 trading platform, you can take advantage of high liquidity, low spreads, mobile trading, technical analysis and even more.</p>
		<div class="row">
			<div class="col-md-6 py-3">
				<p>We maintain high standards to keep trading environments secure, and offer the best tailor made trading conditions for every client. We help Forex traders to develop the knowledge and skills they need to trade efficiently and responsibly.</p>
				<p>With our Daily Market analysis, we bring the freshest market insights to our beloved clients every day. Experience it for yourself!</p>
				<h2 class="mb-4 text-white">Why we’re better</h2>
				<p>Our team is comprised of industry experts who are driven to consistently improve the trading experience through experience.</p>
				<p>Global Finex Account - The only 1 trading account type for ease of your experience with us.</p>
				<p>Zero deposit fees. We don't charge any commissions or fees on your deposits and withdrawals.</p>
				<p>Licensed and Regulated. We respect and abide the industry standards and regulations.</p>
				<p>Instant account opening and funding. Simple registration form and fast verification.</p>
			</div>
			<div class="col-md-6 py-3">
				<img src="images/photo-1522071820081-009f0129c71c.avif" alt="">
			</div>
		</div>
	</div></section>
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
    <p class="mb-0 mt-md-4 wow slideInLeft text-uppercase" >© 2016 - 2026 WexMarket. All rights reserved.</p>
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
