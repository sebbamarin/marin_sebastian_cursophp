<?php

$cnx = mysqli_connect("localhost","root","","cursophp") or exit("Error en la conexion");

$query = mysqli_query($cnx,"SELECT * FROM coffee_list");

mysqli_close($cnx);

?>