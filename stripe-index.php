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
		<title>ReactJS eCommerce Solution Provider Company in USA</title>
		<meta name="Title" content="ReactJS eCommerce Solution Provider Company in USA" />
		<meta name="Description" content="Hire react js, node js expert developers for best eCommerce website development. Get your complete ecom solution within 5-7 weeks." />
    	<meta property="og:url" content="<?php echo SITE_URL; ?>ecommerce-development"/>
		<meta property="og:title" content="ReactJS eCommerce Solution Provider Company in USA"/>
		<meta property="og:site_name" content="Biz4Group"/>
		<meta property="og:description" content="Hire react js, node js expert developers for best eCommerce website development. Get your complete ecom solution within 5-7 weeks."/>
		<meta property="og:type" content="<?php echo SITE_URL; ?>ecommerce-development"/>
		<meta property="og:image" content=" <?php echo SITE_URL; ?>images/ecommerce-site-development/Banner.jpg"/>
		<meta property="og:locale" content="en_us"/>
		<meta name="twitter:card" content="summary"/>
		<meta name="twitter:url" content=" <?php echo SITE_URL; ?>ecommerce-development"/>
		<meta name="twitter:creator" content="@biz4group"/>
		<meta name="twitter:title" content="ReactJS eCommerce Solution Provider Company in USA"/>
		<meta name="twitter:description" content="Hire react js, node js expert developers for best eCommerce website development. Get your complete ecom solution within 5-7 weeks."/>
		<meta name="twitter:image" content=" <?php echo SITE_URL; ?>images/ecommerce-site-development/Banner.jpg"/>
		<!--menu-->
		<!-- CORE CSS -->
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>images/favicon.png">
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/bootstrap.min.css?ver=2" media="all" async>
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/style.css" >
		<link rel="stylesheet" href="<?php echo SITE_URL;?>css/stripe-style.css" >
        <link rel="stylesheet" href="<?php echo SITE_URL;?>css/ecommerce-site-development-new.css?ver=2" >
        <link rel="stylesheet" href="<?php echo SITE_URL;?>css/font-awesome.css?ver=1"  media="print" onload="this.media='all'">
		<link rel="preload" href="<?php echo SITE_URL;?>fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" crossorigin>
		<link rel="preload" href="<?php echo SITE_URL;?>fonts/fontawesome-webfont.woff?v=4.7.0" as="font" crossorigin>


		<script type='text/javascript'> 
		//<![CDATA[ 
		function loadCSS(e, t, n) { 
			"use strict"; 
			var i = window.document.createElement("link"); 
			var o = t || window.document.getElementsByTagName("script")[0]; 
			i.rel = "stylesheet"; i.href = e; i.media = "only x"; 
			o.parentNode.insertBefore(i, o); 
			setTimeout(function () { i.media = n || "all" }) 
		}
		//loadCSS("<?php echo SITE_URL;?>css/bootstrap.min.css"); 
		//loadCSS("<?php echo SITE_URL;?>css/style.css"); 
		loadCSS("<?php echo SITE_URL; ?>css/font-awesome.min.css"); 
		loadCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"); 
		//]]> 
		</script>
</head>
<body>


 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3GQ7ZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--header-menu-->
<?php include_once("includes/header.php");
 ?>
<!--header-menu-->
<!--menu-->
  <div class="container">
  <div class="stripe-main">
 <!-- card element goes here-->
<form id="payment-form" data-secret="" class="stripe-form">
  <div class="field-row">
        <label>Card Holder Name</label> <span id="card-holder-name-info" class="info"></span><br> 
        <input type="text" id="fullname" name="fullname" class="demoInputBox" required>
    </div><br>
    <div class="field-row">
        <label>Email</label> <span id="email-info" class="info"></span><br>
        <input type="email" id="email" name="email" class="demoInputBox" required>
    </div><br>
    <div class="field-row">
        <label>Amount</label> <span id="amount-info" class="info"></span><br>
        <input type="number" id="amount" step=".01" max="10000000" name="amount" class="demoInputBox" required>
    </div><br>
  <div id="card-element">
    <!-- Elements will create input elements here -->
  </div>

  <!-- We'll put the error messages in this element -->
  <div id="card-errors" role="alert"></div>

  
  <button id="card-button">Pay</button>
  <br/><br/>
  <div id="card-success" style="color:green"></div>
</form>
    </div>
  </div>
 
<script>
  // Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/apikeys
var stripe = Stripe('');
var elements = stripe.elements();

// Set up Stripe.js and Elements to use in checkout form
var style = {
  base: {
    color: "green",
  }
};

var card = elements.create("card", { style: style });
card.mount("#card-element");

card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

var form = document.getElementById('payment-form');
form.addEventListener('submit', function(ev) {
  var fullname = document.getElementById('fullname').value;
  var email = document.getElementById('email').value;
  ev.preventDefault();
  // If the client secret was rendered server-side as a data-secret attribute
  // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
  stripe.confirmCardPayment(form.dataset.secret, {
    payment_method: {
      card: card,
      billing_details: {
        name: fullname,
        email: email
      }
    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer (e.g., insufficient funds)
      alert(result.error.message);
    } else {
      // The payment has been processed!
      if (result.paymentIntent.status === 'succeeded') {
        // Show a success message to your customer
        // There's a risk of the customer closing the window before callback
        // execution. Set up a webhook or plugin to listen for the
        // payment_intent.succeeded event that handles any business critical
        // post-payment actions.
        // alert('The payment has been proccessed');
        document.getElementById('card-success').innerHTML = "The payment has been proccessed";
        // location.reload();
      }
    }
  });
});

$("#amount").mouseout(function() {
  var amount = document.getElementById('amount').value;
    $.ajax({
        url:"stripe_ajax.php",    //the page containing php script
        type: "post",    //request type,
        dataType: 'text',
        data: {amount: amount*100},
        success:function(data){
          document.getElementById('payment-form').dataset.secret = data;
          
          // console.log('result',data);
        }
    });
  });

</script>
<!--footer-menu-->
<?php include_once("includes/footer-menu.php");
 ?>
 <!--footer-menu-->
</body>
</html>
