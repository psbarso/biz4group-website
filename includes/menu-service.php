
	<link rel="shortcut icon" href="<?php echo SITE_URL;?>images/favicon.png">
	<link rel="stylesheet" href="https://d1fxfakb0fcon3.cloudfront.net/css/bootstrap.min.css" media>
	<link rel="stylesheet" href="<?php echo SITE_URL;?>css/style.css?ver=8.4" media="all">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>css/simple-rating.css" media>
	<link rel="stylesheet" href="<?php echo SITE_URL;?>css/menu.css?ver=8.3" media>
    <link rel="preload" href="<?php echo SITE_URL;?>fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" media />
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!--<script type='text/javascript'> 
		<![CDATA[ 
			function loadCSS(e, t, n) { 
				"use strict"; 
				var i = window.document.createElement("link"); 
				var o = t || window.document.getElementsByTagName("script")[0]; 
				i.rel = "stylesheet"; i.href = e; i.media = "only x"; 
				o.parentNode.insertBefore(i, o); 
				setTimeout(function () { i.media = n || "all" }) 
			}
			loadCSS("<?php echo SITE_URL; ?>css/font-awesome.min.css"); 
			loadCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"); 
		]]> 
	</script>-->

    <script>
    jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
    this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
        }
    };
    jQuery.event.special.touchmove = {
        setup: function( _, ns, handle ) {
            this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
        }
    };
    jQuery.event.special.wheel = {
        setup: function( _, ns, handle ){
            this.addEventListener("wheel", handle, { passive: true });
        }
    };
    jQuery.event.special.mousewheel = {
        setup: function( _, ns, handle ){
            this.addEventListener("mousewheel", handle, { passive: true });
        }
    };
    </script>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T3GQ7ZD');</script>
<!-- End Google Tag Manager -->
 </head>

 <style>
		.header-menu .nav>li {
		padding: 10px 26px !important; 
	}
	@media (min-width: 992px) and (max-width: 1199px) {
		.header-logo img {
    min-width: 90px;
		}
	}

	@media (min-width: 992px) and (max-width: 1200px) {
.header-menu .nav > li > a {
    padding: 10px 15px !important;
}

		.header-menu .nav>li {
		padding: 10px 0px !important; 
	}
	}

	@media (min-width: 768px) and (max-width: 991px) {
		.header-menu .nav > li {
			    padding: 10px 0px !important;
		}
		.header-menu .nav>li>a {
			padding: 10px 6px !important;
		}
				.header-logo img {
    min-width: 90px;
		}
	}
 </style>
 <body>
 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3GQ7ZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="header-menu-m">
<div class="header-top-menu">
</div>
	<div class="header-menu affix-top" data-spy="affix" data-offset-top="47">
		<div class="container-fluid">
			<div class="row header-top-address">
				<div class="col-md-12">
					<div class="header-top-menu-m text-right">
					<ul>
						
					<li class="iconImg"> <span><i class="fa fa-phone"></i></span><a href="tel:+14077141616" itemprop="telephone"><p style="margin:0 0 0px">+1 407-714-1616</p></a></li>
					<li class="iconImg"><span><i class="fa fa-envelope-o"></i></span> <a href="mailto:info@biz4group.com"> info@biz4group.com </a></li>
					</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1 col-sm-1 ">
					<div class="header-logo">
						<a href="https://www.biz4group.com"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/logo2.webp" alt="End to End IoT service provider" loading="lazy" width="640" height="320"></a>
					</div>
				</div>
				<div class="col-md-11 col-sm-11">
					<nav class="navbar navbar-inverse navbar-default">
					  <div class="container-fluid">
						<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					  </button>
						  <a class="navbar-brand" href="index.php"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/logo2.webp" alt="End to End IoT service provider logo" loading="lazy" width="640" height="320"></a> 
						  <!-- logo2.png -->
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav ">
						<li class="dropdown cutom-menu"><a class="dropdown-toggle cutomLink" data-toggle="dropdown">Company <span class="down"><i class="fa fa-chevron-down"></i></span></a>
						  <ul class="dropdown-menu menu-singleRow" style="display:none;">
							<li> <a href="https://www.biz4group.com/about-us"> About us</a></li>
							<li><a href="https://biz4group.com/career">Career</a></li>
							<li><a href="https://biz4group.com/about-us/#biz4group-team">Leadership</a></li>
							<li><a href="https://www.biz4group.com/success-story">Success Stories</a></li>
						  </ul>
						  </li>
						  
						<li class="dropdown mega-dropdown cutom-menu"><a class="dropdown-toggle cutomLink" data-toggle="dropdown">Services <span class="down"><i class="fa fa-chevron-down"></i></span></a>
								<ul class="dropdown-menu mega-dropdown-menu border-cap" style="display:none;">
								<div class="row">
									<div class="col-md-10 col-sm-8">
										<li class="dropdown-header w-100  main-mega-header our-services-subHead"><h3>Our Services</h3></li>
										<li class="col-sm-12 col-md-4 main-inner-header">
												<h1>IoT</h1>
												<ul class="black-blur menu-serviceInnerList">
													<li><a href="https://www.biz4group.com/enterprise-iot-solutions">IoT Solutions</a></li>
													<li><a href="https://www.biz4group.com/iot-product-development">IoT Product</a></li>
													<li><a href="https://www.biz4group.com/smart-wearable-technology">Wearable App Development</a></li>
												</ul>
										</li>
										<li class="col-sm-6 col-md-4 main-inner-header">
										<h1>INNOVATIVE SOLUTIONS</h1>
											<ul class="black-margin menu-serviceInnerList">
												<li><a href="https://www.biz4group.com/mobile-application-development">Mobile Application</a></li>
												<li><a href="https://www.biz4group.com/ecommerce-development">eCommerce Services</a></li>
												<li><a href="https://www.biz4group.com/cms-solutions">CMS Solutions</a></li>
											</ul>
										</li>
										<li class="col-sm-6 col-md-4 main-inner-header">
											<ul class="margin-ul menu-serviceInnerList">
												<li><a href="https://www.biz4group.com/full-stack-development">Full Stack Development</a></li>
												<li><a href="https://www.biz4group.com/digital-marketing">Digital Marketing</a></li>
												<li><a href="https://www.biz4group.com/web-development">Web Development</a></li>
											</ul>
										</li>
									</div>
									<div class="col-md-2 col-sm-4">
										<div class="w3-card-4 megamenucase-study">
											<img src="https://d1fxfakb0fcon3.cloudfront.net/images/adobe_google.webp" alt="Web development for Adobe by Biz4Group" loading="lazy" width="640" height="320" />
											<div class="btnInner"><a href="https://www.biz4group.com/success-story" class="">For Case Studies <br> <b>Click here!</b></a></div>

										</div>
									</div>
								</div>
								</ul>
			               </li>

			            <li class="cutom-menu"><a class="cutomLink" href="https://biz4group.com/testimonial">Testimonials</a></li>
						<li class="dropdown mega-dropdown cutom-menu"><a class="dropdown-toggle cutomLink" data-toggle="dropdown">Solutions <span class="down"><i class="fa fa-chevron-down"></i></span></a>
						  	<ul class="dropdown-menu mega-dropdown-menu border-cap" style="display:none;">
								<li class="col-sm-4 col-md-4 main-inner-header">
									<ul class="black-blur menu-serviceInnerList">
										<li ><a href="https://www.biz4group.com/dating-app-development">Dating</a></li>
										<li><a href="https://www.biz4group.com/social-network-development">Social Networking</a></li>
										<li><a href="https://biz4group.com/eCommerce-store-development">eCommerce & Marketplaces</a></li>
										<li><a href="https://biz4group.com/on-demand-app-development">On Demand</a></li>
									</ul>
								</li>
								<li class="col-sm-4 col-md-4 main-inner-header">
									<ul class="black-blur menu-serviceInnerList">
										<li><a href="https://biz4group.com/real-estate-web-development">Real Estate</a></li>
										<li><a href="https://www.biz4group.com/eLearning-web-app-development">E-Learning</a></li>
										<li><a href="https://www.biz4group.com/iot-app-development">IoT</a></li>
										<li><a href="https://www.biz4group.com/fantasy-sports-web-app-development">Fantasy/Sports</a></li>
									</ul>
								</li>
								<li class="col-sm-4 col-md-4 main-inner-header">
									<ul class="menu-serviceInnerList">
										<li><a href="https://www.biz4group.com/recruitment-staffing-customized-solutions">Recruitment/Staffing</a></li>
										<li><a href="https://www.biz4group.com/legal-advisory-web-app-development">Legal/Law Advisory</a></li>
										<li><a href="https://www.biz4group.com/fintech-software-development">Fintech</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="cutom-menu" ><a class="cutomLink" href="https://biz4group.com/portfolio/">Portfolio</a></li>
						<li class="cutom-menu" ><a class="cutomLink" href="https://biz4group.com/products/">Products</a></li>
						<li class="cutom-menu" ><a class="cutomLink" href="https://biz4group.com/blog/">Blog</a></li>
						  
						<li class="cutom-menu" ><a class="cutomLink" href="https://biz4group.com/contact-us/">Contact Us</a></li>
						</ul>
						</div>
					  </div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	</div>
	
				<div class="req-quote">
			<a href="#" data-toggle="modal" data-target="#myModal" class="btn-hover color-4">Request a Quote</a>
			</div>