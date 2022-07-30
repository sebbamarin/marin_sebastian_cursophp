<?php session_start(); ?>

<?php include 'cnx/db.php'; ?>

<?php
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  $q = "SELECT * FROM users WHERE id_user='$user_id'";
  $r = mysqli_query($cnx, $q) or die(mysqli_error($cnx));
  $r = mysqli_fetch_array($r);
  $user_name = $r['user_name'];
}
?>

<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="utf-8" />
  <!-- Site Title -->
  <title>Coffee Shop</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <!-- CSS ============================================= -->
  <link rel="stylesheet" href="../assets/css/linearicons.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/magnific-popup.css">
  <link rel="stylesheet" href="../assets/css/nice-select.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <header id="header" id="home">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="/"><img src="../assets/img/logo.png" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#home">Inicio</a></li>
            <li><a href="#about">Conocenos</a></li>
            <li><a href="#coffee">Carta</a></li>
            <li><a href="#review">Nos recomiendan</a></li>
            <li><a href="#blog">Blog</a></li>
            <?php if (!isset($user_name)) : ?>
              <li><a href="/login">Ingresa</a></li>
            <?php else : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $user_name; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php if ($_SESSION['user_rol'] == '1') : ?>
                    <a class="dropdown-item" href="/admin/">Admin</a>
                  <?php endif; ?>
                  <a class="dropdown-item" href="#">Editar</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/cnx/logout.php"><span class="lnr lnr-exit"></span> Salir</a>
                </div>
              </li>
            <?php endif; ?>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header><!-- #header -->