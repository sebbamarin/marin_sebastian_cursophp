<?php

include('db.php');

$id_coffee = $_GET['id_coffee'];

$query = "DELETE FROM coffee_list WHERE id_coffee = '$id_coffee'";

$result = mysqli_query($cnx, $query) or trigger_error(mysqli_error($cnx) . " " . $query);

mysqli_close($cnx);

header("Location: /admin/?ok=delete-product");
