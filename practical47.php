<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation
    if(empty($username) || empty($email) || empty($password)){
        echo " Error: All fields are required!";
    } else {
        echo "<h3> Registration Successful!</h3>";
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: (Not displayed for security)";
    }
} else {
    echo "Invalid Request!";
}
?>