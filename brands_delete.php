<?php require('connect.php'); ?>

<?php


$sql = "DELETE FROM brands WHERE id=" . $_GET['id'] . ";";
$mysqli->query($sql);

header('Location: brands.php');


?>