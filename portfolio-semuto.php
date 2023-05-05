<?php include_once("includes/header-service.php");
?>

<link rel="stylesheet" href="css/portfolionew.css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
<link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet" media="all">
<style>
  
	.theme-color{
		color: #754622; 
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
		background-image: url("https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/semuto-transparent-banner.webp");
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
	
	.heading-section::after {
		background-color: #1f2326 !important;
	}
	
	.testomonial-outer {
		border: 10px solid #1f2326;
	}
	
	.quote-top {
		width: 100px;
	}
	
	.quote-top svg {
		height: 100px;
		width: 100px;
		fill: #1f2326;
	}
	
	.quote-bottom {
		width: 100px;
		right: 80px !important;
	}
	
	.quote-bottom svg {
		height: 100px;
		width: 100px;
		fill: #1f2326;
	}
    img {
	   height: auto;
	   width: 100%;
	}
</style>



<div class="app-portfolio-page">
	
	 <section>
		 <div class="portfolio-banner ">
			 <div class="container">
			  	<div class="row flex-disp flex-align-center flex-wrap flex-justify-center">
			 		<div class="col-md-8 col-sm-12  alt-order">
				 		<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/semuto-banner-img.webp" alt="semuto-banner-img" width="640" height="320" loading="lazy"/>
			  		</div>
					<div class="col-md-4 col-sm-12 center-al">
					 	<h1 class="horizontal-line bg-white banner"><b>PORTFOLIO</b></h1>
						<h2>A unique healthcare apps recommendation platform</h2>
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
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/semuto-challenge.webp" alt="challenge-new" width="640" height="320" loading="lazy"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								
								<h3 class="theme-color horizontal-line bg-glow-app">The Challenge</h3>
							</div>
							<div class="challenge-content">
								<p>
									In the rapidly changing environment, day by day people are becoming conscious towards their health. To maintain a healthy life of people we came up with an innovative idea of offering a healthcare platform, which assists and guides people in a personalized way with respect to their healthcare needs and preferable areas. The platform recommends very productive applications to users,which assists users to monitor and track their health and fitness. 
								</p>						
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-7 col-sm-12 margin-b-3">
					<div class="challenge-card">
						<div class="challenge-img">
							<img class="fix-img" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/semuto-project-highlights.webp" alt="challenge-new" width="640" height="320" loading="lazy"/>
						</div>
						<div class="challenge-left">
							<div class="challenge-left-heading ">
								<h3 class="theme-color horizontal-line bg-glow-app">Project Highlights</h3>
							</div>
							<div class="challenge-content">
								<ul>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>User Verification</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Informative Articles</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Unique App recommendation based on user needs</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Comments Section</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Learning videos</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Support </p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>Subscriptions</p></div></li>
									<li><div class="flex-disp"><i class="fa fa-angle-double-right"></i><p>In-app Purchase</p></div></li>
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
						<p>
							An innovative healthcare platform created by our team of experts which assists users to get personalized recommendations for the best application which can help them to stay fit. To get started, users need to answer a few questions, to opt their preferred area, for which they are seeking suggestions. The system then suggests some of the best applications which can monitor and track their required health inputs to get fitness checks as per their preferences. The platform has in-app purchases, which enable users to subscribe to the chosen application to avail the benefits and stay fit. Moreover, to stay updated and show concern towards health, the platform also offers Articles and Videos related to the healthcare domain, assisting users to stay healthy and fit. Also, provides a comment section to share user feedback and 24/7 assistance by raising tickets for resolving the issue.     
						</p>
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
					<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/design.webp" alt="design" width="640" height="320" loading="lazy">
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
						<img class="fix-img margin-end-5 bd-50" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/sme-akash.webp" alt="akash" width="640" height="320" loading="lazy"/>
						<div>
							<h4 class="theme-color horizontal-line bg-glow-app">Akash</h4><p><b>Exp: 23+ Years</b></p>
						</div>
					</div>
					<h3 class="">Subject Matter Expert</h3>
					<p class="content">
						Akash has over 23 years of experience in developing and managing large-scale enterprise applications for Fortune 500 companies. His expertise includes system integration and development, software development process enhancement, and coordinating with clients, teams, and activities. In addition, he is proficient in setting up procedural guidelines to establish successful delivery processes and implementing various databases, tools, design patterns, and frameworks.
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
						<p>24/7 Technical Support  </p>
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
						<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/business-benifits.webp" alt="business-benifits" width="640" height="320" style="border-radius: 15px;" loading="lazy" />
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
												The platform has collectively accounted for about a 67% increase in sales for various ranchers.
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												With an increasing user base every week, the platform is fast growing to be a market favorite.
											</p>
										</div>
									</li>
									<li>
										<div class="flex-disp">
											<i class="fa fa-angle-double-right"></i> 
											<p class="content">
												The business owners have got numerous sponsorships to support the unique platform and its functional expansion
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
			<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/ReactJS.webp" alt="reactjs" width="640" height="320" loading="lazy"></div>
				<h3 class="horizontal-line bg-subsciety" >ReactJS</h3>
				<p>React is a free and open-source front-end JavaScript library for building user interfaces or UI components. It allows developers to reuse the components built for the same functionality, reducing the development effort and ensuring flawless performance.</p>
		</div>
	</div>
	<div class="item">
						<div class="tech-stack margin-b-3">
	<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/laravel.webp" alt="laravel" width="640" height="320" loading="lazy"></div>
	<h3 class="horizontal-line bg-subsciety">Laravel</h3>
	
	<p>Laravel is a free and open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.</p>
	
	</div>					
	</div>
	<div class="item">
		<div class="tech-stack margin-b-3">
	<div class="tech-box"><img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/MySQL.webp" alt="mysql" width="640" height="320" loading="lazy"></div>
	<h3 class="horizontal-line bg-subsciety">MySql</h3>
	<p>MySQL facilitates effective and easy management of databases for any application. It is a stable, reliable, and powerful solution with advanced features like data security, on-demand scalability, high performance, and great uptime. </p>
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
     <img class="w-100" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/semuto-demo-banner.webp" alt="demo-banner" width="640" height="320" loading="lazy"/>
	 
	     <!--testimonial-->
	<section>
	<div class="container">
	<div class="row flex-disp flex-align-center flex-wrap">
	<div class="col-md-6 col-xs-12 col-sm-6  padding-0">
	<img src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/semuto/semuto-testimonial-banner.webp" alt="testimonial-banner" width="640" height="320" loading="lazy"/>
	</div>
	<div class="col-md-6 col-xs-12 col-sm-6  padding-0">
	<div class="testimonial">
	<!--<img class="quote" src="https://d1fxfakb0fcon3.cloudfront.net/images/portfolio/subsciety/subsciety-quote.webp"/>-->
	<div class="testomonial-outer">
	<h2 class="heading-section margin-b-3 text-right horizontal-line right">Client Testimonial</h2>
	<!--<hr class="theme-color theme-bg text-right"></hr>-->
		<span class="quote-top">
		<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		<path d="M177.875 256H99.75V193.5C99.75 159.027 127.777 131 162.25 131H170.062C183.05 131 193.5 120.551 193.5 107.562V60.688C193.5 47.7 183.051 37.25 170.062 37.25H162.25C75.922 37.25 6 107.172 6 193.5V427.875C6 453.754 26.996 474.75 52.875 474.75H177.875C203.754 474.75 224.75 453.754 224.75 427.875V302.875C224.75 276.996 203.754 256 177.875 256Z" />
		<path d="M459.125 256H381V193.5C381 159.027 409.027 131 443.5 131H451.312C464.3 131 474.75 120.551 474.75 107.562V60.688C474.75 47.7 464.301 37.25 451.312 37.25H443.5C357.172 37.25 287.25 107.172 287.25 193.5V427.875C287.25 453.754 308.246 474.75 334.125 474.75H459.125C485.004 474.75 506 453.754 506 427.875V302.875C506 276.996 485.004 256 459.125 256Z" />
		</svg>
		</span>
		<span class="quote-bottom">
		<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
		<path d="M334.125 256H412.25V318.5C412.25 352.973 384.223 381 349.75 381H341.938C328.95 381 318.5 391.449 318.5 404.438V451.312C318.5 464.3 328.949 474.75 341.938 474.75H349.75C436.078 474.75 506 404.828 506 318.5V84.125C506 58.246 485.004 37.25 459.125 37.25H334.125C308.246 37.25 287.25 58.246 287.25 84.125V209.125C287.25 235.004 308.246 256 334.125 256Z" />
		<path d="M52.875 256H131V318.5C131 352.973 102.973 381 68.5 381H60.688C47.7 381 37.25 391.449 37.25 404.438V451.312C37.25 464.3 47.699 474.75 60.688 474.75H68.5C154.828 474.75 224.75 404.828 224.75 318.5V84.125C224.75 58.246 203.754 37.25 177.875 37.25H52.875C26.996 37.25 6 58.246 6 84.125V209.125C6 235.004 26.996 256 52.875 256Z" />
		</svg>
		</span>

	<div class="testimonial-card"><p class="content">"Thanks so much to the team for continuing to work towards our vision for the project. I appreciate the willingness of the team to be open to suggestions and opinions!"</p>
	<span class="theme-color"><b>DerekLove</b>, Semuto</span></div>
	</div>
	</div>
	
	</div>
	</div>
	</div>
	
	
	</section>
	<!--testimonial-ends-->
	 
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




