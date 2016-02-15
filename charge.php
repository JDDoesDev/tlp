<?php
  require_once('./config.php');
  $coupon_attempt = FALSE;
  $coupon_verified = FALSE;
  $token  = $_POST['stripeToken'];
  $plan  = $_POST['plan'];
  $email  = $_POST['stripeEmail'];
  $cost = $_POST['cost'];
  if ($plan && strlen($plan) > 4) {
    if (isset($_POST['coupon']) && strlen($_POST['coupon']) > 0) {
      $coupon_code = $_POST['coupon'];
      $coupon_attempt = TRUE;
      try {
        $coupon = \Stripe\Coupon::retrieve($coupon_code);
        if ($coupon !== NULL) {
          $coupon_verified = TRUE;
          $discount = $coupon['amount_off'];
          $discount = substr($discount, 0, -2);
          $cost = $cost - $discount;
        }
      } catch (Exception $e) {
        $message = $e->getMessage();
        echo "Sorry, that wasn't a valid coupon code";
        $coupon_verified = FALSE;
      }
    }
  var_dump($coupon_verified);
    if ($coupon_verified == TRUE) {
      $customer = \Stripe\Customer::create(array(
        "source" => $token,
        "plan" => $plan,
        "email" => $email,
        "coupon" => $coupon_code,
      ));
      echo "<h1>Successfully charged for \$$cost!</h1>";
    }
    elseif ($coupon_attempt == TRUE && $coupon_verified == FALSE) {
      echo "Coupon code invalid <a href='/stripe.php'>Try again?</a>";
    }
    else {
      $customer = \Stripe\Customer::create(array(
        "source" => $token,
        "plan" => $plan,
        "email" => $email,
      ));
    echo "<h1>Successfully charged for \$$cost!</h1>";
    }
  }
  else {
    echo "<h1>You didn't select a plan!  <a href='/stripe.php'>Try again?</a>";
  }
?>
