<?php

include 'db.php';

if (isset($_POST['register'])) {
  $user_name = $_POST['user_name'];
  $user_lastname = $_POST['user_lastname'];
  $user_email = $_POST['user_email'];
  $user_phone = $_POST['user_phone'];
  $user_password = $_POST['user_password'];
  $user_password_hash = password_hash($user_password, PASSWORD_BCRYPT);
  $user_rol = 2;

  $check_email = mysqli_query($cnx, "SELECT * FROM users WHERE user_email = '$user_email'");

  if (mysqli_num_rows($check_email) > 0) {
    header("Location: /register/?error=email");
  } else {
    $query = "INSERT INTO users (user_name, user_lastname, user_email, user_phone, user_password, user_rol) VALUES ('$user_name', '$user_lastname', '$user_email', '$user_phone', '$user_password_hash', '$user_rol')";
    $result = mysqli_query($cnx, $query);
    if ($result) {
      header("Location: /login/?ok=register");
    } else {
      header("Location: /register/?error=register");
    }
  }

  mysqli_close($cnx);
}	
