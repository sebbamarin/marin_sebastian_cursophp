<?php include '../cnx/coffee_list.php'; ?>
<?php include '../cnx/coffee_type_list.php'; ?>
<?php include '../cnx/cnx.php'; ?>
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
			<div class="fullscreen d-flex align-items-center">
				<div class="d-flex flex-wrap align-items-start justify-content-center" style="height: 80vh;">
					<div class="col-12 col-md-7 h-100 py-3 rounded" style="overflow: auto; background-color: #ffffff55;">
						<?php while ($coffee = $query->fetch_assoc()) : ?>
							<div class="single-menu mb-4 p-3" style="height: auto !important;">
								<div class="title-div justify-content-between d-flex pb-1">
									<?php
									$type = $coffee['coffee_type'];
									$type_coffee = mysqli_query($cnx, "SELECT coffee_type_name FROM coffee_type WHERE id_coffee_type = '$type'");
									$type_coffee = $type_coffee->fetch_assoc();
									?>
									<h4><?= $coffee['coffee_name']; ?> - <span class="text-dark"><?= $type_coffee['coffee_type_name']; ?></span></h4>
									<p class="price float-right">
										$ <?= $coffee['coffee_price']; ?>
									</p>
								</div>
								<p>
									<?= $coffee['coffee_description']; ?>
								</p>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="col-12 col-md-5">
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
												<option selected>Selecciona el tipo</option>
												<?php while ($type = $coffee_types->fetch_assoc()) : ?>
													<option value="<?= $type['id_coffee_type']; ?>"><?= $type['coffee_type_name']; ?></option>
												<?php endwhile; ?>
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
												<input type="text" name="coffee_properties" class="form-control" placeholder="Propiedades del café" required>
											</div>
										</div>
									</div>
									<div class="modal-footer">
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
</body>

</html>