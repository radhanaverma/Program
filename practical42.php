<?php
    // Check whether form submitted or not
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;
        //  Perform operation
        if ($operation == "add") {
            $result = $num1 + $num2;
            echo "<h3>Result: $num1 + $num2 = $result</h3>";
        } elseif ($operation == "sub") {
            $result = $num1 - $num2;
            echo "<h3>Result: $num1 - $num2 = $result</h3>";
        } elseif ($operation == "mul") {
            $result = $num1 * $num2;
            echo "<h3>Result: $num1 × $num2 = $result</h3>";
        } elseif ($operation == "div") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "<h3>Result: $num1 ÷ $num2 = $result</h3>";
            } else {
                echo "<h3>Division by zero not allowed </h3>";
            }
        }
    }
    ?>