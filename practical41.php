<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=="admin" && $password==="12345"){
        echo"<h3>Login successful!</h3>";
    }else{
        echo"<h3>Invalid username or password</h3>";
    }
}else{
    echo"Please login first";
}
?>