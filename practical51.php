<?php
if(!isset($_COOKIE['discountOffer'])){
  setcookie("discountOffer","active",time() + 600, "/");
  echo "<h2>Welcome! You get 10% off (valid for 10 minutes).</h2>";
}else{
    echo "<h2>Sorry! The 10% discount offer has expired.</h2>";
}
?>