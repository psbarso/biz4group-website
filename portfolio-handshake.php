<?php include_once("includes/header-service.php");
?>

<link rel="stylesheet" href="css/portfolionew.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
<link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet" media="all">
<style>
  
	.theme-color{
		color: #242635; 
	}
	.theme-bg{
		/*background-color:#F83459;*/
		background: transparent linear-gradient(180deg, #242635 0%, #254358 100%) 0% 0% no-repeat padding-box;
	 }
	.theme-border{
		border:2px solid #242635;
		background: #FFFFFF;
	    border-radius: 20px;
		padding:15px;
	}
	.subject-matter::after{
		 background-color: #242635;
	}
	.tech-stack:hover {
		background-color:#242635;
		color:#ffffff;
	}
	
	.tech-stack:hover h3::after{
		background-color:#ffffff;
	}
	.why-us:hover{
		background-color:#242635;
		color:#ffffff;
	}
	.why-us:hover h3::after{
		background-color:#ffffff;
	}
	
	.portfolio-banner{
		background-image: url("https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/glowapp-banner-new.webp");
	}

	.testomonial-outer{
		border: 10px solid #242635;
	}

	div#owl-demo-portfolio .owl-dots{
		display:none;
	}

	.portfolio-banner img {
    	max-width: 550px;
    	margin-top: 40px;
	}

	.horizontal-line.bg-glow-app::after {
    	background-color: #242635;
	}
    .horizontal-line-center::after{
	right: 0;
    margin: auto;
   }	
    img{
		height: auto;
		width: 100%;
	}
	@media only screen and (max-width: 767px) {
	.portfolio-banner img {
		display: none;
	}
	.portfolio-banner {
		background-size: 200% 200%;
	}
	}
</style>



<div class="app-portfolio-page">
	
	 <section>
	 <div class="portfolio-banner ">
	 <div class="container">
	  <div class="row flex-disp flex-align-center flex-wrap flex-justify-center">
	 <div class="col-md-8 col-sm-12  alt-order">
	 <img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/glow-hero.webp" alt="glow-hero" width="640" height="320" loading="lazy" />
	 
	 </div>
	 <div class="col-md-4 col-sm-12 center-al">
	 	<h1 class="horizontal-line bg-white banner"><b>PORTFOLIO</b></h1>
		<h2>Ingenious betting app for sports enthusiasts</h2>
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
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/glowapp-challenge-new.webp" alt="challenge-new" width="640" height="320" loading="lazy" />
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								
								<h3 class="theme-color horizontal-line bg-glow-app">The Challenge</h3>
							</div>
							<div class="challenge-content">
								<p>
									Online sports betting is a fast-growing industry with millions of users worldwide participating in popular leagues to make good money against gambling odds. Sports enthusiasts often use their analysis of previous games to predict the outcomes and secure the wager placed in the bets. Apart from legalization, the biggest challenge here is to build a platform that can fetch real-time data like scores, news, and announcements during live matches so that users can place bets instantly and show them details for upcoming schedules.
								</p>						
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12 margin-b-3">
					<div class="challenge-card">
						<div class="challenge-img">
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/glowapp-project-highlights.webp" alt="challenge-new" width="640" height="320" loading="lazy" />
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color horizontal-line bg-glow-app">Project Highlights</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i> <p>Live Game Scores</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i> <p>Upcoming Games</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Friendly Betting</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Advanced One-on-One/ Group Chat</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Push Notification</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>To-do list for Admin</p></div></li>
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
					</div>
					<div class="col-md-12 col-lg-12">
						<div style="margin-bottom:30px;">
						<p>A trailblazing Social Media Betting App for sports enthusiasts who want to enjoy the thrill of gambling on their favorite league matches. With an amazingly simplified UI, users can quickly register on the app, select their favorite league between NBA, NFL, NCAA Basketball, MLB, NCAA Football, or NHL, and start betting with literally any person who shares an interest in sports betting like them. The biggest plus point; people can bet not only for money but also for food, entertainment, or anything the participants agree upon. Just select the match, place a wager and propose a bet to any user or group in your app's contact list or global leaderboard. The opponent user can then accept, reject, or counter the offer and later settle the bets by paying for the wager/ tasks that reflect on their settlement ratings.</p>			
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
				<div class="row">
					<!-- Item -->
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="screens-img">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/screens-01.webp" alt="screens" width="640" height="320" loading="lazy">
						</div>
					</div>
					<!-- Item -->
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="screens-img">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/screens-02.webp" alt="screens" width="640" height="320" loading="lazy">
						</div>
					</div>
					<!-- Item -->
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="screens-img">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/screens-03.webp" alt="screens" width="640" height="320" loading="lazy">
						</div>
					</div>
					<!-- Item -->
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="screens-img">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/screens-04.webp" alt="screens" width="640" height="320" loading="lazy">
						</div>
					</div>
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
						<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-architecture.webp" alt="subsciety-architechture" width="640" height="320" loading="lazy">
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
						<img class="fix-img margin-end-5 bd-50" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/leader.webp" alt="leader" width="640" height="320" loading="lazy" />
						<div>
							<h4 class="theme-color horizontal-line bg-glow-app">Shaktiraj</h4><p><b>Exp: 20+ Years</b></p>
						</div>
					</div>
					<h3 class="">Subject Matter Expert</h3>
					<p class="content">
						Shaktiraj has a profound experience of over 22 years working as software development lead and consultant in the world's top brands like IBM, Alticor and StateFarm Insurance. He has major expertise in domains like e-business and B2B applications, along with trending technologies like MERN and IoT. </p>
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
					<div class="why-us theme-border margin-b-3 text-center">
					<h3 class="horizontal-line horizontal-line-center bg-glow-app">Trusted Advisors</h3>
						<p>Skilled Developers for Deployment</p>
					<p>Collaborative efforts of Subject matter Experts  </p>
					<p>On time delivery ensuring Desirable Outputs </p>      
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3 text-center">
					<h3 class="horizontal-line horizontal-line-center bg-glow-app">Distinctive Quality</h3>
					<p>Offering exemplary code quality</p>
					<p>User-friendly UI/UX </p>
					<p>Prioritize client expectation   </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3 text-center">
					<h3 class="horizontal-line horizontal-line-center bg-glow-app">Continuous Assistance</h3>
					<p>24/7 Technical Support</p>
					<p>Post Delivery Consultation </p>
					<p>Continuous Server Monitoring  </p>
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/business-benefits.webp" alt="business-benefits" width="640" height="320" loading="lazy" />
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
												Provides ease to monitor the game live score and keep a track on user activity. 
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Regulate speculation activity and track real time data easily through the statistics. 
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Analyze the interests of the user to bring more advanced & innovations, therefore enhance productivity. 
											</p>
										</div>
									</li>
									<li>
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/technical-components.webp" alt="technical-components" width="640" height="320" loading="lazy" />
					</div>
				</div>
				<div class="row flex-disp flex-align-center flex-wrap">
					<div class="col-md-6 padding-0">
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/trustedadviser.webp" alt="trusted-advisors" width="640" height="320" loading="lazy" />
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
										<p class="content">Facilitating value-added artifacts like Architecture diagrams</p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Design Guidelines </p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Regular Status reports </p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Review calls</p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Best Coding practices and test cases</p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Advance Deliveries </p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Regular inputs for Product Enhancement</p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Post-deployment technical support </p>
										</div>
										<div class="flex-disp">
										<i class="fa fa-angle-double-right"></i> 
										<p class="content">Consultation</p>
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/suggestion.webp" alt="suggestion" width="640" height="320" loading="lazy" />
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety-development-lifecycle.webp" alt="development-cycle" width="640" height="320" loading="lazy" >
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
							<div class="tech-box">
								<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ionic.webp" alt="ionic" width="640" height="320" loading="lazy" >
							</div>
							<h3 class="horizontal-line bg-glow-app">Ionic 5</h3>
							<p>
							Ionic is an open source UI framework for cross platform, hybrid application development. The SDK offers a library of components and plugins with front-end building blocks, UI components, common app icons, etc. Also, IONIC can build multiple apps from one codebase with native compatibility. 
							</p>
						</div>
					</div>
					<div class="item">
						<div class="tech-stack margin-b-3">
							<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/mern.webp" alt="mern" width="640" height="320" loading="lazy" ></div>
							<h3 class="horizontal-line bg-zzabs">MERN</h3>
							<p>Unlike traditional database systems that offer data management through tables and rows, MERN allows data management fields with the help of NoSQL. Resulting in no lag while handling more massive datasets.      </p>	
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--teck-stack-ends-->
     <img class="w-100" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/handshake/demo-banner.webp" alt="demo-banner" width="640" height="320" loading="lazy"/>
	<!--similar-projects-->
	<section>
		<div class="container">
			<h2 class="heading-section margin-b-3 text-center">Similar Projects</h2>
				<div id="owl-demo-portfolio" class="owl-carousel owl-theme owl-demo2">
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-fuelit" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/fuelit-portfolio.webp" alt="fuelit-portfolio" width="640" height="320" loading="lazy" />
							<p>An eCommerce app to facilitate on-demand fuel delivery</p>
						</a>	
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-hnda" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-hnda.webp" alt="hnda-portfolio" width="640" height="320" loading="lazy">
							<p>Driving Academy app for Instructors and Students</p>
						</a>	
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-auxpair" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-side-auxpair.webp" alt="auxpair-portfolio" width="640" height="320" loading="lazy">
							<p>An eCommerce app to facilitate on-demand fuel delivery</p>
						</a>
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-zzabs" target="_blank">
							<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/portfolio-desc-zzabs-2.webp" alt="zzabs-portfolio" width="640" height="320" loading="lazy">
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




