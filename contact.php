<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];$version = $_POST['page-version'];

$mail_to = 'jd@opendoorcoworking.com';
$subject = 'Message from a site visitor: '.$field_name;

$body_message = 'From: '. $field_name."\n";
$body_message .= 'E-mail: ' . $field_email . " \n";
$body_message .= 'Message: '. $field_message . " \n";$body_message .= 'Version: '. $version;

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
    alert('Oops, something went wrong.  If it\'s not too much trouble, could you please send an email to jd@opendoorcoworking.com?');
    window.location = 'index.html';
  </script>
<?php
}
?>
