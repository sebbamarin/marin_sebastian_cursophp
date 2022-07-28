<?php include '../cnx/coffee_list.php'; ?>

<?php include '../cnx/coffee_type_list.php'; ?>

<?php include '../components/alerts.php'; ?>

<?php include '../cnx/db.php'; ?>

<?php
session_start();

if (!isset($_SESSION['user_id']) || ($_SESSION['user_rol'] !== '1')) {
	header('Location: /login/');
	exit;
} else {
	$user_id = $_SESSION['user_id'];
	$q = "SELECT * FROM users WHERE id_user='$user_id'";
	$r = mysqli_query($cnx, $q) or die(mysqli_error($cnx));
	$r = mysqli_fetch_array($r);
	$user_name = $r['user_name'];
	$user_email = $r['user_email'];
}
?>

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
	<link rel="stylesheet" href="../assets/css/linearicons.css">
	<style>

		.del-product i {
			font-size: 1.125rem;
			font-weight: 600;
			color: darkred;
			cursor: pointer;
			transition: 0.3s all ease;
		}

		.del-product:hover i {
			font-size: 1.25rem;
		}

		textarea {
			outline: 0;
			padding: 0.5rem 0.75rem;
			color: #495057;
			border: 1px solid #ced4da;
			border-radius: 0.25rem;
			appearance: none;
		}
	</style>
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
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?= $user_name; ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Editar</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../cnx/logout.php"><span class="lnr lnr-exit"></span> Salir</a>
							</div>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area" id="home">
		<div class="px-4 px-sm-5">
			<div class="fullscreen d-flex align-items-center">
				<div class="d-flex flex-wrap align-items-start justify-content-around" style="height: 80vh;">
					<!-- LIST -->
					<div class="coffee-list-admin col-12 col-md-12 col-lg-8 h-100 d-flex flex-wrap align-items-stretch justify-content-start mb-4 mb-lg-0 p-0 p-lg-3 rounded order-1 order-lg-0">
						<?php foreach ($coffee_list as $coffee) : ?>
							<div class="col-12 col-md-6 col-xl-4 p-2">
								<div class="single-menu mb-4 pt-3 px-3 pb-0">
									<div class="title-div d-flex justify-content-between pb-1">
										<?php
										$type = $coffee['coffee_type'];
										$type_coffee = mysqli_query($cnx, "SELECT coffee_type_name FROM coffee_type WHERE id_coffee_type = '$type'");
										$type_coffee = $type_coffee->fetch_assoc();
										?>
										<h4><?= $coffee['coffee_name']; ?> - <span class="text-dark font-weight-light font-italic"><?= $type_coffee['coffee_type_name']; ?></span></h4>
										<p class="price">
											$ <?= $coffee['coffee_price']; ?>
										</p>
										<a class="del-product" onclick="window.confirm('Desea eliminar <?= $coffee['coffee_name']; ?> ?') ? window.location.href='../cnx/del_coffee.php?id_coffee=<?= $coffee['id_coffee']; ?>' : '' ">
											<i class="lnr lnr-trash"></i>
										</a>
									</div>
									<p>
										<?= $coffee['coffee_description']; ?>
									</p>
								</div>

							</div>
						<?php endforeach; ?>
					</div>
					<!-- FORM ADD COFFEE -->
					<div class="col-12 col-sm-10 col-md-8 col-lg-4 col-xl-3 p-0 px-md-3 px-xl-0 mb-4 mb-lg-0 order-0 order-lg-1">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Agrega un Café</h3>
							</div>
							<div class="modal-body">
								<form action="../cnx/add_coffee.php" method="POST">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="coffee_name" class="form-control" placeholder="Nombre del café" required>
											</div>
										</div>
										<div class="col-lg-12">
											<select class="custom-select" name="coffee_type">
												<option selected disabled hidden>Selecciona el tipo</option>
												<?php foreach ($coffee_types as $type) : ?>
													<option value="<?= $type['id_coffee_type']; ?>"><?= $type['coffee_type_name']; ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="col-lg-12">
											<div class="form-group mt-4">
												<textarea name="coffee_description" class="w-100" placeholder="Ingresa una descripción"></textarea>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="number" name="coffee_price" class="form-control" placeholder="Precio del café" required>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<input type="text" name="coffee_properties" class="form-control" placeholder="Propiedades del café">
											</div>
										</div>
										<div class="col-lg-12 d-none">
											<div class="form-group">
												<input type="text" name="coffee_created_by" class="d-none" value="<?= $user_email; ?>">
											</div>
										</div>
									</div>
									<div class="modal-footer px-0">
										<button type="submit" class="btn btn-info">Agregar</button>
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