<?php
include 'cnx.php';

$coffee_types = mysqli_query($cnx,"SELECT * FROM coffee_type");

mysqli_close($cnx);

?>