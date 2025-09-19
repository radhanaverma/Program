<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    header("Location: practical44.html?name=" . urlencode($name));
    exit();
}
if (isset($_GET['name'])) {
    $student = $_GET['name'];
    echo "<h2>Thank you, $student! Your feedback has been submitted.</h2>";
}




