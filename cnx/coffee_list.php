<?php
include 'db.php';

$query = mysqli_query($cnx, "SELECT * FROM coffee_list ORDER BY id_coffee DESC");

$coffee_list = array();

while ($row = mysqli_fetch_array($query)) {
  $coffee_list[] = $row;
}

mysqli_close($cnx);

?>