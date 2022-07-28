<?php include '../components/alerts.php'; ?>

<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../assets/img/favicon.ico">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Coffee Shop</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!-- CSS ============================================= -->
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
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
						<li class="menu-active"><a href="/">Inicio</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area" id="home">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-start">
				<div class="banner-content col-12">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Ingresa</h3>
							</div>
							<div class="modal-body">
								<form action="../cnx/login.php" method="POST">
									<!--  class="was-validated" -->
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="email" name="user_email" class="form-control" placeholder="Email" required>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="password" name="user_password" class="form-control" placeholder="Password" required>
											</div>
										</div>
									</div>
									<div>
										<p>No tienes cuenta aún ? <a class="text-info" href="/register/">Registrate aquí</a></p>
									</div>
									<div class="modal-footer">
										<a href="/" class="btn btn-secondary">Cancelar</a>
										<button type="submit" class="btn btn-info" name="login" value="login">Ingresar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="../assets/js/main.js"></script>
	<script src="../assets/js/superfish.min.js"></script>
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/vendor/bootstrap.min.js"></script>
</body>

</html>