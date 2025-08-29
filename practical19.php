<?php
$name = "XYZ";
$marks = array(40, 30, 45, 48, 34);
$maxMarks = array(50, 50, 50, 50, 50);

$totalMax = array_sum($maxMarks);
$totalObtained = array_sum($marks);
$percentage = ($totalObtained/$totalMax)*100;

if($percentage>=75){
    $status = "Passed";
    $remark = "With Distinction";
}elseif($percentage>=33){
    $status = "Passed";
    $remark = "----"; //No distinction
}else{
    $status = "Failed";
    $remark = "----";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            text-align: center;
            margin: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        h2 {
            text-align: center;
            color: darkblue;
        }
    </style>
</head>
<body>
    <table align="center">
        <tr>
            <th colspan="3">Name : <?= $name ?></th>
        </tr>
        <tr>
            <th>Subject Name</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
        </tr>
        <?php
        for($i=0; $i<5; $i++){
            echo "<tr>
                    <td>Sub".($i+1)."</td>
                    <td>".$maxMarks[$i]."</td>
                    <td>".$marks[$i]."</td>
                  </tr>";
        }
        ?>
        <tr>
            <th>Total</th>
            <th><?= $totalMax ?></th>
            <th><?= $totalObtained ?></th>
        </tr>
        <tr>
            <th>Percentage</th>
            <td colspan="2"><?= round($percentage,2) ?> %</td>
        </tr>
        <tr>
            <th>Result</th>
            <td><?= $status ?></td>
            <td><?= $remark ?></td>
        </tr>
    </table>
</body>
</html>

