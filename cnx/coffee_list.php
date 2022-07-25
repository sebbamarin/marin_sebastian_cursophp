<?php
include 'cnx.php';

$query = mysqli_query($cnx,"SELECT * FROM coffee_list");

mysqli_close($cnx);

?>