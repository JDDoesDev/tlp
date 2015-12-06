$(function () {
  var $form = $("#ajax-contact");
  var $messages = $('#form-messages');

  $form.submit(function(e) {
    e.preventDefault();
    var formData = $form.serialize();

    $.ajax({
      type: 'POST',
      url: $form.attr('action'),
      data: formData
    })

    .done(function(response) {
      console.log(response);
      // Make sure that the formMessages div has the 'success' class.
      $messages.addClass('success');
      $messages.show();
      $form.hide();
      // Set the message text.
      $messages.text(response);


      // Clear the form.
      $('#name').val('');
      $('#email').val('');
      $('#message').val('');
    })

    .fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $messages.addClass('error');
      $messages.show();
      $('#name').val('');
      $('#email').val('');
      $('#message').val('');

    // Set the message text.
      if (data.responseText !== '') {
          $messages.text(data.responseText);
      } else {
          $messages.text('Oops! An error occured and your message could not be sent.');
      }
    });
  });
});// end function
