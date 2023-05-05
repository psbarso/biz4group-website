<?php include_once("./includes/header-service.php");
?>
 
<link rel="preconnect" href="https://fonts.googleapis.com" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
<link rel="stylesheet" href="<?php echo SITE_URL;?>css/style.css" media="all">

<style>
.portfolio-card-bottom{
	text-align: center;
	margin-bottom: 15px;
}
.portfolio-card-bottom a{
	font-weight: 500;
}

.portfolio-section-img {
	height: 100%;
}

@media only screen and (min-width: 1200px){
	.portfolio-desk-card-height {
		min-height: 480px;
	}
}

@media screen and (max-width: 1199px) and (min-width: 992px){
	.portfolio-desk-card-height{
			min-height: 440px;
	}
}

@media screen and (max-width: 991px) and (min-width: 768px){
	.portfolio-desk-card-height{
	    min-height: 470px;
	}
}

@media (max-width: 1200px) and (min-width: 992px){
	.portfolio-section {
		height: 100%;
	}
}
.premium-icon-set h6 {
	display:flex;
	align-items: center;
	font-size: 14px;
    white-space: nowrap;
    cursor: pointer;
}
.premium-icon-set h6 img {
    width: 24px;
    height: 24px;
    object-fit: contain;
    margin-left: 10px;
}

.premium-icon-show {
	width: 60px !important;
    height: 60px !important;
    margin: -27px 14px 0 auto;
	position: absolute;
    top: 0;
    right: 0;
}

.premium-icon-hover {
    width: 60px !important;
    height: 60px !important;
    margin: -27px 14px 0 auto;
}

.portfolio-home-tab img{
	height:auto;
}

.home3-trusted ul li img{
	height:auto;
}


</style>

<div class="portfolio-home-tab">
	<div class="container">
		<div class="">
			<div class="portfolio-tabination-home">
				<!--<div class="home3-layout-heading portfolio-latest">
					<h2>Latest Works</h2>
				</div>-->
				
				<div class="text-center">
					<h2 class="home-layout-heading-title">Recent work</h2>
				</div>
				
				<div class="portfoilo-grid">
					<div class="tab-content innovate-port">
						<!--<div class="works-p">
							<p>We deliver top notch creative services to businesses of all kinds and sizes. With many a satisfied clients, we are setting bars high across the globe.</p>
						</div>
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">All Categories</a></li>
							<li><a data-toggle="tab" href="#menu1">IoT</a></li>
							<li><a data-toggle="tab" href="#menu2">Enterprise Solutions</a></li>
						</ul>-->
						
						<div class="portfolio-tab-menu">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">All Categories</a></li>
								<li><a data-toggle="tab" href="#menu1">IoT</a></li>
								<li><a data-toggle="tab" href="#menu4">eCommerce</a></li>
								<li><a data-toggle="tab" href="#menu2">Web Development</a></li>
								<li><a data-toggle="tab" href="#menu3">Mobile App Development</a></li>
								<li><a   href="https://www.biz4group.com/interactive-prototype" style="background-color:#f56a6a; color:#fff; border-color:#f56a6a;" class="pulse">Interactive Prototype</a></li>
								<li class="premium-icon-set"><h6 data-toggle="tab" href="#menu5">Million Dollar Projects 
								<img 
									src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
									alt="icon"
									loading="lazy"
									width="640"
									height="360"
								/>
								</h6></li>
							</ul>
						</div>
						
						<div class="portfolio_cont tab-pane fade" id="menu5">
						<div class="container">
						  <div class="row">
						  
						  			<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/fetchknack-portfolio.webp" 
													alt="web"
													loading="lazy"
													width="640"
													height="360"
													/>
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
													alt="icon" 
													class="premium-icon-show" 
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
													alt="icon" 
													class="premium-icon-hover" 
													loading="lazy"
													width="640"
													height="360"
												/>
												 <div class="text"><p>A revolutionary social networking platform for job seekers and providers</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-fetchknack">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A revolutionary social networking platform for job seekers and providers</p>
										</div>
									</div>
						  
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/worth-advisor-portfolio.webp" 
													alt="web"
													loading="lazy"
													width="640"
													height="360"
												/>
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
													alt="icon" 
													class="premium-icon-show" 
													loading="lazy"
													width="640"
													height="360"
													
												/>
												<div class="middle">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
													alt="icon" 
													class="premium-icon-hover" 
													loading="lazy"
													width="640"
													height="360"
												/>
												 <div class="text"><p>An outstanding automation tool for easy report generation and analytics</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-worthadvisors">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An outstanding automation tool for easy report generation and analytics</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
												src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-main.webp" 
												alt="subsciety-main"
												loading="lazy"
												width="640"
												height="360"
												>
												<img 
												src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
												alt="icon" class="premium-icon-show" />
												<div class="middle"
												loading="lazy"
												width="640"
												height="360"
												>
												<img 
												src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
												alt="icon" 
												class="premium-icon-hover"
												loading="lazy"
												width="640"
												height="360"
												 />
												 <div class="text">Subscription-based multi-vendor marketplace</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-subsciety">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Subscription-based multi-vendor marketplace</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/petlovers-main.webp" 
													alt="petlovers-main"
													loading="lazy"
													width="640"
													height="360"
												>
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
													alt="icon" 
													class="premium-icon-show" 
													loading="lazy"
													width="640"
													height="360"
													/>
												<div class="middle">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
													alt="icon" 
													class="premium-icon-hover" 
													loading="lazy"
													width="640"
													height="360"
													/>
												 <div class="text">Unique social media platform for pet lovers</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-petloverschat">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Unique social media platform for pet lovers</p>
										</div>
									</div>
						</div>
						</div>
						</div>

						<div class="portfolio_cont tab-pane fade in active" id="home">
							<div class="container">
								<div class="row">
									<!-- do not edit this-->	
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/fetchknack-portfolio.webp" 
														alt="web"
														loading="lazy"
														width="640"
														height="360"
														/>
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon" 
														class="premium-icon-show"
														loading="lazy"
														width="640"
														height="360"
														 />
												<div class="middle">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon" 
														class="premium-icon-hover"
														loading="lazy"
														width="640"
														height="360"
														 />
												 <div class="text"><p>A revolutionary social networking platform for job seekers and providers</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-fetchknack">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A revolutionary social networking platform for job seekers and providers</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/worth-advisor-portfolio.webp" 
														alt="web"
														loading="lazy"
														width="640"
														height="360"
														>
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon"
														class="premium-icon-show"
														loading="lazy"
														width="640"
														height="360" 
													/>
												<div class="middle">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon"
														class="premium-icon-hover"
														loading="lazy"
														width="640"
														height="360" 
													/>
												 <div class="text"><p>An outstanding automation tool for easy report generation and analytics</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-worthadvisors">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An outstanding automation tool for easy report generation and analytics</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-main.webp" 
														alt="subsciety-main"
														loading="lazy"
														width="640"
														height="360"
													/>
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon" 
														class="premium-icon-show"
														loading="lazy"
														width="640"
														height="360"
													/>
												<div class="middle">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon" 
														class="premium-icon-hover"
														loading="lazy"
														width="640"
														height="360"

													/>
												 <div class="text">Subscription-based multi-vendor marketplace</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-subsciety">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Subscription-based multi-vendor marketplace</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/petlovers-main.webp" 
														alt="petlovers-main" 
														loading="lazy"
														width="640"
														height="360"
														/>
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon" 
														class="premium-icon-show" 
														loading="lazy"
														width="640"
														height="360"
														/>
												<div class="middle">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/premium-quality.webp" 
														alt="icon" 
														class="premium-icon-hover" 
														loading="lazy"
														width="640"
														height="360"
														/>
												 <div class="text">Unique social media platform for pet lovers</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-petloverschat">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Unique social media platform for pet lovers</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
													<img 
														src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/roundtable-portfolio.webp" 
														alt="web"
														loading="lazy"
														width="640"
														height="360"
													/>
												<div class="middle">
												 <div class="text"><p>An amazing social media platform for Gemstone Trading</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-roundtable">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An amazing social media platform for Gemstone Trading</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/adobe_google01.webp" 
													alt="adobe_google01"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Modified Adobe.com</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-adobe-google">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Client Google | Client Adobe</p>
											<a href="https://www.biz4group.com/portfolio-adobe-google#adobe-testimonial" target="_blank">See Testimonial...</a>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal7">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/home-on.webp" 
													alt="home-on"
													loading="lazy"
													width="640"
													height="360"
													/>
												<div class="middle">
												 <div class="text">Advanced Web Application for Automated Maintenance of Rented Homes</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-homeon">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>SaaS web application development for automated home hosting and renting.</p>
										</div>
									</div>

									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/fuelit-portfolio.webp" 
													alt="fuelit-portfolio"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">eCommerce Enterprise App for On-Demand Fuel Deliveries</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-fuelit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce app to facilitate on-demand fuel delivery</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sportal-main.webp" 
													alt="sportal-main"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Highly Productive Communication Platform for Athletes and Coaches</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-sportal">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Communication Platform for Players and Coaches</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-zzabs-2.webp" 
													alt="portfolio-desc-zzabs-2"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>eCommerce Marketplace Mobile App for Fashion and Accessories </p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-zzabs">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce marketplace app for Android and iOS users.</p>
											<!--<a href="https://www.biz4group.com/portfolio-adobe-google#adobe-testimonial" target="_blank">See Testimonial...</a>-->
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/contracks-main.webp" 
													alt="contracks-main"
													loading="lazy"
													width="640"
													height="360"
													/>
												<div class="middle">
												 <div class="text"><p>Custom-made Enterprise App for Web and Mobile Platforms</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-contracks">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Custom-made Enterprise App for Web and Mobile Platforms</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-wemaker.webp" 
													alt="portfolio-desc-wemaker" 
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Platform for Article Publishing and Content Promotion</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-wemaker">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Website for Article Publishing and Promotion</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-tank-broker.webp" 
													alt="portfolio-desc-tank-broker" 
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tank-broker">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-glow.webp" 
													alt="portfolio-soniclean" 
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>On-demand enterprise solution</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-glow">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A mobile app to book makeup artists in your city for your event</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-soniclean.webp" 
													alt="portfolio-desc-soniclean" 
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Feature-rich dealer app for reputed enterprise</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-soniclean">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>CRM for the client's customer relationship management needs per the modern system of affairs</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-zeus.webp" 
													alt="portfolio-zeus"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Mobile App for Quick and Secure On-demand Deliveries</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-zeus">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Mobile App for Quick and Secure On-demand Deliveries</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-auxpair.webp" 
													alt="portfolio-auxpair"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>e-Learning App for Teachers and Students</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-auxpair">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>e-Learning App for Teachers and Students</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-intransit.webp" 
													alt="portfolio-desc-intransit"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Package Protection and Tracking Services for eCommerce Merchants</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-intransit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Package Protection and Tracking Services for eCommerce Merchants</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/accugenedx-main.webp" 
													alt="accugenedx-main"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Enterprise eCommerce web application for health test kits</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-accugenedx">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform to provide convenient health checkups at home</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-hnda.webp" 
													alt="portfolio-hnda"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Driving Academy app for Instructors and Students</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-hnda">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Driving Academy app for Instructors and Students</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/greenryder-main.webp" 
													alt="post-heritage-portfolio" 
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Unified eCommerce platform for pharmaceuticals and healthcare consultation</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-greenryder">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce platform for medicine and healthcare products</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-mbi-marketing.webp" 
													alt="portfolio-desc-mbi-marketing"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Healthcare Platform for Users to Avail Medical Services and Jobs</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-mbi-marketing">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Healthcare Platform for Users to Avail Medical Services and Jobs</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<!--<img src="images/post-heritage-portfolio.jpg" alt="post-heritage-portfolio">-->
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/post-heritage-main.webp" 
													alt="post-heritage-portfolio"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">eCommerce business store for customized business cards and accessories</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-post-heritage">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform to buy customized business cards and accessories</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ycf-main.webp" 
													alt="ycf-main"
													loading="lazy"
													width="640"
													height="360"
													/>
												<div class="middle">
												 <div class="text">An advanced AI and ML-powered online job portal</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-yourcareerfair">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An online job portal where employers meet job seekers</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal6">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/app-weigh.webp" 
													alt="app-weigh"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Advanced IoT Fleet Management Solution</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-appweigh">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>IoT product developed for a leading fleet company</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal5">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/things_board.webp" 
													alt="things_board"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">An Enterprise IoT Product Development</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-thingsboard">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Aesthetic IoT dashboard development</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal4">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/IFD01.webp" 
													alt="IFD01"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Website Design And Development For A Globally-renowned Fashion House</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-ifd">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>User-friendly website designed & developed for a fashion company</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal3">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/compare-legal.webp" 
													alt="compare-legal"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Legal Comparative Quotation Platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-legal">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Quotation platform integration in a leading law firm’s website</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/goldleaf-main.webp" 
													alt="post-heritage-portfolio"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Enterprise eCommerce store for selling medical products</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-goldleaf">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce Platforms For Medical Products</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ipause-main.webp" 
													alt="post-heritage-portfolio"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">On-demand mobile app to book meditation rooms</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-ipause">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Customized Mobile App for Meditation Box Booking</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img 
													src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/nvzn-main.webp" 
													alt="nvzn-main"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Innovative web app to simulate AR experience</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-nvzn">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An AR project allowing 3D visualization of any tangible product.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/integra-main.webp" alt=""
													loading="lazy"
													width="640"
													height="360">
												<div class="middle">
												 <div class="text">Innovative enterprise Blockchain system for documents</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-integraledger">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An enterprise blockchain designed for the global legal industry</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/trialproofer-main.webp" alt=""
													loading="lazy"
													width="640"
													height="360">
												<div class="middle">
												 <div class="text">Futuristic web application to automate the legal services</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-trialproofer">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Innovative online solution for secure legal services</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/bigmouthmarketing-main.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Innovative Web Application for Attorneys and Law associates</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-bigmouthmarketing">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An online marketplace for attorneys to work on unresolved cases in the US. </p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/chainlink-1.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Social platform for artists to share and promote their work </div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-chainlink">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Website and app developed to support an online community of artists.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/celebratube.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">UI Wireframes And Designs For Mobile App</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-celebratube">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>App design and development for celebrities to meet their true fans.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/angelinagrace-1.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Portfolio website for a famous movie star</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-angelinagrace">View Details</a>
												 </div>
												</div>
												</div>
											</a> 
										</div>
										<div class="portfolio-card-bottom">
											<p>A responsive website developed to promote particulars of renowned Belgian actress.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/e-commerce-home.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">A robust eCommerce Platform that can be Customized to Users' Needs</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-ciuller">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform where users can buy latest mobile accessories.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal9">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/tekchoice_portfolio.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Frontend Development for a renowned financial platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tekchoice">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Frontend development using serverless technologies to help users manage their online accounts.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal8">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/bounce_portfolio.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Functional Enhancement and Feature Addition For An Enterprise Web App</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-bounce">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Website creation using WordPress framework for part-time workers.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/rdexx-portfolio.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Comprehensive web app to track the spread of diseases</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-rdexx">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Web platform developed for tracking the spread of diseases</p>
										</div>
									</div>
									
									<!-- add new portfolio here-->							
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio-desc-qwark-1.jpg" alt="">
												<div class="middle">
												 <div class="text"><p>Qwark- Pharmacy Simplified </p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-qwark">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Qwark-A convenient eCommerce platform for facilitating easy home delivery of pharmaceuticals. </p>
											<a href="https://www.biz4group.com/portfolio-desc-amp#adobe-testimonial" target="_blank">See Testimonial...</a>
										</div>
									</div>-->
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/emoji-Main.jpg" alt="">
												<div class="middle">
												 <div class="text">Emoji Mashup: Platform Which Captures The Ambivalence Of Human Emotion</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-emoji-mashup">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Web platform development allowing blending of two emojis into a new one</p>
										</div>
									</div>-->
									
									
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/racooda-main.jpg" alt="">
												<div class="middle">
												 <div class="text">Global Platform Connecting Athletes</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-racooda">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A MERN powered eCommerce platform where Fans can buy merchandise of their favorite athlete.</p>
										</div>
									</div>-->
									
									<!--<div class="col-md-4 col-sm-6">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/creekside-main.jpg" alt="">
												<div class="middle">
												 <div class="text">Creekside: Resting in the Cradle of Nature & Enjoying the finest Tavern</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-creekside">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-bottom">
											<p></p>
										</div>
									</div>-->
									
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/peakio-main.png" alt="peakio-main">
												<div class="middle">
												 <div class="text">Enterprise productivity platform to manage information broadcasting</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-peakio1">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Platform to manage all your social media accounts at one place</p>
										</div>
									</div>-->
										
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio-advanced-surgical-solutions-main.jpg" alt="portfolio-advanced-surgical-solutions-main">
												<div class="middle">
												 <div class="text">Mobile App To Offer Assistance During Medical Procedures</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-advanced-surgical-solutions">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Mobile App To Offer Assistance During Medical Procedures</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/washnow-main.jpg" alt="washnow-main">
												<div class="middle">
												 <div class="text">Mobile App To Help Users Buy And Redeem Various Services</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-washnow">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Mobile App To Help Users Buy And Redeem Various Services</p>
										</div>
									</div>-->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/splitzz-main.webp" 
													alt="splitzz-main"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Collaborative polling app for easy decision-making</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-splitzz">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Collaborative polling app for easy decision-making</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sensations-main.webp" alt="sensations-main"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">An intriguing dating app for building personal and professional connections</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-sensations">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An intriguing dating app for building personal and professional connections</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-amour.webp" alt="amour-main"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Innovative Dating App To Find Your True Soulmate</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-amour">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Innovative Dating App To Find Your True Soulmate</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-boat-butler.webp" alt="amour-main"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Visionary App For Automated Maintenance And Boat Community Engagement</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-boat-butler">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Visionary App For Automated Maintenance And Boat Community Engagement</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-tank-mate.webp" alt="amour-main"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">An Advanced IoT-Based Tank Level Monitoring System</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tank-mate">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An Advanced IoT-Based Tank Level Monitoring System</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-shwash.webp" alt="shwash"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">An Ingeniously Modern Car Wash Scheduling Platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-shwash">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An Ingeniously Modern Car Wash Scheduling Platform</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-udder-color.webp" alt="udder-color"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">A Modernistic Business Platform For Custom Artwork Printing</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-udder-color">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A Modernistic Business Platform For Custom Artwork Printing</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos-portfolio-main.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An ultra-modern and innovative eCommerce marketplace for large shipments</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-todos-source">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An ultra-modern and innovative eCommerce marketplace for large shipments</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/bull-markit-portfolio-main.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An exceptionally informative platform for Bull auctions and ranchers</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-bull-markit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An exceptionally informative platform for Bull auctions and ranchers</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-semuto.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>A unique healthcare apps recommendation platform</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-semuto">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A unique healthcare apps recommendation platform</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-renters-book.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An Incredible review and ratings platform for rental agreements</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-renters-book">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An Incredible review and ratings platform for rental agreements</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-court-calendar.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Highly Utilitarian Judiciary Platform for Attorneys and Law Firms</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-court-calendar">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Highly Utilitarian Judiciary Platform for Attorneys and Law Firms</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-definitive-safety.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An enriching e-learning platform for online training programs and classes</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-definitive-safety">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An enriching e-learning platform for online training programs and classes</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-3ciot.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Dam Water Management Automation using IoT</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-3ciot">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Dam Water Management Automation using IoT</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-iosync.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Smart Home Management platform for users to access their smart devices</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-iosync">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Smart Home Management platform for users to access their smart devices</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-handshake.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Ingenious betting app for sports enthusiasts</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-handshake">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Ingenious betting app for sports enthusiasts</p>
										</div>
									</div>
									<!-- card portfolio-facilitiv -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/facilitiv-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An exceptional eCommerce platform making educational evaluation easier and informative</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-facilitiv">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An exceptional eCommerce platform making educational evaluation easier and informative</p>
										</div>
									</div>
									<!-- card end -->
									<!-- card portfolio-carbon-ops -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/carbon-ops-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An advanced IoT based carbon emission management tool for industries</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-carbon-ops" >View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced IoT based carbon emission management tool for industries</p>
										</div>
									</div>
									<!-- card end -->
									<!-- card portfolio-friendship-lamps -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/friendship-lamps-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An advanced and extraordinary app designed to add love and light to human lives.</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-friendship-lamps" >View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced and extraordinary app designed to add love and light to human lives.</p>
										</div>
									</div>
									<!-- card end -->
									
									<!-- card portfolio-a2r -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/a2r-portfolio.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Innovative Activity Tracking App for Personal Growth</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-a2r" >View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Innovative Activity Tracking App for Personal Growth</p>
										</div>
									</div>
									<!-- card end -->
									
									
									<!-- card portfolio-bunny-love-shop -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/bunny-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>A customized eCommerce platform for handmade soaps and other luxury products</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-bunny-love-shop">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A customized eCommerce platform for handmade soaps and other luxury products</p>
										</div>
									</div>
									<!-- card end -->
									<!-- card portfolio-myface -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/myface-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An outstanding live video streaming application with a built-in marketplace</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-myface">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An outstanding live video streaming application with a built-in marketplace</p>
										</div>
									</div>
									<!-- card end -->
									<!-- card portfolio-irf -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/irf-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>A Unique Boutique and Consumer App</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-irf">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A Unique Boutique and Consumer App</p>
										</div>
									</div>
									<!-- card end -->
									<!-- card portfolio-car-sharing -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/carsharing-card.webp" alt="web"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An advanced IoT-based system for car sharing and easy parking</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-car-sharing">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced IoT-based system for car sharing and easy parking</p>
										</div>
									</div>
									<!-- card end -->
									<!-- card portfolio-pac-7 -->
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/pac7-card.webp" alt="web"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>State-of-the-art sports team management platform</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-pac-7">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>State-of-the-art sports team management platform</p>
										</div>
									</div>-->
									<!-- card end -->
									
									<!-- card portfolio-pac-7 -->
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/aqua-star-card.webp" alt="web"
													loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>IoT based high efficient pool pumps</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-aqua-star">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>IoT based high efficient pool pumps</p>
										</div>
									</div>-->
									<!-- card end -->
							</div>
						</div>
					</div>
						
					<!--test end-->
						
						<div class="portfolio_cont tab-pane fade" id="menu4">
						<div class="container">
						  <div class="row">
						  
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/e-commerce-home.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">A robust eCommerce Platform that can be Customized to Users' Needs</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-ciuller">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform where users can buy latest mobile accessories.</p>
										</div>
									</div>
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/racooda-main.jpg" alt="">
												<div class="middle">
												 <div class="text">Global Platform Connecting Athletes</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-racooda">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A MERN powered eCommerce platform where Fans can buy merchandise of their favorite athlete.</p>
										</div>
									</div>-->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/fuelit-portfolio.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">eCommerce Enterprise App for On-Demand Fuel Deliveries</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-fuelit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce app to facilitate on-demand fuel delivery</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-main.webp" alt="subsciety-main"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Unique subscription-based eCommerce platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-subsciety">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A subscription based eCommerce platform</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/accugenedx-main.webp" alt="accugenedx-main"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Enterprise eCommerce web application for health test kits</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-accugenedx">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform to provide convenient health checkups at home</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/post-heritage-main.webp" alt="post-heritage-portfolio"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">eCommerce business store for customized business cards and accessories</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-post-heritage">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform to buy customized business cards and accessories</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/greenryder-main.webp" alt="post-heritage-portfolio"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Unified eCommerce platform for pharmaceuticals and healthcare consultation</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-greenryder">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce platform for medicine and healthcare products</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/goldleaf-main.webp" alt="post-heritage-portfolio"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Enterprise eCommerce store for selling medical products</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-goldleaf">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce Platforms For Medical Products</p>
										</div>
									</div>
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio-desc-qwark-1.jpg" alt="">
												<div class="middle">
												 <div class="text"><p>Qwark- Pharmacy Simplified </p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-qwark">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Qwark-A convenient eCommerce platform for facilitating easy home delivery of pharmaceuticals. </p>
											<a href="https://www.biz4group.com/portfolio-desc-amp#adobe-testimonial" target="_blank">See Testimonial...</a>
										</div>
									</div>-->
									
										<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-zeus.webp" alt="portfolio-zeus"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Mobile App for Quick and Secure On-demand Deliveries</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-zeus">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Mobile App for Quick and Secure On-demand Deliveries</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-zzabs-2.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>eCommerce Marketplace Mobile App for Fashion and Accessories </p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-zzabs">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce marketplace app for Android and iOS users.</p>
											<!--<a href="https://www.biz4group.com/portfolio-desc-amp#adobe-testimonial" target="_blank">See Testimonial...</a>-->
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-tank-broker.webp" alt="portfolio-desc-tank-broker"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tank-broker">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p>
										</div>
									</div>
									
										<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-soniclean.webp" alt="portfolio-desc-soniclean"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Feature-rich dealer app for reputed enterprise</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-soniclean">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>CRM for the client's customer relationship management needs per the modern system of affairs</p>
										</div>
									</div>
									
									<!-- card portfolio-bunny-love-shop -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/bunny-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>A customized eCommerce platform for handmade soaps and other luxury products</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-bunny-love-shop">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A customized eCommerce platform for handmade soaps and other luxury products</p>
										</div>
									</div>
									<!-- card end -->
									
									<!-- card portfolio-irf -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/irf-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>A Unique Boutique and Consumer App</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-irf">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A Unique Boutique and Consumer App</p>
										</div>
									</div>
									<!-- card end -->
									
									
							</div>
						</div>
						</div>	
						<div class="portfolio_cont tab-pane fade" id="menu1">
						<div class="container">
						  <div class="row">
						   <div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-3ciot.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Dam Water Management Automation using IoT</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-3ciot">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Dam Water Management Automation using IoT</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-tank-mate.webp" alt="amour-main"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">An Advanced IoT-Based Tank Level Monitoring System</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tank-mate">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An Advanced IoT-Based Tank Level Monitoring System</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-iosync.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Smart Home Management platform for users to access their smart devices</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-iosync">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Smart Home Management platform for users to access their smart devices</p>
										</div>
									</div>	
								<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
									<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
									<a data-toggle="modal" data-target="#myModal5">
										<div class="portfolio-section-img portfoilo-overlayimg">
										<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/things_board.webp" alt=""
										loading="lazy"
													width="640"
													height="360"
										/>
										<div class="middle">
										 <div class="text">An Enterprise IoT Product Development</div>
										<div class="middle-a">
										 <a href="https://www.biz4group.com/portfolio-thingsboard">View Details</a>
										 </div>
										</div>
										</div>
									</a>
									</div>
									<div class="portfolio-card-bottom">
										<p>Aesthetic IoT dashboard development</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
									<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
									<a data-toggle="modal" data-target="#myModal6">
										<div class="portfolio-section-img portfoilo-overlayimg">
										<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/app-weigh.webp" alt=""
										loading="lazy"
													width="640"
													height="360"
										/>
										<div class="middle">
										 <div class="text">Advanced IoT Fleet Management Solution</div>
										<div class="middle-a">
										 <a href="https://www.biz4group.com/portfolio-appweigh">View Details</a>
										 </div>
										</div>
										</div>
									</a>
									</div>
									<div class="portfolio-card-bottom">
										<p>IoT product developed for a leading fleet company</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
									<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
									<a data-toggle="modal" data-target="#myModal7">
										<div class="portfolio-section-img portfoilo-overlayimg">
										<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/home-on.webp" alt=""
										loading="lazy"
													width="640"
													height="360"
										/>
										<div class="middle">
										 <div class="text">Advanced Web Application for Automated Maintenance of Rented Homes</div>
										<div class="middle-a">
										 <a href="https://www.biz4group.com/portfolio-homeon">View Details</a>
										 </div>
										</div>
										</div>
									</a>
									</div>
									<div class="portfolio-card-bottom">
										<p>SaaS web application development for automated home hosting and renting.</p>
									</div>
								</div>
								<!-- card portfolio-carbon-ops -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/carbon-ops-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An advanced IoT based carbon emission management tool for industries</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-carbon-ops" >View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced IoT based carbon emission management tool for industries</p>
										</div>
									</div>
									<!-- card end -->
									<!-- card portfolio-friendship-lamps -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/friendship-lamps-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>An advanced and extraordinary app designed to add love and light to human lives.</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-friendship-lamps" >View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced and extraordinary app designed to add love and light to human lives.</p>
										</div>
									</div>
									<!-- card end -->

								
							</div>
						</div>
						</div>
						
						<div class="portfolio_cont tab-pane fade" id="menu2">
							<div class="container">
								<div class="row d-flex">
						  			<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/adobe_google01.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text"><p>Web Page Conversion To AMP</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-adobe-google">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Webpages developed for Adobe.com with Google</p>
											<a href="https://www.biz4group.com/portfolio-adobe-google#adobe-testimonial" target="_blank">See Testimonial...</a>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal3">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/compare-legal.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Legal Comparative Quotation Platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-legal">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Quotation platform integration in a leading law firm’s website</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal4">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/IFD01.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Website Design And Development For A Globally-renowned Fashion House</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-ifd">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>User-friendly website designed & developed for a fashion company</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal8">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/bounce_portfolio.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Functional Enhancement and Feature Addition For An Enterprise Web App</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-bounce">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Website creation using WordPress framework for part-time workers.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal9">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/tekchoice_portfolio.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Frontend Development for a renowned financial platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tekchoice">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Frontend development using serverless technologies to help users manage their online accounts.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/angelinagrace-1.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Portfolio website for a famous movie star</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-angelinagrace">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A responsive website developed to promote particulars of renowned Belgian actress.</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/chainlink-1.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Social platform for artists to share and promote their work </div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-chainlink">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Website and app developed to support an online community of artists.</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/bigmouthmarketing-main.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Innovative Web Application for Attorneys and Law associates</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-bigmouthmarketing">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An online marketplace for attorneys to work on unresolved cases in the US. </p>
										</div>
									</div>
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/emoji-Main.jpg" alt="">
												<div class="middle">
												 <div class="text">Emoji Mashup: Platform Which Captures The Ambivalence Of Human Emotion</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-emoji-mashup">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Web platform development allowing blending of two emojis into a new one</p>
										</div>
									</div>-->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/trialproofer-main.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												/>
												<div class="middle">
												 <div class="text">Futuristic web application to automate the legal services</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-trialproofer">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Innovative online solution for secure legal services</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/integra-main.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">Innovative enterprise Blockchain system for documents</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-integraledger">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An enterprise blockchain designed for the global legal industry</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/nvzn-main.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">Innovative web app to simulate AR experience</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-nvzn">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An AR project allowing 3D visualization of any tangible product.</p>
										</div>
									</div>
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/racooda-main.jpg" alt="">
												<div class="middle">
												 <div class="text">Global Platform Connecting Athletes</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-racooda">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A MERN powered eCommerce platform where Fans can buy merchandise of their favorite athlete.</p>
										</div>
									</div>-->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ycf-main.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">An advanced AI and ML-powered online job portal</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-yourcareerfair">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An online job portal where employers meet job seekers</p>
										</div>
									</div>
									
									<!--<div class="col-md-4 col-sm-6">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 60px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/creekside-main.jpg" alt="">
												<div class="middle">
												 <div class="text">Creekside: Resting in the Cradle of Nature & Enjoying the finest Tavern</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-creekside">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
									</div>-->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/rdexx-portfolio.webp" alt=""
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">Comprehensive web app to track the spread of diseases</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-rdexx">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Web platform developed for tracking the spread of diseases</p>
										</div>
									</div>
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/gottabarter-portfolio.jpg" alt="">
												<div class="middle">
												 <div class="text">GottaBarter - eCommerce Website Development</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-desc-gotta-barter">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Unique web application to let users exchange products through barter trade</p>
										</div>
									</div>-->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-main.webp" alt="subsciety-main"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">Unique subscription-based eCommerce platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-subsciety">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A subscription based eCommerce platform</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sportal-main.webp" alt="sportal-main"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">Highly Productive Communication Platform for Athletes and Coaches</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-sportal">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Communication Platform for Players and Coaches</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/accugenedx-main.webp" alt="accugenedx-main"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">Enterprise eCommerce web application for health test kits</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-accugenedx">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform to provide convenient health checkups at home</p>
										</div>
									</div>
									
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/peakio-main.png" alt="peakio-main">
												<div class="middle">
												 <div class="text">Enterprise productivity platform to manage information broadcasting</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-peakio1">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Platform to manage all your social media accounts at one place</p>
										</div>
									</div>-->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/post-heritage-main.webp" alt="post-heritage-portfolio"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">eCommerce business store for customized business cards and accessories</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-post-heritage">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce platform to buy customized business cards and accessories</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/greenryder-main.webp" alt="post-heritage-portfolio"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">Unified eCommerce platform for pharmaceuticals and healthcare consultation</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-greenryder">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce platform for medicine and healthcare products</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-intransit.webp" alt="portfolio-desc-intransit"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>Package Protection and Tracking Services for eCommerce Merchants</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-intransit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Package Protection and Tracking Services for eCommerce Merchants</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-wemaker.webp" alt="portfolio-desc-wemaker"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>WeMaker Website for Article Publishing and Promotion</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-wemaker">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Website for Article Publishing and Promotion</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-mbi-marketing.webp" alt="portfolio-desc-mbi-marketing"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>Healthcare Platform for Users to Avail Medical Services and Jobs</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-mbi-marketing">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Healthcare Platform for Users to Avail Medical Services and Jobs</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-tank-broker.webp" alt="portfolio-desc-tank-broker"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tank-broker">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-soniclean.webp" alt="portfolio-desc-soniclean"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>Feature-rich dealer app for reputed enterprise</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-soniclean">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>CRM for the client's customer relationship management needs per the modern system of affairs</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-shwash.webp" alt="shwash"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">An Ingeniously Modern Car Wash Scheduling Platform</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-shwash">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An Ingeniously Modern Car Wash Scheduling Platform</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-udder-color.webp" alt="udder-color"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text">A Modernistic Business Platform For Custom Artwork Printing</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-udder-color">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A Modernistic Business Platform For Custom Artwork Printing</p>
										</div>
									</div>
									<!-- card portfolio-facilitiv -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/facilitiv-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>An exceptional eCommerce platform making educational evaluation easier and informative</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-facilitiv">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An exceptional eCommerce platform making educational evaluation easier and informative</p>
										</div>
									</div>
									<!-- card end -->
									
								
							</div>
							</div>
						</div>
						
						<div class="portfolio_cont tab-pane fade" id="menu3">
							<div class="container">
								  <div class="row d-flex">
										<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/celebratube.webp" alt="" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">UI Wireframes And Designs For Mobile App</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-celebratube">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>App design and development for celebrities to meet their true fans.</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/fuelit-portfolio.webp" alt="" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">eCommerce Enterprise App for On-Demand Fuel Deliveries</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-fuelit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An eCommerce app to facilitate on-demand fuel delivery</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sportal-main-app.webp" alt="sportal-main" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">Highly Productive Communication Platform for Athletes and Coaches</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-sportal">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Communication Platform for Players and Coaches</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ipause-main.webp" alt="post-heritage-portfolio" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">On-demand mobile app to book meditation rooms</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-ipause">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Customized Mobile App for Meditation Box Booking</p>
										</div>
									</div>
									
										<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-zzabs-2.webp" alt="" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text"><p>eCommerce Marketplace Mobile App for Fashion and Accessories </p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-zzabs">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>eCommerce marketplace app for Android and iOS users.</p>
											<!--<a href="https://www.biz4group.com/portfolio-desc-amp#adobe-testimonial" target="_blank">See Testimonial...</a>-->
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-zeus.webp" alt="portfolio-zeus" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text"><p>Mobile App for Quick and Secure On-demand Deliveries</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-zeus">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Mobile App for Quick and Secure On-demand Deliveries</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-glow.webp" alt="portfolio-soniclean" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text"><p>On-demand enterprise solution</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-glow">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Mobile app to book makeup artists in your city for your event</p>
										</div>
									</div>

									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-hnda.webp" alt="portfolio-hnda" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text"><p>Driving Academy app for Instructors and Students</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-hnda">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Driving Academy app for Instructors and Students</p>
										</div>
									</div>	

									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-auxpair.webp" alt="portfolio-auxpair" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text"><p>e-Learning App for Teachers and Students</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-auxpair">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>e-Learning App for Teachers and Students</p>
										</div>
									</div>	
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sensations-main.webp" alt="sensations-main" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">An intriguing dating app for building personal and professional connections</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-sensations">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An intriguing dating app for building personal and professional connections</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/splitzz-main.webp"" alt="splitzz-main" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">Collaborative polling app for easy decision-making</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-splitzz">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Collaborative polling app for easy decision-making</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-amour.webp" alt="amour-main" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">Innovative Dating App To Find Your True Soulmate</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-amour">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Innovative Dating App To Find Your True Soulmate</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-boat-butler.webp" alt="amour-main" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">Visionary App For Automated Maintenance And Boat Community Engagement</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-boat-butler">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Visionary App For Automated Maintenance And Boat Community Engagement</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-tank-mate.webp" alt="amour-main" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text">An Advanced IoT-Based Tank Level Monitoring System</div>
												<div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-tank-mate">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An Advanced IoT-Based Tank Level Monitoring System</p>
										</div>
									</div>
									
									<!-- card portfolio-a2r -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/a2r-portfolio.webp" alt="web" 
												loading="lazy"
													width="640"
													height="360"/>
												<div class="middle">
												 <div class="text"><p>Innovative Activity Tracking App for Personal Growth</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-a2r" >View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>Innovative Activity Tracking App for Personal Growth</p>
										</div>
									</div>
									<!-- card end -->
									
									<!-- card portfolio-car-sharing -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/carsharing-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>An advanced IoT-based system for car sharing and easy parking</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-car-sharing">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced IoT-based system for car sharing and easy parking</p>
										</div>
									</div>
									<!-- card end -->
									
									<!-- card portfolio-myface -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/myface-card.webp" alt="web"
												loading="lazy"
													width="640"
													height="360"
												>
												<div class="middle">
												 <div class="text"><p>An outstanding live video streaming application with a built-in marketplace</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-myface">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An outstanding live video streaming application with a built-in marketplace</p>
										</div>
									</div>
									<!-- card end -->
									
										
									</div>
								</div>
						</div>
</div>

</div>
</div>
</div>
</div>
</div>

<div class="portfolio-cta" style="background-image:url('https://d1fxfakb0fcon3.cloudfront.net/images/portfolio-cta.webp');">
<div class="cta-content">
<h3>Providing Disruptive <span>Business Solutions</span> for Your Enterprise</h3>
<a href="#" data-toggle="modal" data-target="#myModal" class="btn-hover color-9">Get Free Consultation From Our Technical Experts</a>
</div>
</div>

<div class="home3-trusted">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h2 class="home-layout-heading-title">Trusted by</h2>
				</div>
				<div class="home3-trusted-m wow fadeInLeft">
					<ul>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/trusted-img1.webp" alt="" class="adobe-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/trusted-img2.webp" alt="" class="google-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/aws.webp" alt="" class="aws-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/trusted-img4.webp" alt="" class="appweigh-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/trusted-img5.webp" alt="" class="comparelegal-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/home2-client-logo9.webp" alt="" class="cf-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/home2-client-logo3.webp" alt="" class="ifd-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/nvzn-logo.webp" alt="" class="aamp-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/home2-client-logo6.webp" alt="" class="herdlogix-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/home2-client-logo4.webp" alt="" class="homeon-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/home2-client-logo2.webp" alt="" class="noy-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/ge.webp" alt="" class="gedigital-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/tekchoice.webp" alt="" class="tekchoice-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/creekside-logo.webp" alt="" class="herdlogix-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/verizon.webp" alt="" class="verizon-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/holtec.webp" alt="" class="holtec-logo-img"
								loading="lazy" width="640" height="320"
								>
							</div>
						</li>

						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/ag-home-logo.webp" alt="" class="ag-home-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/bmm-home-logo.webp" alt="" class="bmm-home-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/bounce-home-logo.webp" alt="" class="bounce-home-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/celebratube-home-logo.webp" alt="" class="celebratube-home-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/lamar-home-logo.webp" alt="" class="lamar-home-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/subsciety-logo.webp" alt="" class="silvevado-home-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img class="peakio-logo-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/about/fuel-it-logo.webp" alt="" style="max-width: 90px;"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/about/integ-logo.webp" alt="" class="silvevado-home-logo-img"
								loading="lazy" width="640" height="320"
								/>
							</div>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>
 </div>

 <!--<div class="home3-trusted portfoilo-trusted">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="home3-layout-heading portfoilo-lay">
				<h2>Trusted by</h2>
				</div>
				<div class="home3-trusted-m wow fadeInLeft">
					<ul>
					<li>
					<div class="home3-trusted-img">
					<img src="images/trusted-img1.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/trusted-img2.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/aws.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/trusted-img4.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/trusted-img5.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/home2-client-logo9.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/home2-client-logo3.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/aamp.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/home2-client-logo6.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/home2-client-logo4.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/home2-client-logo2.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/ge.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/tekchoice.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/nano-system.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/verizon.png" alt="">
					</div>
					</li>
					<li>
					<div class="home3-trusted-img">
					<img src="images/holtec.png" alt="">
					</div>
					</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
 </div>-->
 
 <div class="reachus-background portfolio-reachus" style="background-image:url('https://d1fxfakb0fcon3.cloudfront.net/images/reachus-img.webp');" id="lets-connect">
<div class="container white-reachus">
<div class="home3-layout-heading together-heading">
<h2>Let's Make Something Together</h2>
<p>Feel free to contact us whenever you want. Just tell us your query and we<br> will revert back with a solution shortly.</p>
</div>
<div class="row">
<div class="col-md-12"> 
<div class="form-user">
<form class="unique-text" method="post" id="contactForm" name="contactForm" enctype="multipart/form-data">
  <div class="col-md-6">
  <div class="form-group">
  <img src="images/f-name.svg"/>
  <label>Your Name*</label>
	<input id="Name" name="sName" type="text" value="" placeholder="" required minlength="3">
	<span id="spnFirstName" style="color:red;"></span>
	</div>
	<div class="form-group">
	<img src="images/f-smartphone-call.svg"/>
  <label>Mobile Number*</label>
  <input id="ContactNum"  type="number" value="" name="sContactNum" placeholder="" required maxlength="10">
  <span id="spnContactNum" style="color:red;"></span>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
  <img src="images/f-email.svg"/>
  <label for="fname">Email*</label>
  <input id="Email" type="email"  value="" placeholder="" name="sEmail" required>
  </div>
  <div class="form-group">
  <img src="images/f-interested-in.svg"/>
  <label for="lname">Intrested In*</label>
  <select name="sLookingFor" required>
  <option value="">Choose Any</option>
  <option value="IoT Consulting Services">IoT Consulting Services</option>
  <option value="Mobile App Development">Mobile App Development</option>
  <option value="Web Development">Web Development</option>
  <option value="IT Consulting Services">IT Consulting Services</option>
  <option value="Partnership opportunities">Partnership opportunities</option>
  </select>
  </div>
  </div>
  <div class="col-md-12 file-info">
  <img src="images/f-message.svg" class="message-svg"/>
  <label for="lname">Message*</label>
  <textarea rows="6" cols="150" placeholder="Describe yourself here..." id="message1" name="desc" required="" style="resize: none;" maxlength="1000"></textarea>
  <div class="col-md-6">
  	<div class="uploadFile">
	<input type="file" id="attach_file"  name="attach_file" value="" placeholder="">
	 <span class="addfile"><i class="fa fa-plus-circle" aria-hidden="true"></i><p>Add File</p></span>
	</div><br>
	<div id="contact_recaptcha">
	</div>
	</div>
<div class="col-md-6">
  <div class="enquiry-btn">
  <input type="hidden" name="validate_captcha" value="1">
<input type="hidden" name="ajax_call" value="sendMailGetInTouch">
<button type="submit" name="submitform" >Send Your Enquiry</button>
 </div>
</div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>

<div class="testmonials"">
<img src="https://d1fxfakb0fcon3.cloudfront.net/images/home-testimonial-bg.webp">
<div class="container test-upper">
<div class="text-center">
					<h2 class="home-layout-heading-title">Testimonials</h2>
<p class="test1">Hire your trusted advisors who can make your dream come true. We win but by making you win first. <br> What our clients say who trusted us and are now very successful.</p>
</div>
<div class="row">
<div class="col-md-12">
	<div class="client-partner-testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
			<div class="client-partner-slider2 owl-carousel owl-theme wow fadeInLeft">
			
			<div class="item1">
				<div class="client-partner-text">
				<p>I strongly recommend Biz4Group for project development. They offer unique and amazing enterprise solutions.</p>
				</div>
				<span>
				Technical Manager of Top 10 Fortune Company</span>
			</div>
			<div class="item1">
				<div class="client-partner-text client-text">
				<p>Biz4Group helped me a lot in redefining my company’s capabilities with its extraordinary IoT based solutions.</p>
				</div>
				<span>CEO of NanoSystem Inc</span>
			</div>
			<div class="item1">
				<div class="client-partner-text client-text1">
				<p>The work was amazing. Biz4group helped me build a stellar MVP for my start-up at a very reasonable cost.</p>
				</div>
				<span>CEO of Bounce3.io</span>
			</div>
			<div class="item1">
				<div class="client-partner-text client-text">
				<p>The team was great to communicate with. They were quick to respond and always ensured satisfaction.</p>
				</div>
				<span>CEO of Startup Company</span>
			</div>
			<div class="item1">
				<div class="client-partner-text">
				<p>Biz4Group helped us build an e-Commerce project that allowed us to expand our business rapidly.</p>
				</div>
				<span>CFO of e-Commerce Industry</span>
			</div>
			<div class="item1">
				<div class="client-partner-text">
				<p>I was intrigued by the agile methodology of Biz4Group and their commitment to deliver projects before deadlines.</p>
				</div>
				<span>Manager at Wyndham Hotel Group</span>
			</div>
			
			<div class="item1">
				<div class="client-partner-text">
				<p>Biz4group not only did fantastic job but also worked as trusted advisor. I would full heartedly recommend them to anyone.</p>
				</div>
				<span>CEO of Fashion Industry</span>
			</div>
			<div class="item1">
				<div class="client-partner-text">
				<p>Great communications! Timelines established and met on time!</p>
				</div>
				<span>Manager at IoT Company</span>
			</div>
			</div>
			</div>
			</div>
		</div>
	</div>
 </div>
</div>
</div>
</div>
    <!-- Modal -->
  <!--<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="background-image:url(images/clutch-bg.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
					<div class="request-form">
						<h5>Tell Us About Your Project</h5>
						<form method="post" name="myForm" id="myForm" enctype="multipart/form-data">
							<div class="form-group">
							<label>Your Name</label>
								<input id="Name" name="sName" type="text" value="" placeholder="" required minlength="3">
							<span id="spnFirstName" style="color:red;"></span>
							</div>
							<div class="form-group">
							<label>Email Id</label>
							<input  id="Email" type="email"  value="" placeholder="" name="sEmail" required>
							<span id="spnEmail" style="color:red;"></span>
							</div>
							<div class="form-group">
							<label>Phone Number</label>
							<input id="ContactNum"  type="number" value="" name="sContactNum" placeholder="" required>
										<span id="spnContactNum" style="color:red;"></span>
							</div>
							<div class="form-group">
							<label>What Are You Looking For?</label>
							<select name="sLookingFor" required>
							<option value="">Select</option>
							<option value="Enterprise Software Solutions">Enterprise Software Solutions</option>
							<option value="Creating a Mobile App">Creating a Mobile App</option>
							<option value="Web Development">Web Development</option>
							<option value="Dedicated Team Service">Dedicated Team Service</option>
							<option value="IT Consulting Services">IT Consulting Services</option>
							<option value="Partnership Opportunities">Partnership Opportunities</option>
							</select>
							</div>
							<div class="form-group">
								<label>Attach files</label>
								<input type="file" id="attach_file"  name="attach_file" value="" placeholder="">
							</div>
							<div id="captcha2" class="form-group">
								
								
							</div>
							<div class="form-group">
							<input type="hidden" name="validate_captcha" value="1">
							<input type="hidden" name="ajax_call" value="sendMailGetInTouch">
							<button type="submit" name="submitform" >Submit</button>
							</div>
						</form>
					</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="popup-location">
							<h5>We Love To Support You</h5>
							<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> 7380 W Sand Lake Rd #500, Orlando, FL 32819, USA</li>
							<li><i class="fa fa-map" aria-hidden="true"></i> 6th Floor, Mansarovar Plaza, Plot B, Sector 7, Madhyam Marg, Mansarovar, Jaipur, Rajasthan.</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>  +1 (614) 329-6463</li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i> E-Mail : info@biz4group.com</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> For Job : hr@biz4group.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>  
      </div>  
    </div>-->
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
              var owl = $('.home2-client-slider-m');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items: 4
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            })
          </script>
		  
		  <script>
            $(document).ready(function() {
              var owl = $('.biz-blog-slider');
              owl.owlCarousel({
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
                    items: 3
                  }
                }
              })
            })
          </script>

		  <script>
            $(document).ready(function() {
              var owl = $('.recent-project-slider');
              owl.owlCarousel({
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
              })
            })
          </script>
		  <script>
            $(document).ready(function() {
              var owl = $('.management-team-slider');
              owl.owlCarousel({
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

 jQuery().ready(function() {
	jQuery("#contactForm").validate({  
		submitHandler: function(form) {
			var response = grecaptcha.getResponse();
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!!! , please try again later.");
				
			  } 
			  else {
					/*data_form = jQuery("#contactForm").serializeArray();
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
					});*/
					form.submit();
			  }
			return false;	
		}
  });
});



</script>

<?php
require_once('includes/footer-service.php');
?>