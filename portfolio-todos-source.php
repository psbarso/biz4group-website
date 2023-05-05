<?php include_once("includes/header-service.php");
?>

<link rel="stylesheet" href="css/portfolionew.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
<link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet" media="all">
<style>
  
	.theme-color{
		color: #396842; 
	}
	.theme-bg{
		background: rgb(57,104,66);
		background: linear-gradient(180deg, rgba(57,104,66,1) 7%, rgba(167,201,88,1) 100%);
	 }
	.theme-border{
		border:2px solid #396842;
		background: #FFFFFF;
	    border-radius: 20px;
		padding:15px;
	}
	.subject-matter::after{
		 background-color: #396842;
	}
	.tech-stack:hover {
		background-color: #396842;
		color:#ffffff;
	}
	
	.tech-stack:hover h3::after{
		background-color:#ffffff;
	}
	.why-us:hover{
		background-color: #396842;
		color:#ffffff;
	}
	.why-us:hover h3::after{
		background-color:#ffffff;
	}
	
	.portfolio-banner{
		background-image: url("https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos/todos-transparent-banner.webp");
	}

	.testomonial-outer{
		border: 10px solid #3063f0;
	}

	div#owl-demo-portfolio .owl-dots{
		display:none;
	}

	.portfolio-banner img {
    	max-width: 650px;
    	margin-top: 40px;
	}

	.horizontal-line.bg-glow-app::after {
    	background-color: #396842;
	}

	img{
	width:100%;
	height: auto;
	}
	
	@media only screen and (max-width: 767px) {
	.portfolio-banner {
		background-size: 250%;
	}	
	.portfolio-banner img {
		display: none;
	}
	}
</style>



<div class="app-portfolio-page">
	
	 <section>
		 <div class="portfolio-banner ">
			 <div class="container">
			  	<div class="row flex-disp flex-align-center flex-wrap flex-justify-center">
			 		<div class="col-md-8 col-sm-12  alt-order">
				 		<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos/todos-banner-img.webp" alt="todos-banner-img" width="640" height="320" loading="lazy"/>
			  		</div>
					<div class="col-md-4 col-sm-12 center-al">
					 	<h1 class="horizontal-line bg-white banner"><b>PORTFOLIO</b></h1>
						<h2>An ultra-modern and innovative eCommerce marketplace for large shipments</h2>
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
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos/todos-challenge.webp" alt="challenge-new" width="640" height="320" loading="lazy"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								
								<h3 class="theme-color horizontal-line bg-glow-app">The Challenge</h3>
							</div>
							<div class="challenge-content">
								<p>
									The mighty upsurge in the ecommerce trend has resulted in the axiomatic movement of most service providers and manufacturers toward online marketplaces. However, it becomes highly challenging to ship bulk orders from one country to another due to the various trade policies. To resolve the challenge for the farmers, an innovational startup partnered with Biz4Group to build a multi-vendor marketplace platform for buying and selling fresh vegetables, fruits, and edible items across different countries.
								</p>						
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12 margin-b-3">
					<div class="challenge-card">
						<div class="challenge-img">
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos/todos-project-highlights.webp" alt="project-highlights" width="640" height="320" loading="lazy"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color horizontal-line bg-glow-app">Project Highlights</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Automatically segregated carts based on regions</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Multi-vendor onboarding</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>International import/ export of bulk orders</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Request international and domestic transportation</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Multi-step order payments</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>International Commercial Terms compliance</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Most selling and featured products on homepage</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Dedicated dashboard for sales and platform analytics</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Secure payment gateway</p></div></li>
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
					<div class="col-md-12">
						<div class="insights-heading">
							<h2 class="horizontal-line bg-white">Insights</h2>
						</div>
						<div style="margin-bottom:30px;">
						<p>The proposed platform allows for easy search and purchasing of bulk farm produce like fruits, vegetables, and organic items through an intuitive interface. Users can order from various regions in the States and Latin America and track their orders from their dedicated panel. The platform also automatically sorts customer carts based on shipping region and allows them to avail custom quotes for transportation. </p>
						<p>Being a multi-vendor marketplace, the platform allows for easy registration for farmers to list their products with various details like country of origin, Incoterm preference, country exporting from, packaging details, nutritional facts, etc. They can easily manage the inventory, order volumes, payouts, and other vital functions directly from their panels. </p>		
						<p>The admin panel allows access to all the platform functionalities, such as international and domestic shipping quote management, order and user management, and payout handling for all the merchants selling on the multi-vendor marketplace.</p>
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
					<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos/design.webp" alt="design" width="640" height="320" loading="lazy">
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
						<h3 class="horizontal-line bg-black">How We Work As Trusted Advisors?</h3>
						<p>At Biz4Group, we do whatever it takes to make a product successful. We are not order takers, rather our highly experienced team of subject matter experts and seasoned developers work with you to deliver added value each time.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3">
						<h3 class="horizontal-line bg-black">How Quality Helps</h3>
						<p>By providing exemplary code quality, we ensure your product supersedes customer expectation with amazing UX, better usability and easy interface. This increases user engagement and overall productivity.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3">
						<h3 class="horizontal-line bg-black">Supportability</h3>
						<p>We keep supporting your product forever with offerings like post-delivery consultation, continuous server monitoring and DB clean up. We provide cost effective, custom support plans as per business needs.</p>
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos/business-benifits.webp" alt="business-benefits" width="640" height="320" loading="lazy" style="border-radius: 15px;" />
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
												The platform has registered 8x growth in its first quarter of launch
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												With a strong backend and robust technical architecture, the platform handles hundreds of order requests simultaneously
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												The innovative webapp is gradually growing to become a brand in bulk international shipments
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Over 150 farmers have already registered and selling 250+ products directly to the customers across various countries
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/technical-components.webp" alt="technical-components" width="640" height="320" loading="lazy"/>
					</div>
				</div>
				<div class="row flex-disp flex-align-center flex-wrap">
					<div class="col-md-6 padding-0">
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/trustedadviser.webp" alt="trustedadviser" width="640" height="320" loading="lazy"/>
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
												We work with you as your trusted advisors by facilitating value-added artifacts like Architecture diagrams, Design Guidelines, regular Status reports, Review calls, best Coding practices and test cases, Advance Deliveries, Regular inputs for Product Enhancement, post-deployment technical support, consultation, and many more.
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/suggestion.webp" alt="suggestion" width="640" height="320" loading="lazy"/>
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
	<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/express-js-icon.webp" alt="express-js" width="640" height="320" loading="lazy"></div>
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
     <img class="w-100" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/todos/todos-demo-banner.webp" alt="demo-banner" width="640" height="320" loading="lazy"/>
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
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio-desc-soniclean.webp" alt="soniclean" width="640" height="320" loading="lazy">
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




