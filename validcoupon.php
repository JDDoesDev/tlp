<?php require_once('./config.php'); ?>
<?php header("Content-Type: application/json", true);?>
<?php
$code = $_POST['code'];
if (is_ajax()) {
  if (isset($_POST['code'])) {
    $coupon_code = $_POST['code'];
    try {
      $coupon = \Stripe\Coupon::retrieve($coupon_code);
      if ($coupon !== NULL) {
        $result = "Valid coupon code";
      }
    } catch (Exception $e) {
      $message = $e->getMessage();
      $result = "Invalid coupon code";
    }
  echo json_encode($result);
  }
  else {
    echo json_encode("we got none");
  }
}
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
