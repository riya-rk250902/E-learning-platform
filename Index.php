<?php
 require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- Include Your meta tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pakainfo.com - INTEGRATE PAYPAL PAYMENT GATEWAY IN PHP</title>
<!-- Include Your Script -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<!-- Include Your Body Content -->
<div class="panel panel-success">
<div class="panel-heading"><h3>Step By step Paypal Payment Gateway in PHP</h3></div>
<div class="panel-body">
<p class="bg-info" id="msg"></p>
<!-- Devloped by Pakainfo.com Your Body Content -->
 <form class="form-horizontal" role="form" id="paypalForm" method="post" action="<?php echo PAYPAL_URL; ?>">
 <!-- Devloped by Pakainfo.com Your Body Content -->
    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="cpp_header_image" value="">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://lab.iamrohit.in/paypal-php/request.php?type=cancel">
    <input type="hidden" name="return" value="http://lab.iamrohit.in/paypal-php/request.php?type=success">
<!-- Devloped by Pakainfo.com Your Body Content -->
  <div class="form-group">
    <label class="control-label col-md-2" for="amount">Amount:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="amount" placeholder="provide Amount"  value="10">
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-md-2" for="currency">Quantity:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="quantity" placeholder="provide Quantity" value="1" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2" for="currency">Currency:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="currency" placeholder="provide Currency Type" value="<?php echo CURRENCY; ?>" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2" for="description">Description:</label>
    <div class="col-md-10">
      <textarea class="form-control" name="item_name" placeholder="provide Description">My First Payment</textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="How to Set Up Paypal Payment Gateway Integration in PHP!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </div>
  </div>
</form>
</div>
</div>
<!-- Include Your Script -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>