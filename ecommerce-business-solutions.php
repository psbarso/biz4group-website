<?php
require_once('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>eCommerce Website Development Company | Hire eCommerce Developer</title>
		<meta name="Title" content="eCommerce Website Development Company | Hire eCommerce Developer" />
		<meta name="Description" content="Looking for the ecommerce developer company? Biz4Group has a team of 50+ certified developers to help you develop the custom ecommerce platform. " />
    	<meta property="og:url" content="<?php echo SITE_URL; ?>ecommerce-business-solutions"/>
		<meta property="og:title" content="eCommerce Website Development Company | Hire eCommerce Developer"/>
		<meta property="og:site_name" content="Biz4Group"/>
		<meta property="og:description" content="Looking for the ecommerce developer company? Biz4Group has a team of 50+ certified developers to help you develop the custom ecommerce platform. "/>
		<meta property="og:type" content="<?php echo SITE_URL; ?>ecommerce-business-solutions"/>
		<meta property="og:image" content=" <?php echo SITE_URL; ?>images/ecommerce-banner2-bg.jpg"/>
		<meta property="og:locale" content="en_us"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:url" content=" <?php echo SITE_URL; ?>ecommerce-business-solutions"/>
		<meta name="twitter:creator" content="@biz4group"/>
		<meta name="twitter:title" content=" eCommerce Website Development Company | Hire eCommerce Developer "/>
		<meta name="twitter:description" content="Looking for the ecommerce developer company? Biz4Group has a team of 50+ certified developers to help you develop the custom ecommerce platform. "/>
		<meta name="twitter:image" content=" <?php echo SITE_URL; ?>images/ecommerce-banner2-bg.jpg"/>
		<meta name="robots" content="noindex" />
		<!--menu-->
		<!-- CORE CSS -->
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>images/favicon.png">
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/bootstrap.min.css?ver=2" media="all" async>
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/ecommerce-business-solutions-demo.css?ver=2">
		<script type='text/javascript'> 
		//<![CDATA[ 
		function loadCSS(e, t, n) { 
			"use strict"; 
			var i = window.document.createElement("link"); 
			var o = t || window.document.getElementsByTagName("script")[0]; 
			i.rel = "stylesheet"; i.href = e; i.media = "only x"; 
			o.parentNode.insertBefore(i, o); 
			setTimeout(function () { i.media = n || "all" }) 
		}
		//loadCSS("<?php echo SITE_URL;?>css/bootstrap.min.css"); 
		//loadCSS("<?php echo SITE_URL;?>css/style.css"); 
		loadCSS("<?php echo SITE_URL; ?>css/font-awesome.min.css"); 
		loadCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"); 
		//]]> 
		</script>
</head>
<body>


 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3GQ7ZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--header-menu-->

 <?php include_once("header.php");
 ?>
<!-- includes/header-menu.php -->

<!--header-menu-->
<!--menu-->

<!--main start-->
<div class="main-ecom-pad">
<div class="services-top-detail" style="background-image:url(https://www.biz4group.com/images/ecom-banner.jpg);">
	<div class="container">
		<div class="ecom-form-center row">
			<div class="col-md-6 col-lg-7 col-xs-12">
				<div class="service-head">
					<h1>Uplift Your eCommerce Business with Biz4Group</h1>
					<p>6 Reasons to Choose us for Your eCommerce Requirement:</p>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i> Quick Time to Market (4 - 6 weeks)</b></li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Better than Shopify, WordPress and Magento</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Development using latest technology stack (MERN)</b></li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Fastest eCommerce business solution</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Say bye to monthly support cost</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Keep scrolling to see our best work yet. <b>(*Yours will be even better)</b></li>
					</ul>
					<div class="ecom-model-heading">
						<a href="https://www.biz4group.com/interactive-prototype" target="_blank">See your working eCom model for $1k to $2k only</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-5 col-xs-12">
				<div class="formBox">
					<form id="send-contact-form" method="post">
						<div class="row">
							<div class="col-sm-12">
								<div class="touch-head">
								<h3>Get Free eCommerce Consultation</h3>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox ">
									<div class="inputText">Full Name*</div>
									<input class="field-text input LoNotSensitive" type="text" id="name" name="name">
									<div id="errors" style="display:none;"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Email*</div>
									<input class="field-text input LoNotSensitive" type="email" name="email" id="email" required >
									<div id="errorsOne" style="display:none;"></div>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Phone*</div>
									<input class="field-text input LoNotSensitive" name="phone" type="number" id="phone" required>
									<div id="errorsTwo" style="display:none;"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<textarea class="input-textarea field-textarea LoNotSensitive" id="msg" name="msg" placeholder="Type your message here..." required></textarea>
									<div id="errorsThree" style="display:none;"></div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-12">
							<div class="inputBox">
							<label><strong>Enter Captcha:</strong></label><br />
							<input type="text" name="captcha" id="captcha" autocomplete="off" />
							<div id="errorsFour" style="display:none;"></div>
							<p><br />
							<img src="include/captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
							</p>
							<p>Can't read the image?
							<a href='javascript: refreshCaptcha();'>click here</a>
							to refresh</p>
							</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 feedback-btn">
								<input type="submit" id="submit" class="button" value="Send Message">
							</div>
							<div id="contact-content"></div>
						</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<div class="develop-technology">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title" style="display: inline;">eCommerce Mobile Application and Custom Web Development Services </h2>
			<p class="home-layout-heading-pera" style="margin-top:10px;">Custom eCommerce Web And Mobile Application Development Services</p>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecommerce-website-design.svg" alt="eCommerce Website Design Company" />
					<h2>eCommerce Website Design</h2>
					<p>Get the most innovative and attractively designed eCommerce business solutions that will put your customers in awe and the user experience satisfying. Choose from our readily available themes or get a completely customized design that best suits your business.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecommerce-website-development.svg" alt="eCommerce Website Development Company"/>
					<h2>eCommerce Website Development</h2>
					<p>From PHP to React, we have experts from every major eCommerce development technology that can provide the best structure to your online eCommerce application from a technological aspect. From the most generic features to the more complex ones, our developers can handle all.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecommerce-mobile-app-development.svg" alt="eCommerce mobile app development company"/>
					<h2>eCommerce Mobile App Development</h2>
					<p>When it comes to eCommerce mobile app development, you can rely on our experts who not only have experience of building eCommerce apps but the most innovative ideas to make it stand out from the rest and successful too.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/enterprise-ecommerce-development.svg" alt="eCommerce mobile app development company"/>
					<h2>Enterprise eCommerce Development</h2>
					<p>We have managed eCommerce projects of every scale and have substantial experience as well as expertise in both enterprise and retail eCommerce solutions. We can provide you with enterprise-level eCommerce application that can serve your B2B requirements.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecommerce-integration.svg" alt="eCommerce integration development" />
					<h2>eCommerce Integration</h2>
					<p>If you want to give your existing application a considerable vantage and progression, we can integrate eCommerce functionalities like a shopping cart system, payment gateway etc to your existing application. Our customizable eCommerce components can certainly help you in getting quick results that are aligned with your business needs while being technologically forward.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecommerce-maintenance.svg" alt="ecommerce maintenance services"/>
					<h2>eCommerce Maintenance</h2>
					<p>As your customer base grows so does the need to keep running your application at optimal performance. This requires maintenance and we have the experience of handling maintenance requirements of every scale. Our eCommerce development methodology lets us create applications that perform high and require low maintenance.</p>
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="home2-get-quote">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Looking To Build Something Creative And Impactful?</h4>
				<p>Act Before It’s Too Late! Get Free Consultation From Our Experts Now!</p>
				<a href="https://www.biz4group.com/contact-us" class="pulse">Send Us Your Biggest Challenge</a>
			</div>
		</div>
	</div>
</div>

 <div class="home3-trusted">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h2 class="home-layout-heading-title">Trusted By</h2>
				</div>
				<div class="home3-trusted-m wow fadeInLeft">
					<ul>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img1.png" alt="Trusted By Adobe" class="adobe-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img2.png" alt="Trusted By Google" class="google-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/aws.png" alt="Aws - Trusting of Biz4Group" class="aws-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img4.png" alt="Trusted by App weigh" class="appweigh-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img5.png" alt="Compare Legal - Web Development by Biz4Group" class="comparelegal-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo9.png" alt="CF- Client of Biz4Group" class="cf-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo3.png" alt="IFD - Biz4Group Client" class="ifd-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/nvzn-logo.png" alt="NVZN - Biz4Group Logo" class="aamp-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo6.png" alt="BizGroup Trusted By Herd Logix" class="herdlogix-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo4.png" alt="BizGroup Trusted By Home On" class="homeon-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo2.png" alt="Trusted By NOY" class="noy-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/ge.png" alt="BizGroup Trusted By GE" class="gedigital-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/tekchoice.png" alt="BizGroup Trusted By Tek Choice" class="tekchoice-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/creekside-logo.png" alt="BizGroup Trusted By Creek Side" class="herdlogix-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/verizon.png" alt="BizGroup Trusted By  Verizon" class="verizon-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/holtec.png" alt="BizGroup Trusted By Holtec" class="holtec-logo-img lazy">
							</div>
						</li>

						<li>
							<div class="home3-trusted-img">
								<img data-src="images/ag-home-logo.png" alt="Trusted By AG" class="ag-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/bmm-home-logo.png" alt="Biz4Group - Big Mouth Marketing" class="bmm-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/bounce-home-logo.png" alt="BizGroup Trusted By Bounce" class="bounce-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/celebratube-home-logo.png" alt="BizGroup Trusted By Celebratube" class="celebratube-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/lamar-home-logo.png" alt="BizGroup Trusted By Lamar" class="lamar-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/racooda-logo.png" alt="BizGroup Trusted By Racooda" class="silvevado-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/peakio-logo.png" alt="BizGroup Trusted By Peakio" class="peakio-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/integ-logo.png" alt="Biz4Group Trusted By Integ" class="silvevado-home-logo-img lazy">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
 </div>
	
<div class="home3-about">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-6">
				<div>
					<h2 class="home-layout-heading-title">Who We are</h2>
				</div>
				<div class="home3-about-content wow fadeInLeft">
					<!--<h4>Since its inception in 2003, Biz4Group is determined to reshape the world of IT globally.</h4>-->
					<p>Biz4Group, which began from <b>Orlando, Florida</b> dealing in cutting-edge technologies like <b>IoT</b>,<b>AI</b>, and <b>Blockchain</b>, is now an established name in the IT development industry. Our experience in popular modern development technology stacks like <b>MEAN</b> and <b>MERN</b> has brought us into the mainstream of the IT industry. With around two decades of experience in <b>ecommerce development</b>, we are one of the best teams. Our technical prowess shows in our work and speaks out for itself through a large group of our satisfied clients.</p>
					<!--<a href="https://www.biz4group.com/about-us/#biz4group-team" class="pulse-m2">Meet Our Team</a>-->
				</div>
				<div class="solution-free-conultation">
					  <div class="row">
						 <div class="col-md-12">
							<div class="solution-free-consultation-m" style="margin-top:0px;text-align: left;">
							   <a href="#" data-toggle="modal" data-target="#myModal" style="
					text-align: center;
				">TALK TO OUR EXPERTS! CLICK FOR A FREE CONSULTATION! <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></a>
							</div>
						 </div>
					  </div>
				</div>
			</div>
			<div class="col-md-5 col-sm-6">
				<div class="home3-about-img owl-carousel owl-theme">
					<div class="home3-about-slider item">
						<img src="images/location-orlando-landing.jpg" alt="Biz4Group - App Development Company in FL">
					</div>
					<div class="home3-about-slider item">
						<img src="images/office-photo-landing.jpg" alt="Biz4Group - App Development Company in FL">
					</div>
					<div class="home3-about-slider item">
						<img src="images/home2-about-landing.jpg" alt="Biz4Group - About Us">
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>
 
 <div class="services-offered">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title" style="display: inline;">Coupling eCommerce with Modern Technology - Advanced eCommerce business solutions </h2>
			<!--<br><br>
			<p class="home-layout-heading-pera"></p>-->
		</div>
		<div class="services-offered-tab">
			<div class="row">
				<div class="col-md-4">
					<ul class="nav">
				    	<li class="active"><a data-toggle="tab" href="#menu1">eCommerce Mobile App</a></li>
				    	<li><a data-toggle="tab" href="#menu2">Multivendor eCommerce Solutions</a></li>
				    	<li><a data-toggle="tab" href="#menu3">eCommerce Chatbot</a></li>
				    	<li><a data-toggle="tab" href="#menu4">eCommerce Platform Analytics</a></li>
						<li><a data-toggle="tab" href="#menu5">Customized Shopping Cart</a></li>
				  	</ul>
				</div>
				<div class="col-md-8">
					<div class="tab-content">
					    <div id="menu1" class="tab-pane fade in active">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/mcommerce-icon.png" alt="Biz4Group - mCommerce"/>
					    		<h2>eCommerce Mobile App</h2>
					    	</div>
					      <p>With a paradigm shift of IT suggested by almost everything being developed as “mobile-first”, mCommerce extends the capability of eCommerce by giving everything right into the hands of the consumer. Progressive features like location-based eCommerce and in-store navigation are helping companies serve their consumers better. Our eCommerce solution also includes mobile ordering & payment and social eCommerce for a consistent shopping experience across all devices.</p>
					    </div>
					    <div id="menu2" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/iot-driven-ecommerce-icon.png" alt="Biz4Group - iot app development company"/>
					    		<h2>Multivendor eCommerce Solutions</h2>
					    	</div>
					      <p>eCommerce market trends keep changing frequently, thus compelling business owners to keep innovating their online business stores. Buyer’s wish to save their time and efforts while doing purchase and therefore prefer multi-vendor shopping cart systems now. Our development teams can deliver a customizable multi-vendor marketplace with agility and finesse to offer you a competitive lead.</p>
					    </div>
					    <div id="menu3" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/ecommerce-chatbot-icon.png" alt="chatbot app development - Biz4Group"/>
					    		<h2>eCommerce Chatbot</h2>
					    	</div>
					      <p>For effective marketing and to accumulate a larger user base, continuous interaction with customers is vital. While earlier it involved dedicating customer support executives, it has been made easier with a chatbot. Advanced chatbots are being developed with the help of AI and Machine Learning and being employed for various applications. Our experts can develop and integrate smart chatbot for your eCommerce platform that can interact with customers, answer their basic queries, provide them with status for order, refunds, etc. and help them in shopping.</p>
					    </div>
					    <div id="menu4" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/business-intelligence-icon.png" alt="Business intelligence"/>
					    		<h2>eCommerce Platform Analytics</h2>
					    	</div>
					      <p>Ungauged performance is bound to decline which is why reporting and analytics are important for any eCommerce business. At Biz4Group, we deliver reporting and performance analytics tools integrated with your eCommerce application. Advanced reports like best (and worst) performing products, abandoned carts info, sales, etc. provide you a clearer insight of your customer base and can help you to tap into the potential of your company to grow your business.</p>
					    </div>
						<div id="menu5" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/recommendation-engine-icon.png" alt="Recommendation Thumbnails"/>
					    		<h2>Customized Shopping Cart</h2>
					    	</div>
					      <p>In today’s competitive business world, every online store needs a customized shopping cart solution to address its unique business goals and improve the customer experience. Biz4Group carries substantial experience in developing the best shopping cart solutions that can actually help deliver a better customer experience for improved business conversion. </p>
					    </div>
				  	</div>
				</div>
			</div>	
		</div>
	</div>
</div>

	<div class="admin-app-tab">
		<div class="container">
			<div class="text-center text-margin">
				<h2 class="home-layout-heading-title" style="display: inline;">The Comprehensive Solution for Your eCommerce Needs – B4G eCommerce</h2>
				<p style="margin-top: 20px;">Modern ecommerce requirements need modern solutions. Biz4Group provides progressive and exhaustive solution to all your ecommerce application/platform requirements in the form of B4G eCommerce. Intelligently curated by our team of experts including UI specialists, experience designers, technical architect and developers, it is the one eCommerce solution you’ll ever need. It is highly scalable and customizable and we are constantly improving it.</p>
				<p><b>B4G eCommerce comes with a load of advanced features, some of the prominent ones are:</b></p>
			</div>
			
			  <!--<ul class="nav nav-pills">
				<li class="active"><a data-toggle="pill" href="#customer-panel">
				<div class="apple-icon">
				<span><i class="fa fa-users" aria-hidden="true"></i></span>
				</div>
				<p>Customer Panel</p>
				</a>
				</li>
				<li><a data-toggle="pill" href="#admin-panel">
				<div class="apple-icon">
				<span><i class="fa fa-cogs" aria-hidden="true"></i></span>
				</div>
				<p>Admin Panel</p>
				</a>
				</li>
				<li><a data-toggle="pill" href="#vendor-panel">
				<div class="apple-icon">
				<span><i class="fa fa-user" aria-hidden="true"></i></span>
				</div>
				<p>Vendor Panel</p>
				</a>
				</li>
			  </ul>-->
  
  <div class="tab-content">
    <div id="customer-panel" class="tab-pane tab-pane-sub fade in active">
		<ul>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Fully Customizable </li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> User Role Management </li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Order Management </li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Payment Gateway Integration</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Global and Local Search Function</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Content Management System (CMS)</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Product Discounts / Loyalty Rewards</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Numerous Product Attributes</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Inventory Management </li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Shipment Tracking</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Customer Management </li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Custom Analytical Reports</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Instant Notification</li>
			<li><span><i class="fa fa-check" aria-hidden="true"></i></span> Corporate Billing and Accounting</li>
		</ul>
	</div>
  </div>
			
		</div>
	</div>
 
 <div class="technology-logo">
 <div class="container">
 <div class="logo-tech-head">
 	<div class="logo-head-space">
		<h2 class="home-layout-heading-title">Technologies we work with</h2>
	</div>
	<div class="nav-center">
	 <ul class="nav nav-new-change">
	  <li class="active"><a data-toggle="tab" href="#mobile">Mobile</a></li>
	  <li><a data-toggle="tab" href="#frontend">Front End</a></li>
	  <li><a data-toggle="tab" href="#database">Database</a></li>
	  <li><a data-toggle="tab" href="#backend">Backend</a></li>
	  <li><a data-toggle="tab" href="#cms">CMS</a></li>
	  <li><a data-toggle="tab" href="#infra-and-devops">Infra and DevOps</a></li>
	 </ul>
	</div>

<div class="tab-content">
  <div id="mobile" class="tab-pane fade in active">
    <ul>
	
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-ios2x.svg" alt="Biz4Group - iOS App Development Comapny" />
			<p>iOS</p>
		</div>
	</li>
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-android2x.svg" alt="Biz4Group - Android App Development Comapny" />
			<p>Android</p>
		</div>
	</li>
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-react-native2x.svg" alt="Biz4Group - React Native App Development Comapny" />
			<p>React Native</p>
		</div>
	</li>
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-flutter2x.svg" alt="Biz4Group - Flutter App Development Comapny" />
			<p>Flutter</p>
		</div>
	</li>
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-ionic2x.svg" alt="Biz4Group - Ionic App Development Comapny" />
			<p>Ionic</p>
		</div>
	</li>
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-swift2x.svg" alt="Biz4Group - Swift App Development Comapny" />
			<p>Swift</p>
		</div>
	</li>
	<!--<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-kotlin2x.svg">
			<p>Kotlin</p>
		</div>
	</li>-->
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-objectivec2x.svg" alt="Biz4Group - C Development Comapny"/>
			<p>ObjectiveC</p>
		</div>
	</li>
	<!--<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-phone-gap2x.svg">
			<p>Phone Gap</p>
		</div>
	</li>
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-titanium2x.svg">
			<p>Titanium</p>
		</div>
	</li>
	<li>
		<div class="logo-dev">
			<img class="lazy" data-src="images/mobile/ic-technology-xamarin2x.svg">
			<p>Xamarin</p>
		</div>
	</li>-->
	
	</ul>
  </div>
  <div id="frontend" class="tab-pane fade">
    <ul>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/ic-technology-angular-js2x.svg" alt="Biz4Group - Angular App Development Comapny" />
				<p>Angular</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/ic-technology-react-native2x-1.svg" alt="Biz4Group - React Native App Development Comapny" />
				<p>ReactJS</p>
			</div>
		</li>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/ic-technology-typescript2x-2.svg">
				<p>TypeScript</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/ic-technology-vue2x.svg">
				<p>Vue</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/ic-technology-wpf2x.svg">
				<p>WPF</p>
			</div>
		</li>-->
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/ic-technology-html52x.svg" alt="Biz4Group - HTML  Development Comapny" />
				<p>HTML5</p>
			</div>
		</li>
		
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/css3.png" alt="Biz4Group - CSS Development Comapny" />
				<p>CSS3</p>
			</div>
		</li>
		
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/frontend/scss.png" alt="Biz4Group - CSS Development Comapny" />
				<p>SCSS</p>
			</div>
		</li>
		
		
	</ul>
  </div>
  <div id="database" class="tab-pane fade">
    <ul>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-mango-db.svg" alt="Biz4Group - Use Mango Database" />
				<p>Mongo DB</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-my-sql2x.svg" alt="Biz4Group - Use My SQL Database" />
				<p>MySQL</p>
			</div>
		</li>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-ms-sql2x1.svg">
				<p>MsSQL</p>
			</div>
		</li>-->
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-firebase2x.svg" alt="Biz4Group - Use Firebase" />
				<p>Firebase</p>
			</div>
		</li>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-realm2x.svg">
				<p>Realm</p>
			</div>
		</li>-->
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-dynamodb2x.svg" alt="Biz4Group - Use Database" />
				<p>DynamoDB</p>
			</div>
		</li>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-oracle.svg">
				<p>Oracle</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-postgresql2x.svg">
				<p>PostgreSQL</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/database/ic-technology-redis2x.svg">
				<p>Redis</p>
			</div>
		</li>-->
	</ul>
  </div>
  
  <div id="backend" class="tab-pane fade">
    <ul>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/backend/ic-technology-php2x.svg" alt="Biz4Group - PHP Development Comapny" />
				<p>PHP</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/backend/ic-technology-java2x.svg" alt="Biz4Group - Java Development Comapny" />
				<p>Java</p>
			</div>
		</li>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/backend/ic-technology-microsoft-dot-net2x.svg">
				<p>.NET</p>
			</div>
		</li>-->
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/backend/ic-technology-node-js2x.svg" alt="Biz4Group - Node JS Development Comapny" />
				<p>NodeJS</p>
			</div>
		</li>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/backend/ic-technology-rails2x.svg">
				<p>Rails</p>
			</div>
		</li>-->
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/backend/ic-technology-phthon2x.svg" alt="Biz4Group - Python Development Comapny" />
				<p>Python</p>
			</div>
		</li>
	</ul>
  </div>
  
  <div id="cms" class="tab-pane fade">
    <ul>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/cms/ic-technology-drupal2x.svg">
				<p>Drupal</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/cms/ic-technology-joomla2x.svg">
				<p>Joomla</p>
			</div>
		</li>-->
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/cms/ic-technology-wordpress2x.svg" alt="Biz4Group - Wordpress Development Comapny" />
				<p>Wordpress</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/cms/ic-technology-magento2x.svg" alt="Biz4Group - Magento 2 Development Comapny" />
				<p>Magento</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/cms/ic-technology-shopify-plus2x.svg" alt="Biz4Group - Shopify Development Comapny" />
				<p>Shopify</p>
			</div>
		</li>
		
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/cms/wix.png" alt="Biz4Group - Wix Development Comapny" />
				<p>Wix</p>
			</div>
		</li>
	</ul>
  </div>
  
  <div id="infra-and-devops" class="tab-pane fade">
    <ul>
		
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/ic-technology-aws2x.svg" alt="Biz4Group - AWS Development Comapny" />
				<p>AWS</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/ic-technology-google-cloud2x.svg" alt="Biz4Group - Google Cloud Development Comapny" />
				<p>Google Cloud</p>
			</div>
		</li>
		
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/azure.png" alt="Biz4Group - Azure Development Comapny" />
				<p>Microsoft Azure</p>
			</div>
		</li>
		
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/godaddy.png" alt="Biz4Group - Godaddy  Development Comapny" />
				<p>Go Daddy</p>
			</div>
		</li>
		<!--<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/ic-technology-gradle2x.svg">
				<p>Gradle</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/ic-technology-jenkins2x.svg">
				<p>Jenkins</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/ic-technology-appium2x.svg">
				<p>Appium</p>
			</div>
		</li>
		<li>
			<div class="logo-dev">
				<img class="lazy" data-src="images/infra-and-devops/ic-technology-selenium2x-1.svg">
				<p>Selenium</p>
			</div>
		</li>-->
	</ul>
  </div>


</div>
</div>
 </div>
 </div>

	<div class="ranking-section">
		<div class="container">
			<div class="text-center">
				<h2 class="home-layout-heading-title">Awards & Recognition</h2>
				<p class="home-layout-heading-pera">Our services has been recognized and acknowledged. See what some of the leading platforms thinks about us.</p>
				<br>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="client-partner-slider2 owl-carousel owl-theme wow fadeInLeft">
						<!--1-->
						<div class="item">
							<a class="ranking-batch-link" target="_blank">
								<div class="ranking-batch">
									<div class="ranking-batch-img">
										<img src="images/goodfirms-batch1.png" alt="Biz4Group Trusted By GoodFirms"/>	
									</div>
									<div class="ranking-batch-border text-center"><span></span></div>
									<div class="ranking-batch-title">
										<p>Top Internet of Things (IoT) Development Company</p>
									</div>
								</div> 
							</a>
						</div>
						<!--2-->
						<div class="item">
							<a class="ranking-batch-link" target="_blank">
								<div class="ranking-batch">
									<div class="ranking-batch-img">
										<img src="images/clutch-batch2.png" alt="Biz4Group Trusted By Clutch"/>	
									</div>
									<div class="ranking-batch-border text-center"><span></span></div>
									<div class="ranking-batch-title">
										<p>Top IoT Developers</p>
									</div>
								</div>
							</a>
						</div>
						<!--3-->
						<div class="item">
							<a class="ranking-batch-link" target="_blank">
								<div class="ranking-batch">
									<div class="ranking-batch-img">
										<img src="images/goodfirms-batch3.png" alt="Biz4Group Trusted By GoodFirms"/>	
									</div>
									<div class="ranking-batch-border text-center"><span></span></div>
									<div class="ranking-batch-title">
										<p>Top Web Development Company</p>
									</div>
								</div> 
							</a>
						</div>
						<!--4-->
						<div class="item">
							<a class="ranking-batch-link" target="_blank">
								<div class="ranking-batch">
									<div class="ranking-batch-img">
										<img src="images/toprated-batch4.png" alt="Biz4Group Trusted By Top Rated"/>	
									</div>
									<div class="ranking-batch-border text-center"><span></span></div>
									<div class="ranking-batch-title">
										<p>Top Rated Web Design & Development Company</p>
									</div>
								</div> 
							</a>	
						</div>
						
						<!--5-->
						<div class="item">
							<a class="ranking-batch-link" target="_blank">
								<div class="ranking-batch">
									<div class="ranking-batch-img">
										<img src="images/techreviewer.png" alt="Biz4Group Trusted By TechReviewer"/>	
									</div>
									<div class="ranking-batch-border text-center"><span></span></div>
									<div class="ranking-batch-title">
										<p>Top 30 IoT Development Companies</p>
									</div>
								</div> 
							</a>	
						</div>
						
						<!--6-->
						<div class="item">
							<a class="ranking-batch-link" target="_blank">
								<div class="ranking-batch">
									<div class="ranking-batch-img">
										<img src="images/badges-mobile-app-developers-2020.png" alt="Biz4Group - Top mobile app development company"/>	
									</div>
									<div class="ranking-batch-border text-center"><span></span></div>
									<div class="ranking-batch-title">
										<p>Top Mobile App Developers</p>
									</div>
								</div> 
							</a>	
						</div>
						<!--7-->
						<div class="item">
							<a class="ranking-batch-link" target="_blank">
								<div class="ranking-batch">
									<div class="ranking-batch-img">
										<img src="images/fl-orlando-web-design-2020.png" alt="Biz4Group - Top mobile app development company in FL"/>	
									</div>
									<div class="ranking-batch-border text-center"><span></span></div>
									<div class="ranking-batch-title">
										<p>Best Web Designers in Orlando 2020</p>
									</div>
								</div> 
							</a>	
						</div>
						
						
					</div>	
				</div>
			</div>
		</div>
	</div>

<div class="services-why-biz4group wow fadeInDown">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title">Why Biz4Group?</h2>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail">
					<div class="box-border"></div>
					<h4>Business Growth</h4>
					<p>Building up your ecommerce platform as well as expanding your customer base requires a particular set of skill and tools that Biz4Group can provide you. We have experienced developers and technical experts who can deliver you the eCommerce app you need that fulfills your requirements as well as can help you in growing your business.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail">
					<div class="box-border"></div>
					<h4>Scalable Application</h4>
					<p>Our technical experts have several years of experience in ecommerce app development and know exactly what goes into for each kind of platform. The technical architecture you will get, will be capable of handling large number of users and can easily be scaled up or down as per the requirement. This enables you to effortlessly manage your other important operations rather than spending time and resources over scaling.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail">
					<div class="box-border"></div>
					<h4>Upgraded Protection</h4>
					<p>We know that data security is of utmost importance and the impact it can have on an ecommerce platform. That is why, we employ the latest security measures for the protection of data that includes customers’ information, customers’ card details, transaction security, permissibility and other protective guards and actions.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail">
					<div class="box-border"></div>
					<h4>Seamless Migration</h4>
					<p>Whether your eCommerce platform uses technology that was once great but now outdated or it uses contemporary but incapable stack, we can have it migrated to the advanced technological stack without much fuss. Our migration methodology will help you in quickly and seamlessly migrate your ecommerce platform for upgrade keeping the business dent as low as possible.</p>
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="solution-free-conultation">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="solution-free-consultation-m" style="margin-top:0px;">
               <a href="#" data-toggle="modal" data-target="#myModal">TALK TO OUR EXPERTS! CLICK FOR A FREE CONSULTATION! <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>

	<div class="pricing-faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
			<div class="text-center">
				<h2 class="home-layout-heading-title">Frequently Asked Questions</h2>
			</div>
				<div class="faq-accordion">
				<div class="panel-group" id="accordion">
				
				 <!--1-->
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="collapsed">
							Why is it essential for modern businesses to create ecommerce sites?   
						<div class="pricing-icons">
						<i class="fa fa-plus" aria-hidden="true"></i>
						<i class="fa fa-minus" aria-hidden="true"></i>
						</div>
						</a>
					  </h4>
					</div>
					<div id="collapse10" class="panel-collapse collapse in">
					  <div class="panel-body">Time is of the main essence today. With increasing digitalization, the modern age customers prefer shopping online, right from their daily groceries to furniture and much more. Therefore, whatever vertical your company works in, a quality e-Commerce platform can give you an edge over your competition and take you ahead in the race by expanding your consumer base. People prefer to browse their mobile devices or PC and shop online, and your eCommerce site can attract those potential customers and increase your business profits.</div>
					</div>
				  </div>
				
				<!--2-->
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						How can I choose the best platform for my ecommerce business website?
						<div class="pricing-icons">
						<i class="fa fa-plus" aria-hidden="true"></i>
						<i class="fa fa-minus" aria-hidden="true"></i>
						</div>
						</a>
					  </h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
					  <div class="panel-body">We sit together with you to plan and ideate on the e-Commerce model that you want for your business. On the basis of that, we help you select the most suitable platform out of many available options like Shopify, WooCommerce, CodeIgniter, and others. We then suggest you select the features and components like payment gateway, data security, tools, etc. while considering the products or services that you intend to sell on your eCommerce platform. Only after that, we finalize the technology to use for your ecommerce platform.
					  </div>
					</div>
				  </div>
				  <!--3-->
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
							Can I get my Existing Website Converted into a Responsive E-Commerce Website?
						<div class="pricing-icons">
						<i class="fa fa-plus" aria-hidden="true"></i>
						<i class="fa fa-minus" aria-hidden="true"></i>
						</div>
						</a>
					  </h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
					  <div class="panel-body">Change is inevitable, especially in the field of technology. If you want your company to stay on the growth path, technological upgradation is an essential element for you. Today, when Millennials and Gen Z spend most of their time online and prefer rendering services and purchase products online, you must get your website upgraded to an E-commerce platform. We, at biz4Group, ensure that the migration is seamless and within minimal time, we can stage your website to its advanced version with minimal hassle.</div>
					</div>
				  </div>
				  <!--4-->
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
						If you already have a Mobile Ecommerce website, do you still need a Responsive website?
						<div class="pricing-icons">
						<i class="fa fa-plus" aria-hidden="true"></i>
						<i class="fa fa-minus" aria-hidden="true"></i>
						</div>
						</a>
					  </h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
					  <div class="panel-body">A responsive website always gets an edge over other formats of only mobile or only desktop versions. Responsive sites give you the advantage that you don't need a subdomain as your sensitive domain identifies the device and respond in a befitting web format. Further, in a responsive website, it's easier to get data analytics reports and use the same for business advantage. Nonetheless, Biz4Group also guarantees the overall quality of work and 24/7 technical support. The makeover that we give to you also ensures zero data loss. Reach out to us and let us take you ahead in the market competition.</div>
					</div>
				  </div>
				  
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<div class="simple-color">
		<div class="container-fluid">
			<div class="combine-color">
				<div class="idea-png">
					<img class="lazy" data-src="images/idea_png.png" alt="App idea"/>
				</div>
				<div class="color-heading">
					<h3>Looking to</h3>
					<h2>Convert your idea into a Profitable Business?</h2>
				</div>
				<div class="hover-talk">
					<a href="javascript:;" data-toggle="modal" data-target="#myModal" class="theme-default-btn pulse-m2">Talk to Our Expert</a>
				</div>
			</div>
			<div class="grey-color">
				<div class="home3-layout-heading blue-heading">
					<h2>Our Works</h2>
				</div>
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<img src="images/clickable-prototype4.jpg" alt="Biz4Group - App Prototype"/>
						<a href="https://www.biz4group.com/portfolio-desc-racooda">View Details</a>
					</div>
					
					<div class="item">
						<img src="images/clickable-prototype2.jpg" alt="Biz4Group - App Prototype Development"/>
						<a href="https://www.biz4group.com/peakio-interactive-prototype">View Details</a>
					</div>
					<div class="item">
						<img src="images/clickable-prototype5.jpg" alt="Biz4Group - App Prototype Development"/>
						<a href="https://www.biz4group.com/covix-interactive-prototype">View Details</a>
					</div>
					<div class="item">
						<img src="images/clickable-prototype6.jpg" alt="Biz4Group - App Prototype Development"/>
						<a href="https://www.biz4group.com/gotta-barter-interactive-prototype">View Details</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>

<!--our letest blog-->
<div class="services-letest-blog">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title">Latest Blog Posts</h2>
		</div>
		<div class="row">
		
			<div class="col-md-4 col-sm-6">
				<div class="services-letest-blog-box">
					<img class="lazy" data-src="https://www.biz4group.com/images/7-reasons-to-choose-mern-stack-for-e-commerce-development.jpg" alt="Mern Stack Development Company">
					<div class="services-letest-blog-box-detail">
						<!--<span>20th December 2019</span>-->
						<h3>7 Reasons to Choose MERN Stack for E-Commerce Development</h3>
						<a href="https://www.biz4group.com/blog/7-reasons-to-choose-mern-stack-for-e-commerce-development">More Details > </a>	
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<div class="services-letest-blog-box">
					<img class="lazy" data-src="https://www.biz4group.com/images/6-reasons-why-agile-methodology-is-perfect-for-developing-eCommerce-projects.jpg" alt="Agile methodology development ">
					<div class="services-letest-blog-box-detail">
						<!--<span>20th December 2019</span>-->
						<h3>6 Reasons Why Agile Methodology is Perfect for Developing eCommerce Projects</h3>
						<a href="https://www.biz4group.com/blog/6-reasons-why-agile-methodology-is-perfect-for-developing-ecommerce-projects">More Details > </a>	
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<div class="services-letest-blog-box">
					<img class="lazy" data-src="https://www.biz4group.com/images/why-security-and-privacy-control-are-crucial-while-implementing-an-ecommerce-solution.jpg" alt="Security and privacy with ecommerce">
					<div class="services-letest-blog-box-detail">
						<!--<span>20th December 2019</span>-->
						<h3>Why Security And Privacy Control Are Crucial While Implementing An eCommerce Solution?</h3>
						<a href="https://www.biz4group.com/blog/why-security-and-privacy-control-are-crucial-while-implementing-an-ecommerce-solution">More Details > </a>	
					</div>
				</div>
			</div>
		
		</div>
		<div class="letest-blog-more-btn">
			<a href="https://www.biz4group.com/blog/category/eCommerce">View All Blog Posts <img class="lazy" data-src="images/view-all-blog-post-icon.png" alt="Biz4Group - Read News and Latest Blogs"/></a>
		</div>

	</div>
</div>
<!--our letest blog end-->	

	

<!--main end-->		
<!--footer-->
<!--footer-menu-->
<?php include_once("includes/footer-menu.php");
 ?>
 <!--footer-menu-->
	

<style>

.services-offered .nav>li a {
    font-size: 20px;
	cursor: pointer;
}

@media only screen and (min-width: 768px){
	.services-why-biz4group .business-highlights-detail {
		min-height: 285px;
	}
	
	.services-offered .tab-content .tab-pane {
		min-height: 340px;
	}
}


</style>
	
</body>
</html>
 
<!-- Tell Us About Your Project (Modal) -->
<!--request-a-quote-->
<?php include_once("includes/request-a-quote.php");
 ?>
<!--request-a-quote-->


<!--footer script-->
<script src="<?php echo SITE_URL;?>js/jquery.min.js"></script>
<script src="<?php echo SITE_URL;?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.validate.js"></script>
<script src="<?php echo SITE_URL;?>js/custom-file-input.js"></script>
<script>
      /*$.validate({
        lang: 'en'
      });*/
      $('#successQuote, #successContact').hide();
</script>
<script src="<?php echo SITE_URL;?>js/owl.carousel.min.js"></script>	

<script>
//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(
 0,img.src.lastIndexOf("?")
 )+"?rand="+Math.random()*1000;
}
</script>
<!--Who We are slider-->
<script>
	$(document).ready(function() {
		<!--Who We are slider-->
              var owl = $('.home3-about-img');
              owl.owlCarousel({
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              });
	
	<!--Awards & Recognition-->
	var owl = $('.client-partner-slider2');
              owl.owlCarousel({
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
              });
	
	<!--Our Works-->
	$("#owl-demo").owlCarousel({
		autoplay: true,
	  autoplayTimeout: 2000,
	  autoplayHoverPause: true,
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
	  loop:true,
      margin:10,
      responsiveClass:true,
	  dots: false,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        500:{
            items:2,
            nav:false,
			loop:false
        },
        768:{
            items:4,
            nav:true,
            loop:false
        }
    }

 
  });	  
			  
            });
</script>
<script src="<?php echo SITE_URL;?>js/jquery.lazy.min.js"></script>
<script>
	$(function() {
        $('.lazy').Lazy();
    });
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
setTimeout( function(){
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5af52b7b227d3d7edc2525a1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
},10000);
</script>
<!--End of Tawk.to Script-->

<script  type="text/javascript">
	var contact_recaptcha;
    var captcha2;
	var onloadCallback = function(){
		if ($('#contact_recaptcha').length > 0) {
			contact_recaptcha = grecaptcha.render("contact_recaptcha", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
		}

		$('#myModal').on('shown.bs.modal', function () {
			captcha2 = grecaptcha.render("captcha2", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
		});
		$('#myModal').on('hide.bs.modal', function () {
			$("#recaptcha2").empty();
		});
	};
</script>

<script>
$(document).ready(function() {

setTimeout( function(){ 
	$.getScript('https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit', function () {});  
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T3GQ7ZD');
},
3000);	 
	 
	jQuery("#myForm").validate({  
		normalizer: function(value) {
			// Trim the value of every element
			return $.trim(value);
		  },
		submitHandler: function(form) {
			var response = grecaptcha.getResponse(captcha2);
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!! , please try again later.");
				
			  } 
			  else {
					/*data_form = jQuery("#myForm").serializeArray();
					//data_form.append('attach_file', file, file.name);
					jQuery.ajax({
					url: "<?php echo $_SERVER['REQUEST_URI'];?>",
					type: "POST",		
					data: data_form,
					async: false,
					cache: false,
					contentType: false,
					enctype: 'multipart/form-data',
					processData: false,
					success: function (html) {
						var obj = jQuery.parseJSON(html);
							if(obj.restype=="success")
							{
								//window.location="<?php echo SITE_URL;?>thankyou";
							}
							else
							{
								alert(obj.error);
							}
						}
					});*/
					form.submit();
			  }
			return false;	
		}
  });
  
  jQuery("#careerform").validate({  
		normalizer: function(value) {
			// Trim the value of every element
			return $.trim(value);
		  },
		submitHandler: function(form) {
			var response = grecaptcha.getResponse(captcha2);
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!! , please try again later.");
				
			  } 
			  else {
					/*data_form = jQuery("#myForm").serializeArray();
					//data_form.append('attach_file', file, file.name);
					jQuery.ajax({
					url: "<?php echo $_SERVER['REQUEST_URI'];?>",
					type: "POST",		
					data: data_form,
					async: false,
					cache: false,
					contentType: false,
					enctype: 'multipart/form-data',
					processData: false,
					success: function (html) {
						var obj = jQuery.parseJSON(html);
							if(obj.restype=="success")
							{
								//window.location="<?php echo SITE_URL;?>thankyou";
							}
							else
							{
								alert(obj.error);
							}
						}
					});*/
					form.submit();
			  }
			return false;	
		}
  });
  
  jQuery("#careerresume").validate({  
		normalizer: function(value) {
			// Trim the value of every element
			return $.trim(value);
		  },
  });

});

</script>
<!--back-to-top-button-->
<script>
$(window).scroll(function() {
  if ($(window).scrollTop() > 1200) {
    $('.back-to-top-button').addClass('show');
  } else {
    $('.back-to-top-button').removeClass('show');
  }
});

$('.back-to-top-button').on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '1200');
});
</script> 

<!--type number script-->
<script>
jQuery("#ContactNum").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 48 && charCode <= 57) || (charCode == 8) || (charCode == 9)) {
    					return true;			
    		}else{
						return false;
    		}  
    });
</script>
<!--footer-->

<!--page script-->
<script type="text/javascript">
	 	$(".input").focus(function() {
	 		$(this).parent().addClass("focus");
	 	})
</script>
<script type="text/javascript">
       
       $('#submit').click(function(){

        var name=$('#name').val();
        var email=$('#email').val();
		var message=$('#msg').val();
		var phone =$('#phone').val();
		var captcha =$('#captcha').val();
        
     
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
 
        
        
        if(name=='')
        {
          //alert('Please Enter Full Name');
		  $("#errors").html("<span style='color:red;'>"+"Please Enter Full Name</span>");
          $("#errors").fadeIn();
          $( "#name" ).focus();
          return false;
        }
        else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
          //alert("Please enter a valid e-mail address ");  
		  $("#errorsOne").html("<span style='color:red;'>"+"Please enter a valid e-mail address</span>");
          $("#errorsOne").fadeIn();
          $( "#email" ).focus();
          return false;  
          } 
          else if(phone=='')
        {
          //alert('Please Enter Phone Number');
		  $("#errorsTwo").html("<span style='color:red;'>"+"Please enter phone number</span>");
          $("#errorsTwo").fadeIn();
          $( "#phone" ).focus();
          return false;
        }
		else if(message=='')
        {
          //alert('Please Enter message');
		  $("#errorsThree").html("<span style='color:red;'>"+"Please Enter message</span>");
          $("#errorsThree").fadeIn();
          $( "#msg" ).focus();
          return false;
        }
		
		else if(captcha=='')
        {
          //alert('Please Enter message');
		  $("#errorsFour").html("<span style='color:red;'>"+"Please Enter valid captcha</span>");
          $("#errorsFour").fadeIn();
          $( "#captcha" ).focus();
          return false;
        }
		
		else{
		var form = $('#send-contact-form')[0];
        var data = new FormData(form);
		        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/includes/captcha-validate",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (resData) {
               //alert("We have recieved your feedback! Thank you");
			if (resData == 1) {
				new FormData(form);
		        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/ajax-ecom-demo",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
               //alert("We have recieved your feedback! Thank you");
               location.reload();
			   window.location="<?php echo SITE_URL;?>thankyou";
            },
        });
			} else {
				alert("captcha not valid");
			}
            },
        });
		
		
		
		}
		return false;

       });
</script>
<!--page script-->
 