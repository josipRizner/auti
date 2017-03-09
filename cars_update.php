<?php require('connect.php'); ?>

<?php


$sql = "UPDATE cars SET brand_id='" . $_POST['brand_id'] . "', model='" . $_POST['model'] . "', color='" . $_POST['color'] . "' , mileage='" . $_POST['mileage'] . "' WHERE id=" . $_POST['id'] . ";";
$mysqli->query($sql);
//echo($sql);
header('Location: cars.php');
?>