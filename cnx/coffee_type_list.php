<?php
include 'db.php';

$query = mysqli_query($cnx,"SELECT * FROM coffee_type");

$coffee_types = array();

while ($row = mysqli_fetch_array($query)) {
  $coffee_types[] = $row;
}

mysqli_close($cnx);

?>