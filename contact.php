<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'jflynn8@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail:' .  $field_email . " \n";
$body_message .= 'Message: '.$field_message;

$headers = "From: contact@opendoorcoworking.com \n";
$headers .= "Reply-To: contact@opendoorcoworking.com \n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
  <script language="javascript" type="text/javascript">
    alert('Thank you for the message. We will contact you shortly.');
    window.location = 'index.html';
  </script>
<?php
}
else { ?>
  <script language="javascript" type="text/javascript">
    alert('Message failed. Please, send an email to jd@jamesdflynn.com');
    window.location = 'index.html';
  </script>
<?php
}
?>
