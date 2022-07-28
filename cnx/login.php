<?php

include 'db.php';

session_start();

if (isset($_POST['login'])) {

  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];

  $query = "SELECT * FROM users WHERE user_email='$user_email'";
  $result = mysqli_query($cnx, $query) or die(mysqli_error($cnx));
  $result = mysqli_fetch_array($result);

  if (!$result) {
    header("Location: /login/?error=login");
  } else {
    if (password_verify($user_password, $result['user_password'])) {
      $_SESSION['user_id'] = $result['id_user'];
      $_SESSION['user_rol'] = $result['user_rol'];
      if($_SESSION['user_rol'] === '1') {
        header("Location: /admin/");
      } else {
        header("Location: /");
      }
    } else {
      header("Location: /login/?error=login");
    }
  }

  mysqli_close($cnx);
}
