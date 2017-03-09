<?php require('connect.php'); ?>

<?php


$sql = "DELETE FROM cars WHERE id=" . $_GET['id'] . ";";
$mysqli->query($sql);

header('Location: cars.php');


?>