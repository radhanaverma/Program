<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>
<h2>Online Quiz (POST)</h2>
<form method="post" action="practical45.php">
    <!-- Q1 -->
    <p>1. PHP is a ______ language?</p>
    <input type="radio" name="q1" value="Scripting"> Scripting <br>
    <input type="radio" name="q1" value="Markup"> Markup <br>
    <input type="radio" name="q1" value="Styling"> Styling <br><br>
    <!-- Q2 -->
    <p>2. Which symbol is used to declare a variable in PHP?</p>
    <input type="radio" name="q2" value="$"> $ <br>
    <input type="radio" name="q2" value="@"> @ <br>
    <input type="radio" name="q2" value="#"> # <br><br>
    <!-- Q3 -->
    <p>3. Which function is used to display output in PHP?</p>
    <input type="radio" name="q3" value="echo"> echo <br>
    <input type="radio" name="q3" value="print_r"> print_r <br>
    <input type="radio" name="q3" value="printf"> printf <br><br>
    <input type="submit" name="submit" value="Submit Quiz">
</form>
<?php
if (isset($_POST['submit'])) {
    $score = 0;
    // Correct Answers
    if (!empty($_POST['q1']) && $_POST['q1'] == "Scripting") $score++;
    if (!empty($_POST['q2']) && $_POST['q2'] == "$") $score++;
    if (!empty($_POST['q3']) && $_POST['q3'] == "echo") $score++;

    echo "<h3>Your Score: $score / 3</h3>";
}
?>

</body>
</html>

