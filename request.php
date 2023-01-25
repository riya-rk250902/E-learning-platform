<?php
$type = $_GET['type'];
if($type == 'success') {
  echo "<pre>";
  var_dump($_REQUEST);
  echo "<h1>Your Live Payment Successful</h1>";
} 
 
if($type == 'cancel') {
  echo "<h1>Your Payment Canceled(Sorry.!!!)</h1>";
}
?>