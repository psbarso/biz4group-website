<!-- Request a Quote modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      	<div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body" style="background-image:url(<?php echo SITE_URL;?>images/clutch-bg-landing.jpg);">
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

<!-- Request a Quote modal -->