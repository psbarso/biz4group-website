<?php include_once("header.php");
 ?>
	
	<div class="contact-banner" style="background-image:url(images/client-feedback-img.jpg);">
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
							<h2>Feedback</h2>
							<img src="https://www.biz4group.com/images/feedback-icon.png"/>
						</div>
							
						<div class="client-feedback-head">
							<p><b>Hello!</b> Please help us to create a wonderful product for you. Please provide your honest feedback, so that we can try and improve. As per Biz4group guidelines, we @ Biz4 tend to make constant improvements and hence we request your input in the feedback form below. </p>
						</div>
						
						<div class="feedback-form-box contact-form">
							<form id="send-contact-form" method="post">
								<div class="row">
									<div class="col-md-12">
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Your Name</label>
													<span>*</span>
												</div>
												<div class="row">
													<div class="col-md-8">
													<input class="form-control mb-10 field-text LoNotSensitive" type="text" placeholder="Enter your name" id="name">
													</div>
												</div>
												
												<label class="custom-check">Please check here if you wish to fill this form anonymously
												  <input class="LoNotSensitive" type="checkbox" id="name_anonymously">
												  <span class="checkmark"></span>
												</label>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Do you see constant quality improvements?</label>
													<span>*</span>
												</div>
												<div class="main-star-style">
												<div id="halfstarsReview"></div>
												<input id="halfstarsInput" name="qa_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>
												</div>
												<!--<p><input class="feedback-rating" name="qa_rating" id="quality_rating"></p>-->
												<div class="row">
													<div class="col-md-8">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_quality" placeholder="Explain your rating" name="improvements" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Does your contact person work as a trusted advisor?</label>
													<span>*</span>
												</div>
												<div class="main-star-style">
												<div id="halfstarsReview1"></div>
												<input id="halfstarsInput1" name="trust_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>
												</div>
												<!--<p><input class="feedback-rating" name="trust_rating" id="trust_id"></p>-->
												<div class="row">
													<div class="col-md-8">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_trust" placeholder="Explain your rating" name="trusted" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Are you receiving timely delivery?</label>
													<span>*</span>
												</div>
												<div class="main-star-style">
												<div id="halfstarsReview2"></div>
												<input id="halfstarsInput2" name="time_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>
												</div>
												<!--<p><input class="feedback-rating" name="time_rating"></p>-->
												<div class="row">
													<div class="col-md-8">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_delivery" placeholder="Explain your rating" name="time_msg" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Do we have required technical expertise to work on your dream project?</label>
													<span>*</span>
												</div>
												<div class="main-star-style">
												<div id="halfstarsReview3"></div>
												<input id="halfstarsInput3" name="dream_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>
												</div>
												<!--<p><input class="feedback-rating" name="dream_rating"></p>-->
												<div class="row">
													<div class="col-md-8">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_dream" placeholder="Explain your rating" name="dream_proj" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group">
												<div class="label-requird">
													<label>Do we focus on details?</label>
													<span>*</span>
												</div>
												<div class="main-star-style">
												<div id="halfstarsReview4"></div>
												<input id="halfstarsInput4" name="focus_rating" class="form-control form-control-sm main-input-radius LoNotSensitive" disabled>
												</div>
												<!--<p><input class="feedback-rating" name="focus_rating"></p>-->
												<div class="row">
													<div class="col-md-8">
													<textarea class="form-control field-textarea LoNotSensitive" id="id_focus" placeholder="Explain your rating" name="focus_details" required minlength="20"></textarea>
													</div>
												</div>
											</div>
										</div>
										
										
										<!--Box-->
										<div class="form-group-box">
											<div class="form-group" style="margin-bottom:0px;">
												<div class="label-requird">
													<label>Are you available for a client reference, if needed?</label>
													<span>*</span>
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
										
										<!--Box-->
										<div class="form-group-box client-ref-field">
											<div class="form-group">
												<div class="label-requird">
													<label>Email ID</label>
													<span>*</span>
												</div>
											
													<div class="row">
															<div class="col-md-8">
															<input class="form-control field-text LoNotSensitive" type="email" placeholder=" Enter your email" name="email" id="email" required >
															</div>
													</div>
											</div>
										</div>
										
										<!--Box-->
										<div class="form-group-box client-ref-field">
											<div class="form-group">
												<div class="label-requird">
													<label>Contact Number</label>
													<span>*</span>
												</div>
											
													<div class="row">
															<div class="col-md-8">
															<input class="form-control field-text LoNotSensitive" name="number" type="number" placeholder="Enter your contact number" id="phone" required>
															</div>
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
											</div>-->
										
										
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

.rating {
	position: relative;
	margin-bottom: 20px;
    margin-top: 10px;
	
}
 .star {
	display: inline-block;
    margin: 1px;
    font-size: 22px;
    color: #c5c5c5;
    position: relative;
    line-height: normal;
	cursor: pointer;
}
 .full:before {
	 font-family: fontAwesome;
	 display: inline-block;
	 content: "\f005";
	 position: relative;
	 float: right;
	 z-index: 2;
}
 .half:before {
	 font-family: fontAwesome;
	 content: "\f089";
	 position: absolute;
	 float: left;
	 z-index: 3;
}
 .star-colour {
	 color: #ffd700;
}

.rating .rating-stars-align{
	display: flex;
    align-items: center;
}

.rating .rating-stars{
	margin-right: 20px;
}

.rating .rating-stars-align .score{
	width: 34px;
    height: 34px;
    background-color: #39c;
    color: #fff;
    justify-content: center;
    display: flex;
    align-items: center;
    border-radius: 100%;
    font-size: 13px;
}

.form-group-box{
	    max-width: 600px;
}

</style>

<?php
require_once('includes/footer.php');
?>	

<!--<script>

	
	var starClicked = false;

$(function() {

  /*$('.star').click(function() {

    $(this).children('.selected').addClass('is-animated');
    $(this).children('.selected').addClass('pulse');

    var target = this;

    setTimeout(function() {
      $(target).children('.selected').removeClass('is-animated');
      $(target).children('.selected').removeClass('pulse');
    }, 1000);

    starClicked = true;
  })*/

  $('.half').hover(function() {
    if (starClicked == true) {
      setHalfStarState(this)
    }
    $(this).closest('.rating').find('.js-score').text($(this).data('value'));

    $(this).closest('.rating').data('vote', $(this).data('value'));
    calculateAverage()
    console.log(parseInt($(this).data('value')));

  })

  $('.full').hover(function() {
    if (starClicked == true) {
      setFullStarState(this)
    }
    $(this).closest('.rating').find('.js-score').text($(this).data('value'));

    $(this).find('js-average').text(parseInt($(this).data('value')));

    $(this).closest('.rating').data('vote', $(this).data('value'));
    calculateAverage()

    console.log(parseInt($(this).data('value')));
  })

  $('.half').hover(function() {
    if (starClicked == false) {
      setHalfStarState(this)
    }

  })

  $('.full').hover(function() {
    if (starClicked == false) {
      setFullStarState(this)
    }
  })

})

function updateStarState(target) {
  /*$(target).parent().prevAll().addClass('animate');*/
  $(target).parent().prevAll().children().addClass('star-colour');

  /*$(target).parent().nextAll().removeClass('animate');*/
  $(target).parent().nextAll().children().removeClass('star-colour');
}

function setHalfStarState(target) {
  $(target).addClass('star-colour');
  $(target).siblings('.full').removeClass('star-colour');
  updateStarState(target)
}

function setFullStarState(target) {
  $(target).addClass('star-colour');
  /*$(target).parent().addClass('animate');*/
  $(target).siblings('.half').addClass('star-colour');

  updateStarState(target)
}

function calculateAverage() {
  var average = 0

  $('.rating').each(function() {
    average += $(this).data('vote')
  })

  $('.js-average').text((average/ $('.rating').length).toFixed(1))
}

</script>-->
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>-->
<script type="text/javascript" src="js\lib\jquery.form.min.js"></script>
<script type="text/javascript" src="js\lib\jquery.validate.min.js"></script>
<script type="text/javascript" src="js\scripts.js"></script>
<!--<script src="js/simple-rating.js"></script>-->
<script src="js/rating.js"></script>
	<script>
    $("#halfstarsReview").rating({
        "half": true,
		"value": 1,
        "click": function (e) {
            console.log(e);
            $("#halfstarsInput").val(e.stars);
        }
    });
	
	    $("#halfstarsReview1").rating({
        "half": true,
		"value": 1,
        "click": function (e) {
            console.log(e);
            $("#halfstarsInput1").val(e.stars);
        }
    });
	
		    $("#halfstarsReview2").rating({
        "half": true,
		"value": 1,
        "click": function (e) {
            console.log(e);
            $("#halfstarsInput2").val(e.stars);
        }
    });
	
		    $("#halfstarsReview3").rating({
        "half": true,
		"value": 1,
        "click": function (e) {
            console.log(e);
            $("#halfstarsInput3").val(e.stars);
        }
    });
	
		    $("#halfstarsReview4").rating({
        "half": true,
		"value": 1,
        "click": function (e) {
            console.log(e);
            $("#halfstarsInput4").val(e.stars);
        }
    });
	</script>
<!--   <script type="text/javascript">
      $(document).ready(function(){
        $('.feedback-rating').rating();
      });
</script>-->
<script type="text/javascript">
		function manageClientRef(status){
			if (status == 'yes'){
				$('.client-ref-field').show();
			}else {
				$('.client-ref-field').hide();
			}
		}
       
       $('#name_anonymously').click(function(){ 
		if($(this).is(':checked')) {
		$('#name').prop('disabled', true);
		$('#name').val('');
			}else {
			  $('#name').prop('disabled', false);
			}
		});
	   $('#submit').click(function(){

        var name=$('#name').val();
        var email=$('#email').val();
        var subject=$('#subject').val();
		var message=$('#msg').val();
		var quality_rating = $('input[name="qa_rating"]').val();
		var improvements_msg = $("#id_quality").val();
		var trust_rating = $('input[name="trust_rating"]').val();
		var trust_msg = $("#id_trust").val();
		var time_rating = $('input[name="time_rating"]').val();
		var time_msg = $("#id_delivery").val();
		var dream_rating = $('input[name="dream_rating"]').val();
		var dream_msg = $("#id_dream").val();
		var focus_rating = $('input[name="focus_rating"]').val();
		var focus_msg = $("#id_focus").val();
		var phone =$('#phone').val();
        
     
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
var client_ref = $('input[name="client-ref"]:checked').val();
        
        
        if(name=='' && $('#name_anonymously').is(":checked") == false)
        {
          alert('Please Enter Your Name');
		  $("#name").css("border", "1px solid red");
          $( "#name" ).focus();
				$('html, body').stop().animate({ scrollTop: $('#name').offset().top -200}, 500);
          return false;
        }
		else if(quality_rating=='')
        {
          alert('Please Select Rating');
          $('input[name="qa_rating"]').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_quality').offset().top -200}, 500);
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
		
		else if(trust_rating=='')
        {
          alert('Please Select Rating');
          $('input[name="trust_rating"]').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_trust').offset().top -200}, 500);
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
		
		else if(time_rating=='')
        {
          alert('Please Select Rating');
          $('input[name="time_rating"]').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_delivery').offset().top -200}, 500);
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
		
		else if(dream_rating=='')
        {
          alert('Please Select Rating');
          $('input[name="dream_rating"]').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_dream').offset().top -200}, 500);
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
		
		else if(focus_rating=='')
        {
          alert('Please Select Rating');
          $('input[name="focus_rating"]').focus();
		  $('html, body').stop().animate({ scrollTop: $('#id_focus').offset().top -200}, 500);
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
		
        else if (client_ref == 'Yes' && (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)){  
          alert("Please enter a valid e-mail address ");  
          $( "#email" ).focus();
		  $("#email").css("border", "1px solid red");
		  $('html, body').stop().animate({ scrollTop: $('#email').offset().top -200}, 500);
          return false;  
          } 
        else if (client_ref == 'Yes' && phone=='')
        {
          alert('Please Enter Phone Number');
          $( "#phone" ).focus();
		  $("#phone").css("border", "1px solid red");
		  $('html, body').stop().animate({ scrollTop: $('#phone').offset().top -200}, 500);
          return false;
        }
        else if(subject=='')
        {
          alert('Please Enter Subject');
          $( "#subject" ).focus();
          return false;
        }
        else {
          $.post('/ajax',{
		  name: name, email:email, subject:subject, qa_rating:quality_rating, improvements:improvements_msg,
		  trust_rating:trust_rating, trusted:trust_msg,
		  time_rating:time_rating, time_msg:time_msg,
		  dream_rating:dream_rating, dream_proj:dream_msg,
		  focus_rating:focus_rating, focus_details:focus_msg,
		  page:'contact-us', phone:$('#phone').val()},
			function (data) {

               alert("We have recieved your feedback! Thank you");
               location.reload();
               
        });
        }

       });
     </script>




 