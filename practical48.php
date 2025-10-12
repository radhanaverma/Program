<?php
if(isset($_POST['username'])){
    $name=$_POST['username'];
    setcookie("userName",$name,time()+86400,"/");
    echo"Hello, " .$name ."! Your name has been saved.<br>";
}else{
    if(isset($_COOKIE['userName'])){
   echo"Welcome back, " .$_COOKIE['userName'] . "!";

    }else{
        ?>
        <form method="post">
        Enter your Name:
        <input type="text" name="username">
        <input type="submit"value="submit">
        </form>
        <?php
    }
}
?>