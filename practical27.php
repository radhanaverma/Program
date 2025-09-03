<?php
$arr=[20,40,30,10,80,70];
$asc=$arr;
sort($asc);
$desc=$arr;
rsort($desc);
echo"Original:";
print_r($arr);
echo"<br>Ascending:";
print_r($asc);
echo"<br>Descending:";
print_r($desc);
?>

