<?php
$fruits = ["Apple"=>120, "Banana"=>50, "Mango"=>80, "Orange"=>60];
echo "Original Array:<br>";
print_r($fruits);
asort($fruits);
echo "<br><br>Sorted by Values (asort):<br>";
print_r($fruits);
ksort($fruits);
echo "<br><br>Sorted by Keys (ksort):<br>";
print_r($fruits);
?>
