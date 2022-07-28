<?php
include 'db.php';

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];
$user_comment = $_POST['user_comment'];

$mail_body = "Nombre: " . $user_name . "\n"
  . "Email: " . $user_email . "\n"
  . "Telefono: " . $user_phone . "\n"
  . "Comentario: " . $user_comment . "\n";

mail($user_email, "Copia de mensaje de Smarin.online", $mail_body);

$query = "INSERT INTO contact_users (user_name, user_email, user_phone, user_comment) VALUES ('$user_name', '$user_email', '$user_phone', '$user_comment')";

$result = mysqli_query($cnx, $query);

if ($result) {
  header("Location: /?ok=comment");
} else {
  header("Location: /?error=comment");
}

mysqli_close($cnx);