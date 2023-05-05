<?php include_once("header.php");
 ?>	
	
	<div class="layout2-services-banner" style="background-image:url(images/ondemand-banner2-bg.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="layout2-services-text">
					<h1>Revolutionize Your Business <span> with On-Demand Solutions</span></h1>
					<p>Escalate your business growth with our out of the box On-Demand web/mobile solutions powered by latest technology.</p>
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
			<div class="col-md-12 home3-layout-heading insight-ondemand-iot">
			<h4>On-Demand Development Services</h4>
			</div>
		</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="services2-layout-text">
						<p>The need for high-end on-demand web and mobile solutions is growing at a rapid rate. At Biz4Group, we specialize in designing and developing highly interactive web and mobile solutions for the ever-rising on-demand industry. We are committed to serving a wide range of on-demand industry spectrum including on-demand taxi booking services, on-demand food ordering & delivery services, doctor on demand, parlor on demand, logistics on demand, medicine on demand, on-demand house cleaning & laundry services, and so more.</p>
						<p>At Biz4Group, our on-demand mobility service model is aimed at helping your startup & business enterprise towards innovating faster & delivering unparalleled services to the end users across a wide range of businesses and industries.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="services2-application-features" style="background-image:url(images/services-features-bg.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2>Incorporating Pre-Designed Templates to Deliver Interactive and Secure Solutions</h2>
				<p>On demand solutions for urgent requirements</p>
					<div class="services2-application-features-text iphone-application-features on-demand-features">
						 <ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home"><img src="images/ondemand-icon1.png" alt=""> <span> Taxi Booking Solutions </span></a></li>
							<li><a data-toggle="tab" href="#menu1"><img src="images/ondemand-icon2.png" alt=""> <span> Food Ordering Solutions </span> </a></li>
							<li><a data-toggle="tab" href="#menu2"><img src="images/ondemand-icon3.png" alt=""> <span> Salon Services </span> </a></li>
							<li><a data-toggle="tab" href="#menu3"><img src="images/ondemand-icon4.png" alt=""><span> Courier Services </span> </a></li>
							<li><a data-toggle="tab" href="#menu4"><img src="images/ondemand-icon5.png" alt=""> <span> Logistics Services </span></a></li>
							<li><a data-toggle="tab" href="#menu5"><img src="images/ondemand-icon6.png" alt=""> <span> Healthcare Services </span></a></li>
						  </ul>

						  <div class="tab-content">
							<div id="home" class="tab-pane fade in active">
							<h5>Taxi Booking Solutions</h5>
							  <p>Our proficient team of on-demand mobile app developers helps in building interactive taxi booking apps resembling that of Uber and others. These apps are known for offering comprehensive services along with excellent tracking & support.</p>
							</div>
							<div id="menu1" class="tab-pane fade">
							<h5>Food Ordering Solutions</h5>
							  <p>Wish to take your restaurant business to another level? Let us help you in creating amazing on-demand food ordering solutions enabling your customers to book and get instant deliveries for a delightful ordering experience.</p>
							</div>
							<div id="menu2" class="tab-pane fade">
							<h5>On-Demand Salon Services</h5>
							  <p>Our team is adept at the latest technological tools and strategies to help you deliver unmatchable solutions to your customers. We help create attractive beauty & salon web & mobile app solutions for the ease of booking & availing on-demand salon services.</p>
							</div>
							<div id="menu3" class="tab-pane fade">
							<h5>Courier On-Demand Services</h5>
							  <p>Make your courier business highly technology-oriented by enabling on-demand courier services for your customers. Starting from a website development, we can provide you the solution to even track your cargo in real-time. The solutions are powered by the Internet of Things.</p>
							</div>
							<div id="menu4" class="tab-pane fade">
							<h5>On-Demand Logistics Services</h5>
							  <p>Achieve on-the-go access of your logistics business through the help of a highly interactive mobile app or web services. Right from ensuring complete fleet management to effective customer management, the on-demand solutions are all you need!</p>
							</div>
							<div id="menu5" class="tab-pane fade">
							<h5>On-demand Healthcare Services</h5>
							  <p>With significant exposure and zeal to provide the best, we build automated on-demand health apps that let you connect with personal gym instructor, get in touch with an on-demand dietician and prepare users for a healthy lifestyle.</p>
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
						<h4>Customized On-Demand Solutions</h4>
						<p>Automated solutions developed at Biz4Group are known to be reliable and are not at all vulnerable to break down or server crashing. And our products are evergreen because they're built on the latest available technology.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Future-Ready Solutions</h4>
						<p>The on-demand industry is subject to constant changes. We aim at creating solutions that happen to be future-ready & remains effective for several years.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="0.6s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Innovative Acceleration</h4>
						<p>We implement high-tech cutting-edge technologies in designing and developing user-friendly on-demand web & mobile app solutions for your business.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="0.6s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Effective Operations</h4>
						<p>Our solutions are technology-driven and thus, maximize the overall efficiency and minimize the overall costs.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="0.6s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Domain Expertise</h4>
						<p>Our on-board team of mobile app developers and coders is highly qualified & well-experienced in the given field to deliver the best results for your business.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-delay="0.6s">
					<div class="business-highlights-detail detail1">
					<div class="box-border custom-border"></div>
						<h4>Quick Turnaround Time</h4>
						<p>Our developers are skilled and know the criticalities of on-demand industry. Hence, we prepare well, execute in an ideal manner and adhere to deadlines.</p>
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


 