<?php require('connect.php'); ?>

<?php


$sql = "INSERT INTO cars (brand_id, model, color, mileage) VALUES ('" . $_POST['brand_id'] . "','" . $_POST['model'] . "','" . $_POST['color'] . "','" . $_POST['mileage'] . "');";
$mysqli->query($sql);

header('Location: cars.php');


?>