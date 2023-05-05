<?php include_once("header.php");
 ?>	
	
	<div class="layout2-services-banner" style="background-image:url(images/custom-banner2-bg.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="layout2-services-text">
					<h1>Software Development Services <span> for Enterprises</span></h1>
					<p>Custom software, eCommerce, mobile app and web design & development.</p>
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
			<div class="col-md-12 home3-layout-heading insight-custom-iot">
			<h4>Custom-build Enterprise Solutions</h4>
			</div>
		</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="services2-layout-text">
						<p>When you cannot find an app/software to match your needs and wants a custom build solution, we can design one for you that perfectly suits your needs, budget and timeframe. We elucidate your views and draft a blueprint before going forward to the development stage. We maintain constant communication with our clients throughout the Software Development Life Cycle (SDLC) to make sure that nothing goes unnoticed.</p>
						<p>Biz4Group develop frontline software solutions that empowers businesses to unlock new revenue streams. We’ve delivered top-notch software solutions to a wide range of clients falling in between fortune 100 to mid-sized businesses. Having 20+ of industry wide experience in software development, we can help you to overcome complex challenges with reliable and agile development process.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="services2-application-features" style="background-image:url(images/services-features-bg.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Outsource your Requirements to Eminent Software Building Company</h2>
				<p>Solutions for small, medium, and large scale enterprises</p>
					<div class="services2-application-features-text iphone-application-features">
						 <ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home"><img src="images/custom-icon1.png" alt=""> <span>CRM Development</span></a></li>
							<li><a data-toggle="tab" href="#menu1"><img src="images/custom-icon2.png" alt=""> <span>Software Development</span></a></li>
							<li><a data-toggle="tab" href="#menu2"><img src="images/custom-icon3.png" alt=""> <span>Saas Product Development</span></a></li>
						  </ul>

						  <div class="tab-content">
							<div id="home" class="tab-pane fade in active">
							<h5>CRM Development</h5>
							  <p>We deliver CRM solutions that are framed to suit modern-day business. Our agile and highly-professional approach to building ground-breaking CRM solutions help all types of businesses, large or small, to improve productivity and boost sales. We develop from scratch, customise the existing modules and incorporate APIs to produce the most desirable solution.</p>
							</div>
							<div id="menu1" class="tab-pane fade">
							<h5>Software Development</h5>
							  <p>We help businesses in the tender stage to blossom while assisting the established ones with our tailor-made software development services to achieve the unimaginable. A refined software form the core of a successful IT company and we, at the Biz4Group support you in making things just right. Based on your business needs, we impart automation and analytics to produce tangible business results.</p>
							</div>
							<div id="menu2" class="tab-pane fade">
							<h5>Saas Product Development</h5>
							  <p>The next-level technology that empowers businesses, reduces cost and gives you wings to scale indefinitely. Our SaaS product development lets you focus on core aspects of business rather the ones that can be powered and maintained by cost-effective cloud solutions. We, at Biz4Group, are experienced to apply techniques and make your business accessible and affordable for all.</p>
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
						<h4>Evergreen Reliable Solution</h4>
						<p>Automated solutions developed at Biz4Group are known to be reliable and are not at all vulnerable to break down or server crashing. And our products are evergreen because they're built on the latest available technology in their respective domain.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Adaptable & Fool Proof Custom Software</h4>
						<p>Our developers make sure that the software given for your business is easy to implement and understand. Controlling the complexities decreases the chances of system failure certainly making it fool proof.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="0.6s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Cost-effective solutions</h4>
						<p>We make sure that our projects are implemented to create the lightest overhead for your business cost modelling. Hiring us will definitely give you a scope of better allocation of budget heads.</p>
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


 