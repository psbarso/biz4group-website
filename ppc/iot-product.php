 
<?php
require_once('../includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>IoT Product</title>
		<meta name="Title" content="IoT Product" />
		<meta name="Description" content="Looking for IoT Product Development companies in USA? We are serving Fortune 500 Companies since last 13 Years and rank among top 50 IoT Companies in the world." />
		<meta property="og:url" content=" <?php echo SITE_URL; ?>iot-product"/>
		<meta property="og:title" content="IoT Product"/>
		<meta property="og:site_name" content="Biz4Group"/>
		<meta property="og:description" content="Looking for IoT Product Development companies in USA? We are serving Fortune 500 Companies since last 13 Years and rank among top 50 IoT Companies in the world."/>
		<meta property="og:type" content=" <?php echo SITE_URL; ?>iot-product"/>
		<meta property="og:image" content=" <?php echo SITE_URL; ?>images/iot-banner2-bg.jpg"/>
		<meta property="og:locale" content="en_us"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:url" content=" <?php echo SITE_URL; ?>iot-product"/>
		<meta name="twitter:creator" content="@biz4group"/>
		<meta name="twitter:title" content="IoT Product"/>
		<meta name="twitter:description" content="Looking for IoT Product Development companies in USA? We are serving Fortune 500 Companies since last 13 Years and rank among top 50 IoT Companies in the world."/>
		<meta name="twitter:image" content=" <?php echo SITE_URL; ?>images/iot-banner2-bg.jpg"/>
		<meta name="robots" content="noindex" />
		
		<!-- CORE CSS -->
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>images/favicon.png">
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/bootstrap.min.css?ver=2" media="all">
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/style.css?ver=6.6" media="all">
		<script  type="text/javascript">
	var contact_recaptcha;
	var contact_recaptcha_ppc;
	var captcha2_ppc;
    var captcha2;
	var onloadCallback_ppc = function(){
		if ($('#contact_recaptcha').length > 0) {
			contact_recaptcha = grecaptcha.render("contact_recaptcha", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
		}
		if ($('#contact_recaptcha_ppc').length > 0) {
			contact_recaptcha_ppc = grecaptcha.render("contact_recaptcha_ppc", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
		}
		if ($('#captcha2_ppc').length > 0) {
			captcha2_ppc = grecaptcha.render("captcha2_ppc", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
		}
	};
</script>
		 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback_ppc"></script>

		
     

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
	
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T3GQ7ZD');</script>
</head>

 <body>
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3GQ7ZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<!-- End Google Tag Manager (noscript) -->
<div class="header-menu-m">
	<div class="header-menu affix-top" data-spy="affix" data-offset-top="47">
		<div class="container-fluid">
			<div class="row header-top-address">
				<div class="col-md-12">
					<div class="header-top-menu-m text-right">
					<ul>
					<li><img src="<?php echo SITE_URL;?>images/mobile-icon.png" alt=""><a href="tel:+16143296463" itemprop="telephone"><p style="margin:0 0 0px">+1 (614) 329-6463</p></a></li>
					<li><img src="<?php echo SITE_URL;?>images/envelope-icon.png" alt=""> <a href="mailto:info@biz4group.com"> info@biz4group.com </a></li>
					</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-3">
					<div class="header-logo">
						<a href="https://www.biz4group.com"><img src="<?php echo SITE_URL;?>images/logo-new.png" alt=""></a>
					</div>
				</div>
				<div class="Col-md-10 col-sm-9 col-sx-9">
					<div class="header-request-demo">
						<a href="#" data-toggle="modal" data-target="#myModal" class="pulse-m2">Request A Demo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<div class="req-quote">
		<a href="#" data-toggle="modal" data-target="#myModal" class="btn-hover color-4">Request a Quote</a>
	</div>

 
<!--style-->
<style>
label.error {
	color: red !important;
    text-align: left;
    display: block;
    font-weight: normal !important;
}
.header-menu-m{
	position: static;
}
.services-why-biz4group .business-highlights-detail{
	min-height: 295px;
}
.services2-layout{
	padding-top: 70px;
}

.header-request-demo{
	text-align:right;
	padding: 20px 0px;
}

.header-request-demo a{
    background-color: #39c;
    color: #fff;
    border-radius: 4px;
    padding: 10px 15px;
    margin-left: 10px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 13px;
}

.header-request-demo a:hover{
	text-decoration:none;
}

.connect-iot-experts{
	padding:40px 0px;
}

.iot-experts-form {
    background-color: #f2f2f2;
    padding: 30px 20px 20px;
    position: relative;
    width: 100%;
    top: 0;
    color: #fff;
    height: auto;
    border: 1px solid #ddd;
    box-shadow: 0 5px 5px #ddd;
	margin-bottom: 20px;
}

.iot-experts-form h3 {
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 32px;
    width: 100%;
    line-height: 42px;
    font-weight: 600;
    color: #253c58;
}

.iot-experts-form h3 span {
    color: #39c;
    display: inline-block;
}

.iot-experts-form .form-group {
    margin-bottom: 25px;
    font-size: 12px;
    font-weight: 400;
	position: relative;
}

.iot-experts-form .form-group .form-control{
    width: 100%;
    box-shadow: 0 2px 2px #ddd;
    padding: 8px 10px;
    border-radius: 5px;
    border: none;
    color: #333;
}

.iot-experts-form .form-group textarea {
    height: 80px;
    resize: none;
}

.iot-experts-form .request-demo-btn{
	text-align:center;
}

.iot-experts-form .request-demo-btn button {
    background-color: #39c;
    padding: 8px 30px;
    font-size: 15px;
    font-weight: 400;
    border: none;
    margin-top: 15px;
}

.iot-experts-text {
    padding: 0 10px 15px;
}

.iot-experts-text h3 {
    color: #253c58;
    font-size: 24px;
    font-weight: 400;
	margin-top: 0px;
}

.iot-experts-text p {
    font-size: 16px;
    font-weight: 500;
}

.iot-experts-text ul {
    margin: 0 auto;
}

.iot-experts-text ul li {
    list-style: none;
    display: block;
    width: 100%;
    text-align: left;
    font-weight: 400;
    margin-top: 12px;
    position: relative;
}

.iot-experts-text ul li::after {
    position: absolute;
    content: "\f18e";
    top: 0;
    left: -22px;
    font-size: 16px;
    font-family: fontawesome;
    color: #39c;
}

.iot-experts-demovideo iframe {
    width: 100%;
    height: 410px;
}

.solution-free-conultation .solution-free-consultation-m {
    text-align: center;
    margin-top: 10px;
	margin-bottom: 40px;
}

.solution-free-conultation .solution-free-consultation-m a {
    background-color: #ff7534;
    display: inline-block;
    padding: 14px 40px;
    font-size: 17px;
}

.solution-free-conultation .solution-free-consultation-m a i.fa {
    margin-left: 10px;
}
.solution-free-conultation .solution-free-consultation-m a, .solution-free-conultation .solution-free-consultation-m a:hover {
    color: #fff;
    text-decoration: none;
}

/*.footer-section .footer-mid, .footer-section .footer-bottom{
	display:none;
}*/

@media screen and (max-width: 767px){
	.header-menu {
		padding: 15px 0px;
	}
	.header-logo{
		display: block; 
	}
	
	.header-logo img{
		min-width: 150px;
	}
	.services-offered .tab-content .tab-pane {
		min-height: auto;
	}
}


.home3-about {
    background-color: #f5f5f5;
}

.services-offered .home-layout-heading-title:after {
    border-color: #dae8f5;
}

.services-offered .home-layout-heading-title {
    color: #324762;
}

.services-offered .nav>li {
    border: 2px solid #324762;
}

.services-offered .nav>li.active a {
    color: #ffffff;
	background-color: #324762;
}

.services-offered .nav>li a {
    color: #324762;
}

.services-offered .tab-content .tab-pane {
    border: 2px solid #324762;
	min-height: 370px;
}

.services-offered .tab-content .tab-pane .services-offered-tab-head h2 {
    color: #324762;
}

.services-offered .tab-content .tab-pane p {
    color: #324762;
}

.services-offered {
    background-color: #ffffff;
}

.services-offered .nav>li.active:after {
    border-left: 10px solid #324762;
}

.services-why-biz4group {
    background-color: #efefef;
}

.business-highlights-detail {
	background-color: #ffffff;
}
.develop-technology-box {
    min-height: 295px;
}

.services-offered .home-layout-heading-pera {
    color: #666;
}

</style>

<!--main start-->
<!-- section1 -->
<div class="services-top-detail" style="background-image:url(https://www.biz4group.com/images/service-page-banner-iot-1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-5 col-sm-7 col-sm-offset-5">
				<div class="services-top-contant">
					<h1>Pre-configured IoT Product for <br><span>Small, Medium, And<br> Large Scale Enterprises</span></h1>
					<br>
					<a class="theme-default-btn pulse-m2 span-uppercase" href="#" data-toggle="modal" data-target="#myModal">Talk to Our IoT Experts</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!--Connect to our IoT Experts-->
	<div class="connect-iot-experts">
		<div class="container">
			<div class="row">
			
				<div class="col-md-5 col-sm-6">
					<div class="iot-experts-form contact-form">
					   <h3>Connect to our <span> IoT Experts</span></h3>
					   <form id="send-contact-form" method="post">
						  <div class="form-group">
							 <input type="text" class="LoNotSensitive form-control field-text" id="name" name="name" placeholder="Name">
						  </div>
						  <div class="form-group">
							 <input type="email" class="LoNotSensitive form-control field-text" id="email" name="email" placeholder="Email Address...." >
						  </div>
						  <div class="form-group">
							 <input type="number" class="LoNotSensitive form-control field-text" id="phone"  name="phone" placeholder="Phone Number">
						  </div>
						  <div class="form-group">
							 <input type="text" class="LoNotSensitive form-control field-text" id="subject" name="subject"  placeholder="Subject: You expect in our response(optional)">
						  </div>
						  <div class="form-group">
							 <textarea id="msg" class="LoNotSensitive form-control field-textarea" name="msg" placeholder="Your Message..."></textarea>
						  </div>
						  <div id="contact_recaptcha_ppc" class="form-group" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
						  <div class="form-group request-demo-btn">
							 <button type="submit" id="submit" class="awe-btn awe-btn-13">SEND</button>
						  </div>
						  <div id="contact-content"></div>
					   </form>
					</div>
				</div>
				
				<div class="col-md-7 col-sm-6">
					<div class="iot-experts-text">
					  <h3>Personalized demo of Biz4Intellia IoT</h3>
					  <p>We will be pleased to present you how Biz4Intellia IoT solutions can help you to tap the unexplored growth potentials.</p>
					  <ul>
						 <li>A brief discussion into what Biz4Intellia can do to optimize your business operations.</li>
						 <li>Live IoT product demo with insights into how to get the best out of IoT.</li>
					  </ul>
					</div>
					<div class="iot-experts-demovideo">
					 <!-- <iframe src="https://www.youtube.com/embed/V8xKbueKdt4" allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0"></iframe>-->
						
						<div class="youtube" id="V8xKbueKdt4"></div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
<!--Connect to our IoT Experts-->

<!--Who We are-->
	<div class="home3-about">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-6">
					<div>
						<h2 class="home-layout-heading-title">Who We are</h2>
					</div>
					<div class="home3-about-content wow fadeInLeft">
						<h4>Since its inception in 2003, Biz4Group is determined to reshape the world of IT globally.</h4>
						<p>Biz4Group began in <span>Orlando</span>, <span>FL</span> as an IT service provider dealing in disruptive modern technologies like <span>IoT</span>, <span>AI</span> and <span>Blockchain</span> with the idea to become a global leader in various industries. We have assisted many budding startups and enterprises by escorting their business idea onto a digital stage. In the last <span>15+ years</span>, we have successfully established ourselves as a leading IT organization with over <span>300 satisfied customers across US</span>. A dedicated team of <span>200+ professional developers</span> and workforce of the most skilled personnel account for our success in the <span>500+ projects</span> we have accomplished so far. With continued efforts, we are determined to become a force to reckon with on the global platform.</p>
						
					</div>
				</div>
				<div class="col-md-5 col-sm-6">
					<div class="home3-about-img owl-carousel owl-theme">
						<div class="home3-about-slider item">
							<img src="../images/location-orlando.jpg" alt="">
						</div>
						<div class="home3-about-slider item">
							<img src="../images/office-photo.jpg" alt="">
						</div>
						<div class="home3-about-slider item">
							<img src="../images/home2-about.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	 </div>
<!--Who We are-->

<!-- section3 -->
<div class="services2-layout">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title" style="display: inline;">IoTize Your Business With Best In Class Internet Of Things Products </h2>
			<br><br><br>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="services2-layout-text">
					<p>Different industrial verticals now need a single stop product that can offer a complete package of high-end and futuristic features of IoT technology. Biz4Group presents the best Internet of Things products that are developed as per the inclination of businesses towards data security, analytics, and telemetry. </p>
					<p>Implementation of IoT product development is a daunting task testing any team’s technical and organizational skills. Fortunately, you have us! We are skilled and equipped with the requisites, including experienced developers, sophisticated infrastructure, and analytics tools to shape things in the right manner for your business.</p>
					<p>As one of the best IoT development companies in the world, we at Biz4Group offer our pre-configured IoT product to companies in different industry segments of oil & gas, water, energy, transportation, farming, and healthcare. Our completely packed IoT solution offers amazing benefits that revolutionize inspection, maintenance, and decision making tasks. It is an amalgamation of Internet of Things application; both web and mobile that allow users to gain access to required data from far located remote assets.</p>
					<p>Our critically chosen and deliberately implemented business practices, complemented with streamlined methods, serve advance business automation and computing needs. We are an affiliated member of leading organizations and have an alliance with leading industry experts to customize our product and offerings to high quality and make them useful for your business.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section3 -->

<!--free-conultation-->
<div class="solution-free-conultation">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="solution-free-consultation-m">
               <a href="#"  data-toggle="modal" data-target="#myModal">TALK TO OUR EXPERTS! CLICK FOR A FREE CONSULTATION! <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--free-conultation-->

<!--develop-technology-->
<div class="develop-technology">
   <div class="container">
      <div class="text-center">
         <h2 class="home-layout-heading-title" style="display: inline;">Top-Notch IoT Features - That Will Fuel Your Enterprise Growth</h2>
         <p class="home-layout-heading-pera" style="margin-top:10px;">At Biz4Group we leverage the competencies of our IoT product Intellia IoT to develop innovative solutions that will elevate your business to new heights. Some high-end features of our IoT product are:</p>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-6">
            <div class="develop-technology-box">
               <h2>End to End IoT solution</h2>
               <p>We at Biz4Group offer a single stop solution for all your problems. Our product is a series of completely packed digital dashboards that enable users to access data variables that they want to keep an eye on. It is the perfect combination of an IoT platform suite and business services that will allow you to make smart business-oriented decisions.</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="develop-technology-box">
               <h2>Predictive Analytics</h2>
               <p>Our platform is embedded with advanced analytics features that develop useful insights in the form of notifications and recommendations. Predictive analytics will let you forecast the occurrence of a particular action before it even occurs. This will allow you to make informed decisions to either prevent or support that action.</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="develop-technology-box">
               <h2>Flexible, Modular, and Scalable</h2>
               <p>We understand that your business is not a single time establishment. As your business will grow, so will your requirement for a more scalable monitoring solution that can gather data from new endpoints. Our highly scalable platform is hence the perfect pick for you to add new endpoints for monitoring different parametric values as your business grows.</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="develop-technology-box">
               <h2>Customizable Platform</h2>
               <p>Our platform is a series of intuitive dashboards that can be integrated with more than 30 device types within minutes. These devices are data-gathering sensors and meters that measure parameters such as temperature, location, pressure, etc. However, our product is completely customizable and can be modified according to your need.</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="develop-technology-box">
               <h2>Complete data management</h2>
               <p>The platform is embedded with advanced data storage and execution capabilities enabling extraction of required information from endpoints. The data is compiled and tabulated into graphical representation on the platform itself. By using this information and graphs you can create valuable insights for your company to enhance its efficiency and reduce operational cost.</p>
            </div>
         </div>
		 <div class="col-md-4 col-sm-6">
            <div class="develop-technology-box">
               <h2>Real-time monitoring</h2>
               <p>Internet of Things incorporates telemetry capabilities that allow users to monitor the condition and performance of an asset from remote locations. Real-time monitoring is the core functionality of our product that allow companies to distantly monitor essential variables of assets through our wide range of sensors, gateways, and other electronic devices.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!--develop-technology-->

<!-- creative and impactful -->
<div class="home2-get-quote">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Are you looking to build something creative and impactful?</h4>
				<p>Act Before it’s Too Late! Get the Free Consultation from Our Experts Now!</p>
				<a href="#"  data-toggle="modal" data-target="#myModal">Send us Your Biggest Challenge</a>
			</div>
		</div>
	</div>
</div>
<!-- creative and impactful -->

<!-- section9 -->
<div class="services-offered">
	<div class="container">
		<div class="text-center">
         <h2 class="home-layout-heading-title" style="display: inline;">Range of Best Internet of Things Products for Multi-Purpose Usage</h2>
         <p class="home-layout-heading-pera" style="margin-top:10px;">Employing Sensors and Gateways for  broad connectivity</p>
		</div>
		<div class="services-offered-tab">
			<div class="row">
				<div class="col-md-4">
					<ul class="nav">
				    	<li class="active"><a data-toggle="tab" href="#menu1">Product Consulting</a></li>
				    	<li><a data-toggle="tab" href="#menu2">Product Design</a></li>
				    	<li><a data-toggle="tab" href="#menu3">Data Analytics</a></li>
				    	<li><a data-toggle="tab" href="#menu4">IoT Integration</a></li>
				    	<li><a data-toggle="tab" href="#menu5">Wireless Technology</a></li>
				  	</ul>
				</div>
				<div class="col-md-8">
					<div class="tab-content">
					    <div id="menu1" class="tab-pane fade in active">
					    	<div class="services-offered-tab-head">
					    		<img src="../images/iot-product-consulting1.png">
					    		<h2>Product Consulting</h2>
					    	</div>
					      <p>We help businesses transform raw ideas into mind-blowing products. Our avant-garde consulting services lead your business to success shores. We assist in rapid prototyping, product strategizing, complete development, and market launch. We also help in scaling it up from manufacturing and marketing perspectives for quick growth.</p>
					    </div>
					    <div id="menu2" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img src="../images/iot-product-design2.png">
					    		<h2>Product Design</h2>
					    	</div>
					      <p>We lend our support for product designing as well. Rely on our stellar designers who creatively yet with a practical mindset, design market-ready products. We design products while keeping manufacturing limitations in mind. The products once designed are assembled, locally tested, and certified to fit the market. </p>
					    </div>
					    <div id="menu3" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img src="../images/iot-product-data-analytics3.png">
					    		<h2>Data Analytics</h2>
					    	</div>
					      <p>Applied analytics produces useful insights for businesses to make the right calls whenever required. The real-time data collection put through the process of advanced analysis yields values and results that are hard to ignore. Our team of analysts is proficient to create reports that impact user experience, customer engagement, and productivity.</p>
					    </div>
					    <div id="menu4" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img src="../images/iot-product-integration4.png">
					    		<h2>IoT Integration</h2>
					    	</div>
					      <p>An IoT-powered product is equipped with multi-purpose sensors that are engineered to perform different actions. Sensors range from position and movement to sound and light. We produce the best outcomes by using our expertise and experience in GPS and sensor technology to create intelligent and smart products. </p>
					    </div>
					    <div id="menu5" class="tab-pane fade">
					    	<div class="services-offered-tab-head">
					    		<img src="../images/iot-product-wireless-technology5.png">
					    		<h2>Wireless Technology</h2>
					    	</div>
					      <p>Wireless technology is one of the drivers of IoT and wearable products. For each product, it is necessary to choose the right set of technologies as they all are different and share very less or zero features. Our team of experts ensures that the right combination of technologies is selected based on the product’s requirements.</p>
					    </div>
				  	</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<!-- Why Biz4Group -->
<div class="services-why-biz4group wow fadeInDown">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title">Why Choose Biz4Group For IoT Solutions?</h2>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail business-highlights-box">
					<div class="box-border"></div>
					<h4>1)	Expert Consulting:</h4>
					<p>The expert IoT consulting offered by us makes the picture clearer for you in your service niche. Our (IoT) consulting services are designed to assist clients like you in revamping your business operations digitally and intelligently.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
				<div class="business-highlights-detail business-highlights-box">
					<div class="box-border"></div>
					<h4>2)	Rapid Delivery:</h4>
					<p>We deliver IoT solutions with minimal turnaround period for every solution and product we tend to offer. This quick time to market helps you to quickly benefit from the features of our IoT solution without any unnecessary delays.</p>
				</div>
				</div>
			<div class="col-md-4 col-sm-6 wow fadeInRight" data-wow-delay="0.6s">
				<div class="business-highlights-detail business-highlights-box">
					<div class="box-border"></div>
					<h4>3)	Transparency:</h4>
					<p>100% transparency is achieved as we offer progress reports, regular calls, and video conferences to aid, advise, and put clarity about the products. At the same time, we grant you all the required access to manage the tasks effectively.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="business-highlights-detail business-highlights-box">
					<div class="box-border"></div>
					<h4>4)	Flexible Engagement Models:</h4>
					<p>Based on the specific requirement of your project, we suggest you the most suitable and cost-effective pricing patten. Our dedicated team can sync with your preferred time and deliver the things you really need for your business in a pocket-friendly budget.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
				<div class="business-highlights-detail business-highlights-box">
					<div class="box-border"></div>
					<h4>5)	Long-Standing Partnerships:</h4>
					<p>Our clients end up becoming our technological partner. Our IoT services have helped us to form strong relationships with technological leaders and clients that help us to enhance the capabilities of our IoT solutions effectively.</p>
				</div>
				</div>
			<div class="col-md-4 col-sm-6 wow fadeInRight" data-wow-delay="0.6s">
				<div class="business-highlights-detail business-highlights-box">
					<div class="box-border"></div>
					<h4>6)	Robust IoT Architecture:</h4>
					<p>Our IoT product spreads across all the necessary layers or tiers of an end to end IoT solution. Its architecture allows us to deliver quick black-box IoT services and customize the platform as per your special requirement.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Why Biz4Group -->

<!-- FAQs -->
<div class="service-development-section">
	<div class="container">
		<div class="text-center">
			<h2 class="home-layout-heading-title" style="margin-bottom: 60px;">FAQs</h2>
		</div>
		<div class="service-development-accordion">
			<div class="panel-group" id="development-accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
				        <h4 class="panel-title">
				          	<a data-toggle="collapse" data-parent="#development-accordion" href="#development-collapse1">
				          	Which all industries need IoT Solutions?
					          	<div class="service-accordion-icons">
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-minus" aria-hidden="true"></i>
								</div>
							</a>
				        </h4>
				    </div>
				    <div id="development-collapse1" class="panel-collapse collapse in">
				        <div class="panel-body">
				        	<p>Major industries that work in water solution, transportation, oil & gas industry, energy industry depend on IoT solutions to a great extent. Apart from these, almost all other industry verticals and sectors have possibilities of IoT inclusion for business growth and sustenance.</p>
				        </div>
				    </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
				        <h4 class="panel-title">
				          <a class="collapsed" data-toggle="collapse" data-parent="#development-accordion" href="#development-collapse2">
				          	How scalable is Biz4Group IoT Solutions?
				          	<div class="service-accordion-icons">
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-minus" aria-hidden="true"></i>
								</div>
							</a>
				        </h4>
				    </div>
				    <div id="development-collapse2" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<p>The solutions offered by Biz4Group are highly scalable and can be configured as per personal needs. Whether it is required on a small scale or extensive projects, companies can benefit from our customizable IoT solutions. </p>
				        </div>
				    </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
				        <h4 class="panel-title">
				          <a class="collapsed" data-toggle="collapse" data-parent="#development-accordion" href="#development-collapse3">
				          	How cost-effective is it to implement IoT Solutions from Biz4Group? 
				          	<div class="service-accordion-icons">
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-minus" aria-hidden="true"></i>
								</div>
							</a>
				        </h4>
				    </div>
				    <div id="development-collapse3" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<p>Being the industry leaders in the IoT segment, Biz4Group always take a step ahead and provides the most competitive rates depending on the project size. Further, we feel proud in having a successful track record of maximizing ROI for our clients.</p>
				        </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading">
				        <h4 class="panel-title">
				          <a class="collapsed" data-toggle="collapse" data-parent="#development-accordion" href="#development-collapse4">
				          	How long does it take to develop an IoT Solution? 
				          <div class="service-accordion-icons">
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-minus" aria-hidden="true"></i>
								</div>
							</a>
				        </h4>
				    </div>
				    <div id="development-collapse4" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<p>Time taken to develop an IoT solution depends on the project requirement and its size. For a small-scale project, we can deliver a solution within four weeks, and as the project size increases, so does the time for solution development.</p>
				        </div>
				    </div>
				</div>
				<div class="panel panel-default">
				    <div class="panel-heading">
				        <h4 class="panel-title">
				          <a class="collapsed" data-toggle="collapse" data-parent="#development-accordion" href="#development-collapse5">
				          	Does Biz4Group also sell IoT Products? 
				          <div class="service-accordion-icons">
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-minus" aria-hidden="true"></i>
								</div>
							</a>
				        </h4>
				    </div>
				    <div id="development-collapse5" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<p>‘Biz4Intellia IoT’ is the state-of-the-art product that Biz4Group offers in the market. It comes with an array of sensors and Gateways that provide broad connectivity and helps in controlling the complete end-to-end production and delivery processes.</p>
				        </div>
				    </div>
				</div>
			</div> 
		</div>
	</div>
</div>
<!-- FAQs -->


<!-- section13 -->
<div class="simple-color">
	<div class="container-fluid">
		<div class="combine-color">
			<div class="idea-png">
				<img src="../images/idea_png.png"/>
			</div>
			<div class="color-heading">
				<h3>Looking to</h3>
				<h2>Convert your idea into a Profitable Business?</h2>
			</div>
			<div class="hover-talk">
				<a href="#"  data-toggle="modal" data-target="#myModal" class="theme-default-btn pulse-m2">Talk to Our Expert</a>
			</div>
		</div>
		<div class="grey-color">
			<div class="home3-layout-heading blue-heading">
				<h2>Our Recent Work</h2>
			</div>
			<div id="owl-demo" class="owl-carousel owl-theme">
				<div class="item">
					<img src="../images/home-on.jpg"/>
					<a href="https://www.biz4group.com/case-study-homeon" target="_blank">View Details</a>
				</div>
				<div class="item">
					<img src="../images/casestudy-intellia-iot.jpg"/>
					<a href="https://www.biz4group.com/case-study-intellia-iot" target="_blank">View Details</a>
				</div>
				<div class="item">
					<img src="../images/things_board.jpg"/>
					<a href="https://www.biz4group.com/portfolio-desc-thingsboard" target="_blank">View Details</a>
				</div>
				<div class="item">
					<img src="../images/app-weigh-landing.jpg"/>
					<a href="https://www.biz4group.com/portfolio-desc" target="_blank">View Details</a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!--our letest blog-->



<footer class="footer-section">
	<div class="footer-top">
		<div class="footer-fleg">
			<img src="https://www.biz4group.com/images/flags_img_us.jpg"/>
		</div>
		<div class="footer-location">
			<ul>
				<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				<p>7380 W Sand Lake Rd, #500, Orlando, FL 32819, USA</p>
				</li>

				<li><span><i class="fa fa-envelope" aria-hidden="true"></i></span>
				<a href="mailto:info@biz4group.com"><p> info@biz4group.com </p></a>
				</li>

				<li><span><i class="fa fa-mobile" aria-hidden="true"></i></span>
				<a href="tel:+16143296463" itemprop="telephone"><p>+1 (614) 329-6463</p></a>
				</li>
			</ul>
		</div>
	</div>
</footer>	
	
<div class="back-to-top-button">
	<a><i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>	
	
 </body>
 </html>
 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="background-image:url(<?php echo SITE_URL;?>images/clutch-bg.jpeg);">
			
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="request-form">
						<h5>Tell Us About Your Project</h5>
						<form id="send-contact-form-modal" method="post">
							<div class="form-group">
								<label><i class="fa fa-user"></i> Your Name<sup>*</sup></label>
								<input class="LoNotSensitive field-text" id="name-modal" type="text" name="name" value="" placeholder="">
								<!--<span id="spnFirstName" style="color:red;"></span>-->
								<div id="errors" style="display:none;"></div>
							</div>
							<div class="form-group">
								<label><i class="fa fa-envelope" aria-hidden="true"></i> Email Id<sup>*</sup></label>
								<input class="LoNotSensitive field-text" id="email-modal" type="email" name="email" value="" placeholder="">
									<div id="errorsOne" style="display:none;"></div>
								<!--<span id="spnEmail" style="color:red;"></span>-->
							</div>
							<div class="form-group">
								<label><i class="fa fa-phone" aria-hidden="true"></i> Phone Number<sup>*</sup></label>
								<input class="LoNotSensitive field-text" id="phone-modal"  type="text" name="phone" value="" placeholder="">
								<div id="errorsTwo" style="display:none;"></div>
								<!--<span id="spnContactNum" style="color:red;"></span>-->
							</div>
							<!--<div class="form-group">
								<label><i class="fa fa-search" aria-hidden="true"></i> What Are You Looking For?</label>
								<select name="sLookingFor" required>
									<option value="">Select</option>
									<option value="Enterprise Software Solutions">Enterprise Software Solutions</option>
									<option value="Creating a Mobile App">Creating a Mobile App</option>
									<option value="Web Development">Web Development</option>
									<option value="Dedicated Team Service">Dedicated Team Service</option>
									<option value="IT Consulting Services">IT Consulting Services</option>
									<option value="Partnership Opportunities">Partnership Opportunities</option>
								</select>
							</div>-->
							<div class="form-group">
							<label><i class="fa fa-commenting" aria-hidden="true"></i> Message<sup>*</sup></label>
							<textarea class="LoNotSensitive field-textarea" id="msg-modal" name="msg" rows="4" cols="53"></textarea>
							<div id="errorsThree" style="display:none;"></div>
							</div>
							<div class="form-group">
								<label><i class="fa fa-file" aria-hidden="true"></i> Attach files</label>
								<input class="LoNotSensitive attachOne" type="file" id="attach_file" name="attach_file" placeholder="">
							</div>
							<div id="captcha2_ppc" class="form-group" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
							<div class="form-group">
								<!--<input type="hidden" name="validate_captcha" value="1">
								<input type="hidden" name="ajax_call" value="sendMailGetInTouch">-->
								<button type="submit" id="submit-modal" class="awe-btn awe-btn-13" >Submit</button>
							</div>
							<div id="contact-content"></div>
						</form>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 hidden-xs">
					<div class="popup-location">
						<h5>We Love To Support You</h5>
						<ul>
							<li><span><img src="https://www.biz4group.com/images/usa-flag.png" alt="usa-flag" class="usa" style="width: 35px;height: 35px;"></span> <p>7380 W Sand Lake Rd #500, Orlando,  FL    32819, USA</p></li>
							<!-- <li><span><i class="fa fa-map" aria-hidden="true"></i></span> <p>629 - 633, 6th Floor, Mansarovar Plaza, Madhyam Marg, Mansarovar, Jaipur, Rajasthan 302020</p></li> -->
							<li><span><i class="fa fa-phone" aria-hidden="true"></i></span>  <p><a href="tel:+16143296463">+1 (614) 329-6463</a></p></li>
							<li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> <p><a href="mailto:info@biz4group.com">info@biz4group.com</a></p></li>
							<!--<li><i class="fa fa-envelope" aria-hidden="true"></i> For Job : hr@biz4group.com</li>-->
						</ul>
					</div>
				</div>
			</div>
			
        </div>
      </div>  
    </div>
  </div>
  
  
</div>

<script src="<?php echo SITE_URL;?>js/jquery.min.js"></script>
<script src="<?php echo SITE_URL;?>js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.validate.js"></script>-->
<!--<script src="<?php echo SITE_URL;?>js/custom-file-input.js"></script>-->
<!--<script>
      /*$.validate({
        lang: 'en'
      });*/
      $('#successQuote, #successContact').hide();
</script>-->
<script src="<?php echo SITE_URL;?>js/owl.carousel.min.js"></script>
<script>
            $(document).ready(function() {
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
              })
            })
</script>	
<script>
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoplay: true,
	  autoplayTimeout: 2000,
	  autoplayHoverPause: true,
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      loop:true,
      margin:10,
      responsiveClass:true,
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
            items:3,
            nav:true,
            loop:false
        }
    }

 
  });
 
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
	
	<script type="text/javascript">
       
       $('#submit').click(function(){

        var name=$('#name').val();
        var email=$('#email').val();
        var subject=$('#subject').val();
		var message=$('#msg').val();
		var phone =$('#phone').val();
        
     
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
 
        
        
        if(name=='')
        {
          alert('Please Enter First Name');
          $( "#name" ).focus();
          return false;
        }
        else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
          alert("Please enter a valid e-mail address ");  
          $( "#email" ).focus();
          return false;  
          } 
          else if(phone=='')
        {
          alert('Please Enter Phone Number');
          $( "#phone" ).focus();
          return false;
        }
        /*else if(subject=='')
        {
          alert('Please Enter Subject');
          $( "#subject" ).focus();
          return false;
        }*/
		else if(message=='')
        {
          alert('Please Enter message');
          $( "#msg" ).focus();
          return false;
        }
        else {
			var response = grecaptcha.getResponse(contact_recaptcha_ppc);
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!! , please try again later.");
				
			  } 
			  
			  else{
		var form = $('#send-contact-form')[0];
        var data = new FormData(form);
		        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/ajax-ppc",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
               alert("We have recieved your feedback! Thank you");
               //location.reload();
			   //window.location.replace("https://www.biz4group.com/thankyou");
            },
        });
		}
        }
		
		return false;

       });
     </script>
<script>
<!-- video -->
$(document).ready(function() {
	setTimeout( function(){ console.log('youtube');
		$('.youtube').each(function(){
			$(this).html('<iframe src="https://www.youtube.com/embed/' + $(this).attr('id') + '" allow = "autoplay; encrypted-media" allowfullscreen style="border:none;" > </iframe>');
		});
	},2000)
});
</script>
<script type="text/javascript">
       
       $('#submit-modal').click(function(){

        var name=$('#name-modal').val();
        var email=$('#email-modal').val();
        var subject=$('#subject-modal').val();
		var message=$('#msg-modal').val();
		var phone =$('#phone-modal').val();
        
     
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
 
        
        
        if(name=='')
        {
          //alert('Please Enter First Name');
		  $("#errors").html("<span style='color:red;'>"+"Please enter your name</span>");
          $("#errors").fadeIn();
          $( "#name-modal" ).focus();
          return false;
        }
        else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
          //alert("Please enter a valid e-mail address ");
		  $("#errorsOne").html("<span style='color:red;'>"+"Please enter a valid e-mail address</span>");
          $("#errorsOne").fadeIn();
          $( "#email-modal" ).focus();
          return false;  
          } 
          else if(phone=='')
        {
          //alert('Please Enter Phone Number');
		  $("#errorsTwo").html("<span style='color:red;'>"+"Please enter phone number</span>");
          $("#errorsTwo").fadeIn();
          $( "#phone-modal" ).focus();
          return false;
        }
        /*else if(subject=='')
        {
          //alert('Please Enter Subject');
		  $("#errorsThree").html("<span style='color:red;'>"+"Please enter subject</span>");
          $("#errorsThree").fadeIn();
          $( "#subject-modal" ).focus();
          return false;
        }*/
		else if(message=='')
        {
          //alert('Please Enter message');
		  $("#errorsThree").html("<span style='color:red;'>"+"Please enter message</span>");
          $("#errorsThree").fadeIn();
          $( "#msg-modal" ).focus();
          return false;
        }
		        else {
			var response = grecaptcha.getResponse(captcha2_ppc);
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!! , please try again later.");
				
			  } 
			  
		else {
		var form = $('#send-contact-form-modal')[0];
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/ajax-career",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
               //alert("We have recieved your feedback! Thank you");
               //location.reload();
			   window.location.replace("https://www.biz4group.com/thankyou");
            },
        });
		}
        }
		return false;

       });
     </script>

  
  

 