<?php

include('db.php');

$query = "INSERT INTO coffee_list (coffee_name, coffee_type, coffee_description, coffee_price, coffee_properties, coffee_created_by) VALUES ('$_POST[coffee_name]', '$_POST[coffee_type]', '$_POST[coffee_description]', '$_POST[coffee_price]', '$_POST[coffee_properties]', '$_POST[coffee_created_by]')"; // $_POST is an array that contains the data from the form

$result = mysqli_query($cnx, $query)or trigger_error(mysqli_error($cnx)." ".$query);

mysqli_close($cnx);

header("Location: /admin/?ok=add-product");
