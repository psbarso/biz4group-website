<?php include_once("includes/header-service.php");
?>

<link rel="stylesheet" href="css/portfolionew.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
<link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet" media="all">
<style>
  
	.theme-color{
		color: #ff9494 
	}
	.theme-bg{
		/*background-color:#F83459;*/
		background: transparent linear-gradient(180deg, #ff9494 0%, #e74b76 100%) 0% 0% no-repeat padding-box;
	 }
	.theme-border{
		border:2px solid #ff9494;
		background: #FFFFFF;
	    border-radius: 20px;
		padding:15px;
	}
	.subject-matter::after{
		 background-color: #ff9494;
	}
	.tech-stack:hover {
		background-color:#ff9494;
		color:#ffffff;
	}
	
	.tech-stack:hover h3::after{
		background-color:#ffffff;
	}
	.why-us:hover{
		background-color:#ff9494;
		color:#ffffff;
	}
	.why-us:hover h3::after{
		background-color:#ffffff;
	}
	
	.portfolio-banner{
		background-image: url("https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/glowapp-banner-new.webp");
	}

	.testomonial-outer{
		border: 10px solid #ff9494;
	}

	div#owl-demo-portfolio .owl-dots{
		display:none;
	}

	.portfolio-banner img {
    	max-width: 650px;
    	margin-top: 40px;
	}

	.horizontal-line.bg-glow-app::after {
    	background-color: #ff9494;
	}
	img{
	width:100%;
	height: auto;
	}
	@media screen and (max-width: 767px) {
	.portfolio-banner img {
		display: none;
	}
	.portfolio-banner {
		background-size: 250%;
		padding-bottom: 30px;
	}
	.insights-video video {
		height: auto !important;
		width: 100% !important;
	}
	}
</style>



<div class="app-portfolio-page">
	
	 <section>
		 <div class="portfolio-banner ">
			 <div class="container">
			  	<div class="row flex-disp flex-align-center flex-wrap flex-justify-center">
			 		<div class="col-md-8 col-sm-12 alt-order">
				 		<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/udder-color-banner-img.webp" alt="banner-img" width="640" height="320" loading="lazy"/>
			  		</div>
					<div class="col-md-4 col-sm-12 center-al">
					 	<h1 class="horizontal-line bg-white banner"><b>PORTFOLIO</b></h1>
						<h2>A Modernistic Business Platform For Custom Artwork Printing </h2>
                                    <a href="https://uddercolor.com/" target="_blank" class="visit mt-2">Visit Website</a>
					</div>
			 	</div>
			</div>
		</div>
	</section>
	 <!--banner-->

	<!-- work-section start -->
	<section class="challenge-section">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
			<h2 class="heading-section margin-b-3 text-center">Our Smart, Efficient & Productive Approach</h2>
			</div>
				<div class="col-md-5 col-lg-5 col-sm-12 margin-b-3">
					<div class="challenge-card">
						<div class="challenge-img">
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/glowapp-challenge-new.webp" alt="challenge-new" width="640" height="320" loading="lazy"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								
								<h3 class="theme-color horizontal-line bg-glow-app">The Challenge</h3>
							</div>
							<div class="challenge-content">
								<p>
									One of the leading printing houses in the United States reached out to Biz4Group, to revamp their existing business website into an ultra efficient and innovative business platform. The core idea was to rebuild their outdated website into a secure, efficient and scalable platform, with a motive to facilitate numerous order requests synchronically. The refined website would allow users to submit their desirable artwork to get it converted into printable heat transfers. 
								</p>						
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12 margin-b-3">
					<div class="challenge-card">
						<div class="challenge-img">
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/glowapp-project-highlights.webp" alt="challenge-new" width="640" height="320" loading="lazy"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color horizontal-line bg-glow-app">Project Highlights</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>High quality artwork upload</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Automated and manual image verification</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Payment authorization</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Coupon/ promo code</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Membership plans and discounts</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Expert artwork approval </p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Feedback based re-uploads</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Role management</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Order management & Tracking</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Fast-paced shipping</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Activity log</p></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- work-section end -->

	<!-- section-insights start -->
	<section class="section-insights">
		<div class="container">
			<div class="inner-insights theme-bg padding-3">
				<div class="row">
					<div class="col-md-6">
						<div class="insights-heading">
							<h2 class="horizontal-line bg-white">Insights</h2>
						</div>
					<div style="margin-bottom:30px;">
						<p>The leading printing house in the US partnered with our team to design and develop a highly-productive and complex business platform that would host thousands of users daily. The developed web app allowed customers to order custom printable heat transfers in various quantities and sizes and have them shipped to their addresses within a day or two. The platform has an automated and manual approval process where an assigned reviewer analyzes the artwork before moving it to production. The reviewers can also request the customers to re-upload or replace specific images in an order using the proprietary approval system. With countless features like payment authorization, activity log, membership discounts and self-pickup, etc., the platform successfully provides customers with a much better and more rewarding experience.</p>			
					</div>
					</div>
					<div class="col-md-6">
					<div class="insights-video">
						<video class="w-100" style="height: 350px;
							display: flex;
							justify-content: center;
							align-items: center;
							position: relative;" controls="">
						<source src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/udder-color-testimonial.m4v" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- section-insights end -->

	<!-- section-screens start -->
	<section class="section-screens">
		<div class="container">
			<h2 class="heading-section margin-b-3 text-center">Platform UI/ UX Design</h2>
			<div class="screens-inner">
				<div class="screens-web-img">
					<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/design.webp" alt="design" width="640" height="320" loading="lazy">
				</div>
			</div>
		</div>
	</section>
	<!-- section-screens end -->
	<!-- section-architecture start -->
	<section>
		<div class="container">
			<div class="architecture">
				<h2 class="heading-section margin-b-3 text-center">Technical Architecture</h2>
				<div class="screens-inner">
					<div class="screens-web-img flex-disp flex-justify-center">
						<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-architecture.webp" alt="subsciety-architecture" width="640" height="320" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section-architecture end -->
    <!-- section-leader-start -->
	<section>
		<div class="container">
			<h2 class="heading-section margin-b-3 text-center">Leader Of The Effort</h2>
			<div class="subject-matter">
				<div class="">
					<div class="flex-disp">
						<img class="fix-img margin-end-5 bd-50" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sme-img.webp" alt="sme-img" width="640" height="320" loading="lazy"/>
						<div>
							<h4 class="theme-color horizontal-line bg-glow-app">Sanjeev Verma</h4><p><b>Exp: 20+ Years</b></p>
						</div>
					</div>
					<h3 class="">Subject Matter Expert</h3>
					<p class="content">
						Sanjeev Verma has been actively conceptualizing and creating software solutions for the past 20 years in the IT domain. He has worked on technical leadership positions with Marriott Vacations, Disney, MasterCard, Statefarm, and Oracle. He has been a key player in developing, implementing, and monitoring Digital Solutions ranging from IoT solutions & products, Mobile and Web Development, and Digital Marketing to Full Stack Development and CMS solutions.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- section-architecture end -->
	<!-- section-why-biz4group-start -->
	<section>
		<div class="container">
			<h2 class="heading-section margin-b-3 text-center">Why Biz4Group</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3">
						<h3 class="horizontal-line bg-black">Trusted Advisors</h3>
						<p>Skilled Developers for Deployment</p>
						<p>Collaborative efforts of Subject matter Experts </p>
						<p>On time delivery ensuring Desirable Outputs </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3">
						<h3 class="horizontal-line bg-black">Distinctive Quality</h3>
						<p>Offering exemplary code quality</p>
						<p>User-friendly UI/UX </p>
						<p>Prioritize client expectation </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3">
						<h3 class="horizontal-line bg-black">Continuous Assistance</h3>
						<p>24/7 Technical Support</p>
						<p>Post Delivery Consultation</p>
						<p>Continuous Server Monitoring</p>
						<p>DB Clean Up</p>
						<p>Cost Effective Customer Support Plans </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section-why-biz4group-end -->
		<!-- section-above-and-beyond-start-->
	<section class="section-screens">
		<div class="business-benefits">
			<div class="container">
				<h2 class="heading-section margin-b-3 text-center">Going Above & Beyond</h2>
				<div class="row flex-disp flex-align-center flex-wrap">
					<div class="col-md-6 col-xs-12 padding-0 col-sm-12">
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/business-benefits.webp" alt="business-benefits" width="640" height="320" loading="lazy"/>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12">
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color horizontal-line bg-glow-app">Business Benefits</h3>
							</div>
							<div class="challenge-content">
								<ul>	
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												A fantastic increase of more than 48% MoM sales for the business
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												 The updated UX made order processing much faster and more efficient
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												2x growth in the weekly user base since launch
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												The use of MERN technology allowed hosting thousands of users during peak traffic hours
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row flex-disp flex-align-center flex-wrap">
					<div class="col-md-6 col-xs-12 col-sm-12 alt-order">
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color bg-glow-app horizontal-line">Why We Use Reusable Technical Components</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												<span class="theme-color content">Efficiency:</span> 
												Reusable components help us save development efforts and deploy the application faster and for less cost.
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												<span class="theme-color content">Consistency:</span> 
												With the primary functions being consistent, we get greater control and scalability of the app. 
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												<span class="theme-color content">Proven Codebase:</span> 
												Various developers have used the code many times, making the functionality already proven in the field.
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12 padding-0">
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/technical-components.webp" alt="technical-components" width="640" height="320" loading="lazy"/>
					</div>
				</div>
				<div class="row flex-disp flex-align-center flex-wrap">
					<div class="col-md-6 padding-0">
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/trustedadviser.webp" alt="trustedadviser" width="640" height="320" loading="lazy"/>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12">
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color horizontal-line bg-glow-app">Role As Trusted Advisors</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Facilitating value-added artifacts like Architecture diagrams
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Design Guidelines
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Regular Status reports 
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Review calls 
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Best Coding practices and test cases	
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Advance Deliveries 
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Regular inputs for Product Enhancement
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Post-deployment technical support 
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Consultation 
											</p>
										</div>
									</li>
								</ul>						
							</div>
						</div>
					</div>
				</div>
				<div class="row flex-disp flex-align-center flex-wrap">
					<div class="col-md-6 col-xs-12 col-sm-12 alt-order ">
						<div class="challenge-left ">
							<div class="challenge-left-heading">
								<h3 class="theme-color horizontal-line bg-glow-app">Cost Low</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												With plug and play components and reusable technical modules, we bring down the overall development cost by substantial margins.
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12 padding-0 col-sm-12">
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/suggestion.webp" alt="suggestion" width="640" height="320" loading="lazy"/>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section-above-end -->
	
	<section class="">
		<div class="container">
			<div class="architecture">
				<h2 class="heading-section margin-b-3 text-center">Development Life Cycle</h2>
				<div class="screens-inner">
					<div class="screens-web-img flex-disp flex-justify-center">
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-development-lifecycle.webp" alt="development-lifecycle" width="640" height="320" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--tech-stack-->
	<section>
	
	<div class="container">
	<h2 class="heading-section margin-b-3 text-center">Tech Stack</h2>
	<div class="owl-carousel owl-theme owl-demo2">
					
					<div class="item">
						<div class="tech-stack margin-b-3">
	<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/express-js-icon.webp" alt="expressjs" width="640" height="320" loading="lazy"></div>
	<h3 class="horizontal-line bg-subsciety">Express</h3>
	
	<p >Express.JS improves an application's scalability and allows the website to load quicker than ever before. Furthermore, since it facilitates non-blocking I/O operations, the speed of code execution is also improved by the runtime environment.</p>
	
	</div>
					</div>
					<div class="item">
					
	<div class="tech-stack margin-b-3">
	<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ReactJS.webp" alt="reactjs" width="640" height="320" loading="lazy"></div>
	<h3 class="horizontal-line bg-subsciety" >ReactJS</h3>
	
	<p >React is a free and open-source front-end JavaScript library for building user interfaces or UI components. It allows developers to reuse the components built for the same functionality, reducing the development effort and ensuring flawless performance.</p>
	
	</div>
	
					</div>
					<div class="item">
						<div class="tech-stack margin-b-3">
	<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/nodejs_logo.webp" alt="nodejs" width="640" height="320" loading="lazy"></div>
	<h3 class="horizontal-line bg-subsciety">Node.js</h3>
	
	<p>Node.js is based on Google’s V8 JavaScript engine that compiles the code directly into the machine code, improving the speed and performance of the platform. In addition, it delivers better efficiency and overall developer productivity through code sharing and reusability.</p>
	
	</div>
						
					</div>
					<div class="item">
						<div class="tech-stack margin-b-3">
	<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/mongodb-icon.webp" alt="mongodb" width="640" height="320" loading="lazy"></div>
	<h3 class="horizontal-line bg-subsciety">MongoDB</h3>
	
	<p>Unlike traditional database systems that offer data management through tables and rows, MongoDB allows data management fields with the help of NoSQL. Resulting in no lag while handling more massive datasets.</p>
	
	</div>
						
					</div>
					
					
				
				
					
				</div>
<!--	<div class="row">
	<div class="col-md-3">
	<div class="tech-stack margin-b-3">
	<img src="https://d1fxfakb0fcon3.cloudfront.net/images/express-js-icon.webp">
	<h3 class="horizontal-line bg-subsciety">Express</h3>
	
	<p >Express.JS improves an application's scalability and allows the website to load quicker than ever before. Furthermore, since it facilitates non-blocking I/O operations, the speed of code execution is also improved by the runtime environment.</p>
	
	</div>
	</div>
	<div class="col-md-3">
	<div class="tech-stack margin-b-3">
	<img src="https://d1fxfakb0fcon3.cloudfront.net/images/ReactJS.webp">
	<h3 class="horizontal-line bg-subsciety" >ReactJS</h3>
	
	<p >React is a free and open-source front-end JavaScript library for building user interfaces or UI components. It allows developers to reuse the components built for the same functionality, reducing the development effort and ensuring flawless performance.</p>
	
	</div>
	</div>
	<div class="col-md-3">
	<div class="tech-stack margin-b-3">
	<img src="https://d1fxfakb0fcon3.cloudfront.net/images/nodejs_logo.webp">
	<h3 class="horizontal-line bg-subsciety">Node.js</h3>
	
	<p>Node.js is based on Google’s V8 JavaScript engine that compiles the code directly into the machine code, improving the speed and performance of the platform. In addition, it delivers better efficiency and overall developer productivity through code sharing and reusability.</p>
	
	</div>
	</div>
	<div class="col-md-3">
	<div class="tech-stack margin-b-3">
	<img src="https://d1fxfakb0fcon3.cloudfront.net/images/mongodb-icon.webp">
	<h3 class="horizontal-line bg-subsciety">MongoDB</h3>
	
	<p>Unlike traditional database systems that offer data management through tables and rows, MongoDB allows data management fields with the help of NoSQL. Resulting in no lag while handling more massive datasets.</p>
	
	</div>
	</div>
	</div>-->
	</div>
	</section>
	<!--teck-stack-ends-->
     <img class="w-100" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/udder-color/udder-color-demo-banner.webp" alt="demo-banner" width="640" height="320" loading="lazy"/>
	<!--similar-projects-->
	<section>
		<div class="container">
			<h2 class="heading-section margin-b-3 text-center">Similar Projects</h2>
				<div id="owl-demo-portfolio" class="owl-carousel owl-theme owl-demo2">
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-intransit" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-intransit.webp" alt="intransit" width="640" height="320" loading="lazy">
							<p>Package Protection and Tracking Services for eCommerce Merchants</p>
						</a>
					</div>
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-tank-broker" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-tank-broker.webp" alt="tank-broker" width="640" height="320" loading="lazy">
							<p>eCommerce Marketplace for Buying and Selling Seafood and Pets</p>
						</a>
					</div>
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-soniclean" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-soniclean.webp" alt="soniclean" width="640" height="320" loading="lazy">
							<p>CRM for the client's customer relationship management needs per the modern system of affairs</p>
						</a>
					</div>
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-subsciety" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-main.webp" alt="subsciety-main" width="640" height="320" loading="lazy">
							<span>Subscription-based multi-vendor marketplace</span>
						</a>
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-fuelit" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/fuelit-portfolio.webp" alt="fuelit" width="640" height="320" loading="lazy"/>
							<p>An eCommerce app to facilitate on-demand fuel delivery</p>
						</a>	
					</div>
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-hnda" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-hnda.webp" alt="hnda" width="640" height="320" loading="lazy">
							<p>Driving Academy app for Instructors and Students</p>
						</a>	
					</div>
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-auxpair" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-auxpair.webp" alt="auxpair" width="640" height="320" loading="lazy">
							<p>An eCommerce app to facilitate on-demand fuel delivery</p>
						</a>
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-zzabs" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-zzabs-2.webp" alt="zzabs" width="640" height="320" loading="lazy">
							<p>eCommerce marketplace app for Android and iOS users.</p>
						</a>
					</div>

				</div>
			</div>
	
	</section>
	<!--similar-projects-ends-->

<script>
$(document).ready(function() {
 
  $(".owl-demo2").owlCarousel({
	  autoplay: true,
	  autoplayTimeout: 2000,
	  autoplayHoverPause: true,
      items : 4,
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
        },
		991:{
            items:4,
            nav:true,
            loop:false
        }
		
    }
  });
 
});
</script>
<?php
require_once('includes/footer-service.php');
?>	




