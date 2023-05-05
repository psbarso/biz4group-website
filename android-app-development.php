<?php include_once("header.php");
 ?>	
	
	<div class="layout2-services-banner" style="background-image:url(images/android-banner2-bg.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="layout2-services-text">
					<h1>Android based applications <span> for cellular devices </span></h1>
					<p>Developed by Google, Android platform is created primarily for touchscreen mobile devices such as smartphones and tablets.</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="layout2-services-form">
						<form method="post" id="contactForm" name="contactForm" enctype="multipart/form-data">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6 col-sm-6 name">
									<input id="Name" name="sName" type="text" value="" placeholder="Your Name" required minlength="3">
									</div>
									<div class="col-md-6 col-sm-6">
									<input id="Email" type="email" value="" placeholder="Email" name="sEmail" required >
									</div>
								</div>
							</div>
							<div class="form-group">
							<div class="row">
								<div class="col-md-6 col-sm-6 number">
								<input id="ContactNum" type="number" value="" name="phoneno" placeholder="Phone Number" required maxlength="10">
								<span id="spnContactNum" style="color:red;"></span>
								</div>
								<div class="col-md-6 col-sm-6">
								<input id="Subject" type="text" value="" placeholder="subject"  name="sSubject" required minlength="3">
								<span id="spnSubject" style="color:red;"></span>
								</div>
							</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<textarea id="Message" name="sMessage" required minlength="10" placeholder="Project Requirements"></textarea>
										<span id="spnMessage" style="color:red;"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<div class="uploadFile">
										<input name="quote_files[]" id="quote_files_webdev" type="file" class="file-upload" multiple="" tabindex="0">
										<label class="doc">
										<i class="fa fa-link" aria-hidden="true"></i><strong>(Attach Files (doc, xls, pdf, txt, ppt and zip files only, max Size 10MB)</strong>
										</label>
										<div id="progress-wrp3" style="display:none"><div class="progress-bar"></div><div class="status"></div></div>
										<div class="add-file-output" id="output3"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div id="contact_recaptcha" class="col-md-12 col-sm-12">
										
									</div>
								</div>
							</div>
							<div class="form-group send-feedback">
								<div class="row">
									<div class="col-md-12">
										<input type="hidden" name="validate_captcha" value="1">
										<input type="hidden" name="ajax_call" value="sendMailContact">
										<button type="submit" value="submit" name="submitContactForm">Send Your Enquiry</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="services2-layout">
		<div class="container">
		<div class="row">
			<div class="col-md-12 home3-layout-heading insight-iot">
			<h4>Android App Development</h4>
			</div>
		</div>
			<div class="row">
				<div class="col-md-7 col-sm-7">
					<div class="services2-layout-text">
						<p>At Biz4Group, we have years of professional experience and expertise working on developing user-oriented smartphone solutions using Android. We build a strategic roadmap according to the client’s requirements and follow it to develop optimized Android solutions. By hiring an expert Android developer from our agency, you will acquire a robustly built application that serves your business objectives.</p>
						<p>We excel in developing a compelling user interface that allows your business to gain an edge over your competitors. By blending our innovative approach with cutting-edge technologies, we develop user-centric applications that fulfill the requirements of the users. At Biz4Group, every Android developer creates apps using the latest frameworks and advanced tools to boost up the user experience and tackle all your specific business requirements.</p>
						<p>We offer Android development services to companies of different scales, let it be a small start-up or a huge enterprise. Our solutions help business worldwide to improve their industry presence with user-focused and goal-oriented Android apps.</p>
					</div>
				</div>
				<div class="col-md-5 col-sm-5">
					<div class="services2-layout-list">
						<ul>
						<li><span class="followIcons strategy"></span>App Prototyping &amp; Strategy</li>
						<li><span class="followIcons cloud"></span>Cloud Mobility Solutions</li>
						<li><span class="followIcons data"></span>Integration with existing enterprise data</li>
						<li><span class="followIcons mobility"></span>Custom Mobile Application Development</li>
						<li><span class="followIcons accommodation"></span>Cross-platform App Development</li>
						<li><span class="followIcons m-commerce"></span>m-Commerce, B2B & B2C</li>
						<li><span class="followIcons enterprise"></span>Enterprise Application Development</li>
						<li><span class="followIcons maintenance"></span>Application Maintenance Services</li>
						</ul>
						<div class="let-discuss-project">
						<a href="" data-toggle="modal" data-target="#myModal">Let's Discuss Project</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="services2-application-features android-app-main" style="background-image:url(images/services-features-bg.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Developing Unique and Fully Functional Mobile Experiences for Android</h2>
				<p>BUILDING ANDROID APPS FOR ALL BUSINESS AND CONSUMER NEEDS</p>
					<div class="services2-application-features-text iphone-application-features android-apps-feature">
						 <ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home"><img src="images/android-app-icon1.png" alt=""> <span> Custom Android Apps </span></a></li>
							<li><a data-toggle="tab" href="#menu1"><img src="images/mobile-app-icon1.png" alt=""> <span> Android Redesigning </span></a></li>
							<li><a data-toggle="tab" href="#menu2"><img src="images/android-app-icon2.png" alt=""> <span> Location Services App </span></a></li>
							<li><a data-toggle="tab" href="#menu4"><img src="images/android-app-icon4.png" alt=""> <span> AR/VR Apps </span></a></li>
							<li><a data-toggle="tab" href="#menu5"><img src="images/iphone-app-icon4.png" alt=""> <span> IoT Apps </span></a></li>
						  </ul>

						  <div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<h5>Custom Android Apps</h5>
							  <p>After thorough research and analysis, our resourceful Android developers use their expertise to develop feature-rich and custom-built Android solutions that serve every goal of every business perfectly.</p>
							</div>
							<div id="menu1" class="tab-pane fade">
							<h5>Android Redesigning</h5>
							  <p>Our Android Redesigning services assists a business in calibrating their applications according to the market need. We integrate customized services, embed modern features, and redesign UI to give a fresh look to your application.</p>
							</div>
							<div id="menu2" class="tab-pane fade">
							<h5>Location Services App</h5>
							  <p>With our in-depth knowledge in the segment of advanced computing and cloud-based solutions we serve businesses that innately work with GPS and location-based services.</p>
							</div>
							<div id="menu4" class="tab-pane fade">
							<h5>AR/VR Apps</h5>
							  <p>Our Intriguing AR and VR application services offer amazing advantages to our clients. By using various immersive experience solutions, we prepare unseen applications that add another dimension to a business’ success.</p>
							</div>
							<div id="menu5" class="tab-pane fade">
							<h5>IoT Apps</h5>
							  <p>As a top-rated Android app development company, we implement the use of modern technological advancements that fine-tunes our client’s requirements to the current market needs. We deliver exemplary IoT and wearable applications based on the company’s needs.</p>
							</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
	
	<section class="services-why-biz4group wow fadeInDown">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home3-layout-heading why2-layout">
						<h2>Why Biz4Group</h2>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-delay="0.2s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Profound Experience</h4>
						<p>The professional and experienced developers working at Biz4Group have years of experience to deal with a range of clients in different countries around the globe.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Proficient Practices</h4>
						<p>The team at Biz4Group optimally aligns your unique requirements, product value propositions and current trends to bring best value out of your idea.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="0.6s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>User Driven</h4>
						<p>We focus on providing solution as per the budget and time scale of our client and that’s how we best serve them with service delight.</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<div class="home2-get-quote">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4>Looking to build something creative and impactful?</h4>
					<p>Act Before it’s Too Late! Get the Free Consultation From Our Experts Now!</p>
					<a href="#" data-toggle="modal" data-target="#myModal" class="pulse">Send us Your Biggest Challenge</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="services2-awesome">
		<div class="container-fluid">
		<div class="home3-layout-heading awesome-layout">
		<h2><span><div class="heading-bg"></div></span>What Makes Us Awesome</h2>
		</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="services2-awesome-steps">
					<img src="images/services-awesome.png" alt="">
					<div class="services2-awesome-step-m">
					<ul>
					<li>Rapid Delivery</li>
					<li>Competitive rates & price quotes</li>
					<li>Professional team of developers</li>
					<li>24/7 technical assistance</li>
					</ul>
					</div>
				</div>	
				</div>
			</div>
		</div>
	</div>

	
  <?php
require_once('includes/footer.php');
?>	

<script>

 jQuery().ready(function() {
	jQuery("#contactForm").validate({  
		submitHandler: function(form) {
			var response = grecaptcha.getResponse();
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!!! , please try again later.");
				
			  } 
			  else {
					data_form = jQuery("#contactForm").serializeArray();
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
			  }
			return false;	
		}
  });
});



</script>	


 