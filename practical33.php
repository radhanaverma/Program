<?php
$students = [
    "Ravi"=>85,
    "Aman"=>90,
   "Sita"=>88];

if(array_key_exists("Ravi", $students)){
    echo "Key 'Ravi' exists.";
} else {
    echo "Key 'Ravi' does not exist.";
}
?>

