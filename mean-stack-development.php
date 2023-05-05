<?php include_once("header.php");
 ?>	
	
	<div class="layout2-services-banner" style="background-image:url(images/meanstack-banner2-bg.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="layout2-services-text">
					<h1>Meanstack <span> Development Services </span></h1>
					<p>Leveraging the Power of MEANstack to Build out of the box Enterprise Applications.</p>
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
			<h4>Meanstack Development</h4>
			</div>
		</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="services2-layout-text">
						
						<p>Exploit the rich conglomerate of MongoDB, ExpressJS, AngularJS, and NodeJS to enjoy extensive MEAN stack services with Biz4Group. This combination of technologies is powered by JavaScript-based technology platform and is the sharpest spearhead for developers to build smart applications in least time.</p>
						<p>With our vast experience in the development field, Biz4Group developers very well understand that MEAN stack development is all about a smart arrangement of source code that enables platform switching within the development environment and even the OS. Now you can indulge in the tech race of enterprise market and be a step ahead with all your solutions built at Biz4Group.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="services2-application-features fullstack-main" style="background-image:url(images/services-features-bg.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Combining JavaScript Based Technologies for Mean Stack Development</h2>
				<p>Robust and swift mean stack development processes</p>
					<div class="services2-application-features-text iphone-application-features fullstack-feature">
						 <ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home"><img src="images/meanstack-icon1.png" alt=""> <span> MongoDB </span></a></li>
							<li><a data-toggle="tab" href="#menu1"><img src="images/meanstack-icon2.png" alt=""> <span> ExpressJS </span></a></li>
							<li><a data-toggle="tab" href="#menu2"><img src="images/fullstack-icon2.png" alt=""> <span> AngularJS </span></a></li>
							<li><a data-toggle="tab" href="#menu3"><img src="images/fullstack-icon5.png" alt=""> <span> NodeJS </span></a></li>
						  </ul>

						  <div class="tab-content">
							<div id="home" class="tab-pane fade in active">
							  <p>It is a scalable and flexible no-SQL alternative for complete DBMS solutions and it comes with a flexible architecture and various data type compatibility. Biz4Group has highly experienced MongoDB developers who are proficient in MongoDB development services, including consulting, architecture strategy & design, implementation, integration etc.</p>
							</div>
							<div id="menu1" class="tab-pane fade">
							  <p>The integral part of NodeJS allows you to build multiple web pages for desktop as well as the mobile-centric web. We utilize ExpressJS to develop efficient and secure web/mobile applications. Our developers have years of experience in using ExpressJS as a server-side framework to deploy projects ranging from simple to complex.</p>
							</div>
							<div id="menu2" class="tab-pane fade">
							  <p>This dynamic extension to HTML is a readable and expressive platform to build front end of all kinds of web elements and pages. Biz4Group is specialized AngularJS development to develop data-driven, well-structured, and cross-platform web and mobile app including Internet of Things applications.</p>
							</div>
							<div id="menu3" class="tab-pane fade">
							  <p>We offer end-to-end Node.JS consulting, development, augmentation, and migration services. Our expertise and years of experience of using the open-source server platform and cross-platform web development framework is helping us to provide fast and scalable web applications.</p>
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
						<h4>In-Depth Knowledge & Vast Experience</h4>
						<p>From simple retail business to complex online shopping stores, and from long integrated business processes to simple media content management systems Biz4Group has served all clients in the spectrum.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>User-Centric UI & Advanced Technology</h4>
						<p>All the business solutions provided by Biz4Group come with user-friendly interfaces and are sure to be built over the latest and up-to-date platforms.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="0.6s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Unbeatable Prices</h4>
						<p>Our MEAN stack development services are known to be the cheapest in the industry. The company happily guarantees a waiver if you find the same quality of services at a cheaper price.</p>
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
 