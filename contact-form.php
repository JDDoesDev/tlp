<?php $title = "Contact Us | Open Door Coworking LaPorte County's Coworking Space"; ?>
<?php include 'includes/header.inc'; ?>
<div class="header-parallax not-front" data-stellar-background-ratio="0.5">
  <div class="slidersection">
    <div class="overlay">
      <div class="center fixed-content">
        <div class="center-fix">
          <h1 class="underline animated fadeInDown">CONTACT OPEN <strong>DOOR</strong> COWORKING</h1>
          <!-- <h4 class="animated fadeInUp delay-05s" style="margin-bottom: 10px;">Work. <strong class="green">Together.</strong></h4> -->
          <p>
            We're looking forward to hearing from you.  Got questions, suggestions, or an awesome recipe for a smoothie?  Let us know!
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="contact">
  <div class="row-back"  data-stellar-background-ratio="0.5">
    <div class="w-container wrap">
      <div class="center">
        <h1 class="underline">GET IN TOUCH</h1>
        <p>
          Are you ready to schedule your tour of coworking at <strong>OPEN DOOR COWORKING</strong> or do you have other questions?
          <br/>
          Either call <a href="tel:+12195610219">219-561-0219</a>, fill out the contact form, or just <a href="http://goo.gl/forms/ook9usnqsn" target="_blank" onclick="ga('send', 'event', 'menu', 'Click', 'Tour');">schedule a tour.</a>
        </p>
        <div class="social-footter" style="display:none;">
          <i class="facebookelegance-icons-"></i>
          <i class="twitter-birdelegance-icons-"></i>
          <i class="linkedinelegance-icons-"></i>
        </div>
        <div class="w-form">
          <div class="form-messages"></div>
          <form action="/contact.php" method="post" id="ajax-contact">
            <label for="name"></label>
            <input class="w-input" type="text" id="name" placeholder="Enter your name" name="cf_name">
            <label for="email"></label>
            <input class="w-input" placeholder="Enter your email address" type="text"  id="email" name="cf_email" required="required">
            <label for="message"></label>
            <textarea class="w-input message" placeholder="Enter your Message Here" id="message" name="cf_message"></textarea>
            <br>
            <input type="hidden" name="page_version" value="page <?php print $version; ?>">
            <input class="button medium" type="submit" value="Send" onclick="ga('send', 'event', 'contact', 'Click', 'Contact Submit');">
          </form>
          <div class="w-form-done">
            <p>
              Thank you! Your submission has been received!
            </p>
          </div>
          <div class="w-form-fail">
            <p>
              Oops! Something went wrong while submitting the form :(
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.inc'; ?>
