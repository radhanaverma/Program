<?php
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington DC",
    "UK" => "London",
    "France" => "Paris",
    "Japan" => "Tokyo"];
$search = "Paris";
$key = array_search($search, $countries);
if($key !== false){
    echo "$search is capital of $key";
} else {
    echo "Not found!";
}
?>
