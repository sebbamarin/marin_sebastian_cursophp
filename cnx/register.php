<?php

$user_name = $_POST['user_name'];
$user_lastname = $_POST['user_lastname'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];
$user_password = $_POST['user_password'];

if ($_SERVER['HTTP_HOST'] === 'cursophp.test') {
  $cnx = mysqli_connect("localhost", "root", "", "cursophp") or exit("Error en la conexion");
} else {
  $cnx = mysqli_connect("localhost", "c2061385_cursoph", "50vaDUsagi", "c2061385_cursoph") or exit("Error en la conexion");
}

mysqli_query($cnx,"INSERT INTO users (user_name, user_lastname, user_email, user_phone, user_password) VALUES ('$user_name', '$user_lastname', '$user_email', '$user_phone', '$user_password')");

mysqli_close($cnx);

header("Location: /?r=ok");
