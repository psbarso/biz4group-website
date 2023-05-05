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
							<h2>Website Questionnaire</h2>
							<img src="https://www.biz4group.com/images/website-questionnaire-icon.png"/>
						</div>
							
						<!--<div class="client-feedback-head">
							<p><b>Hello!</b> Please help us to create a wonderful product for you. Please provide your honest feedback, so that we can try and improve. As per Biz4group guidelines, we @ Biz4 tend to make constant improvements and hence we request your input in the feedback form below. </p>
						</div>-->
						
						<div class="feedback-form-box contact-form">
							<form id="send-contact-form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										
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
													<label>What is the primary purpose of your website? How will this app add value to your business?</label>
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
															<span class="addfile"><i class="fa fa-plus-circle" aria-hidden="true"></i><label class="custom-file-label" for="inputGroupFile02">Choose file</label></span>
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
															<span class="addfile"><i class="fa fa-plus-circle" aria-hidden="true"></i><label class="custom-file-label-one" for="inputGroupFile02">Choose file</label></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Please provide links to any website which has similar features/ functionality as your app? These could be direct competition or in a similar industry.</label>
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
													<label>Is this website multilingual or only in English?</label>
													<span>*</span>
												</div>
												<div class="custom-radio-inline" style="margin-bottom:0px;">
													<label class="custom-radiokbtn">Other(s)
													  <input type="radio" checked="checked" value="other" name="multilingual" onclick = "manageClientRef('yes')">
													  <span class="checkmark"></span>
													</label>
													<label class="custom-radiokbtn">English
													  <input type="radio" value="english" name="multilingual" onclick = "manageClientRef('no')">
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
								<div id="contact-content"></div>
							</form>
						</div>
						
						
		</div>
	</div>

	</div>
	</div>
	</div>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
.contact-banner {
    padding: 280px 0 89px;
}
.form-group-box{
	    max-width: 600px;
}

.label-requird{
	margin-bottom:15px;
}

.client-feedback-title{
	margin-bottom: 40px;
}

.label-requird span{
	line-height: 25px;
}

.contact-banner::after {
    background-color: rgba(225, 225, 225, .3);
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

</style>

<?php
require_once('includes/footer.php');
?>	
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>-->
<script type="text/javascript" src="js\lib\jquery.form.min.js"></script>
<script type="text/javascript" src="js\lib\jquery.validate.min.js"></script>
<script type="text/javascript" src="js\scripts.js"></script>
	 
	 <script type="text/javascript">
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




 