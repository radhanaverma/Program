<?php
// Check if form is submitted
if(isset($_POST['submit'])){
    if(!empty($_POST['language'])){
        $lang = $_POST['language'];
        echo "<h3>Your favorite programming language is: <u>$lang</u></h3>";
    } else {
        echo "<h3>Please select a language!</h3>";
    }
}
?>



