<?php
require 'stripe-php-master/init.php';
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('');
$intent = \Stripe\PaymentIntent::create(['amount' => $_REQUEST['amount'], 'currency' => 'usd',
// Verify your integration in this guide by including this parameter
'metadata' => ['integration_check' => 'accept_a_payment'], ]);

echo trim($intent->client_secret);

?>