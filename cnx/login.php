<?php

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

if ($_SERVER['HTTP_HOST'] === 'cursophp.test') {
  $cnx = mysqli_connect("localhost", "root", "", "cursophp") or exit("Error en la conexion");
} else {
  $cnx = mysqli_connect("localhost", "c2061385_cursoph", "50vaDUsagi", "c2061385_cursoph") or exit("Error en la conexion");
}

$query = mysqli_query($cnx, "SELECT user_email, user_password FROM users WHERE (user_email = '$user_email' AND user_password = '$user_password')");

mysqli_close($cnx);

header("Location: /?l=ok");
