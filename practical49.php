<?php
if(isset($_COOKIE['visitCount'])){
    $count=$_COOKIE['visitCount']+1;
    setcookie("visitCount",$count,time()+86400,"/");
    echo"You have visited " . $count. " times.";
}else{
    setcookie("visitCount",1,time()+86400,"/");
    echo"This is your first visit!";
}
?>