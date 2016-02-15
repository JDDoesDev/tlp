<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_jobI7IsAlmUoKra3Pct6i5O5",
  "publishable_key" => "pk_test_pM9P2F8GMvevSyLihA9i37uC"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
