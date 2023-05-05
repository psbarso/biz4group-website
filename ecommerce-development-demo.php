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
		<title>ReactJS eCommerce Solution Provider Company in USA</title>
		<meta name="Title" content="ReactJS eCommerce Solution Provider Company in USA" />
		<meta name="Description" content="HIre react js, node js expert developers for best eCommerce website development. Get your complete ecom solution within 5-7 weeks." />
    	<meta property="og:url" content="<?php echo SITE_URL; ?>ecommerce-business-solutions"/>
		<meta property="og:title" content="ReactJS eCommerce Solution Provider Company in USA"/>
		<meta property="og:site_name" content="Biz4Group"/>
		<meta property="og:description" content="HIre react js, node js expert developers for best eCommerce website development. Get your complete ecom solution within 5-7 weeks."/>
		<meta property="og:type" content="<?php echo SITE_URL; ?>ecommerce-business-solutions"/>
		<meta property="og:image" content=" <?php echo SITE_URL; ?>images/ecommerce-banner2-bg.jpg"/>
		<meta property="og:locale" content="en_us"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:url" content=" <?php echo SITE_URL; ?>ecommerce-business-solutions"/>
		<meta name="twitter:creator" content="@biz4group"/>
		<meta name="twitter:title" content="ReactJS eCommerce Solution Provider Company in USA"/>
		<meta name="twitter:description" content="HIre react js, node js expert developers for best eCommerce website development. Get your complete ecom solution within 5-7 weeks."/>
		<meta name="twitter:image" content=" <?php echo SITE_URL; ?>images/ecommerce-banner2-bg.jpg"/>
		<!--menu-->
		<!-- CORE CSS -->
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>images/favicon.png">
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/bootstrap.min.css?ver=2.9" media="all" async>
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/ecommerce-business-solutions.css?ver=2.9" media="all" async>
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
		<!--recaptcha-->
			<script>
				var contact_recaptcha_ecom;
				var onloadCallback_ecom = setTimeout(function(){
				if ($('#contact_recaptcha_ecom').length > 0) {
					contact_recaptcha_ecom = grecaptcha.render("contact_recaptcha_ecom", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
				}
			}, 2000);
			</script>
			<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback_ecom" async defer></script>
		<!--recaptcha-->
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
					<h1>Why Biz4Group for eCommerce solutions</h1>
					<ul>
						<li><i class="fa fa-check" aria-hidden="true"></i> Quick Time to Market <b>(5-7 weeks)</b></li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Better than Shopify, WordPress and Majento</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Development using latest technology stack (MERN)</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Fastest eCommerce business solution</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Say bye to monthly support cost</li>
						<li><i class="fa fa-check" aria-hidden="true"></i> Get a working <a href="https://www.biz4group.com/interactive-prototype" target="_blank"><b>eCommerce model in just $1k to $2k</b></a></li>
					</ul>
					<div class="ecom-action-btn">
						<a href="#ecom-client" class="ecom-different-action">Our esteemed clients</a>
						<a href="#ecom-work">Our Latest Work</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-5 col-xs-12">
				<div class="ecommerce-development-banner-img">
					<img style="width:100%;" src="https://www.biz4group.com/images/ecommerce-mern.png" alt="ecommerce-mern"/>
				</div>
				<!--<div class="formBox">
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
							<div id="contact_recaptcha_ecom" class="form-group" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
							<div id="errorsCaptcha" style="display:none;"></div>
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
				</div>-->
			</div>
		</div>
	</div>
</div>
</div>


<div class="develop-technology">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title" style="display: inline;">See Your Dream Project Turn into Reality</h2>
			<p class="home-layout-heading-pera" style="margin-top:20px;">With Biz4Group as your trusted eCommerce partner, your dream project is converted into a successful eCommerce business in no time. Get industry-leading features like AWS support, improved efficiency, quick delivery and other development perks for your project.</p>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecom2-icon1.svg">
					<h2>Quick Time to Market </h2>
					<p>We are always ready to tackle new challenges and we just can't keep our customers waiting. You'll hear from us in no time when you contact us. With our adept team and constant feedback, we can deliver your eCommerce project within 5 to 7 weeks.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecom2-icon2.svg">
					<h2>Improved Functionality</h2>
					<p>Since our inception, we have established ourselves as a leading IT solutions provider allowing us with necessary experience and expertise to choose the best possible technology stack for your project. Our pool of expert developers build a robust eCommerce solution better than Shopify, WordPress and Magento.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecom2-icon3.svg">
					<h2>Latest technology stack (MERN)</h2>
					<p>We are JavaScript experts and our eCommerce solutions use modern development stacks built with a single programming language and MERN, which gives your platform an edge over others in terms of speed. Our e-Commerce solutions are designed to offer an amazingly quick and reliable performance across both the consumer and seller ends.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecom2-icon4.svg">
					<h2>Fastest eCommerce business solution</h2>
					<p>The key functionalities of various eCommerce platforms usually remain the same. What comes across as a differentiator is the user interface. Our UI and UX developers have both the prowess and vision for creating a UI that will not only make your customers' shopping experience delightful but also help you achieve your business objectives.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecom2-icon5.svg">
					<h2>Say bye to monthly support cost</h2>
					<p>At Biz4Group we believe in going an extra mile to offer nothing but the best to our customers. We build our solutions around a robust architecture and adaptive framework in order to cut down on maintenance and downtime. You won't have to spend resources on cumbersome maintenance routines and instead, you’ll be able to focus more on your business.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="develop-technology-box">
					<img class="lazy" data-src="images/ecom2-icon6.svg">
					<h2>AWS Partner Network (APN)</h2>
					<p>Biz4Group is an advanced APN Technology Partner. Our clients get free premium AWS support for efficient and faster deployment of their eCommerce platform. This also curbs down the total development cost which can further benefit our clients across various geographies and verticals.</p>
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
				<a href="https://www.biz4group.com/contact-us" class="pulse">Get free consultation from our technical experts</a>
			</div>
		</div>
	</div>
</div>

 <div class="home3-trusted" id="ecom-client">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h2 class="home-layout-heading-title">Trusted by Fortune 500 Companies and Startups</h2>
				</div>
				<div class="home3-trusted-m wow fadeInLeft">
					<ul>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img1.png" alt="" class="adobe-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img2.png" alt="" class="google-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/aws.png" alt="" class="aws-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img4.png" alt="" class="appweigh-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/trusted-img5.png" alt="" class="comparelegal-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo9.png" alt="" class="cf-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo3.png" alt="" class="ifd-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/nvzn-logo.png" alt="" class="aamp-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo6.png" alt="" class="herdlogix-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo4.png" alt="" class="homeon-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/home2-client-logo2.png" alt="" class="noy-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/ge.png" alt="" class="gedigital-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/tekchoice.png" alt="" class="tekchoice-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/creekside-logo.png" alt="" class="herdlogix-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/verizon.png" alt="" class="verizon-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/holtec.png" alt="" class="holtec-logo-img lazy">
							</div>
						</li>

						<li>
							<div class="home3-trusted-img">
								<img data-src="images/ag-home-logo.png" alt="" class="ag-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/bmm-home-logo.png" alt="" class="bmm-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/bounce-home-logo.png" alt="" class="bounce-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/celebratube-home-logo.png" alt="" class="celebratube-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/lamar-home-logo.png" alt="" class="lamar-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/racooda-logo.png" alt="" class="silvevado-home-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/peakio-logo.png" alt="" class="peakio-logo-img lazy">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img data-src="images/integ-logo.png" alt="" class="silvevado-home-logo-img lazy">
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
					<p>We began in <b>Orlando</b>, <b>FL</b> in 2013 and currently operating in the US state of <b>California</b> and <b>Florida</b>. Biz4Group has now established itself as a leading services and solution provider in cutting-edge technologies like <b>IoT</b>, <b>AI</b>, and <b>Blockchain</b> across the global IT realm. Our expertise in popular modern technology stacks like <b>MERN</b> has brought us to the forefront of the mainstream IT industry and our two decades of experience in the <b>ecommerce development</b> domain and technical prowess shows in the success stories of our large group of satisfied clients.</p>
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
				<div class="home3-about-img ecom-abt-slider owl-carousel owl-theme">
					<div class="home3-about-slider item">
						<img src="images/location-orlando-landing.jpg" alt="">
					</div>
					<div class="home3-about-slider item">
						<img src="images/office-photo-landing.jpg" alt="">
					</div>
					<div class="home3-about-slider item">
						<img src="images/home2-about-landing.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>

	<div class="admin-app-tab" style="background-color:#fff;">
		<div class="container">
			<div class="text-center text-margin">
				<h2 class="home-layout-heading-title" style="display: inline;">One Stop Solution for All Your eCommerce Needs</h2>
				<p style="margin-top: 20px;">Modern eCommerce requirements need modern solutions. Intelligently curated by our team of experts including UI specialists, experience designers, technical architect and developers, it is the one eCommerce solution you’ll ever need.</p>
				<p><b>Biz4Group eCommerce solutions come with a load of advanced features, some of the prominent ones are:</b></p>
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
	
	 <div class="services-offered">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title">Coupling eCommerce with Modern Technology</h2>
			<!--<br><br>
			<p class="home-layout-heading-pera">Ecommerce is not the new trend of the market but it certainly is growing exponentially day by day. Whether you deal directly with customers or your clients do, it is really important to know your business requirements. These requirements form the criteria for selecting your service provider for your ecommerce solution. We can put the most common ecommerce services into these brackets: Business to Business (B2B), Business to Consumer (B2C), Consumer to Business (C2B) and Consumer to Consumer (C2C).</p>-->
		</div>
		<div class="services-offered-tab">
			<div class="row">
				<div class="col-md-4">
					<ul class="nav">
				    	<li class="active"><a data-toggle="tab" href="#menu1">Mobile Application</a></li>
				    	<li><a data-toggle="tab" href="#menu3">eCommerce Chatbot</a></li>
				    	<li><a data-toggle="tab" href="#menu4">Business Intelligence</a></li>
						<li><a data-toggle="tab" href="#menu5">Secure Payment</a></li>
				  	</ul>
				</div>
				<div class="col-md-8">
					<div class="tab-content">
					    <div id="menu1" class="tab-pane fade in active">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/mcommerce-icon.png">
					    		<h2>Mobile Application</h2>
					    	</div>
					      <p>mCommerce extends the capability of eCommerce by giving everything right into the hands of the consumer. Our eCommerce solution also includes mobile ordering & payment and social eCommerce along with location-based eCommerce and in-store navigation to offer a consistent shopping experience across all devices.</p>
					    </div>
					    
					    <div id="menu3" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/ecommerce-chatbot-icon.png">
					    		<h2>eCommerce Chatbot</h2>
					    	</div>
					      <p>Continuous interaction with customers is vital to acquire larger customer base and for effective marketing. Advanced chatbots backed by AI and Machine Learning are being employed to improve the eCommerce vertical. Our experts can develop and integrate smart chatbot for your eCommerce platform that can interact with customers to facilitate an amazing shopping experience.</p>
					    </div>
					    <div id="menu4" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/business-intelligence-icon.png">
					    		<h2>Business Intelligence</h2>
					    	</div>
					      <p>Reporting and performance analytics tools come integrated with your eCommerce application. Advanced reports like popular products, abandoned carts info, sales, etc. provide you a clearer insight of your customer base and can help you to tap into the potential of your company to grow your business.</p>
					    </div>
						<div id="menu5" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img class="lazy" data-src="images/secure-payment-icon.svg">
					    		<h2>Secure Payment</h2>
					    	</div>
					      <p>An easy and secure payment system holds utmost value when it comes to a modern eCommerce solution. Our team of expert developers integrate secure payment protocols like SSL and encryption models to ensure advanced payment safety during online transactions.</p>
					    </div>
				  	</div>
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
										<img src="images/goodfirms-batch1.png"/>	
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
										<img src="images/clutch-batch2.png"/>	
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
										<img src="images/goodfirms-batch3.png"/>	
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
										<img src="images/toprated-batch4.png"/>	
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
										<img src="images/techreviewer.png"/>	
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
										<img src="images/badges-mobile-app-developers-2020.png"/>	
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
										<img src="images/fl-orlando-web-design-2020.png"/>	
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
			<h2 class="home-layout-heading-title">Key Offerings For You</h2>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail ecom-highlights-details">
					<div class="box-border"></div>
					<h4>Higher Scalability</h4>
					<p>Our technical experts have a bountiful experience in eCommerce development and know exactly what goes into each kind of platform. Application development using MERN is powered by a schema-less NoSQL database and minimalist web framework that allows for efficient and fluent scaling on demand.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail ecom-highlights-details">
					<div class="box-border"></div>
					<h4>Cost Effective</h4>
					<p>Every modern eCommerce business today needs an interactive, feature-rich and market-oriented application that can foster its business and economic goals. With extensive code sharing, module reusability and our whopping experience in eCommerce development, businesses can acquire efficient business suite for a lesser cost.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail ecom-highlights-details">
					<div class="box-border"></div>
					<h4>Seamless Migration</h4>
					<p>Migrating legacy applications to a modern tech stack can help businesses cut down on the maintenance cost and performance fall off. Our custom eCommerce platforms use RESTful APIs to help improve functionality and accessibility while reducing cost and efforts required on existing solutions.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail ecom-highlights-details">
					<div class="box-border"></div>
					<h4>Upgraded Data Protection</h4>
					<p>Strong protocols against cyber-attacks not only saves the business platform against potential data threats but also upholds customer. B4G eCommerce solutions are developed using ExpressJS framework which not only improves the code and user data security but also offers high compatibility with dynamic servers.</p>
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

<!--	<div class="pricing-faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
			<div class="text-center">
				<h2 class="home-layout-heading-title">Frequently Asked Questions</h2>
			</div>
				<div class="faq-accordion">
				<div class="panel-group" id="accordion">
				
				 <!--1--
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
				
				<!--2--
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
				  <!--3--
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
				  <!--4--
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
</div>-->
	
	<div class="simple-color" id="ecom-work">
		<div class="container-fluid">
			<div class="combine-color">
				<div class="idea-png">
					<img class="lazy" data-src="images/idea_png.png"/>
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
					<h2>eCommerce Success Stories</h2>
				</div>
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<img src="images/clickable-prototype4.jpg"/>
						<a href="https://www.biz4group.com/portfolio-desc-racooda">View Details</a>
					</div>
					
					<div class="item">
						<img src="images/clickable-prototype2.jpg"/>
						<a href="https://www.biz4group.com/peakio-interactive-prototype">View Details</a>
					</div>
					<div class="item">
						<img src="images/clickable-prototype5.jpg"/>
						<a href="https://www.biz4group.com/covix-interactive-prototype">View Details</a>
					</div>
					<div class="item">
						<img src="images/clickable-prototype6.jpg"/>
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
					<img class="lazy" data-src="https://www.biz4group.com/images/7-reasons-to-choose-mern-stack-for-e-commerce-development.jpg" alt="">
					<div class="services-letest-blog-box-detail">
						<!--<span>20th December 2019</span>-->
						<h3>7 Reasons to Choose MERN Stack for E-Commerce Development</h3>
						<a href="https://www.biz4group.com/blog/7-reasons-to-choose-mern-stack-for-e-commerce-development">More Details > </a>	
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<div class="services-letest-blog-box">
					<img class="lazy" data-src="https://www.biz4group.com/images/6-reasons-why-agile-methodology-is-perfect-for-developing-eCommerce-projects.jpg" alt="">
					<div class="services-letest-blog-box-detail">
						<!--<span>20th December 2019</span>-->
						<h3>6 Reasons Why Agile Methodology is Perfect for Developing eCommerce Projects</h3>
						<a href="https://www.biz4group.com/blog/6-reasons-why-agile-methodology-is-perfect-for-developing-ecommerce-projects">More Details > </a>	
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<div class="services-letest-blog-box">
					<img class="lazy" data-src="https://www.biz4group.com/images/why-security-and-privacy-control-are-crucial-while-implementing-an-ecommerce-solution.jpg" alt="">
					<div class="services-letest-blog-box-detail">
						<!--<span>20th December 2019</span>-->
						<h3>Why Security And Privacy Control Are Crucial While Implementing An eCommerce Solution?</h3>
						<a href="https://www.biz4group.com/blog/why-security-and-privacy-control-are-crucial-while-implementing-an-ecommerce-solution">More Details > </a>	
					</div>
				</div>
			</div>
		
		</div>
		<div class="letest-blog-more-btn">
			<a href="https://www.biz4group.com/blog/category/eCommerce">View All Blog Posts <img class="lazy" data-src="images/view-all-blog-post-icon.png"></a>
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
            items:2,
            nav:true,
            loop:false
        },
		1000:{
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
  
  jQuery("#formNewsletterScription").validate({
		submitHandler: function(form) {
			 
			data_form = jQuery("#formNewsletterScription").serializeArray();
			jQuery.ajax({
			url: "<?php echo $_SERVER['REQUEST_URI'];?>",
			type: "POST",		
			data: data_form,
			success: function (html) {
				var obj = jQuery.parseJSON(html);
					if(obj.restype=="success")
					{
						window.location="<?php echo SITE_URL;?>thankyou";
					}
					else
					{
						alert(obj.error);
					}
				}
			});
			  
			return false;	
		}
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
		
		else {
			var response = grecaptcha.getResponse(contact_recaptcha_ecom);
			 
			  if (response.length === 0) { 
				
				  //alert("Invalid Captcha!! , please try again later.");
				  $("#errorsCaptcha").html("<span style='color:red;'>"+"Invalid Captcha!! Please try again</span>");
				  $("#errorsCaptcha").fadeIn();
				
		} 
		
		else{
		var form = $('#send-contact-form')[0];
        var data = new FormData(form);
		        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/ajax-ecom",
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
		}
		}
		return false;

       });
</script>
<!--page script-->
 