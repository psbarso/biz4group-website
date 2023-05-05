<?php 

function timezone_list() {
    static $timezones = null;

    if ($timezones === null) {
        $timezones = [];
        $offsets = [];
        $now = new DateTime('now', new DateTimeZone('UTC'));

        foreach (DateTimeZone::listIdentifiers() as $timezone) {
            $now->setTimezone(new DateTimeZone($timezone));
            $offsets[] = $offset = $now->getOffset();
            $timezones[$timezone] =  format_timezone_name($timezone).' (' . format_GMT_offset($offset) . ') ' ;
        }

        array_multisort($offsets, $timezones);
    }
	return $timezones;
}

function format_GMT_offset($offset) {
    $hours = intval($offset / 3600);
    $minutes = abs(intval($offset % 3600 / 60));
    return 'GMT' . ($offset ? sprintf('%+03d:%02d', $hours, $minutes) : '');
}

function format_timezone_name($name) {
    $name = str_replace('/', ', ', $name);
    $name = str_replace('_', ' ', $name);
    $name = str_replace('St ', 'St. ', $name);
    return $name;
}
$array_timezone_list = timezone_list();
$array_time_list = array('06:00','06:30','07:00','07:30','08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30');
$default_timezone = ' -- Select Timezone -- ';

include_once("header.php");

 ?>	
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	
	<div class="inner-banner" style="background-image:url(images/contact-bg.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="inner-banner-content">
						<h1>Book an Appointment</h1>
						<ul>
						<li><a href="<?php echo SITE_URL;?>">Home</a></li>
						<li>Book an Appointment</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<section class="contact-form book-appointment">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="book-appointment-form-m">
						<?php 
							if(isset($_SESSION['bookAppointment']) && $_SESSION['bookAppointment'])
							{
							?>
							<div style="color:green; font-size:20px;"> 
							Thank you. our representative will contact you.
							</div>
						<?php		
							}
							unset($_SESSION['bookAppointment']);
						?>
						
						<form method="post"  id="frm_book_appointment" >
							<div class="form-group">
								<div class="row">
									<div class="col-md-4 col-sm-4">
									<span>Timezone</span>
									<label>
									<select id="timezone" name="timezone" required>
										<option> -- Select Timezone -- </option>
										<?php
										foreach($array_timezone_list as $k=>$v)
										{
											$selected='';
											if($default_timezone == $k)
											{
												$selected='selected="selected"';
											}
											echo '<option '.$selected.' value="'.$k.'">'.$v.'</option>';
										}
										?>
									</select>
									</label>
									</div>
									<div class="col-md-4 col-sm-4">
									<span>Date</span>
									<input type="text" id="datepicker" name="date" required>
									</div>
									<div class="col-md-4 col-sm-4">
									<span>Time</span>
									<label>
									<select id="time" name="time" required>
										<option value=""> -- Select -- </option>
									</select>
									</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4 col-sm-4">
									<span>Name</span>
									<input name="cname" type="text" value="" placeholder="" required>
									</div>
									<div class="col-md-4 col-sm-4">
									<span>Email</span>
									<input name="email" type="email" value="" placeholder="" required>
									</div>
									<div class="col-md-4 col-sm-4">
									<span>Phone Number</span>
									<input name="phoneNo" type="number" value="" placeholder="" required>
									</div>
								</div>
							</div>
							<div class="form-group">
							<div class="row">
								<div class="col-md-12">
								<span>Message</span>
								<textarea name="message" required></textarea>
								</div>
							</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-12 col-sm-12">
                                    	<div class="g-recaptcha" data-sitekey="6LewlmAUAAAAAMcsYc6TqiCFI-AYoOTPHz0wwCQB" id="contact_recaptcha" ></div>
									</div>
								</div>
							</div>
							
							<div class="form-group appointment-btn-center">
							<input type="hidden" name="ajax_call" value="bookAppointment">
							<button type="submit" name="submit" id="btn-validate" style="margin-top: 22px;">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php
require_once('includes/footer.php');
?>	
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://s3-biz4intellia.s3.amazonaws.com/js/moment.js"></script>
<script src="https://s3-biz4intellia.s3.amazonaws.com/js/moment-timezone-with-data.min.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({ minDate: +0, maxDate: "+4M +10D", dateFormat: 'yy-mm-dd' });
	$( "#datepicker" ).datepicker("setDate","1d");
	
	$('#datepicker').change(function(){
		getTime();
	});
	$('#timezone').change(function(){
		getTime();
	});
	function getTime()
	{
		$( "#time" ).html('<option value=""> -- Select -- </option>');
		var array_time_list = '<?php echo json_encode($array_time_list);?>';
		array_time_list = JSON.parse(array_time_list);
		for(var i=0; i < array_time_list.length; i++)
		{
			var dt = $( "#datepicker" ).val() + ' ' + array_time_list[i];
			option_date = moment.tz(dt, '<?php echo $default_timezone;?>').tz($("#timezone").find(":selected").val()).format('h:mm A');
			$( "#time" ).append('<option value="'+option_date+'">'+option_date+'</option>');
		}
	}
	getTime();
	
  });
 jQuery().ready(function() {
	jQuery("#frm_book_appointment").validate({  
		submitHandler: function(form) {
			var response = grecaptcha.getResponse();
			 
			  if (response.length === 0) { 
				
				  alert("Invalid Captcha!!! , please try again later.");
				
			  } 
			  else {
					data_form = jQuery("#frm_book_appointment").serializeArray();
					jQuery.ajax({
					url: "<?php echo $_SERVER['REQUEST_URI'];?>",
					type: "POST",		
					data: data_form,
					success: function (html) {
							var obj = jQuery.parseJSON(html);
							if(obj.error=="")
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


 