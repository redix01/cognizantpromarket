

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

<link href="css/main16d6.css?r=411" rel="stylesheet"/>
<link href="css/twe699.css?r=954" rel="stylesheet"/>
<link href="css/animate.css" rel="stylesheet" />
<link rel="stylesheet" href="css/intlTelInput.css">

<title>WaxxMarket</title>
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

<meta name="keywords" content="WaxxMarket, Options, Crypto" />
<meta property="og:image" content="images/logo.png" />
<meta property="og:site_name" content="WaxxMarket">
<meta property="og:title" content="Crypto Trading With WaxxMarket" />
<meta name="description" content="Crypto Trading With WaxxMarket, is totally different from its competitors trying to achieve something special starting with the...">
<meta property="og:description" content="Crypto Trading With WaxxMarket, is totally different from its competitors trying to achieve something special starting with the...">
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
		<h5>Privacy Policy</h5>
		<h1 class="mb-4 text-white">Your data is secure, we promise. Here's how we make sure</h1>
		<p>We maintain high standards to keep trading environments secure, and offer the best tailor made trading conditions for every client.</p>
		<p>We help traders to develop the knowledge and skills they need to trade efficiently and responsibly.</p>
		<h2>Introduction</h2>
		<p>As part of our daily business operations, we collect personal information from our clients and prospective clients in order to provide them with our products and services, and ensure that we can meet their needs when providing these products and services, as well as when providing them with any respective information.</p>
		<p>Your privacy is of utmost importance to us, and it is our policy to safeguard and respect the confidentiality of information and the privacy of individuals. This Privacy Notice sets out how WaxxMarket products and services provided in the U.S and all across the globe collects, uses and manages the personal information we receive from you, or a third party, in connection with our provision of services to you or which we collect from your use of our services and/or our website. The Privacy Notice also informs you of your rights with respect to the processing of your personal information.</p><p>Our Privacy Notice is reviewed regularly to ensure that any new obligations and technologies, as well as any changes to our business operations and practices are taken into consideration, as well as that it remains abreast of the changing regulatory environment. Any personal information we hold will be governed by our most recent Privacy Notice.</p>
		<p>Please note that if you are an employee of the Company, a contractor to the Company or a third-party provider, your personal information will be used in connection with your employment contract or your contractual relationship, whichever applies.</p>
		<p>This Privacy Notice applies to the processing activities performed by WaxxMarket to the personal information of its clients and its potential clients and website visitors.</p>
		<p>We may amend this Privacy Notice at any time by posting the amended version on this site including the effective date of the amended version. We will announce any material changes to this Privacy Notice on our website.</p>
		<h2>Definitions</h2>
		<p>2.1 As used herein, the following terms are defined as follows:</p>
		<p>2.1.1 “Digital Asset” is a digital representation of value (also referred to as “cryptocurrency,” “virtual currency,” “digital currency,” “crypto token,” “crypto asset,” or “digital commodity”), such as bitcoin, XRP or ether, which is based on the cryptographic protocol of a computer network that may be (i) centralized or decentralized, (ii) closed or open-source, and (iii) used as a medium of exchange and/or store of value.</p>
		<p>2.1.2 “WaxxMarket Account” means a user-accessible account offered via the WaxxMarket services where Digital Assets are stored.</p>
		<p>2.1.3 “We,” and “Us” refers to WaxxMarket.</p>
		<p>2.1.4 “Personal Information” or “Personal Data” or “your data” refers to any information relating to you, as an identified or identifiable natural person, including your name, an identification number, location data, or an online identifier or to one or more factors specific to the physical, economic, cultural or social identity of you as a natural person.</p>
		<h2>Your Data Controller</h2>
		<p>We are responsible for the collection, use, disclosure, retention and protection of your personal information in accordance with our global privacy standards, this Privacy Notice, as well as any applicable national laws. We use encryption to protect your information and store decryption keys in separate systems. We process and retain your personal information on our servers in multiple data center locations, including the European Union, Japan, Singapore, the United States of America and elsewhere in the world.</p>
		<h2>How do we protect personal information?</h2>
		<p>We respect the privacy of any users who access our website, and we are therefore committed to taking all reasonable steps to safeguard any existing or prospective clients, applicants and website visitors.</p>
		<p>We keep any personal data of our clients and potential clients in accordance with the applicable privacy and data protection laws and regulations.</p>
		<p>We have the necessary and appropriate technical and organizational measures and procedures in place to ensure that your information remains secure at all times. We regularly train and raise awareness for all our employees to the importance of maintaining, safeguarding and respecting your personal information and privacy. We regard breaches of individuals’ privacy very seriously and will impose appropriate disciplinary measures, including dismissal from employment. We have also appointed a Group Data Protection Officer, to ensure that our Company manages and processes your personal information in compliance with the applicable privacy and data protection laws and regulations, and in accordance with this Privacy Notice.</p>
		<p>The personal information that you provide us with when applying to open an account, applying for a role within the Company, or when using our website, is classified as registered information, which is protected in several ways. You can access your registered information after logging in to your account by entering your username and the password that you have selected. It is your responsibility to make sure that your password is only known to you and not disclosed to anyone else. Registered information is securely stored in a safe location, and only authorised personnel have access to it via a username and password. All personal information is transferred to the Company over a secure connection, and thus all reasonable measures are taken to prevent unauthorised parties from viewing any such information. Personal information provided to the Company that does not classify as registered information is also kept in a safe environment and accessible by authorised personnel only through username and password.</p>
		<h2>Information we may collect about you</h2>
		<p>In order to open an account with us, you must first complete and submit a “create account” form to us by completing the required information. By completing this form, you are requested to disclose personal information in order to enable us to assess your application and comply with the relevant laws (including their regulations).</p>
		<p>The information that we collect from you is as follows:</p>
		<p>Full name, residential address and contact details (e.g. email address, telephone number, fax etc.);</p><p>Date of birth, place of birth, gender, citizenship;</p>
		<p>Bank account information, credit card details, including details about your source of funds, assets and liabilities, and OFAC information;</p>
		<p>Trading account balances, trading activity, your inquiries and our responses;</p>
		<p>Information on whether you hold a prominent public function (PEP);</p>
		<p>Verification information, which includes information necessary to verify your identity such as a passport, driver’s licence or Government-issued identity card);</p>
		<p>Other Personal Information or commercial and/or identification information – Whatever information we, in our sole discretion, deem necessary to comply with our legal obligations under various anti-money laundering (AML) obligations, such as under the European Union’s 4th AML Directive and the U.S. Bank Secrecy Act (BSA).</p>
		<p>Information we collect about you automatically.</p>
		<p>Location Information – Information that is automatically collected via analytics systems providers to determine your location, including your IP address and/or domain name and any external page that referred you to us, your login information, browser type and version, time zone setting, browser plug-in types and versions, operating system, and platform;</p>
		<p>Log Information – Information that is generated by your use of Kraken Exchange Services that is automatically collected and stored in our server logs. This may include, but is not limited to, device-specific information, location information, system activity and any internal and external information related to pages that you visit, including the full Uniform Resource Locators (URL) clickstream to, through and from our Website or App (including date and time; page response times, download errors, length of visits to certain pages, page interaction information (such as scrolling, clicks, and mouse-overs), and methods used to browse away from the page;</p>
		<p>Information we receive about you from other sources.</p>
		<p>We obtain information about you in a number of ways through your use of our services, including through any of our websites, the account opening process, webinar sign-up forms, event subscribing, news and updates subscribing, and from information provided in the course of on-going support service communications. We also receive information about you from third parties such as your payment providers and through publicly available sources. For example:</p>
		<p>The banks you use to transfer money to us will provide us with your basic personal information, such as your name and address, as well as your financial information such as your bank account details;</p>
		<p>Your business partners may provide us with your name and address, as well as financial information;</p><p>Advertising networks, analytics providers and search information providers may provide us with anonymized or de-identified information about you, such as confirming how you found our website;</p>
		<p>Credit reference agencies do not provide us with any personal information about you, but may be used to corroborate the information you have provided to us.</p>
		<h2>General Provisions</h2>
		<p>Personal Information you provide during the account creation process will be retained for one year, even if your registration is incomplete or abandoned.</p>
		<h2>Lawful basis for processing your personal information</h2>
		<p>We will process your personal information on the following bases and for the following purposes:</p>
		<h2>Performance of a contract</h2>
		<p>We process personal data in order to provide our services and products, as well as information regarding our products and services based on the contractual relationship with our clients (i.e. so as to perform our contractual obligations). In addition, the processing of personal data takes place to enable the completion of our client on-boarding process.</p>
		<p>In view of the above, we must verify your identity in order to accept you as our client and we will use your personal data in order to effectively manage your trading account with us. This may include third parties carrying out credit or identity checks on our behalf. The use of your personal information is necessary for us to know who you are, as we have a legal obligation to comply with “Know Your Customer” and customer due diligence regulatory obligations.</p><p>Compliance with a legal obligation</p>
		<p>There are a number of legal obligations imposed by relevant laws to which we are subject, as well as specific statutory requirements e.g. anti-money laundering laws, financial services laws, corporation laws, privacy laws and tax laws. There are also various supervisory authorities whose laws and regulations apply to us. Such obligations and requirements imposed on us necessary personal data processing activities for identity verification, payment processing, compliance with court orders, tax laws or other reporting obligations and anti-money laundering controls.</p>
		<p>These obligations apply at various times, including client on-boarding, payments and systemic checks for risk management.</p><p>For the purpose of safeguarding legitimate interests</p>
		<p>We process personal data so as to safeguard the legitimate interests pursued by us or by a third party. A legitimate interest is when we have a business or commercial reason to use your information. Example of such processing activities include the following:</p><p>Initiating legal claims and preparing our defense in litigation procedures;</p>
		<p>Means and processes we undertake to provide for the Company’s IT and system security, preventing potential crime, asset security and access controls;</p>
		<p>Measures for managing the business and for further developing products and services;</p>
		<p>Sharing your data within the Payward Inc. group of companies for the purpose of updating and/or verifying your personal data in accordance with the relevant anti-money laundering compliance frameworks, and</p>
		<h2>Risk management.</h2>
		<p>To provide you with products and services, or information about our products and services, and to review your ongoing needs.</p>
		<p>Once you successfully open an account with us, or subscribe to information, we must use your personal information to perform our services and comply with our obligations to you. It is also in our legitimate interests to try to ensure that we are providing the best products and services so we may periodically review your needs based on our assessment of your personal information to ensure that you are getting the benefit of the best possible products and services from us.</p>
		<p>To help us improve our products and services, including support services, and develop and market new products and services.</p>
		<p>We may, from time-to-time, use personal information provided by you through your use of the services and/or through client surveys to help us improve our products and services. It is in our legitimate interests to use your personal information in this way to try to ensure the highest standards when providing you with our products and services and to continue to be a market leader within the cryptocurrency financial service industry.</p>
		<h2>To investigate or settle enquiries or disputes</h2>
		<p>We may need to use personal information collected from you to investigate issues or to settle disputes with you because it is our legitimate interest to ensure that issues and disputes get investigated and resolved in a timely and efficient manner.</p>
		<p>To comply with applicable laws, subpoenas, court orders, other judicial process, or the requirements of any applicable regulatory authorities</p><p>We may need to use your personal information to comply with any applicable laws and regulations, subpoenas, court orders or other judicial processes, or requirements of any applicable regulatory authority. We do this not only to comply with our legal obligations but because it may also be in our legitimate interest to do so.</p>
		<h2>To send you surveys</h2>
		<p>From time to time, we may send you surveys as part of our client feedback process. It is in our legitimate interest to ask for such feedback to try to ensure that we provide our products and services at the highest standard. However, we may from time to time also ask you to participate in other surveys and if you agree to participate in such surveys we rely on your consent to use the personal information we collect as part of such surveys. All responses to any survey we send out whether for client feedback or otherwise will be aggregated and depersonalised before the results are published and shared.</p>
		<h2>Data analysis</h2>
		<p>Our website pages and emails may contain web beacons or pixel tags or any other similar types of data analysis tools that allow us to track receipt of correspondence and count the number of users that have visited our webpage or opened our correspondence. We may aggregate your personal information with the personal information of our other clients on an anonymous basis (that is, with your personal identifiers removed), so that more rigorous statistical analysis of general patterns may lead us to providing better products and services.</p>
		<p>If your personal information is completely anonymised, we do not require a legal basis as the information will no longer constitute personal information. If your personal information is not in an anonymised form, it is in our legitimate interest to continually evaluate that personal information to ensure that the products and services we provide are relevant to the market.</p>
		<h2>Marketing purposes</h2>
		<p>We may use your personal information to send you marketing communications by email or other agreed forms (including social media campaigns), to ensure you are always kept up-to-date with our latest products and services. If we send you marketing communications we will do so based on your consent and registered marketing preferences.</p>
		<p>Internal business purposes and record keeping
		</p><p>We may need to process your personal information for internal business and research purposes as well as for record keeping purposes. Such processing is in our own legitimate interests and is required in order to comply with our legal obligations. This may include any communications that we have with you in relation to the products and services we provide to you and our relationship with you. We will also keep records to ensure that you comply with your contractual obligations pursuant to the agreement (‘Terms of Service”) governing our relationship with you.</p>
		<h2>Legal Notifications</h2>
		<p>Often the law requires us to advise you of certain changes to products or services or laws. We may need to inform you of changes to the terms or the features of our products or services. We need to process your personal information to send you these legal notifications. You will continue to receive this information from us even if you choose not to receive direct marketing information from us.</p>
		<h2>Disclosure of your personal information</h2>
		<p>The Company will not disclose any of its clients’ confidential information to a third party, except: (a) to the extent that it is required to do so pursuant to any applicable laws, rules or regulations; (b) if there is a duty to disclose; (c) if our legitimate business interests require disclosure; (d) in line with our Terms of Service; (e) at your request or with your consent or to those described in this Privacy Notice. The Company will endeavour to make such disclosures on a “need-to-know” basis, unless otherwise instructed by a regulatory authority. Under such circumstances, the Company will notify the third party regarding the confidential nature of any such information.</p>
		<p>As part of using your personal information for the purposes set out above, the Company may disclose your personal information to the following:</p>
		<p>Any members of the Company, which means that any of our affiliates and subsidiaries may receive such information;</p>
		<p>Any of our service providers and business partners, for business purposes, such as specialist advisors who have been contracted to provide us with administrative, financial, legal, tax, compliance, insurance, IT, debt-recovery, analytics, research or other services;</p>
		<p>If the Company discloses your personal information to service providers and business partners, in order to perform the services requested by clients, such providers and partners may store your personal information within their own systems in order to comply with their legal and other obligations.</p>
		<p>We require that service providers and business partners who process personal information to acknowledge the confidentiality of this information, undertake to respect any client’s right to privacy and comply with all relevant privacy and data protection laws and this Privacy Notice.</p>
		<h2>Where we store your personal data</h2>
		<p>Our operations are supported by a network of computers, servers, and other infrastructure and information technology, including, but not limited to, third-party service providers. We and our third-party service providers and business partners store and process your personal data in the European Union, Japan, Singapore, and the United States of America.</p>
		<h2>Privacy Shield</h2>
		<p>Payward Ventures. Inc. has self-certified to the U.S. Department of Commerce our adherence to the EU-US Privacy Shield Framework for all personal information received, collected, used, retained and transferred from countries in the European Union and the United Kingdom (UK) to the United States (US) in reliance on the Privacy Shield.Payward Ventures. Inc. has certified to the Department of Commerce that it adheres to the Privacy Shield Principles with respect to such information. If there is any conflict between the terms of this Privacy Notice and the Privacy Shield Principles, the Privacy Principles shall govern.</p>
		<p>To learn more about Privacy Shield, visit the U.S. Department of Commerce Privacy Shield Website at https://www.privacyshield.gov</p>
		<p>Under Privacy Shield, we are responsible for the processing of personal information we receive, collect, use, retain and subsequently transfer to a third party service provider or business partner acting for or on our behalf. We are liable for ensuring that the third parties we engage support our Privacy Shield commitments. The U.S. Federal Trade Commission has regulatory enforcement authority over our processing of personal information received or transferred pursuant to Privacy Shield. Payward Ventures. Inc. commits to cooperate and comply with the advice of the regulatory authorities to whom you may raise a concern about our processing of your personal information pursuant to Privacy Shield, including to the panel established by the EU authorities. This is provided at no cost to you. For more information, see the following Privacy Shield Complaints section below.</p>
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
    <p class="mb-0 mt-md-4 wow slideInLeft text-uppercase" >© 2016 - 2026 WaxxMarket. All rights reserved.</p>
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
