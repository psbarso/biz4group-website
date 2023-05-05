<?php include_once("header.php");
 ?>
<link rel="stylesheet" href="css/portfolionew.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
<style>
  
	.theme-color{
		color: #004788 
	}
	.theme-bg{
		/*background-color:#F83459;*/
		background: transparent linear-gradient(180deg, #004788 0%, #0661B4 100%) 0% 0% no-repeat padding-box;
	 }
	.theme-border{
		border:2px solid #004788;
		background: #FFFFFF;
	    border-radius: 20px;
		padding:15px;
	}
	.subject-matter::after{
		 background-color: #004788;
	}
	.tech-stack:hover {
		background-color:#004788;
		color:#ffffff;
	}
	
	.tech-stack:hover h3::after{
		background-color:#ffffff;
	}
	.why-us:hover{
		background-color:#004788;
		color:#ffffff;
	}
	.why-us:hover h3::after{
		background-color:#ffffff;
	}
	
	.portfolio-banner{
		background-image: url("images/portfolio/boat-butler/glowapp-banner-new.png");
	}

	.testomonial-outer{
		border: 10px solid #004788;
	}

	div#owl-demo-portfolio .owl-dots{
		display:none;
	}

	.portfolio-banner img {
    	max-width: 550px;
    	margin-top: 40px;
	}

	.horizontal-line.bg-glow-app::after {
    	background-color: #004788;
	}

</style>



<div class="app-portfolio-page">
	
	<section>
		<div class="portfolio-banner ">
			<div class="container">
				<div class="row flex-disp flex-align-center flex-wrap flex-justify-center">
					<div class="col-md-8 col-sm-12  alt-order">
						<img src="images/portfolio/boat-butler/glow-hero.png"/>
					</div>
					<div class="col-md-4 col-sm-12 center-al">
					 	<h1 class="horizontal-line bg-white banner"><b>PORTFOLIO</b></h1>
						<h2>Visionary App For<br/> Automated Maintenance<br/> And Boat Community<br/> Engagement</h2>
						<a href="https://boatbutler.app/" target="_blank" class="visit">Visit Website</a>
						<div style="display: flex; align-items: center; margin-top: 10px;">
						<a href="https://apps.apple.com/tt/app/boat-butler-app/id1620873951" target="_blank" style="margin-right: 10px;" >
						<image src="images/appstore.svg" alt="icon" style="margin-top:0" />
						</a>
						<a href="https://play.google.com/store/apps/details?id=com.boatbutler.app" target="_blank">
						<image src="images/androidstore.svg" alt="icon" style="margin-top:0" />
						</a>
						</div>
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
							<img class="fix-img" src="images/portfolio/boat-butler/glowapp-challenge-new.png" alt="challenge-new"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								
								<h3 class="theme-color horizontal-line bg-glow-app">The Challenge</h3>
							</div>
							<div class="challenge-content">
								<p>
									Just like other vehicles, it's crucial for sailors to timely maintain their boats to ensure smooth functioning. However, due to various types of engines and a host of moving parts, it becomes a grinding task for the boat owners to keep a track on their maintenance schedules. Lots of moving parts and innards need inspection, and regular replacement, while others need special attention during and even after the boating season. To resolve the issue related to timely maintenance of boats, our leading domain experts came up with a unique idea of designing and developing a one stop solution of boat maintenance, to effectively diagnose the potential issue, therefore saving time and expenses incurred due to hefty repairs.  
								</p>						
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12 margin-b-3">
					<div class="challenge-card">
						<div class="challenge-img">
							<img class="fix-img" src="images/portfolio/boat-butler/glowapp-project-highlights.png" alt="challenge-new"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color horizontal-line bg-glow-app">Project Highlights</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i> <p>Trial and paid subscription plans</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i> <p>Social login</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Advanced engine maintenance algorithm</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Automated service reminders</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Custom reminders and notifications</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Save boat details and documentation</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Track service history and payments</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Forum and Community interaction</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Business directory</p></div></li>
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
						<p>A state-of-the-art boat maintenance app exclusively conceptualized, designed, and created for boat owners and enthusiasts. Users can sign up on the app using a quick one-step registration process and add their boats through the simple onboarding forms. Once saved, its advanced maintenance algorithm notifies the users of the best time to get the service done for the most critical moving parts and engine components. The maintenance algorithm automatically matches the user’s boat engine, picks the running hours through user input, and predicts the best service time, resulting in better longevity and performance.</p>
						<p>In addition to automated and custom maintenance reminders, the app also serves as an all-inclusive platform for Boat owners, letting them engage with other users through Forums and Communities. The app also lists various service providers and mechanics for users to get the required help for regular maintenance or emergencies.</p>			
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
							<img src="images/portfolio/boat-butler/screens-01.png">
						</div>
					</div>
					<!-- Item -->
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="screens-img">
							<img src="images/portfolio/boat-butler/screens-02.png">
						</div>
					</div>
					<!-- Item -->
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="screens-img">
							<img src="images/portfolio/boat-butler/screens-03.png">
						</div>
					</div>
					<!-- Item -->
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="screens-img">
							<img src="images/portfolio/boat-butler/screens-04.png">
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
						<img class="fix-img" src="images/portfolio/subsciety/subsciety-architecture.png">
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
						<img class="fix-img margin-end-5 bd-50" src="images/portfolio/subsciety/sme-img.png"/>
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
						<p>Collaborative efforts of Subject matter Experts</p>
						<p>On time delivery ensuring Desirable Outputs</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3">
						<h3 class="horizontal-line bg-black">Distinctive Quality</h3>
						<p>Offering exemplary code quality</p>
						<p>User-friendly UI/UX</p>
						<p>Prioritize client expectation</p>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="why-us theme-border margin-b-3">
						<h3 class="horizontal-line bg-black">Supportability</h3>
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
						<img src="images/portfolio/boat-butler/business-benefits.png"/>
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
												Ranked among the top utility apps on the app stores.
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												The community feature has seen an exponential rise in the member count.
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												The free boat database has one of the most useful documents and manuals for owners and enthusiasts.
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												100+ service providers subscribed to the app's business directory, adding to the monthly app revenue.
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												More than 67% of users converted to paid plans within a month of use.
											</p>
										</div>
									</li>

									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Over 200 paid plan users in the first month of the app launch.
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
						<img src="images/portfolio/boat-butler/technical-components.png"/>
					</div>
				</div>
				<div class="row flex-disp flex-align-center flex-wrap">
					<div class="col-md-6 padding-0">
						<img src="images/portfolio/boat-butler/trustedadviser.png"/>
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
									</li><li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Advance Deliveries 
											</p>
										</div>
									</li><li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Regular inputs for Product Enhancement
											</p>
										</div>
									</li><li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												Post-deployment technical support 
											</p>
										</div>
									</li><li>
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
						<img src="images/portfolio/boat-butler/suggestion.png"/>
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
						<img src="images/portfolio/subsciety/subsciety-development-lifecycle.png">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--tech-stack-->
	<section>
		<div class="container">
			<h2 class="heading-section margin-b-3 text-center">Tech Stack</h2>
				<div id="owl-demo2" class="owl-carousel owl-theme">
					<div class="item">
						<div class="tech-stack margin-b-3">
							<div class="tech-box">
								<img src="images/ionic.png">
							</div>
							<h3 class="horizontal-line bg-glow-app">Ionic 5</h3>
							<p>
								Ionic is an open-source UI framework for cross-platform, hybrid app development. The SDK offers a library of components and plugins with front-end building blocks, UI components, common app icons, etc. Also, ionic can build multiple apps from one codebase with native compatibility.
							</p>
						</div>
					</div>
					<div class="item">
						<div class="tech-stack margin-b-3">
							<div class="tech-box">
								<img src="images/portfolio/boat-butler/mern.png">
							</div>
							<h3 class="horizontal-line bg-glow-app">MERN</h3>
							<p>
								Unlike traditional database systems that offer data management through tables and rows, MongoDB allows data management fields with the help of NoSQL. Resulting in no lag while handling more massive datasets.
							</p>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--teck-stack-ends-->
     <img class="w-100" src="images/portfolio/boat-butler/demo-banner.jpg" alt="demo-banner"/>
	<!--similar-projects-->
	<section>
		<div class="container">
			<h2 class="heading-section margin-b-3 text-center">Similar Projects</h2>
				<div id="owl-demo-portfolio" class="owl-carousel owl-theme">
					<div class="item">
						<a href="https://www.biz4group.com/portfolio-fuelit" target="_blank">
							<img src="images/fuelit-portfolio.jpg"/>
							<p>An eCommerce app to facilitate on-demand fuel delivery</p>
						</a>	
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-hnda" target="_blank">
							<img src="images/portfolio-side-hnda.png">
							<p>Driving Academy app for Instructors and Students</p>
						</a>	
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-auxpair" target="_blank">
							<img src="images/portfolio-side-auxpair.png">
							<p>An eCommerce app to facilitate on-demand fuel delivery</p>
						</a>
					</div>

					<div class="item">
						<a href="https://www.biz4group.com/portfolio-zzabs" target="_blank">
							<img src="images/portfolio-desc-zzabs-2.png">
							<p>eCommerce marketplace app for Android and iOS users.</p>
						</a>
					</div>

				</div>
			</div>
	
	</section>
	<!--similar-projects-ends-->
	
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
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

<!--main end-->		
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>	

<script>
$(document).ready(function() {
 
  $("#owl-demo-portfolio").owlCarousel({
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
            items:4,
            nav:true,
            loop:false
        }
    }
  });
 
});
</script>
<script>
$(document).ready(function() {
 
  $("#owl-demo2").owlCarousel({
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
require_once('includes/footer.php');
?>	




