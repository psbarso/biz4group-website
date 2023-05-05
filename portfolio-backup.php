<?php include_once("header.php");
 ?>


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
								<li class="premium-icon-set"><h6 data-toggle="tab" href="#menu5">Million Dollar Projects <img src="images/testimonial/premium-quality.png" alt="icon" /></h6></li>
							</ul>
						</div>
						
						<div class="portfolio_cont tab-pane fade" id="menu5">
						<div class="container">
						  <div class="row">
						  
						  			<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/fetchknack-portfolio.jpg" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
												<img src="images/worth-advisor-portfolio.jpg" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/shiftfit-portfolio.png" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
												 <div class="text"><p>A unique Platform for Work providers to find Workforce members and vice versa.</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-shiftfit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A unique Platform for Work providers to find Workforce members and vice versa.</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/subsciety-main.jpg" alt="subsciety-main">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
												<img src="images/portfolio/petlovers/petlovers-main.jpg" alt="petlovers-main">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
									
									<!-- card portfolio-Powder-watts -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/Powder-watts/powder-watts-card.png" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
												 <div class="text"><p>An advanced IoT-based heat cable management system</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-powder-watts">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced IoT-based heat cable management system</p>
										</div>
									</div>
									<!-- card end -->
									
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
												<img src="images/fetchknack-portfolio.jpg" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
													<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
												<img src="images/worth-advisor-portfolio.jpg" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
													<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/shiftfit-portfolio.png" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
													<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
												 <div class="text"><p>A unique Platform for Work providers to find Workforce members and vice versa.</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-shiftfit">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>A unique Platform for Work providers to find Workforce members and vice versa.</p>
										</div>
									</div>
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal10">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/subsciety-main.jpg" alt="subsciety-main">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
													<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
												<img src="images/portfolio/petlovers/petlovers-main.jpg" alt="petlovers-main">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
													<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
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
									
									<!-- card portfolio-Powder-watts -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/Powder-watts/powder-watts-card.png" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
												 <div class="text"><p>An advanced IoT-based heat cable management system</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-powder-watts">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced IoT-based heat cable management system</p>
										</div>
									</div>
									<!-- card end -->
									
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/roundtable-portfolio.jpg" alt="web">
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
												<img src="images/adobe_google01.jpg" alt="">
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
												<img src="images/home-on.jpg" alt="">
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
												<img src="images/fuelit-portfolio.jpg" alt="">
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
												<img src="images/sportal-main.jpg" alt="sportal-main">
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
												<img src="images/portfolio-desc-zzabs-2.png" alt="">
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
												<img src="https://www.biz4group.com/images/portfolio/MyContracks/contracks-main.jpg" alt="">
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
												<img src="images/portfolio-desc-wemaker.png" alt="portfolio-desc-wemaker">
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
												<img src="images/portfolio-desc-tank-broker.png" alt="portfolio-desc-tank-broker">
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
												<img src="images/portfolio-side-glow.png" alt="portfolio-soniclean">
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
												<img src="images/portfolio-desc-soniclean.png" alt="portfolio-desc-soniclean">
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
												<img src="images/portfolio-side-zeus.png" alt="portfolio-zeus">
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
												<img src="images/portfolio-side-auxpair.png" alt="portfolio-auxpair">
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
												<img src="images/portfolio-desc-intransit.png" alt="portfolio-desc-intransit">
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
												<img src="images/accugenedx-main.jpg" alt="accugenedx-main">
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
												<img src="images/portfolio-side-hnda.png" alt="portfolio-hnda">
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
												<img src="images/greenryder-main.jpg" alt="post-heritage-portfolio">
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
												<img src="images/portfolio-desc-mbi-marketing.png" alt="portfolio-desc-mbi-marketing">
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
												<img src="https://www.biz4group.com/images/portfolio/post-heritage/post-heritage-main.png" alt="post-heritage-portfolio">
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
												<img src="images/ycf-main.jpg" alt="">
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
												<img src="images/app-weigh.jpg" alt="">
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
												<img src="images/things_board.jpg" alt="">
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
												<img src="images/IFD01.jpg" alt="">
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
												<img src="images/compare-legal.jpg" alt="">
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
												<img src="images/goldleaf-main.jpg" alt="post-heritage-portfolio">
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
												<img src="images/ipause-main.jpg" alt="post-heritage-portfolio">
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
												<img src="images/nvzn-main.jpg" alt="">
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
												<img src="images/integra-main.jpg" alt="">
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
												<img src="images/trialproofer-main.jpg" alt="">
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
												<img src="images/bigmouthmarketing-main.jpg" alt="">
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
												<img src="images/chainlink-1.jpg" alt="">
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
												<img src="images/celebratube.jpg" alt="">
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
												<img src="images/angelinagrace-1.jpg" alt="">
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
												<img src="images/e-commerce-home.jpg" alt="">
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
												<img src="images/tekchoice_portfolio.jpg" alt="">
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
												<img src="images/bounce_portfolio.jpg" alt="">
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
												<img src="images/rdexx-portfolio.jpg" alt="">
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
												<img src="images/portfolio/Splitzz/splitzz-main.png"" alt="splitzz-main">
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
												<img src="images/portfolio/Sensations/sensations-main.png" alt="sensations-main">
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
												<img src="images/portfolio/amour/portfolio-side-amour.png" alt="amour-main">
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
												<img src="images/portfolio/boat-butler/portfolio-side-boat-butler.jpg" alt="amour-main">
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
												<img src="images/portfolio/tank-mate/portfolio-side-tank-mate.jpg" alt="amour-main">
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
												<img src="images/portfolio/shwash/portfolio-side-shwash.jpg" alt="shwash">
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
												<img src="images/portfolio/udder-color/portfolio-side-udder-color.jpg" alt="udder-color">
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
												<img src="images/todos-portfolio-main.png" alt="web">
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
												<img src="images/bull-markit-portfolio-main.png" alt="web">
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
												<img src="images/portfolio/semuto/portfolio-semuto.png" alt="web">
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
												<img src="images/portfolio/renters-book/portfolio-renters-book.png" alt="web">
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
												<img src="images/portfolio/court-calendar/portfolio-court-calendar.png" alt="web">
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
												<img src="images/portfolio/definitive-safety/portfolio-definitive-safety.png" alt="web">
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
												<img src="images/portfolio/3ciot/portfolio-3ciot.png" alt="web">
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
												<img src="images/portfolio/iosync/portfolio-iosync.webp" alt="web">
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
												<img src="images/portfolio/handshake/portfolio-handshake.png" alt="web">
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
												<img src="images/portfolio/facilitiv/facilitiv-card.png" alt="web">
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
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/carbon-ops/carbon-ops-card.png" alt="web">
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
									</div>-->
									<!-- card end -->
									<!-- card portfolio-friendship-lamps -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/friendship-lamps/friendship-lamps-card.png" alt="web">
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
												<img src="images/portfolio/a2r/a2r-portfolio.png" alt="web">
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
												<img src="images/portfolio/bunny/bunny-card.webp" alt="web">
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
												<img src="images/portfolio/myface/myface-card.webp" alt="web">
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
												<img src="images/portfolio/irf/irf-card.webp" alt="web">
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
												<img src="images/portfolio/car-sharing/carsharing-card.webp" alt="web">
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
												<img src="images/e-commerce-home.jpg" alt="">
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
												<img src="images/fuelit-portfolio.jpg" alt="">
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
												<img src="images/subsciety-main.jpg" alt="subsciety-main">
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
												<img src="images/accugenedx-main.jpg" alt="accugenedx-main">
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
												<img src="images/portfolio/post-heritage/post-heritage-main.png" alt="post-heritage-portfolio">
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
												<img src="images/greenryder-main.jpg" alt="post-heritage-portfolio">
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
												<img src="images/goldleaf-main.jpg" alt="post-heritage-portfolio">
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
												<img src="images/portfolio-side-zeus.png" alt="portfolio-zeus">
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
												<img src="images/portfolio-desc-zzabs-2.png" alt="">
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
												<img src="images/portfolio-desc-tank-broker.png" alt="portfolio-desc-tank-broker">
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
												<img src="images/portfolio-desc-soniclean.png" alt="portfolio-desc-soniclean">
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
												<img src="images/portfolio/bunny/bunny-card.webp" alt="web">
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
												<img src="images/portfolio/irf/irf-card.webp" alt="web">
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
						  <!-- card portfolio-Powder-watts -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/Powder-watts/powder-watts-card.png" alt="web">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-show" />
												<div class="middle">
												<img src="images/testimonial/premium-quality.png" alt="icon" class="premium-icon-hover" />
												 <div class="text"><p>An advanced IoT-based heat cable management system</p></div>
												 <div class="middle-a">
												 <a href="https://www.biz4group.com/portfolio-powder-watts">View Details</a>
												 </div>
												</div>
												</div>
											</a>
										</div>
										<div class="portfolio-card-bottom">
											<p>An advanced IoT-based heat cable management system</p>
										</div>
									</div>
									<!-- card end -->
						   <div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/3ciot/portfolio-3ciot.png" alt="web">
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
												<img src="images/portfolio/tank-mate/portfolio-side-tank-mate.jpg" alt="amour-main">
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
												<img src="images/portfolio/iosync/portfolio-iosync.webp" alt="web">
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
										<img src="images/things_board.jpg" alt="">
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
										<img src="images/app-weigh.jpg" alt="">
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
										<img src="images/home-on.jpg" alt="">
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
									<!--<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/carbon-ops/carbon-ops-card.png" alt="web">
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
									</div>-->
									<!-- card end -->
									<!-- card portfolio-friendship-lamps -->
									<div class="col-md-4 col-sm-6 portfolio-desk-card-height">
										<div class="portfolio-section portfoilo-overlay" style="margin: 20px 0 25px;">
											<a data-toggle="modal" data-target="#myModal2">
												<div class="portfolio-section-img portfoilo-overlayimg">
												<img src="images/portfolio/friendship-lamps/friendship-lamps-card.png" alt="web">
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
												<img src="images/adobe_google01.jpg" alt="">
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
												<img src="images/compare-legal.jpg" alt="">
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
												<img src="images/IFD01.jpg" alt="">
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
												<img src="images/bounce_portfolio.jpg" alt="">
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
												<img src="images/tekchoice_portfolio.jpg" alt="">
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
												<img src="images/angelinagrace-1.jpg" alt="">
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
												<img src="images/chainlink-1.jpg" alt="">
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
												<img src="images/bigmouthmarketing-main.jpg" alt="">
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
												<img src="images/trialproofer-main.jpg" alt="">
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
												<img src="images/integra-main.jpg" alt="">
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
												<img src="images/nvzn-main.jpg" alt="">
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
												<img src="images/ycf-main.jpg" alt="">
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
												<img src="images/rdexx-portfolio.jpg" alt="">
												<div class="middle">
												 <div class="text">Comprehensive web app to track the spread of diseases
</div>
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
												<img src="images/subsciety-main.jpg" alt="subsciety-main">
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
												<img src="images/sportal-main.jpg" alt="sportal-main">
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
												<img src="images/accugenedx-main.jpg" alt="accugenedx-main">
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
												<img src="images/portfolio/post-heritage/post-heritage-main.png" alt="post-heritage-portfolio">
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
												<img src="images/greenryder-main.jpg" alt="post-heritage-portfolio">
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
												<img src="images/portfolio-desc-intransit.png" alt="portfolio-desc-intransit">
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
												<img src="images/portfolio-desc-wemaker.png" alt="portfolio-desc-wemaker">
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
												<img src="images/portfolio-desc-mbi-marketing.png" alt="portfolio-desc-mbi-marketing">
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
												<img src="images/portfolio-desc-tank-broker.png" alt="portfolio-desc-tank-broker">
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
												<img src="images/portfolio-desc-soniclean.png" alt="portfolio-desc-soniclean">
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
												<img src="images/portfolio/shwash/portfolio-side-shwash.jpg" alt="shwash">
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
												<img src="images/portfolio/udder-color/portfolio-side-udder-color.jpg" alt="udder-color">
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
												<img src="images/portfolio/facilitiv/facilitiv-card.png" alt="web">
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
												<img src="images/celebratube.jpg" alt="">
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
												<img src="images/fuelit-portfolio.jpg" alt="">
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
												<img src="images/sportal-main-app.jpg" alt="sportal-main">
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
												<img src="images/ipause-main.jpg" alt="post-heritage-portfolio">
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
												<img src="images/portfolio-desc-zzabs-2.png" alt="">
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
												<img src="images/portfolio-side-zeus.png" alt="portfolio-zeus">
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
												<img src="images/portfolio-side-glow.png" alt="portfolio-soniclean">
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
												<img src="images/portfolio-side-hnda.png" alt="portfolio-hnda">
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
												<img src="images/portfolio-side-auxpair.png" alt="portfolio-auxpair">
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
												<img src="images/portfolio/Sensations/sensations-main.png" alt="sensations-main">
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
												<img src="images/portfolio/Splitzz/splitzz-main.png"" alt="splitzz-main">
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
												<img src="images/portfolio/amour/portfolio-side-amour.png" alt="amour-main">
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
												<img src="images/portfolio/boat-butler/portfolio-side-boat-butler.jpg" alt="amour-main">
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
												<img src="images/portfolio/tank-mate/portfolio-side-tank-mate.jpg" alt="amour-main">
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
												<img src="images/portfolio/a2r/a2r-portfolio.png" alt="web">
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
												<img src="images/portfolio/car-sharing/carsharing-card.webp" alt="web">
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
												<img src="images/portfolio/myface/myface-card.webp" alt="web">
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

<div class="portfolio-cta" style="background-image:url('images/portfolio-cta.jpg');">
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
								<img src="images/trusted-img1.png" alt="" class="adobe-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/trusted-img2.png" alt="" class="google-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/aws.png" alt="" class="aws-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/trusted-img4.png" alt="" class="appweigh-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/trusted-img5.png" alt="" class="comparelegal-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/home2-client-logo9.png" alt="" class="cf-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/home2-client-logo3.png" alt="" class="ifd-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/nvzn-logo.png" alt="" class="aamp-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/home2-client-logo6.png" alt="" class="herdlogix-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/home2-client-logo4.png" alt="" class="homeon-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/home2-client-logo2.png" alt="" class="noy-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/ge.png" alt="" class="gedigital-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/tekchoice.png" alt="" class="tekchoice-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/creekside-logo.png" alt="" class="herdlogix-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/verizon.png" alt="" class="verizon-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/holtec.png" alt="" class="holtec-logo-img">
							</div>
						</li>

						<li>
							<div class="home3-trusted-img">
								<img src="images/ag-home-logo.png" alt="" class="ag-home-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/bmm-home-logo.png" alt="" class="bmm-home-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/bounce-home-logo.png" alt="" class="bounce-home-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/celebratube-home-logo.png" alt="" class="celebratube-home-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/lamar-home-logo.png" alt="" class="lamar-home-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/subsciety-logo.png" alt="" class="silvevado-home-logo-img">
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img class="peakio-logo-img" src="images/fuel-it-logo.png"" alt="" style="max-width: 90px;"/>
							</div>
						</li>
						<li>
							<div class="home3-trusted-img">
								<img src="images/integ-logo.png" alt="" class="silvevado-home-logo-img">
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
 
 <div class="reachus-background portfolio-reachus" style="background-image:url('images/reachus-img.jpg');" id="lets-connect">
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
<img src="images/home-testimonial-bg.png">
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

 <script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
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
require_once('includes/footer.php');
?>	