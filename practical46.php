
<?php
if(isset($_GET['name'])){
    $name = htmlspecialchars($_GET['name']);
    echo "Thank you $name, we will contact you soon!";
} else {
    echo "No name received!";
}
?>

