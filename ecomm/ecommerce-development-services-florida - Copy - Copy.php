<?php  require_once 'contact-form-services.php';
 ?>
 
  <?php  require_once 'exit-form-handler.php';
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>eCommerce Development Services - Hire Top 7% Developers</title>
		<meta
			name="description"
			content="Hire Certified eCommerce Developer for Custom eCommerce Development Solutions. Biz4Commerce is your trusted eCommerce development partner."
		/>
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<meta name="robots" content="noindex" />

		<!-- css -->
		<?php 
       		include_once("./includes/commoncss.php");
    	?>
		<link rel="stylesheet" href="css/ecom-florida.css?v=0.2" />
		<!--<link rel="stylesheet" href="css/swiper.min.css" />-->
		<link rel="stylesheet" href="css/animated-slider.css?v=2.2" />
		<link rel="stylesheet" href="css/getQuote.css?v=1.6" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/landing.css">
		<link rel="stylesheet" href="css/stick-to-me.css">

		<!-- css -->
		<link rel="stylesheet" href="css/about-us.css" />
		<link rel="stylesheet" href="css/index.css?var=1.4" />

		<!-- font style ---------- -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">	
	
	</head>

	<body>

		<!-- header -->
		<?php 
       		include_once("includes/header-ecom-dev.php");
      	?>
		<!-- header end -->
<!-- 
		<div class="form-outer" id="banner-ref">
			<form action="contact-form-new1" method="post">
							<div class="form__wrapper">
								<h2 class="theme-color">Get a Free Quote</h2>
								<div class="form-group">
							
									<input
										type="text"
										name="name1"
										id="name1"
										class="form-control"
										placeholder="Your Name*"
										required
									/>
								</div>
								<div class="form-group">
									<input
										type="email"
										name="email1"
										id=""
										class="form-control"
										placeholder="Your Email*"
										required
									/>
								</div>
								<div class="form-group">
									<input
										type="tel"
										name="phone1"
										id="phone1"
										class="form-control"
										placeholder="Phone Number*"
										maxlength="15"
										required
									/>
								</div>
								<div class="form-group">
									<textarea
										name="message1"
										id=""
										cols="30"
										rows="3"
										class="form-control"
										placeholder="Message"
										required
									></textarea>
								</div>
								<div class="form-group">
									<div class="inputBox">
										<div class="right">
											<label>Enter Addition:</label>
											<?php 
                   									   $no3=rand(1,10);
                    								   $no4=rand(1,10);
                     								   echo $no3 ."+". $no4;
                      
                     							 ?>
											<input
												type="hidden"
												name="no3"
												id='no3'
												value="<?php echo $no3 ?>"
											/>
											<input
												type="hidden"
												name="no4"
												id='no4'
												value="<?php echo $no4 ?>"
											/>
											=
											<input
												type="text"
												name="captcha2"
												id="captcha2"
												autocomplete="off"
												class="captcha"
												required
											/>
										<p id="captcha3" class="alert alert-danger" style="visibility: hidden">Captcha Wrong</p>

											<div id="errorsFour" style="display: none"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group text-center">
								<button
									class="button button--orange w-100"
type="submit" id="submit"
name="submit1"
									onclick="return validateMyForm2();"
								>
									Request a callback
								</button>
							</div>
						</form>
						<div class="lower-form">or Just give us a call: <a href="tel:+1(407)714-1616"><b>+1(407)714-1616</b></a></div>
						</div> -->

		<!-- landing page start ------- -->

		<main class="landing-florida-main">
		<!-- banner section --------- -->
		<section>
			<div class="container-fluid p-0">
				<div class="row m-0">
					<div class="col-md-6">
						<div class="banner-florida-desc">
							<h3>Customized</h3>
							<h1>eCommerce</h1>
							<h2>Development Solution</h2>
							<p>Curating simplified and successful online marketplace with 15+ years of experience in delivering custom-built websites, eCommerce solutions, and high-performing user experiences.</p>
							<button class="theme-button white-btn white-border-radius" data-toggle="modal" data-target="#myModal">GET ONE WEEK FREE TRIAL</button>
						</div>
					</div>
					<div class="col-md-6 p-0">
					<img src="./images/landing-page/lap.png" alt="logo" class="banner-img" />
					</div>
				</div>
			</div>
		</section>
		<!-- banner section --------- -->

		<!-- schedule section -------- -->
		<section class="schedule-form-main">
			<div class="container">
				<img src="./images/landing-page/development-outline-text.png" alt="logo" class="outline-txt" />
				<div class="row">
					<div class="col-md-6">
						<div class="schedule-desc-form">
							<h2 class="common-heading left bgBlue">End-to-end eCommerce Development Services</h2>
							<p><span>#1</span> Rated eCommerce Development Company Based in Florida, we specialize in building highly functional eCommerce platforms optimized for providing an effortless customer experience.</p>
							<h3>Industries We Serve</h3>
							<ul>
								<li>Fashion & Apparel</li>
								<li>Healthcare</li>
								<li>Sports</li>
								<li>Jewellery</li>
								<li>Beauty & Personal Care</li>
								<li>Entertainment</li>
								<li>Electronics</li>
								<li>Realestate</li>
								<li>eLearning</li>
								<li>Grocery</li>
								<li>FMCG</li>
								<li>Retail</li>	
							</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class="schedule-form">
							<div class="schedule-padding-form">
							<h5>Schedule Free Assessment</h5>
							<form action="contact-form-services" method="post">
							<div class="form__wrapper">
								<div class="row">
									<div class="col-md-6">
									<div class="form-group">
									<input type="text" name="name1" id="name1" placeholder="FIRST NAME*" class="form-control" required>
									</div>
									</div>

									<div class="col-md-6">
									<div class="form-group">
									<input type="text" name="name2" id="name2" placeholder="LAST NAME" class="form-control">
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<input type="email" name="email1" id="email1" placeholder="EMAIL ID*" class="form-control" required>
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<input type="tel" name="phone1" id="phone1" placeholder="PHONE*" class="form-control" maxlength="15" required>
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<textarea id="message1" name="message1" rows="2" placeholder="MESSAGE" class="form-control" required></textarea>
									</div>
									</div>
									
									<div class="col-md-12">
									<div class="form-group">
									<div class="inputBox">
										<div class="right">
											<label>Enter Addition:</label>
											<?php 
                   									   $no3=rand(1,10);
                    								   $no4=rand(1,10);
                     								   echo $no3 ."+". $no4;
                      
                     							 ?>
											<input
												type="hidden"
												name="no3"
												id='no3'
												value="<?php echo $no3 ?>"
											/>
											<input
												type="hidden"
												name="no4"
												id='no4'
												value="<?php echo $no4 ?>"
											/>
											=
											<input
												type="text"
												name="captcha2"
												id="captcha2"
												autocomplete="off"
												class="captcha"
												required
											/>
										<p id="captcha3" class="alert alert-danger" style="visibility: hidden">Captcha Wrong</p>

											<div id="errorsFour" style="display: none"></div>
										</div>
									</div>
								</div>
								</div>
								</div>
								<button class="theme-button white-btn white-border-radius w-100" type="submit" id="submit" name="submit1" onclick="return validateMyForm2();">LET’S TALK</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- schedule section -------- -->

		<!-- development section -->
		<section class="ecom-developer" id="about">
			<div class="container">
			<img src="./images/landing-page/ecom-dev-outline.png" alt="outline" class="outline-txt">
				<div class="row">
					<div class="col-md-6">
						<div class="ecom-dev-desc">
							<h2 class="common-heading left bgWhite">eCommerce Web & App Development</h2>
							<p>Keep ahead of the competition with our web and mobile app development services for technical, enterprise-grade eCommerce. We are a one-stop destination for designing and developing strong, functional, and revenue-generating eCommerce platforms.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- development section -------- -->

		<!-- card web developer -------- -->
		<section class="card-dev-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3 p-2">
						<div class="card-dev">
							<img src="./images/landing-page/branding-icon.png" alt="icon">
							<p>Branding & Online Presence</p>
						</div>
					</div>

					<div class="col-md-3 p-2">
						<div class="card-dev">
							<img src="./images/landing-page/ui-ux-icon.png" alt="icon">
							<p>UX/ UI & CX <br> Designing</p>
						</div>
					</div>

					<div class="col-md-6 p-2">
					<div class="dev-unique-set">
					<img src="./images/landing-page/ecom-developer-image.jpg" alt="developer">
					</div>
					</div>

					<div class="col-md-3 p-2">
						<div class="card-dev">
							<img src="./images/landing-page/checkout-icon.svg" alt="icon">
							<p>Checkout Security <br> & Drop-Shipping</p>
						</div>
					</div>

					<div class="col-md-3 p-2">
						<div class="card-dev">
							<img src="./images/landing-page/security-icon.png" alt="icon">
							<p>Security <br> & Scalability</p>
						</div>
					</div>

					<div class="col-md-3 p-2">
						<div class="card-dev">
							<img src="./images/landing-page/store-icon.png" alt="icon">
							<p>Store <br> Management System</p>
						</div>
					</div>

					<div class="col-md-3 p-2">
						<div class="card-dev">
							<img src="./images/landing-page/multi-lingual-icon.png" alt="icon">
							<p>Multi-lingual <br> Features</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- card web developer -------- -->

		<!-- deliveries section ---------- -->
		<section class="delivery-main" id="testimonials">
			<div class="container">
				<div class="text-center">
				<img src="./images/landing-page/delivery-outline.png" alt="banner" class="outline-txt">
				</div>
				<h2 class="common-heading center bgBlue">Our Deliveries <br> Their Appreciations!</h2>
				<p class="text-center colorWhite mt-4">Don’t just take our words for it, witness what our happy clients say</p>

				<div class="client-video-position">
					<div class="owl-carousel owl-theme set-owl owl-client-video">
					<div class="item">
					<video poster="./images/testimonial/WeMaker-thumbnail.jpg" controls>
				<source src="./images/testimonial/wemaker.m4v">
				</video>
				<!--poster="images/testimonial/petlovers-thumbnail.png"-->
					</div>
					<div class="item">
					<video poster="./images/testimonial/WorthAdvisors-thumbnail.jpg" controls>
					<source src="./images/testimonial/worth-advisor-review.mp4">
				</video>
					</div>
					<div class="item">
					<video poster="./images/testimonial/Zzabs-thumbnail.jpg" controls>
					<source src="./images/testimonial/zzabs-feedback.m4v">
				</video>
					</div>
					<div class="item">
					<video poster="./images/testimonial/Amour-thumbnail.jpg" controls>
					<source src="./images/testimonial/amour-feedback.mp4">
				</video>
					</div>
					<div class="item">
					<video poster="./images/testimonial/ShiftFit-thumbnail.jpg" controls>
					<source src="./images/testimonial/shiftfit-feedback.mp4">
				</video>
					</div>
						<div class="item">
					<video poster="./images/testimonial/court-calendar-thumbnail.jpg" controls>
					<source src="./images/testimonial/court-calendar-testimonial.m4v">
				</video>
					</div>
						<div class="item">
					<video poster="./images/testimonial/Splitzz-thumbnail.jpg" controls>
					<source src="./images/testimonial/splitzz-testimonial.mp4">
				</video>
					</div>
						<div class="item">
					<video poster="./images/testimonial/Boat-Butler-thumbnail.jpg" controls>
					<source src="./images/testimonial/boat-video-testimonial.m4v">
					</video>
					</div>
				</div>
				</div>
				<!--<div class="owl-carousel owl-theme set-owl owl-client-slider">
					<div class="item">
						<div class="appreciation-text">
							<img src="./images/landing-page/client-dummy-img.png" alt="icon" class="client-img-delivery">
							<div class="appreciation-text-sub">
								<img src="./images/landing-page/splitzz-icon.png" alt="icon" class="client-company-logo">
								<p class="common-heading para left bgWhite">An innovative and unique polling application, Splitzz answers your many questions and helps you to make the right decisions, add stories, image polls, chats, and many more.</p>
								<div class="d-flex align-items-center justify-content-between mt-4">
									<div>
									<h5>Owner Name Here</h5>
									<p class="font12">CEO & Founder, Splitzz</p>
									</div>
									<button class="black-btn">VISIT PORTFOLIO PAGE</button>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</section>
		<!-- deliveries section ---------- -->

		<!-- customized section ---------- -->
		<section class="customized-main" id="portfolio">
			<div class="container">
			<div class="text-center mb-2">
				<img src="./images/landing-page/customized-outline.png" alt="banner" class="outline-txt">
				</div>
				<h2 class="common-heading center bgBlue">We Deliver Customized, Quick and Secure <br> eCommerce Web & App Solutions</h2>
				<p class="text-center colorWhite my-4">With the exponential expansion of eCommerce platforms globally, our mission is to develop platforms that are the best in innovation, technology, creativity, and information and enable you to rule in the digital domain.</p>
				<div class="row">
					<div class="col-md-4 p-2">
						<div class="custom-card-img">
						<img src="./images/landing-page/Subsciety.png" alt="banner" class="image">
						<div class="overlay">
							<div class="text">
							<button class="black-btn" data-toggle="modal" data-target="#myModal">BOOK FREE DEMO</button>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-4 p-2">
						<div class="custom-card-img">
						<img src="./images/landing-page/FuelIt.png" alt="banner" class="image">
						<div class="overlay">
							<div class="text">
							<button class="black-btn" data-toggle="modal" data-target="#myModal">BOOK FREE DEMO</button>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-4 p-2">
						<div class="custom-card-img">
						<img src="./images/landing-page/GoldLeaf.png" alt="banner" class="image">
						<div class="overlay">
							<div class="text">
							<button class="black-btn" data-toggle="modal" data-target="#myModal">BOOK FREE DEMO</button>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-4 p-2">
						<div class="custom-card-img">
						<img src="./images/landing-page/AccugeneDX.png" alt="banner" class="image">
						<div class="overlay">
							<div class="text">
							<button class="black-btn" data-toggle="modal" data-target="#myModal">BOOK FREE DEMO</button>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-4 p-2">
						<div class="custom-card-img">
						<img src="./images/landing-page/PostHeritage.png" alt="banner" class="image">
						<div class="overlay">
							<div class="text">
							<button class="black-btn" data-toggle="modal" data-target="#myModal">BOOK FREE DEMO</button>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-4 p-2">
						<div class="custom-card-img">
						<img src="./images/landing-page/Zzabs.png" alt="banner" class="image">
						<div class="overlay">
							<div class="text">
							<button class="black-btn" data-toggle="modal" data-target="#myModal">BOOK FREE DEMO</button>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- customized section ---------- -->
		
		<!-- cta consultation section ------------ -->
		<section class="cta-consult">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="cta-consult-desc">
						<h2 class="common-heading left bgWhite">Let’s Make Your eCommerce <br> Dream A Reality</h2>
						<p>Looking for a team of experts that understands, plans, and executes your app ideas into a reality? If yes, then we are the right development partners for you.</p>
						<button class="theme-button white-btn white-btn-hover-black white-border-radius" data-toggle="modal" data-target="#myModal">CONNECT FOR A FREE CONSULTATION <i class="fas fa-arrow-right"></i></button>	
					</div>
					</div>

					<div class="col-md-5">
						<img src="./images/landing-page/cta-consult.png" alt="banner" class="cta-consult-img">
					</div>
				</div>
			</div>
		</section>
		<!-- cta consultation section ------------ -->

		<!-- building projects section ----------- -->
		<section class="building-project-main" id="achievements">
			<div class="container">
				<div class="building-project-desc">
				<div class="text-center mb-3">
				<img src="./images/landing-page/smile-outline.svg" alt="banner" class="outline-txt-sm">
				</div>
				<h2 class="common-heading center bgBlue">Building Projects | Delivering Smiles</h2>
				<p class="text-center colorWhite my-4 positionRelative">With the exponential expansion of eCommerce platforms globally, our mission is to develop platforms that are the best in innovation, technology, creativity, and information and enable you to rule in the digital domain.</p>
				<div class="globe-img">
				<img src="./images/landing-page/world-globe.svg" alt="globe">
				</div>
				<ul>
					<li>
						<div class="project-card-top">
							<img src="./images/landing-page/experience-icon.svg" alt="icon">
							<p>10+</p>
						</div>
						<div class="project-card-bottom">
						<div class="arrow-up"></div>
						Years of <br> Experience
						</div>
					</li>
					<li>
						<div class="project-card-top">
							<img src="./images/landing-page/happy-clients-icon.svg" alt="icon">
							<p>300+</p>
						</div>
						<div class="project-card-bottom">
						<div class="arrow-up"></div>
						Happy <br> Clients
						</div>
					</li>
					<li>
						<div class="project-card-top">
							<img src="./images/landing-page/successful-icon.svg" alt="icon">
							<p>500+</p>
						</div>
						<div class="project-card-bottom">
						<div class="arrow-up"></div>
						Successful <br> Projects
						</div>
					</li>
					<li>
						<div class="project-card-top">
							<img src="./images/landing-page/dedicated-icon.svg" alt="icon">
							<p>200+</p>
						</div>
						<div class="project-card-bottom">
						<div class="arrow-up"></div>
						Dedicated <br> Professionals
						</div>
					</li>
					<li>
						<div class="project-card-top">
							<img src="./images/landing-page/overall-icon.svg" alt="icon">
							<p>4.9</p>
						</div>
						<div class="project-card-bottom">
						<div class="arrow-up"></div>
						Overall <br> Ratings
						</div>
					</li>
				</ul>
				<div class="projects-badge-earn">
					<img src="./images/landing-page/ecommerce-development-companies.svg" alt="icon">
					<img src="./images/landing-page/award-landing.svg" alt="icon">
					<img src="./images/landing-page/ecommerce-development-companies-round-badge.png" alt="icon">
				</div>
			</div>
			</div>
		</section>
		<!-- building projects section ----------- -->

		<!-- features section ---------- -->
		<section class="feature-section" id="features">
			<div class="container">
				<img src="./images/landing-page/feature-outline.svg" alt="banner" class="outline-txt-sm mb-3">
				<h2 class="common-heading left bgBlue">Blending In World-Class Features To Develop <br> Outstanding eCommerce Marketplace</h2>
				<p class="colorWhite my-4">We Incorporate the many essential eCommerce attributes that pave the way for user engagement and profitability.</p>	
				<div class="feature-accordion">
					<div class="row">
						<div class="col-md-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" href="#collapse1" class="panel-title" onclick="myFunction('myDIV1')">
									User–friendly Navigation</a>
								</div>
								<div id="collapse1" class="collapse show" data-parent="#accordion">
								<div class="panel-body">With logical categorizations, we develop platforms that help the users find what they are looking for easily.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" href="#collapse2" class="panel-title collapsed" onclick="myFunction('myDIV2')">
									Loading Speed</a>
								</div>
								<div id="collapse2" class="collapse" data-parent="#accordion">
								<div class="panel-body">Our platforms consist of a fast loading speed that manages to interest and impress the users.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" href="#collapse3" class="panel-title collapsed" onclick="myFunction('myDIV3')">
									Rich Aesthetics</a>
								</div>
								<div id="collapse3" class="collapse" data-parent="#accordion">
								<div class="panel-body">We create impressive first impressions, with visually appealing, powerful, and positive pages.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" href="#collapse4" class="panel-title collapsed" onclick="myFunction('myDIV4')">
									Multiple Payment Gateways Integration</a>
								</div>
								<div id="collapse4" class="collapse" data-parent="#accordion">
								<div class="panel-body">We have experience integrating several payment gateways, like PayPal, Stripe, Authorize.net, Braintree, etc., for eCommerce applications of different scales.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" href="#collapse5" class="panel-title collapsed" onclick="myFunction('myDIV5')">
									Customer Support</a>
								</div>
								<div id="collapse5" class="collapse" data-parent="#accordion">
								<div class="panel-body">We provide omnichannel customer services for 24*7 expert support.</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" href="#collapse6" class="panel-title collapsed" onclick="myFunction('myDIV6')">
									Mobile Friendly</a>
								</div>
								<div id="collapse6" class="collapse" data-parent="#accordion">
								<div class="panel-body">An optimal rich user experience with a responsive user design for the mobile device. </div>
								</div>
							</div>
							</div>
						</div>

						<div class="col-md-6">
						<img src="./images/landing-page/young-programmers.jpg" alt="banner" class="w-100 images-feature" id="myDIV1">
						<img src="./images/landing-page/loading-speed.jpg" alt="banner" class="w-100 images-feature" id="myDIV2">
						<img src="./images/landing-page/rich-aesthetics.jpg" alt="banner" class="w-100 images-feature" id="myDIV3">
						<img src="./images/landing-page/multiple-payment.jpg" alt="banner" class="w-100 images-feature" id="myDIV4">
						<img src="./images/landing-page/customer-support.jpg" alt="banner" class="w-100 images-feature" id="myDIV5">
						<img src="./images/landing-page/mobile-friendly.jpg" alt="banner" class="w-100 images-feature" id="myDIV6">
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!-- features section ---------- -->

		<!-- trust section --------- -->
		<section class="trust-main" id="clients">
			<div class="container">
				<div class="text-center mb-3">
				<img src="./images/landing-page/trust-outline.png" alt="banner" class="outline-txt-xs">
				</div>
				<h2 class="common-heading center bgBlue">Trusted By Fortune 500 <br> Companies And Startups</h2>
				<div class="slider-logo-group">
				<div class="owl-carousel owl-theme set-owl owl-client-logo">
					<div class="item">
						<img src="./images/landing-page/aws-logo-color.png" alt="logo">
					</div>
					<div class="item">
						<img src="./images/landing-page/adobe-logo-color.png" alt="logo">
					</div>
					<div class="item">
						<img src="./images/landing-page/google-logo-color.png" alt="logo">
					</div>
					<div class="item">
						<img src="./images/landing-page/zeus-logo-color.png" alt="logo">
					</div>
					<div class="item">
						<img src="./images/landing-page/compare-legal-logo-color.png" alt="logo">
					</div>
					<div class="item">
						<img src="./images/landing-page/fuel-it-logo-color.png" alt="logo">
					</div>
					<div class="item">
						<img src="./images/landing-page/intransit-logo-color.png" alt="logo">
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- trust section --------- -->

		<!-- book a free demo --------- -->
		<section class="book-demo">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div>
						<h2 class="common-heading left bgWhite">eCommerce Platforms For <br> Simplified Selling From <br> Anywhere Anytime</h2>
						<p class="colorWhite my-4">Developing platforms that are high in terms of security, integration, payments, customizations, and profit and revenue generation</p>
						<button class="theme-button white-btn white-btn-hover-black white-border-radius" data-toggle="modal" data-target="#myModal">BOOK A FREE DEMO <i class="fas fa-arrow-right"></i></button>	
					</div>
					</div>
					<div class="col-md-6">
					<img src="./images/landing-page/Illustration.png" alt="logo" class="w-100 margin-add-mobile">
					</div>
				</div>
			</div>
		</section>
		<!-- book a free demo --------- -->

		<!-- faq section ---------- -->
		<section class="faq-main">
			<div class="container">
				<div class="text-center mb-3">
				<img src="./images/landing-page/faq-outline.png" alt="banner" class="outline-txt-xs">
				</div>
				<h2 class="common-heading center bgBlue">Frequently Asked Questions</h2>
				<div class="faq-accordion">
				<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="w-100 h-100">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="panel-title">
						Can I get my Existing Website Converted into a Responsive eCommerce Website?</a>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
					<div class="panel-body">Yes, we can definitely convert and migrate your existing business stores onto the latest technology stack. Doing so would ensure a competitive benefit for your business and let you scale up your sales potential by manifolds.</div>
					</div>
					</div>
					<div class="accordion-icon">
					<img src="./images/landing-page/plus-circle.png" alt="banner">
					</div>
				</div>

				<div class="panel panel-default">
					<div class="w-100 h-100">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="panel-title">
						How do you ensure the security measures for an App and the users?</a>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse in">
					<div class="panel-body">As a practice, to save user's data securely, we don't save passwords but instead use hashing algorithms for passwords. The frameworks that we develop within, provide tested security features that are employed while testing. The security of the platform is fortified with HTTPS, SSL Certificate, and web application firewall (WAL).</div>
					</div>
					</div>
					<div class="accordion-icon">
					<img src="./images/landing-page/plus-circle.png" alt="banner">
					</div>
				</div>

				<div class="panel panel-default">
					<div class="w-100 h-100">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="panel-title">
						What Technology do you use?</a>
					</div>
					<div id="collapseThree" class="panel-collapse collapse in">
					<div class="panel-body">Our technology and knowledge base is quite wide and we develop projects in multiple technologies including the latest and greatest contemporary ones. Our expertise and preference for front-end is React.js and Angular. For back-end we use Python and Node.js. For mobile app development (hybrid) we use Ionic 5 with Capacitor and React.</div>
					</div>
					</div>
					<div class="accordion-icon">
					<img src="./images/landing-page/plus-circle.png" alt="banner">
					</div>
				</div>

				<div class="panel panel-default">
					<div class="w-100 h-100">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="panel-title">
						How to choose the right eCommerce Development Agency for my eCommerce platform?</a>
					</div>
					<div id="collapseFour" class="panel-collapse collapse in">
					<div class="panel-body">While looking for a trusted eCommerce app & web development agency, one should make sure they hire experts that can take care of every technical aspect, including development, deployment, support, and maintenance. Biz4Commerce boasts a sizeable experience building successful eCommerce websites and apps for fast-growing startups and Fortune 100 companies. We provide flexible and scalable eCommerce solutions that offer faster time to market and reliable performance.</div>
					</div>
					</div>
					<div class="accordion-icon">
					<img src="./images/landing-page/plus-circle.png" alt="banner">
					</div>
				</div>

				<div class="panel panel-default">
					<div class="w-100 h-100">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="panel-title">
						Which payment gateway can you integrate with my eCommerce project?</a>
					</div>
					<div id="collapseFive" class="panel-collapse collapse in">
					<div class="panel-body">We have experience in integrating a number of different payment gateways for eCommerce applications of different scales. We have worked with all the major payment gateways like PayPal, Stripe, Authorize.net, Braintree, etc. If you have a requirement for any other payment gateway, we can work on that as well based on the feasibility of the solution.</div>
					</div>
					</div>
					<div class="accordion-icon">
					<img src="./images/landing-page/plus-circle.png" alt="banner">
					</div>
				</div>

				<div class="panel panel-default">
					<div class="w-100 h-100">
					<div class="panel-heading">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" class="panel-title">
						How do you ensure code quality?</a>
					</div>
					<div id="collapseSix" class="panel-collapse collapse in">
					<div class="panel-body">We employ multiple levels of testing and checks for every project. The preliminary testing is performed by the developers who follow the standard best practices for development. Then the Quality Analyst does rigorous testing to find any functional, cosmetic, and performance bugs and is fed back to the development team for fixing. This is then forwarded for scrutiny to the experienced technical experts who perform improvement and optimization to the code to deliver a quality product to our clients.</div>
					</div>
					</div>
					<div class="accordion-icon">
					<img src="./images/landing-page/plus-circle.png" alt="banner">
					</div>
				</div>
				</div>
				</div>
			</div>
		</section>
		<!-- faq section ---------- -->
	</main>

		<!-- landing page end ------- -->
		
		<!--exit webpage popup-->
		<div id="stickLayer" style="display:none;" class="stick_popup stick-schedule-call">
		  <div class="stick_close" onclick="$.stick_close()">
			<img src="images/landing-page/close-exit.svg" alt="logo" />
		  </div>
		  <div class="stick_content">
				<div class="row m-0">
					<div class="col-md-5 p-0">
						<div class="side-bg-landing-blue">
							<img src="./images/landing-page/biz4commerce-logo-white.svg" alt="logo" class="logo" />
							<ul>
								<li>
									<img src="./images/landing-page/award-popup.png" alt="logo" />
									<h5>500+</h5>
									<p>Successful <br> Deliveries</p>
								</li>
								<li>
									<img src="./images/landing-page/person-popup.png" alt="logo" />
									<h5>300+</h5>
									<p>Happy <br> Clients</p>
								</li>
								<li>
									<img src="./images/landing-page/star-popup.png" alt="logo" />
									<h5>4.9</h5>
									<p>Overall <br> Rating</p>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-7 p-0">
						<div class="schedule-form">
							<div class="schedule-padding-form">
							<h5>Get A Free Consultation</h5>
							<form action="contact-form-services" method="post">
							<div class="form__wrapper">
								<div class="row">
									<div class="col-md-6">
									<div class="form-group">
									<input type="text" name="name1" id="name1" placeholder="FIRST NAME*" class="form-control" required>
									</div>
									</div>

									<div class="col-md-6">
									<div class="form-group">
									<input type="text" name="name2" id="name2" placeholder="LAST NAME" class="form-control">
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<input type="email" name="email1" id="email1" placeholder="EMAIL ID*" class="form-control" required>
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<input type="tel" name="phone1" id="phone1" placeholder="PHONE*" class="form-control" maxlength="15" required>
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<textarea id="message1" name="message1" rows="2" placeholder="MESSAGE" class="form-control" required></textarea>
									</div>
									</div>
									
									<div class="col-md-12">
									<div class="form-group">
									<div class="inputBox">
										<div class="right">
											<label>Enter Addition:</label>
											<?php 
                   									   $no3=rand(1,10);
                    								   $no4=rand(1,10);
                     								   echo $no3 ."+". $no4;
                      
                     							 ?>
											<input
												type="hidden"
												name="no3"
												id='no3'
												value="<?php echo $no3 ?>"
											/>
											<input
												type="hidden"
												name="no4"
												id='no4'
												value="<?php echo $no4 ?>"
											/>
											=
											<input
												type="text"
												name="captcha2"
												id="captcha2"
												autocomplete="off"
												class="captcha"
												required
											/>
										<p id="4" class="alert alert-danger" style="display: none">Captcha Wrong</p>

											<div id="errorsFour" style="display: none"></div>
										</div>
									</div>
								</div>
								</div>
								</div>
								<button class="theme-button white-btn white-border-radius w-100" type="submit" id="submit" name="submit1" onclick="return validateMyForm3();">LET’S TALK</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
		  </div>
		</div>

		<!-- common modal --------- -->

				<!-- The Modal -->
		<div class="modal common-modal-ecom-landing" id="myModal">
		<div class="modal-dialog modal-dialog-centered modal-xl">
			<div class="modal-content">

			<!-- Modal body -->
			<div class="modal-body">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="row m-0">
					<div class="col-md-5 p-0">
						<div class="side-bg-landing-blue">
							<img src="./images/landing-page/biz4commerce-logo-white.svg" alt="logo" class="logo" />
							<ul>
								<li>
									<img src="./images/landing-page/award-popup.png" alt="logo" />
									<h5>500+</h5>
									<p>Successful <br> Deliveries</p>
								</li>
								<li>
									<img src="./images/landing-page/person-popup.png" alt="logo" />
									<h5>300+</h5>
									<p>Happy <br> Clients</p>
								</li>
								<li>
									<img src="./images/landing-page/star-popup.png" alt="logo" />
									<h5>4.9</h5>
									<p>Overall <br> Rating</p>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-7 p-0">
						<div class="schedule-form">
							<div class="schedule-padding-form">
							<h5>Get A Free Consultation</h5>
							<form action="contact-form-services" method="post">
							<div class="form__wrapper">
								<div class="row">
									<div class="col-md-6">
									<div class="form-group">
									<input type="text" name="name1" id="name1" placeholder="FIRST NAME*" class="form-control" required>
									</div>
									</div>

									<div class="col-md-6">
									<div class="form-group">
									<input type="text" name="name2" id="name2" placeholder="LAST NAME" class="form-control">
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<input type="email" name="email1" id="email1" placeholder="EMAIL ID*" class="form-control" required>
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<input type="tel" name="phone1" id="phone1" placeholder="PHONE*" class="form-control" maxlength="15" required>
									</div>
									</div>

									<div class="col-md-12">
									<div class="form-group">
									<textarea id="message1" name="message1" rows="2" placeholder="MESSAGE" class="form-control" required></textarea>
									</div>
									</div>
									
									<div class="col-md-12">
									<div class="form-group">
									<div class="inputBox">
										<div class="right">
											<label>Enter Addition:</label>
											<?php 
                   									   $no3=rand(1,10);
                    								   $no4=rand(1,10);
                     								   echo $no3 ."+". $no4;
                      
                     							 ?>
											<input
												type="hidden"
												name="no3"
												id='no3'
												value="<?php echo $no3 ?>"
											/>
											<input
												type="hidden"
												name="no4"
												id='no4'
												value="<?php echo $no4 ?>"
											/>
											=
											<input
												type="text"
												name="captcha2"
												id="captcha2"
												autocomplete="off"
												class="captcha"
												required
											/>
										<p id="4" class="alert alert-danger" style="visibility: hidden">Captcha Wrong</p>

											<div id="errorsFour" style="display: none"></div>
										</div>
									</div>
								</div>
								</div>
								</div>
								<button class="theme-button white-btn white-border-radius w-100" type="submit" id="submit" name="submit1" onclick="return validateMyForm3();">LET’S TALK</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			</div>
		</div>
		</div>
<!-- common modal --------- -->

		<!-- footer -->
		<?php 
      		include_once("includes/footer-ecom-dev.php");
		?>


		<!-- JS -->

		<?php 
       include_once("includes/commonjs.php");
    ?>
			<!--<script src="./js/swiper.min.js"></script>-->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cssslider.js"></script>
		<script src="js/owl.carousel.min.js"></script>
			
		<!--<script>
		$(function() {
            $("#chooseSlider1").AnimatedSlider( { prevButton: "#btn_prev1", 
                                             nextButton: "#btn_next1",
                                             visibleItems: 3,
                                             infiniteScroll: true,
                                             willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
                                             changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
                                          });
        });
		</script>	-->

		<script src="./js/jquery.waterwheelCarousel.min.js"></script>
		
		<script>
		$(document).ready(function(){
			// Add minus icon for collapse element which is open by default
			$(".collapse.show").each(function(){
				$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            </div>

          </div>
        </div>
      </div>

      <!-- modal -->

		<section class="section-1">
			});
			
			// Toggle plus minus icon on show hide of collapse element
			$(".collapse").on('show.bs.collapse', function(){
				$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
			}).on('hide.bs.collapse', function(){
				$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
			});
		});
		</script>
		
		<script src="js/stick-to-me.js"></script>
		
		<script>
		$.stickToMe({
		  layer: '#stickLayer',
		  
		  // <a href="https://www.jqueryscript.net/animation/">Animation</a> speed in ms
		  fadespeed: 400,

		  // Where detection of exit intent takes place
		  trigger: ['top'],

		  // min/max time
		  maxtime: 0,
		  mintime: 0,

		  // Delay before showing popup when exit intent is detected
		  delay: 0,

		  // Interval between popups
		  interval: 5000,

		  // Maximum times the popup will be triggered  
		  maxamount : 2,

		  // Set cookie to prevent opening again on the same browser
		  cookie : false,

		  // Define the cookie expiration in seconds
		  cookieExpiration: 0,

		  // Clickon background to close the popup
		  bgclickclose : true,

		  // Press ESC to close the popup
		  escclose : true,

		  // Chrome disable
		  disableleftscroll : true,

		  // Callback function
		  onleave : function (e) {},
			
		});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function () {
				var carousel = $("#carousel").waterwheelCarousel({
					flankingItems: 1,
					separation: 240,

					movingToCenter: function ($item) {
						$("#callback-output").prepend(
							"movingToCenter: " + $item.attr("id") + "<br/>"
						);
					},
					movedToCenter: function ($item) {
						$("#callback-output").prepend(
							"movedToCenter: " + $item.attr("id") + "<br/>"
						);
					},
					movingFromCenter: function ($item) {
						$("#callback-output").prepend(
							"movingFromCenter: " + $item.attr("id") + "<br/>"
						);
					},
					movedFromCenter: function ($item) {
						$("#callback-output").prepend(
							"movedFromCenter: " + $item.attr("id") + "<br/>"
						);
					},
					clickedCenter: function ($item) {
						$("#callback-output").prepend(
							"clickedCenter: " + $item.attr("id") + "<br/>"
						);
					},
				});

				$("#prev").bind("click", function () {
					carousel.prev();
					return false;
				});

				$("#next").bind("click", function () {
					carousel.next();
					return false;
				});

				$("#reload").bind("click", function () {
					newOptions = eval("(" + $("#newoptions").val() + ")");
					carousel.reload(newOptions);
					return false;
				});
			});

			$('.owl-carousel-client').owlCarousel({
				loop:true,
				margin:50,
				nav:false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:2
					}
				}
			})
			
		$('.owl-client-logo').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
		navText: ["<img src='./images/landing-page/previous.svg'>","<img src='./images/landing-page/next.svg'>"],
		dots: false,
		autoplay:true,
        responsive: {
            320:{
            	items:2
            },
            767: {
              items:4
            },
            992: {
                items: 6
            },
			1200: {
				items:7
			}
        }
    })
	
					$(document).ready(function(){
	$('.owl-client-slider').owlCarousel({
    loop:true,
    margin:10,
	dots: true,
	autoplay: true,
    autoPlaySpeed: 3000,
    autoPlayTimeout: 3000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1,
        }
    }
	})
	});
			
			$('.ecombanner-owl-carousel').owlCarousel({
				loop:true,
				margin:0,
				nav:false,
				autoplay:true,
    			autoplayTimeout:3000,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			})

			var owl = $(".client-partner-slider2");
			owl.owlCarousel({
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				margin: 10,
				nav: true,
				loop: true,
				responsive: {
					0: {
						items: 1,
					},
					600: {
						items: 3,
					},
					1000: {
						items: 4,
					},
				},
			});

			var swiper = new Swiper(".mySwiper", {
				effect: "coverflow",
				grabCursor: true,
				centeredSlides: true,
				slidesPerView: "3",
				coverflowEffect: {
					rotate: -50,
					stretch: 20,
					depth: 70,
					modifier: 1,
					slideShadows: true,
				},
				breakpoints: {
					// when window width is >= 320px
					320: {
						slidesPerView: 1,
						spaceBetween: 20,
					},
					// when window width is >= 480px
					480: {
						slidesPerView: 1,
						spaceBetween: 30,
					},
					// when window width is >= 640px
					640: {
						slidesPerView: 3,
						spaceBetween: 40,
					},
					1200: {
						slidesPerView: 3,
						spaceBetween: 20,
					},
				}
			
			});
			
    
		</script>
					<!-- add below script tag -->
	<script>
jQuery("#phone").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 48 && charCode <= 57) || (charCode == 8) || (charCode == 9) || (charCode == 32) || (charCode==40) || (charCode==40) || (charCode==41) || (charCode==43)) {
    					return true;			
    		}else{
						return false;
    		}  
    });
	
	jQuery("#name").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 32) {
    					return true;			
    		}else{
						return false;
    		}  
    });
	jQuery("#phone1").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 48 && charCode <= 57) || (charCode == 8) || (charCode == 9) || (charCode == 32) || (charCode==40) || (charCode==40) || (charCode==41) || (charCode==43)) {
    					return true;			
    		}else{
						return false;
    		}  
    });
	
	jQuery("#name1").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 32) {
    					return true;			
    		}else{
						return false;
    		}  
    });
	jQuery("#phone2").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 48 && charCode <= 57) || (charCode == 8) || (charCode == 9) || (charCode == 32) || (charCode==40) || (charCode==40) || (charCode==41) || (charCode==43)) {
    					return true;			
    		}else{
						return false;
    		}  
    });
	
	jQuery("#name2").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 32) {
    					return true;			
    		}else{
						return false;
    		}  
    });
	</script>
	
		<script>
function validateMyForm11()
{
		document.getElementById('msgsuccess').style.display='none'

  document.getElementById("captcha1").style.visibility = "hidden";
 var num1=  document.getElementById('no1').value;
 var num2=  document.getElementById('no2').value;
 var matchNumber = parseInt(num1) + parseInt(num2);
 var captcha = document.getElementById('captcha').value;
  if(captcha != matchNumber)
  { 
  document.getElementById("captcha1").style.visibility = "visible";

    
    return false;
  }

    	document.getElementById('msgsuccess').style.display='block'

  return true
}


function validateMyForm2()
{
  document.getElementById("captcha3").style.visibility = "hidden";
 var num3=  document.getElementById('no3').value;
 var num4=  document.getElementById('no4').value;
 var matchNumber = parseInt(num3) + parseInt(num4);
 var captcha = document.getElementById('captcha2').value;
  if(captcha != matchNumber)
  { 
  document.getElementById("captcha3").style.visibility = "visible";

    
    return false;
  }


  return true
}

function validateMyForm3()
{
  document.getElementById("captcha4").style.display = "none";
 var num3=  document.getElementById('no3').value;
 var num4=  document.getElementById('no4').value;
 var matchNumber = parseInt(num3) + parseInt(num4);
 var captcha = document.getElementById('captcha2').value;
  if(captcha != matchNumber)
  { 
  document.getElementById("captcha3").style.display = "block";

    
    return false;
  }


  return true
}

document.getElementById('exitError').style.display='none';	
function validateExitPopup()
{
document.getElementById('exitError').style.display='none';	
 var emailCheck=  document.getElementById('exitEmail').value;
 if(emailCheck == null) {
	 document.getElementById('exitError').style.display='block';
	 return false;
 } else
 {
	document.getElementById('exitError').style.display='none';
	return true;
 }
}

 function validateMyForm31()
{
	document.getElementById('msgsuccess1').style.display='none'
	document.getElementById("captcha6").style.visibility = "hidden";
 var num5=  document.getElementById('no5').value;
 var num6=  document.getElementById('no6').value;
 var matchNumber = parseInt(num5) + parseInt(num6);
 var captcha = document.getElementById('captcha5').value;
  if(captcha != matchNumber)
  { 
  document.getElementById("captcha6").style.visibility = "visible";

    
    return false;
  }

   document.getElementById('msgsuccess1').style.display='block'

  return true
}



$('#contact-form-18').on('submit',function(e){
	 e.preventDefault()
			document.getElementById('msgsuccess1').style.display='none'

  document.getElementById("captcha6").style.display = "none";
 var num5=  document.getElementById('no5').value;
 var num6=  document.getElementById('no6').value;
 var matchNumber = parseInt(num5) + parseInt(num6);
 var captcha = document.getElementById('captcha5').value;
  if(captcha != matchNumber)
  { 
  document.getElementById("captcha6").style.display = "block";

      
    return false;
  }

	  $.ajax({
		  url:'/contact-form-new2',
	 type : 'post',
	 data : $('#contact-form-18').serialize(),
	 success: function(res){	 	 
		if(res){
		 document.getElementById('msgsuccess1').style.display='block'
		 		 $('#contact-form-18').trigger("reset");	
 setTimeout(function(){
    $("#myModalFreeCTA").css("display", "none");
	$(".modal-backdrop.show").css("display","none")
			$('body').removeClass('modal-open');



}, 3000)					 

		}else{
			alert('failed')
		}
	 }
 })
 })


 $('#contact-form-14').on('submit',function(e){
	 e.preventDefault()
document.getElementById('msgsuccess').style.display='none'

  document.getElementById("captcha1").style.display = "none";
 var num1=  document.getElementById('no1').value;
 var num2=  document.getElementById('no2').value;
 var matchNumber = parseInt(num1) + parseInt(num2);
 var captcha = document.getElementById('captcha').value;
  if(captcha != matchNumber)
  { 
  document.getElementById("captcha1").style.display = "block";

    
    return false;
  }

	  $.ajax({
		  url:'/contact-form-new',
	 type : 'post',
	 data : $('#contact-form-14').serialize(),
	 success: function(res){	 	 
		if(res){
		 document.getElementById('msgsuccess').style.display='block'
		 $('#contact-form-14').trigger("reset");
		 	$('body').removeClass('modal-open');
		 		 setTimeout(function(){
    $("#offerModal").css("display", "none");


}, 3000)
			
		}else{
			alert('failed')
		}
	 }
 })
 })

</script>
<script>
$(document).ready(function(){
	$('.owl-client-video').owlCarousel({
    loop:true,
    margin:10,
	dots: true,
	autoplay: true,
    autoPlaySpeed: 3000,
    autoPlayTimeout: 3000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1,
        }
    }
	})
	});
</script>
 <script>
    $('.owl-testi').owlCarousel({
		loop: true,
        margin:10,
        nav:true,
        dots:false,
		autoplay: true,
        autoplayTimeout: 3000,
		autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1.4,
                nav:true,
            }
        }
    })
  </script>
  <script>
  $('.owl-projectinfo').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    })
  </script>
   <script>
    $('.owl-blog').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:2,
                nav:true,
                loop:false
            }
        }
    })
  </script>
<script type="text/javascript">
   // $(window).on('load', function() {
     //   $('#offerModal').css("display", "block");
    //});
	
	//setTimeout(function(){
        //$('#offerModal').css("display", "block");
		//$('body').addClass('modal-open');
	//}, 8000);

	//$('.modal-closer a').on('click', function( ) {
		//$('#offerModal').css("display", "none");
		//$('body').removeClass('modal-open');
	//});
	
//setTimeout(function(){
      //  $('#offerModal').css("display", "block");
		//		$('body').addClass("modal-open");

	//}, 8000);

	//$('.modal-closer a').on('click', function( ) {
	//	$('#offerModal').css("display", "none");
	//	$('body').removeClass("modal-open");

//	});


var span = document.querySelector(".typewriter span");
var textArr = span.getAttribute("data-text").split(", "); 
var maxTextIndex = textArr.length; 

var sPerChar = 0.15; 
var sBetweenWord = 1.5;
var textIndex = 0; 

typing(textIndex, textArr[textIndex]); 

function typing(textIndex, text) {
    var charIndex = 0; 
    var maxCharIndex = text.length - 1; 
    
    var typeInterval = setInterval(function () {
        span.innerHTML += text[charIndex]; 
        if (charIndex == maxCharIndex) {
            clearInterval(typeInterval);
            setTimeout(function() { deleting(textIndex, text) }, sBetweenWord * 1000); 
            
        } else {
            charIndex += 1; 
        }
    }, sPerChar * 1000); 
}

function deleting(textIndex, text) {
    var minCharIndex = 0; 
    var charIndex = text.length - 1; 

    var typeInterval = setInterval(function () {
        span.innerHTML = text.substr(0, charIndex); 
        if (charIndex == minCharIndex) {
            clearInterval(typeInterval);
            textIndex + 1 == maxTextIndex ? textIndex = 0 : textIndex += 1; 
            setTimeout(function() { typing(textIndex, textArr[textIndex]) }, sBetweenWord * 1000); 
        } else {
            charIndex -= 1; 
        }
    }, sPerChar * 1000); 
}

</script>


<script>
function myClose() {
   var element = document.querySelector(".modal");
   element.classList.add("closeButtonModal");
}
</script>
	
	<script>
$(document).ready(function() {
	setTimeout( function(){ console.log('youtube');
		$('.youtube').each(function(){
			$(this).html('<iframe src="https://www.youtube.com/embed/' + $(this).attr('id') + '" allow = "autoplay; encrypted-media" allowfullscreen style="border:none;" class="video-link" > </iframe>');
		});
	},3000)
});
</script>

<script>	  
function myFunction(id) {

    var allElements = document.getElementsByTagName("img");

	for(let ele of allElements){

		if(["myDIV1","myDIV2","myDIV3","myDIV4","myDIV5","myDIV6"].includes(ele.id)){
			if(ele.id===id){
				ele.style.display = "block";
			}else{
				ele.style.display = "none";
			}
		}
	}

}

function showFirstImage(){
	var element = document.getElementById("myDIV1");
	element.style.display = "block";
}
showFirstImage()
</script>
</script>
	
	</body>
</html>
