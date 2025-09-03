<?php
$arr = array(40, 10, 70, 20, 90, 50);
//Original Array
echo "<h2>Original Array</h2>";
print_r($arr);
echo "<br><br>";

// sort() - Ascending order (small to large) 
$asc = $arr;
sort($asc);
echo "<b>Using sort() - Ascending:<b><br>";
print_r($asc);
echo "<br><br>";

// rsort() Descending order (large to small)
$desc = $arr;
rsort($desc);
echo "<b>Using rsort() - Descending:<b><br>";
print_r($desc);
echo "<br><br>";

//asort() - Ascending order but maintains index association 
$as = $arr;
asort($as);
echo "<b>Using asort() - Ascending with index:<b><br>";
print_r($as);
echo "<br><br>";

//arsort() - Descending order but maintains index association 
$ars = $arr;
arsort($ars);
echo "<b>Using arsort() - Descending with index:<b><br>";
print_r($ars);
echo "<br><br>";

//ksort() - Sort array by keys in Ascending order
$ks = array("d"=>4, "b"=>2, "a"=>1, "c"=>3);
ksort($ks);
echo "<b>Using ksort() - Sort by Keys Ascending:<b><br>";
print_r($ks);
echo "<br><br>";

//krsort() - Sort array by keys in Descending order 
$krs = array("d"=>4, "b"=>2, "a"=>1, "c"=>3);
krsort($krs);
echo "<b>Using krsort() - Sort by Keys Descending:<b><br>";
print_r($krs);
echo "<br><br>";

//natsort() - Natural order sorting 
$nat = array("img12.png", "img10.png", "img2.png", "img1.png");
natsort($nat);
echo "<b>Using natsort() - Natural Sorting:<b><br>";
print_r($nat);
echo "<br><br>";

//natcasesort() → Natural order sorting (case insensitive) 
$natc = array("a1", "A2", "A10", "A20");
natcasesort($natc);
echo "<b>Using natcasesort() - Natural Case-insensitive Sorting:<b><br>";
print_r($natc);
echo "<br><br>";
?>
