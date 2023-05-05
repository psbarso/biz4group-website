<?php include_once("header.php");
 ?>
 <meta name="robots" content="noindex" /> 
	
	<div class="contact-banner" style="background-image:url(images/website-questionnaire-banner.jpg);">
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
	
	<div class="cform margin-cform">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="client-feedback-form">
						
						<div class="client-feedback-title">
							<div class="client-feedback-div">
							<span><i class="fa fa-question"></i></span>
							<h2>Website Questionnaire</h2>
							</div>
							<p>Let's start our project conversation with these small set of questions. A quick and efficient way of obtaining information which would help us building the knowledge base of your project. We are sure that it wont take much of your time!</p>
						</div>
							
						<!--<div class="client-feedback-head">
							<p><b>Hello!</b> Please help us to create a wonderful product for you. Please provide your honest feedback, so that we can try and improve. As per Biz4group guidelines, we @ Biz4 tend to make constant improvements and hence we request your input in the feedback form below. </p>
						</div>-->
						
						<div class="feedback-form-box contact-form">
							<form id="send-contact-form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										<div class="contact-sub-form">
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Do you want us to design a new website or modify an existing one?</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea" id="one_msg" name="Onemsg" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>What is the primary purpose of your website? How will this website add value to your business?</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea" id="second_msg" name="Secondmsg" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Do you have any opinions specifically for color, theme and style? If you have any design related psd’s then please provide.</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea" id="id_quality" name="improvements" required minlength="20"></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="uploadFile">
															<input type="file" id="attach_file" class="attachOne" name="attach_file" value="" placeholder="">
															<span class="addfile"><i class="fa fa-plus-circle" aria-hidden="true"></i><label class="custom-file-label" for="inputGroupFile02">Attachment</label></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Do you have a website icon or logo already? If yes, please attach the same. Do you want us to design the logo or website icon for you?</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea" id="id_trust" name="trusted" required minlength="20"></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="uploadFile">
															<input type="file" id="attach_file" class="attachTwo"  name="attach_trust" value="" placeholder="">
															<span class="addfile"><i class="fa fa-plus-circle" aria-hidden="true"></i><label class="custom-file-label-one" for="inputGroupFile02">Attachment</label></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Please provide links to any website which has similar features/ functionality as your website?</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea" id="id_delivery" name="time_msg" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group" style="margin-bottom:0px;">
												<div class="label-requird">
													<label>This website is multilingual or only in English?</label>
													<span>*</span>
												</div>
												<div class="custom-radio-inline" style="margin-bottom:0px;">
													<label class="custom-checkboxbtn active">Other
													  <input type="checkbox" checked="checked" value="other" name="multilingual" onclick = "manageClientRef('yes')">
													  <span class="checkmark"></span>
													</label>
													<label class="custom-checkboxbtn">English
													  <input type="checkbox" value="english" name="multilingual" onclick = "manageClientRef('no')">
													  <span class="checkmark"></span>
													</label>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box client-ref-field">
											<div class="form-group">
												<div class="label-requird">
													<label>Specify the languages</label>
												</div>
												<div class="row">
													<div class="col-md-12">
														<!-- <input class="form-control field-text" type="email" placeholder=" Enter your email" name="email" id="email" required > -->
														<textarea class="form-control field-textarea" id="id_lang" name="lang_proj" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Do you want your website to be responsive? Any preferable device?</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea" id="id_dream" name="dream_proj" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Any preferable resolution for the website designs?</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea" id="id_focus" name="focus_details" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="text-center feedback-btn">
											<button type="submit" id="submit" class="portfolio-button pulse-m2">Submit</button>
										</div>
										
									</div>
									</div>
								</div>
								<div id="contact-content"></div>
							</form>
						</div>
						
						
		</div>
	</div>

	</div>
	</div>
	</div>
<!--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>-->
<style>
.custom-checkboxbtn.active {
    border: 2px solid #1A6FA8;
}

.contact-banner {
    padding: 280px 0 89px;
}
.form-group-box{
	    max-width: 600px;
}

.label-requird{
	margin-bottom:15px;
}
.client-feedback-div{
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 50px;

}
.client-feedback-div span{
	font-size: 80px;
	color: #1A6FA8;
}
.client-feedback-div h2{
	margin-left: 20px;
    font-size: 35px;
    color: #243C58;
    font-weight: 700;
}
.feedback-form-box .form-group label{
	color: #243C58;
}
.client-feedback-title p{
	width: 86%;
	margin: 0 auto;
}
.client-feedback-title{
	margin-bottom: 40px;
	display: block;
	background-color: #F3F4F5;
    padding-bottom: 120px;
	text-align: center;
}
.form-group-box{
	background-color: #fff;
	padding: 30px;
    margin: 0 auto;
    display: flex;
    align-items: center;
	border-bottom: 1px solid #ddd;
}
.custom-radiokbtn .checkmark{
	height: 25px;
    width: 25px;
}
.custom-radiokbtn{
	padding-top: 4px;
    padding-left: 35px;
}
.custom-radiokbtn .checkmark:after{
	top: 2px;
    left: 2px;
    width: 19px;
    height: 19px;
	background: #1A6FA8;
	border: 1px solid #1A6FA8;
}
.contact-sub-form{
	margin: 0 auto;
    border: 1px solid #ddd;
    margin-bottom: 40px;
    max-width: 600px;
}
.contact-form{
    margin-top: -126px;
}
.client-feedback-form{
	padding: 0px;
}
.label-requird span{
	line-height: 25px;
}

.contact-banner::after {
    background-color: rgba(225, 225, 225, .8);
}

.uploadFile{
    margin-top: 15px;
}

.uploadFile input[type=file] {
    display: block;
    left: 0;
    top: 0;
    width: auto;
    cursor: pointer;
    opacity: 0;
    position: absolute;
    z-index: 10;
    height: 100%;
}

.addfile label {
    text-align: left;
    display: inline-block;
    font-size: 16px;
    vertical-align: super;
    padding-left: 10px;
    color: #39c !important;
    margin-top: 0;
	margin-bottom: 0px;
}

span.addfile i{
    font-size: 35px;
    padding-top: 0px;
}
.custom-checkboxbtn{
	min-width: 90px;
    height: 30px;
    border: 1px solid;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 16px !important;
    color: #AAAAAA !important;
    font-weight: 400 !important;
	padding: 10px;
}
.custom-checkboxbtn:hover{
	border: 2px solid #1A6FA8;
}
.form-group{
	width: 100%;
}
.client-ref-field{
	border-bottom: 0px;
	padding-bottom: 0;
}
.feedback-btn{
	margin-bottom: 40px;
}
.custom-checkboxbtn input[type=checkbox] {
	display: none;
}
.custom-checkboxbtn input[type=radio]{
		display: none;
}
.contact-banner::after{
	background-color: transparent !important;
}
.cform{
	position: relative;
}
.cform::after{
    position: absolute;
    background-image: url(images/trusted-border.png);
    content: "";
    width: 150px;
    height: 150px;
    top: 180px;
    right: 0px;
    z-index: -1;
    background-repeat: no-repeat;
    transform: rotate(-90deg);
}

.cform::before{
    position: absolute;
    background-image: url(images/mobile-testimonial-bg.png);
    content: "";
    width: 250px;
    height: 310px;
    bottom: 446px;
    right: 0px;
    z-index: -1;
    background-repeat: no-repeat;
    transform: rotate(180deg);
}

.contact-banner::after{
    position: absolute;
    background-image: url(images/mobile-testimonial-bg.png);
    content: "";
    width: 250px;
    height: 310px;
    top: 580px;
    left: 0px;
    z-index: -1;
    background-repeat: no-repeat;
    transform: rotate(0deg);
}

@media screen and (max-width: 767px){
	.client-feedback-div{
		padding: 30px;
	}
	.client-feedback-div span{
		font-size: 40px;
	}
	.client-feedback-div h2{
		margin-left: 6px;
		font-size: 30px;
	}
}

</style>

<?php
//require_once('includes/footer.php');
?>

<!--footer-->

<footer class="footer-section">
	<div class="footer-top">
		<div class="footer-fleg">
			<img src="https://www.biz4group.com/images/flags_img_us.jpg"/>
		</div>

		<div class="footer-location">
			<ul>
				<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				<p>7380 W Sand Lake Rd, #500, Orlando, FL 32819, USA</p>
				</li>

				<li><span><i class="fa fa-envelope" aria-hidden="true"></i></span>
				<a href="mailto:info@biz4group.com"><p> info@biz4group.com </p></a>
				</li>

				<li><span><i class="fa fa-mobile" aria-hidden="true"></i></span>
				<a href="tel:+16143296463" itemprop="telephone"><p>+1 (614) 329-6463</p></a>
				</li>
			</ul>
		</div>
	</div>


	<div class="footer-mid">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-mid-detail after-none">
						<div class="footer-mid-heading">
							<h2>About us</h2>
						</div>
						<p>With a wide clientele worldwide and 15+ years of experience, Biz4Group is a celebrated name in the industry delivering top-notch services.</p>
						<a class="appointment-book pulse" href="https://www.biz4group.com/book-appointment">Book an Appointment</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row after-sepreter">
						<div class="col-md-3 col-after">
							<div class="footer-mid-detail">
								<div class="footer-mid-heading">
									<h2>Company</h2>
								</div>
								<div class="footer-mid-detail-links">
									<ul>
										<li><a href="https://www.biz4group.com/about-us">About Us</a></li>
										<li><a href="https://www.biz4group.com/portfolio">Our Work</a></li>
										<li><a href="https://www.biz4group.com/contact-us">Contact</a></li>
									</ul>
								</div>
								
							</div>
						</div>

						<div class="col-md-3 col-after">
							<div class="footer-mid-detail">
								<div class="footer-mid-heading">
									<h2>IoT</h2>
								</div>
								<div class="footer-mid-detail-links">
									<ul>
										<li><a href="https://www.biz4group.com/enterprise-iot-solutions">IoT Solutions</a></li>
										<li><a href="https://www.biz4group.com/iot-product-development">IoT Products</a></li>
										<li><a href="https://www.biz4group.com/smart-wearable-technology">Wearable Devices</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-after">
							<div class="footer-mid-detail">
								<div class="footer-mid-heading">
									<h2>Innovative Solutions</h2>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="footer-mid-detail-links">
											<ul>
												<li><a href="https://www.biz4group.com/mobile-application-development">Mobile Application</a></li>
												<li><a href="https://www.biz4group.com/ecommerce-business-solutions">e-Commerce Service</a></li>
												<li><a href="https://www.biz4group.com/cms-solutions">CMS Solutions</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="footer-mid-detail-links">
											<ul>
												<li><a href="https://www.biz4group.com/full-stack-development">Full Stack Development</a></li>
												<li><a href="https://www.biz4group.com/web-development">Web Development</a></li>
												<li><a href="https://www.biz4group.com/digital-marketing">Digital Marketing</a></li>
											</ul>
										</div>
									</div>
								</div>

								
							</div>
						</div>

					</div>

					<div class="footer-mid-company-logo">
						<ul>
							<li><a href="https://clutch.co/profile/biz4group" target="_blank" title="Clutch"><img src="https://www.biz4group.com/images/extra2.png"></a></li>
							<li><a href="https://www.goodfirms.co/company/biz4group-llc" target="_blank" title="Goodfirms"><img src="https://www.biz4group.com/images/goodfirms.png"></a></li>
							<li><a href="https://www.appfutura.com/developers/biz4group" target="_blank" title="Appfutura"><img src="https://www.biz4group.com/images/extra4.png"></a></li>
							<li><a href="https://extract.co/biz4group" target="_blank" title="Extract"><img src="https://www.biz4group.com/images/extra1.png"></a></li>
						</ul>
					</div>


				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-4">
					<div class="footer-bottom-detail">
						<ul class="social-links">
							<li><a href="https://www.facebook.com/Biz4Group/" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.linkedin.com/company/biz4group" target="_blank" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com/biz4group" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-8">
					<div class="footer-bottom-detail">
						<ul class="footer-bottom-links">
							<li><p>© Biz4Group LLC</p></li>
							<li><a href="https://www.biz4group.com/terms-and-conditions">Terms & Conditions</a></li>
							<li><a href="https://www.biz4group.com/privacy-policy">Privacy & Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>	
	
	
<div class="back-to-top-button">
	<a><i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>	
	
 </body>
 </html>
 
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="background-image:url(<?php echo SITE_URL;?>images/clutch-bg.jpeg);">
			
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="request-form">
						<h5>Tell Us About Your Project</h5>
						<form method="post" name="myForm" id="myForm" enctype="multipart/form-data">
							<div class="form-group">
								<label><i class="fa fa-user"></i> Your Name<sup>*</sup></label>
								<input class="LoNotSensitive" id="Name" name="sName" type="text" value="" placeholder="" required minlength="3">
								<span id="spnFirstName" style="color:red;"></span>
							</div>
							<div class="form-group">
								<label><i class="fa fa-envelope" aria-hidden="true"></i> Email Id<sup>*</sup></label>
								<input class="LoNotSensitive" id="Email" type="email"  value="" placeholder="" name="sEmail" required>
								<span id="spnEmail" style="color:red;"></span>
							</div>
							<div class="form-group">
								<label><i class="fa fa-phone" aria-hidden="true"></i> Phone Number<sup>*</sup></label>
								<input class="LoNotSensitive" id="ContactNum"  type="text" value="" name="sContactNum" placeholder="" required maxlength="10">
								<span id="spnContactNum" style="color:red;"></span>
							</div>
							<!--<div class="form-group">
								<label><i class="fa fa-search" aria-hidden="true"></i> What Are You Looking For?</label>
								<select name="sLookingFor" required>
									<option value="">Select</option>
									<option value="Enterprise Software Solutions">Enterprise Software Solutions</option>
									<option value="Creating a Mobile App">Creating a Mobile App</option>
									<option value="Web Development">Web Development</option>
									<option value="Dedicated Team Service">Dedicated Team Service</option>
									<option value="IT Consulting Services">IT Consulting Services</option>
									<option value="Partnership Opportunities">Partnership Opportunities</option>
								</select>
							</div>-->
							<div class="form-group">
							<label><i class="fa fa-commenting" aria-hidden="true"></i> Message<sup>*</sup></label>
							<textarea class="LoNotSensitive" id="description" name="desc" required minlength="10" rows="4" cols="53"></textarea>
							</div>
							<div class="form-group">
								<label><i class="fa fa-file" aria-hidden="true"></i> Attach files</label>
								<input class="LoNotSensitive" type="file" id="attach_file"  name="attach_file" value="" placeholder="">
							</div>
							<div id="captcha2" class="form-group" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
							<div class="form-group">
								<input type="hidden" name="validate_captcha" value="1">
								<input type="hidden" name="ajax_call" value="sendMailGetInTouch">
								<button type="submit" name="submitform" >Submit</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 hidden-xs">
					<div class="popup-location">
						<h5>We Love To Support You</h5>
						<ul>
							<li><span><img src="https://www.biz4group.com/images/usa-flag.png" alt="usa-flag" class="usa" style="width: 35px;height: 35px;"></span> <p>7380 W Sand Lake Rd #500, Orlando,  FL    32819, USA</p></li>
							<!-- <li><span><i class="fa fa-map" aria-hidden="true"></i></span> <p>629 - 633, 6th Floor, Mansarovar Plaza, Madhyam Marg, Mansarovar, Jaipur, Rajasthan 302020</p></li> -->
							<li><span><i class="fa fa-phone" aria-hidden="true"></i></span>  <p><a href="tel:+16143296463">+1 (614) 329-6463</a></p></li>
							<li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> <p><a href="mailto:info@biz4group.com">info@biz4group.com</a></p></li>
							<!--<li><i class="fa fa-envelope" aria-hidden="true"></i> For Job : hr@biz4group.com</li>-->
						</ul>
					</div>
				</div>
			</div>
			
        </div>
      </div>  
    </div>
  </div>
  
  
</div>



<script src="<?php echo SITE_URL;?>js/jquery.min.js"></script>
<script src="<?php echo SITE_URL;?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.validate.js"></script>
<script>
      /*$.validate({
        lang: 'en'
      });*/
      $('#successQuote, #successContact').hide();
</script>

 
<!--Start of Tawk.to Script-->
<script type="text/javascript">
setTimeout( function(){
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5af52b7b227d3d7edc2525a1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
},10000);
</script>
<!--End of Tawk.to Script-->

<script  type="text/javascript">
	var contact_recaptcha;
    var captcha2;
	var onloadCallback = function(){
		if ($('#contact_recaptcha').length > 0) {
			contact_recaptcha = grecaptcha.render("contact_recaptcha", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
		}

		$('#myModal').on('shown.bs.modal', function () {
			captcha2 = grecaptcha.render("captcha2", {sitekey: "<?php echo G_RECAPTCHA_DATA_SITEKEY; ?>", theme: "light"});
		});
		$('#myModal').on('hide.bs.modal', function () {
			$("#recaptcha2").empty();
		});
	};
</script>


<script>



$(document).ready(function() {

setTimeout( function(){ 
	$.getScript('https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit', function () {});  
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T3GQ7ZD');
},
3000);	 
	 
	jQuery("#myForm").validate({  
		normalizer: function(value) {
			// Trim the value of every element
			return $.trim(value);
		  },
		submitHandler: function(form) {
			var response = grecaptcha.getResponse(captcha2);
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!! , please try again later.");
				
			  } 
			  else {
					/*data_form = jQuery("#myForm").serializeArray();
					//data_form.append('attach_file', file, file.name);
					jQuery.ajax({
					url: "<?php echo $_SERVER['REQUEST_URI'];?>",
					type: "POST",		
					data: data_form,
					async: false,
					cache: false,
					contentType: false,
					enctype: 'multipart/form-data',
					processData: false,
					success: function (html) {
						var obj = jQuery.parseJSON(html);
							if(obj.restype=="success")
							{
								//window.location="<?php echo SITE_URL;?>thankyou";
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
  
  jQuery("#careerform").validate({  
		normalizer: function(value) {
			// Trim the value of every element
			return $.trim(value);
		  },
		submitHandler: function(form) {
			var response = grecaptcha.getResponse(captcha2);
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!! , please try again later.");
				
			  } 
			  else {
					/*data_form = jQuery("#myForm").serializeArray();
					//data_form.append('attach_file', file, file.name);
					jQuery.ajax({
					url: "<?php echo $_SERVER['REQUEST_URI'];?>",
					type: "POST",		
					data: data_form,
					async: false,
					cache: false,
					contentType: false,
					enctype: 'multipart/form-data',
					processData: false,
					success: function (html) {
						var obj = jQuery.parseJSON(html);
							if(obj.restype=="success")
							{
								//window.location="<?php echo SITE_URL;?>thankyou";
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
  
  jQuery("#careerresume").validate({  
		normalizer: function(value) {
			// Trim the value of every element
			return $.trim(value);
		  },
  });
  
 /* jQuery("#formNewsletterScription").validate({
		submitHandler: function(form) {
			 
			data_form = jQuery("#formNewsletterScription").serializeArray();
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
			  
			return false;	
		}
	  });*/
});

</script>
<!--back-to-top-button-->
<script>
$(window).scroll(function() {
  if ($(window).scrollTop() > 1200) {
    $('.back-to-top-button').addClass('show');
  } else {
    $('.back-to-top-button').removeClass('show');
  }
});

$('.back-to-top-button').on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '1200');
});
</script> 

<!--type number script-->
<script>
jQuery("#ContactNum").keypress(function (evt) {
    		var evt			=	evt || window.event;
    		var charCode 	= 	evt.keyCode || evt.which;
    		var charStr 	= 	String.fromCharCode(charCode);
    		if((charCode >= 48 && charCode <= 57) || (charCode == 8) || (charCode == 9)) {
    					return true;			
    		}else{
						return false;
    		}  
    });
</script>





<!--footer-->

<script type="text/javascript" src="js\lib\jquery.form.min.js"></script>
<script type="text/javascript" src="js\scripts.js"></script>
	 
	 <script type="text/javascript">
	 $(function() {
	
	// Listen for click on toggle checkbox
$('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
			$(this).parent().addClass('active');
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false; 
			$(this).parent().removeClass('active');
        });
    }
});

    $('input[type="checkbox"]').bind('change', function (v) {

        if($(this).is(':checked')) {
            $(this).parent().addClass('active');
        } else {
            $(this).parent().removeClass('active');
        }
    });

});
	 
	 		function manageClientRef(status){
			if (status == 'yes'){
				$('.client-ref-field').show();
			}else {
				$('.client-ref-field').hide();
			}
		}
		
	   $('#submit').click(function(){
		var one_msg = $("#one_msg").val();
		var second_msg = $("#second_msg").val();
		var improvements_msg = $("#id_quality").val();
		var trust_msg = $("#id_trust").val();
		var time_msg = $("#id_delivery").val();
		var radioValue = $("input[name='multilingual']:checked").val();
		//var email=$('#email').val();
		var lang_msg = $("#id_lang").val();
		var dream_msg = $("#id_dream").val();
		var focus_msg = $("#id_focus").val();
        
     
//var atposition=email.indexOf("@");  
//var dotposition=email.lastIndexOf(".");  
var client_ref = $('input[name="client-ref"]:checked').val();
        
        if(one_msg=='')
		{
		  alert('Please Enter message');
		  $("#one_msg").css("border", "1px solid red");
          $('#one_msg').focus();
		  $('html, body').stop().animate({ scrollTop: $('#one_msg').offset().top -200}, 500);
          return false;
		}
		else if(second_msg=='')
		{
		  alert('Please Enter message');
		  $("#second_msg").css("border", "1px solid red");
          $('#second_msg').focus();
		  $('html, body').stop().animate({ scrollTop: $('#second_msg').offset().top -200}, 500);
          return false;
		}
		else if(improvements_msg=='')
        {
          alert('Please Enter message');
		  $("#id_quality").css("border", "1px solid red");
          $('#id_quality').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_quality').offset().top -200}, 500);
          return false;
        }

		else if(trust_msg=='')
        {
          alert('Please Enter message');
		  $("#id_trust").css("border", "1px solid red");
          $('#id_trust').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_trust').offset().top -200}, 500);
          return false;
        }
		
		else if(time_msg=='')
        {
          alert('Please Enter message');
		  $("#id_delivery").css("border", "1px solid red");
          $('#id_delivery').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_delivery').offset().top -200}, 500);
          return false;
        }
		
		else if ($('input[name="multilingual"]:checked').length == 0) {
         alert('please select one option');
         return false; 
		} 
		
		else if(radioValue== 'other' && lang_msg=='')
        {
          alert('Please Enter your Langauge');
		  $("#id_lang").css("border", "1px solid red");
          $('#id_lang').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_lang').offset().top -200}, 500);
          return false;
        }
		
		else if(dream_msg=='')
        {
          alert('Please Enter message');
		  $("#id_dream").css("border", "1px solid red");
          $('#id_dream').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_dream').offset().top -200}, 500);
          return false;
        }
		
		else if(focus_msg=='')
        {
          alert('Please Enter message');
		  $("#id_focus").css("border", "1px solid red");
          $('#id_focus').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_focus').offset().top -200}, 500);
          return false;
        }
		
       /* else if (client_ref == 'Yes' && (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)){  
          alert("Please enter a valid e-mail address ");  
          $( "#email" ).focus();
		  $("#email").css("border", "1px solid red");
		  $('html, body').stop().animate({ scrollTop: $('#email').offset().top -200}, 500);
          return false;  
          } */
			else {
		var form = $('#send-contact-form')[0];
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/ajax-ques",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
			alert("We have recieved your feedback! Thank you");
               location.reload();
            },
        });

        }

       });
     </script>
	 
	 <script type="application/javascript">
    $('.attachOne').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>

	 <script type="application/javascript">
    $('.attachTwo').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label-one').html(fileName);
    });
</script>




 