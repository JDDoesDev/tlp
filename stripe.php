<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <select name="plan" id="plan">
    <option value="">--- Select a plan ---</option>
    <option value="hotdesk" data-price="100">Hotdesk</option>
    <option value="reserved" data-price="200">Reserved Desk</option>
    <option value="office" data-price="325">Private Office</option>
  </select>
  <label for="coupon">Got a coupon code?  Enter it here!</label>
  <input type="text" id="coupon" name="coupon">
  <input type="button" id="test_coupon" name="test_coupon" value="Test coupon">
  <input type="hidden" name="cost" id="hiddenCost">
  <span id="valid-coupon"></span>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Monthly membership"
          data-billing-address="true"
          data-locale="auto"></script>
</form>

<script src="js/jquery.js"></script>

<script>
  $(function () {
    $('#plan').change(function(){
      var $this = $(this);
      var selected = $this.find('option:selected');
      $('#hiddenCost').val(selected.data('price'));
    })
    $('#test_coupon').click(function(e) {
      e.preventDefault();
      var couponCode = $('#coupon').val();
      var data = {
        code : couponCode
      };
      console.log(data);
      $.ajax({
        dataType: "json",
        url : "./validcoupon.php",
        type: "post",
        data: data,
        success: function(data) {
          console.log(data);
          $("#valid-coupon").html(data);
        }
      })
    })// end test_coupon
  })
</script>
