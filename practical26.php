<?php
$arr = [1,2,3,4,5,6];
echo"Original Array:";
print_r($arr);
echo"<br>Reverse Order:";
for($i=count($arr)-1; $i>=0;$i--){
    echo $arr[$i]."";
}
?>