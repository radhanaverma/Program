<?php
//URL Example: result.php?marks=45
$marks=$_GET['marks'];
if($marks>=40)
{
    echo"Pass Marks:$marks";
}else{
    echo"Fail Marks:$marks";
}
?>