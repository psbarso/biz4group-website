<?php 
include_once("header.php");
$code  = biz4_get_country_dial_code();
 ?>
	
	<div class="contact-banner" style="background-image:url(images/contact_banner.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-banner-content">
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	
	<div class="cform">
	<div class="container">
	<div class="row">
	<div class=" col-xs-12 col-lg-8 col-md-8 col-sm-7 paddhead">
	<div class="cheader">
	<div class="thead">
	<h2>Send Us Message</h2>
	<img src="<?php echo SITE_URL;?>images/send.png" alt="send">
	</div>
						<div class="contact-form-m">
						<form method="post" id="contactForm" name="contactForm">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<label>Your Name</label>
										<input class="LoNotSensitive" id="Name" name="sName" type="text" value="" placeholder="" required minlength="3">	
										<span id="spnFirstName" style="color:red;"></span>
									</div>
									<div class="col-md-6 col-sm-6">
										<label>Email Id</label>
										<input class="LoNotSensitive" id="Email" type="email"  value="" placeholder="" name="sEmail" required >
										<span id="spnEmail" style="color:red;"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<label>Phone Number</label>
										<div class="country-code">
											<input class="LoNotSensitive country-code-input" id="ContactNum"  type="text" value="" name="sContactNum" placeholder="" required maxlength="10">	
											<input type="hidden" name="sCountryDialCode" value="<?php echo $code ?>">
											<span id="spnContactNum"><?php echo $code ?></span>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<label>Subject</label>
										<input class="LoNotSensitive" id="Subject" type="text" value="" placeholder="" name="sSubject" required minlength="3">	
										<span id="spnSubject" style="color:red;"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<label>Message</label>
										<textarea class="LoNotSensitive" id="Message" name="sMessage" required minlength="10"></textarea>
										<span id="spnMessage" style="color:red;"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div id="contact_recaptcha" class="col-md-6 col-sm-12">
										
									</div>
										
									<div class="col-md-6 col-sm-12">
										<div class="enquiry-btn" style="margin-top: 0px;">
											<input type="hidden" name="validate_captcha" value="1">
											<input type="hidden" name="ajax_call" value="sendMailContact">
											<button type="submit" name="submitContactForm" class="pulse-m2" style="width:150px" >
											Submit
												<!-- <i class="fa fa-paper-plane-o" aria-hidden="true"></i> -->
											</button>
										</div>
									</div>
									
								</div>
							</div>
							<!--<div class="form-group send-feedback">
								<input type="hidden" name="validate_captcha" value="1">
								<input type="hidden" name="ajax_call" value="sendMailContact">
								<button type="submit" name="submitContactForm" ><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
							</div>-->
						</form>
					</div>
	</div>
	</div>
	<div class=" col-xs-12 col-lg-4 col-md-4 col-sm-5 paddhead1">
	<div class="cheader1">
	<div class="ihead">
	<h2>Contact information</h2>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 location">
	<img src="<?php echo SITE_URL;?>images/usa-flag.png" alt="usa-flag" class="usa">
	</div>
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 address">
	<p>7380 W Sand Lake Rd #500, Orlando, 
        FL 32819, USA</p>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 phone">
	<i class="fa fa-mobile" aria-hidden="true"></i>
	</div>
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mobile">
	<a href="tel:+14077141616" itemprop="telephone"><p>+1 407-714-1616</p></a>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 mail">
	<i class="fa fa-envelope-o" aria-hidden="true"></i>
	</div>
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 maddress">
	<a href="mailto:info@biz4group.com"><p> info@biz4group.com</p></a>
	</div>
	<div class="col-lg-3 col-md-3  twitter">
	<a href="https://twitter.com/biz4group" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>
	<div class="col-lg-3 col-md-3  linkedin">
	<a href="https://www.linkedin.com/company/biz4group" target="_blank" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	</div>
	<div class="col-lg-3 col-md-3  instagram">
	<a href="https://www.instagram.com/biz4group" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	</div>
	<div class="col-lg-3 col-md-3  facebook">
	<a href="https://www.facebook.com/Biz4Group/" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
