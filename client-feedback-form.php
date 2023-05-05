<?php
require_once('includes/config.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Client Feedback | Biz4Group</title>
		<meta name="Title" content="Client Feedback | Biz4Group" />
		<meta name="Description" content="Please help us to create a wonderful product for you. Please provide your honest feedback, so that we can try and improve." />
		<meta property="og:url" content=" <?php echo SITE_URL; ?>hire-ios-app-developer "/>
		<meta property="og:title" content="Client Feedback | Biz4Group"/>
		<meta property="og:site_name" content="Biz4Group"/>
		<meta property="og:description" content="Please help us to create a wonderful product for you. Please provide your honest feedback, so that we can try and improve."/>
		<meta property="og:type" content=" <?php echo SITE_URL; ?>hire-ios-app-developer "/>
		<meta property="og:image" content=" <?php echo SITE_URL; ?>images/client-feedback-img.jpg"/>
		<meta property="og:locale" content="en_us"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:url" content=" <?php echo SITE_URL; ?>hire-ios-app-developer "/>
		<meta name="twitter:creator" content="@biz4group"/>
		<meta name="twitter:title" content="Client Feedback | Biz4Group"/>
		<meta name="twitter:description" content="Please help us to create a wonderful product for you. Please provide your honest feedback, so that we can try and improve."/>
		<meta name="twitter:image" content=" <?php echo SITE_URL; ?>images/client-feedback-img.jpg"/>
		
<!--menu-->
	<!-- CORE CSS -->
	<link rel="shortcut icon" href="<?php echo SITE_URL;?>images/favicon.png">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>css/bootstrap.min.css?ver=2" media="all">
	<!--<link rel="stylesheet" href="<?php echo SITE_URL;?>css/style.css?ver=7.5" media="all">-->
	<link rel="stylesheet" href="css/simple-rating.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>css/client-feedback.css" media="all">
     
	


 <style>
label.error {
	color: red !important;
    text-align: left;
    display: block;
    font-weight: normal !important;
}
</style>

 </head>

 <body>
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3GQ7ZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--menu-->
	
	
<!--Client feedback-->
	<div class="client-feedback-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="client-feedback-back-home">
						<a href="https://www.biz4group.com/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to Website</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="client-feedback-logo">
						<a href="#">
							<img src="https://www.biz4group.com/images/logo-new.png" alt="">
						</a>	
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="client-feedback-head">
		<div class="container">
			<h2>Your Feedback Is Very Important To Us</h2>
			<p>Please take a few minutes to complete this short Customer Review Form to provide us your valuable feedback for our services. This research is conducted to evaluate your level of satisfaction with the quality of our ongoing service. We appreciate your participation.</p>
		</div>
	</div>
	
	<div class="client-feedback-body">
		<div class="container">
			<div class="client-feedback-box-up">
				<div class="client-feedback-box">
				<form id="send-contact-form" method="post" enctype="multipart/form-data">
					<div class="row">
				
						<div class="col-md-5">
							<div class="client-feedback-leftform">
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter your Full Name*" id="name" name="name" onkeypress="return (event.charCode > 64 && 
								event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required> 
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Enter your mail address*" name="email" id="email" required> 
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Enter your contact number" name="number" id="phone"  maxlength='13' pattern="[1-9]{1}[0-9]{13}" > 
							</div>
							</div>
						</div>
						
						<div class="col-md-7">
							<div class="client-feedback-rightform">
							
								<div class="feedback-starbox">
									<div class="row">
										<div class="col-lg-7 col-md-6">
											<div class="feedback-starbox-heading">
												<h5>How satisfied you are with the timeliness of the project delivery?</h5>
											</div>
										</div>
										<div class="col-lg-5 col-md-6">
											<div class="feedback-stars">
												<div class="main-star-style">
												<input type="text" id="quality_rating" name="qa_rating" value="0" class="rating-loading">
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="feedback-starbox">
									<div class="row">
										<div class="col-lg-7 col-md-6">
											<div class="feedback-starbox-heading">
												<h5>How satisfied you are with the Project manager support?</h5>
											</div>
										</div>
										<div class="col-lg-5 col-md-6">
											<div class="feedback-stars">
												<div class="main-star-style">
												<input type="text" id="halfstarsInput1" name="trust_rating" value="0" class="rating-loading">
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="feedback-starbox">
									<div class="row">
										<div class="col-lg-7 col-md-6">
											<div class="feedback-starbox-heading">
												<h5>Do you see constant quality improvements?</h5>
											</div>
										</div>
										<div class="col-lg-5 col-md-6">
											<div class="feedback-stars">
												<div class="main-star-style">
												<input type="text" id="halfstarsInput2" name="time_rating" value="0" class="rating-loading">
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="feedback-starbox">
									<div class="row">
										<div class="col-lg-7 col-md-6">
											<div class="feedback-starbox-heading">
												<h5>How satisfied you are with our service till now?</h5>
											</div>
										</div>
										<div class="col-lg-5 col-md-6">
											<div class="feedback-stars">
												<div class="main-star-style">
												<input type="text" id="halfstarsInput3" name="dream_rating" value="0" class="rating-loading">
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="feedback-starbox">
									<div class="row">
										<div class="col-lg-7 col-md-6">
											<div class="feedback-starbox-heading">
												<h5>Would you recommend our service to others?</h5>
											</div>
										</div>
										<div class="col-lg-5 col-md-6">
											<div class="feedback-stars">
												<div class="main-star-style">
												<input type="text" id="halfstarsInput4" name="focus_rating" value="0" class="rating-loading">
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!--<div class="feedback-starbox">
									<div class="row">
										<div class="col-lg-7 col-md-6">
											<div class="feedback-starbox-heading">
												<h5>Will you be able to help us for reference checks?</h5>
											</div>
										</div>
										<div class="col-lg-5 col-md-6">
												<div class="custom-radio-inline" style="margin-bottom:0px;">
													<label class="custom-radiokbtn">Yes
													  <input class="LoNotSensitive" type="radio" checked="checked" value="Yes" name="client-ref" onclick = "manageClientRef('yes')">
													  <span class="checkmark"></span>
													</label>
													<label class="custom-radiokbtn">No
													  <input class="LoNotSensitive" type="radio" name="client-ref" value="No" onclick = "manageClientRef('no')">
													  <span class="checkmark"></span>
													</label>
												</div>	
										</div>
												<div class="client-ref-field">
													<div class="form-group">
														<input type="email" class="form-control" placeholder="Email ID" name="email_sub" id="email_sub" required> 
													</div>
													<div class="form-group">
														<input type="number" class="form-control" placeholder="Contact Number" name="number-sub" id="number-sub" required> 
													</div>
												</div>
									</div>
								</div>-->
								
								<h4 id="loader">
								    <span>Loading ....</span>
								</h4>
								<div class="feedback-submit">
									<button type="submit" id="submit" class="feedback-submit-button pulse-m2">Submit</button>
								</div>
							
							</div>
						</div>
					
					</div>
				</form>
			</div>
			</div>
		
		</div>
	</div>
	
<!--Client Feedback-->


	
	
<!--	<div class="contact-banner" style="background-image:url(images/client-feedback-img-1.jpg);">
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
							<h2><img src="images/client-massage-box.png"/>Your Feedback Is Very Important To Us</h2>
						</div>
							
						<div class="client-feedback-head">
							<p>Please help us to help you by providing your valuable feedback.</p>
						</div>
						
						<div class="feedback-form-box contact-form">
							<form id="send-contact-form" method="post">
								<div class="row">
									<div class="col-md-12">
										<!--Box--
										<div class="form-group-box morder-botton-none">
											<div class="form-group">
												<div class="label-requird">
													<label>Your Name</label>
													<!--<span>*</span>--
												</div>
												<div class="row">
													<div class="col-md-12">
													<input class="form-control mb-10 field-text LoNotSensitive" type="text" placeholder="Enter your name" id="name">
													</div>
												</div>
												
												<label class="custom-check">Please check here if you wish to fill this form anonymously
												  <input class="LoNotSensitive" type="checkbox" id="name_anonymously">
												  <span class="checkmark"></span>
												</label>
											</div>
										</div>
										
										<!--Box--
										<div class="form-group-box morder-botton-none">
											<div class="form-group">
												<div class="label-requird label-requird-center">
													<label>Do you see constant quality improvements?</label>
													<!--<span>*</span>--
												</div>
												<div class="main-star-style">
												<input id="quality_rating" name="qa_rating" value="0" class="rating-loading"> 
												<!--<div id="halfstarsReview"></div>
													<input id="halfstarsInput" name="qa_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>--
												</div>
												<!--<p><input class="feedback-rating" name="qa_rating" id="quality_rating"></p>--
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_quality" placeholder="Explain your rating..." name="improvements" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box--
										<div class="form-group-box morder-botton-none">
											<div class="form-group">
												<div class="label-requird label-requird-center">
													<label>Does your contact person work as a trusted advisor?</label>
													<!--<span>*</span>--
												</div>
												<div class="main-star-style">
												<input id="halfstarsInput1" name="trust_rating" value="0" class="rating-loading">
												<!--<div id="halfstarsReview1"></div>
												<input id="halfstarsInput1" name="trust_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>--
												</div>
												<!--<p><input class="feedback-rating" name="trust_rating" id="trust_id"></p>--
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_trust" placeholder="Explain your rating..." name="trusted" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box--
										<div class="form-group-box morder-botton-none">
											<div class="form-group">
												<div class="label-requird label-requird-center">
													<label>Are you receiving timely delivery?</label>
													<!--<span>*</span>--
												</div>
												<div class="main-star-style">
												<input id="halfstarsInput2" name="time_rating" value="0" class="rating-loading">
												<!--<div id="halfstarsReview2"></div>
												<input id="halfstarsInput2" name="time_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>--
												</div>
												<!--<p><input class="feedback-rating" name="time_rating"></p>--
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_delivery" placeholder="Explain your rating..." name="time_msg" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box--
										<div class="form-group-box morder-botton-none">
											<div class="form-group">
												<div class="label-requird label-requird-center">
													<label>Do we have required technical expertise to work on your dream project?</label>
													<!--<span>*</span>--
												</div>
												<div class="main-star-style">
												<input id="halfstarsInput3" name="dream_rating" value="0" class="rating-loading">
												<!--<div id="halfstarsReview3"></div>
												<input id="halfstarsInput3" name="dream_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>--
												</div>
												<!--<p><input class="feedback-rating" name="dream_rating"></p>--
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_dream" placeholder="Explain your rating..." name="dream_proj" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box--
										<div class="form-group-box morder-botton-none">
											<div class="form-group">
												<div class="label-requird label-requird-center">
													<label>Do we focus on details?</label>
													<!--<span>*</span>--
												</div>
												<div class="main-star-style">
												<input id="halfstarsInput4" name="focus_rating" value="0" class="rating-loading">
												<!--<div id="halfstarsReview4"></div>
												<input id="halfstarsInput4" name="focus_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>--
												</div>
												<!--<p><input class="feedback-rating" name="focus_rating"></p>--
												<div class="row">
													<div class="col-md-12">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_focus" placeholder="Explain your rating..." name="focus_details" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										
										<!--Box--
										<div class="form-group-box">
											<div class="form-group" style="margin-bottom:0px;">
												<div class="label-requird">
													<label>Will you be able to help us for reference checks?</label>
													<!--<span>*</span>--
												</div>
												<div class="custom-radio-inline" style="margin-bottom:0px;">
													<label class="custom-radiokbtn">Yes
													  <input class="LoNotSensitive" type="radio" checked="checked" value="Yes" name="client-ref" onclick = "manageClientRef('yes')">
													  <span class="checkmark"></span>
													</label>
													<label class="custom-radiokbtn">No
													  <input class="LoNotSensitive" type="radio" name="client-ref" value="No" onclick = "manageClientRef('no')">
													  <span class="checkmark"></span>
													</label>
												</div>
												
												
											</div>
										</div>
										
										<!--Box--
										<div class="form-group-box client-ref-field" style="border-top: none;">
										
											<div class="form-group">
												<div class="label-requird">
													<label>Email ID</label>
													<!--<span>*</span>--
												</div>
												<div class="row">
													<div class="col-md-12">
														<input class="form-control field-text LoNotSensitive" type="email" placeholder=" Enter your email" name="email" id="email" required >
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="label-requird">
													<label>Contact Number</label>
													<!--<span>*</span>--
												</div>
												<div class="row">
													<div class="col-md-12">
														<input class="form-control field-text LoNotSensitive" name="number" type="number" placeholder="Enter your contact number" id="phone" required>
													</div>
												</div>
											</div>
											
										</div>	

										<!--Box--
										<div class="form-group-box">
										<div class="form-group">
										<label>Please attach your headshot here for us to post it along your valuable feedback on the website.</label>
											<div class="uploadFile">
												<input type="file" id="attach_file" class="attachOne" name="attach_file" value="" placeholder="">
												<span class="addfile"><i class="fa fa-plus-circle" aria-hidden="true"></i><label class="custom-file-label" for="inputGroupFile02">Upload Picture</label></span>
											</div>
										</div>
										</div>
										
										<!--Box
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Are you available for a client reference, if needed?</label>
													<span>*</span>
												</div>
												<div class="custom-radio-inline">
													<label class="custom-radiokbtn">Yes
													  <input type="radio" checked="checked" name="radio">
													  <span class="checkmark"></span>
													</label>
													<label class="custom-radiokbtn">No
													  <input type="radio" name="radio">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="contact-form-bottom">
													
														<div class="row">
															<div class="col-md-8">
																<div class="form-group" style="margin-bottom:20px;">
																	<div class="label-requird">
																		<label>Email ID</label>
																		<span>*</span>
																	</div>
																	<input class="form-control" type="email" placeholder="" name="email" required >
																</div>
															</div>
															<div class="col-md-8">
																<div class="form-group">
																	<div class="label-requird">
																		<label>Contact Number</label>
																		<span>*</span>
																	</div>
																	<input class="form-control" name="number" type="number" placeholder="" required>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>--
										
										
										
										
									</div>
										
								</div>
								<div class="text-center feedback-btn">
											<p>Thanks for your feeback <i class="fa fa-smile-o" aria-hidden="true"></i></p>
											<button type="submit" id="submit" class="portfolio-button pulse-m2">Submit</button>
										</div>
								<div id="contact-content"></div>
							</form>
						</div>
						
						
		</div>
	</div>

	</div>
	</div>
	</div>-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>	
<style>


</style>

	
 </body>
 </html>
  
<script src="<?php echo SITE_URL;?>js/jquery.min.js"></script>

<script type="text/javascript" src="js\lib\jquery.form.min.js"></script>
<script type="text/javascript" src="js\lib\jquery.validate.min.js"></script>
<script src="js/star-rating.js"></script>


<script>
$(document).ready(function(){
    $('#quality_rating').rating({});
	/*var input3SelectedRating = 0;
	var input3RatingTarget = "";
	$('#quality_rating').on('rating:hover', function(event, value, caption, target) {
		console.log(value);
		input3SelectedRating = value;
		console.log(caption);
		input3RatingTarget = target;
		console.log(target);
	});

	$('#quality_rating').on('rating:hoverleave', function(event, target) {
	console.log("target::: ", target);
	$(input3RatingTarget).click();
	   $('#quality_rating').val(input3SelectedRating);    
	   $('#quality_rating').parents('.rating-stars').find("span.filled-stars").css("width", ((input3SelectedRating/5)*100) +'%');    
	   $('#quality_rating').parents('.rating-container').find(".caption .label").text(input3SelectedRating);    
	});*/
});

$(document).ready(function(){
    $('#halfstarsInput1').rating({});
/*	var input3SelectedRating = 0;
	var input3RatingTarget = "";
	$('#halfstarsInput1').on('rating:hover', function(event, value, caption, target) {
		console.log(value);
		input3SelectedRating = value;
		console.log(caption);
		input3RatingTarget = target;
		console.log(target);
	});

	$('#halfstarsInput1').on('rating:hoverleave', function(event, target) {
	console.log("target::: ", target);
	$(input3RatingTarget).click();
	   $('#halfstarsInput1').val(input3SelectedRating);    
	   $('#halfstarsInput1').parents('.rating-stars').find("span.filled-stars").css("width", ((input3SelectedRating/5)*100) +'%');    
	   $('#halfstarsInput1').parents('.rating-container').find(".caption .label").text(input3SelectedRating);    
	});*/
});

$(document).ready(function(){
    $('#halfstarsInput2').rating({});
/*	var input3SelectedRating = 0;
	var input3RatingTarget = "";
	$('#halfstarsInput2').on('rating:hover', function(event, value, caption, target) {
		console.log(value);
		input3SelectedRating = value;
		console.log(caption);
		input3RatingTarget = target;
		console.log(target);
	});

	$('#halfstarsInput2').on('rating:hoverleave', function(event, target) {
	console.log("target::: ", target);
	$(input3RatingTarget).click();
	   $('#halfstarsInput2').val(input3SelectedRating);    
	   $('#halfstarsInput2').parents('.rating-stars').find("span.filled-stars").css("width", ((input3SelectedRating/5)*100) +'%');    
	   $('#halfstarsInput2').parents('.rating-container').find(".caption .label").text(input3SelectedRating);    
	});*/
});

$(document).ready(function(){
    $('#halfstarsInput3').rating({});
/*	var input3SelectedRating = 0;
	var input3RatingTarget = "";
	$('#halfstarsInput3').on('rating:hover', function(event, value, caption, target) {
		console.log(value);
		input3SelectedRating = value;
		console.log(caption);
		input3RatingTarget = target;
		console.log(target);
	});

	$('#halfstarsInput3').on('rating:hoverleave', function(event, target) {
	console.log("target::: ", target);
	$(input3RatingTarget).click();
	   $('#halfstarsInput3').val(input3SelectedRating);    
	   $('#halfstarsInput3').parents('.rating-stars').find("span.filled-stars").css("width", ((input3SelectedRating/5)*100) +'%');    
	   $('#halfstarsInput3').parents('.rating-container').find(".caption .label").text(input3SelectedRating);    
	});*/
});

$(document).ready(function(){
    $('#halfstarsInput4').rating({});
/*	var input3SelectedRating = 0;
	var input3RatingTarget = "";
	$('#halfstarsInput4').on('rating:hover', function(event, value, caption, target) {
		console.log(value);
		input3SelectedRating = value;
		console.log(caption);
		input3RatingTarget = target;
		console.log(target);
	});

	$('#halfstarsInput4').on('rating:hoverleave', function(event, target) {
	console.log("target::: ", target);
	$(input3RatingTarget).click();
	   $('#halfstarsInput4').val(input3SelectedRating);    
	   $('#halfstarsInput4').parents('.rating-stars').find("span.filled-stars").css("width", ((input3SelectedRating/5)*100) +'%');    
	   $('#halfstarsInput4').parents('.rating-container').find(".caption .label").text(input3SelectedRating);    
	});*/
});
</script>

<script type="text/javascript">
    $(function () {
	$("#loader").hide();
        $('input[name ="attach_file_drop"]').click(function() {
            $( "#attach_file_drop_error" ).html('');
        });
        $('input[name ="attach_file_drop"]').bind('change', function() {
            var error = '';
            if (this.files.length > 0){
                if (this.files[0].size > 5242880){
                    error = 'File size should be less then 5 mb.'
                }
            }
            if (error.length > 0){
                $( "#attach_file_drop_error" ).html('<sup>*</sup>' + error);
                $("#submit").prop("disabled",true);
                $("#submit").css("background-color", '#628799');
            }else{
                $("#submit").prop("disabled",false);
                $("#submit").css("background-color", '#39c');
            }
        });
    });
       
	   $('#submit').click(function(){
        var name=$('#name').val();
        var email=$('#email').val();
        var subject=$('#subject').val();
		var improvements_msg = $("#id_quality").val();
		var phone =$('#phone').val();
		var quality_rating = $('input[name="qa_rating"]').val();
		var trust_rating = $('input[name="trust_rating"]').val();
		var time_rating = $('input[name="time_rating"]').val();
		var dream_rating = $('input[name="dream_rating"]').val();
		var focus_rating = $('input[name="focus_rating"]').val();
        
     
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
        
        
       if(name=='')
        {
          alert('Please Enter Your Name');
		  $("#name").css("border", "1px solid red");
          $( "#name" ).focus();
				$('html, body').stop().animate({ scrollTop: $('#name').offset().top -200}, 500);
          return false;
        }
		else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
          alert("Please enter a valid e-mail address ");  
          $( "#email" ).focus();
		  $("#email").css("border", "1px solid red");
		  $('html, body').stop().animate({ scrollTop: $('#email').offset().top -200}, 500);
          return false;  
        }
        /*else if (phone=='')
        {
          alert('Please enter valid contact number');
          $( "#phone" ).focus();
		  $("#phone").css("border", "1px solid red");
		  $('html, body').stop().animate({ scrollTop: $('#phone').offset().top -200}, 500);
          return false;
        }*/
		else if(quality_rating=='0')
        {
          alert('Please provide rating for quality improvments');
          return false;
        }
		else if(trust_rating=='0')
        {
          alert('Please provide rating for trusted advisor');
          return false;
        }
		else if(time_rating=='0')
        {
          alert('Please provide rating for timely delivery');
          return false;
        }
		else if(dream_rating=='0')
        {
          alert('Please provide rating for technical expertise');
          return false;
        }
		else if(focus_rating=='0')
        {
          alert('Please provide rating for focus on details');
          return false;
        }
		
 		else {
		var form = $('#send-contact-form')[0];
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/ajax",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
	    beforeSend: function(){
                $("#loader").show();
            },
            success: function () {
              // alert("We have recieved your feedback! Thank you");
			 window.location="<?php echo SITE_URL;?>thankyou-feedback";

            },
	    complete:function(data){
                $("#loader").hide();
            }
        });
		return false;
        }
       });
     </script>
	 
	 <script type="application/javascript">
    $('.attachOne').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
	    $('.attachTwo').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label-two').html(fileName);
    });
	 </script>
	 




 