<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Coffee Shop</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!-- CSS ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="#home">Inicio</a></li>
						<li><a href="#about">Conocenos</a></li>
						<li><a href="#coffee">Carta</a></li>
						<li><a href="#review">Nos recomiendan</a></li>
						<li><a href="#blog">Blog</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area" id="home">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-start">
				<div class="banner-content col-lg-7">
					<h6 class="text-white text-uppercase">Ahora puedes sentir la Energía</h6>
					<h1>
						Empieza tu día <br>
						con un Café
					</h1>
					<a href="#" class="primary-btn text-uppercase">Comprar ahora</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start video-sec Area -->
	<section class="video-sec-area pb-100 pt-40" id="about">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
					<div class="overlay overlay-bg"></div>
					<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-icon.png" alt=""></a>
				</div>
				<div class="col-lg-6 video-left">
					<h6>Conoce el proceso de como hacemos nuestro café.</h6>
					<h1>Creando<br>
						nuestro Café</h1>
					<p><span>Nosotros esperamos tu devolución</span></p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et
						dolore magna aliqua. Ut enim ad minim.
					</p>
					<img class="img-fluid" src="img/signature.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End video-sec Area -->

	<?php define('valueUnitCoffee', 100); ?>

	<!-- Start menu Area -->
	<section class="menu-area section-gap" id="coffee">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Qué tipo de Café te servimos?</h1>
						<p>Estamos enamorados del sistema ecológico.</p>
					</div>
				</div>
			</div>
			<div class="row" style="row-gap: 20px;">
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Cappuccino'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 2.5; ?>
							</p>
						</div>
						<p>
							Nacida en Italia, preparada con café expreso y leche montada con vapor para darle cremosidad.
							Se agrega cacao en polvo y/o canela.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Americano'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 1.8; ?>
							</p>
						</div>
						<p>
							Se diluye el café espresso en agua caliente, reduciendo así la intensidad de su sabor.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Espresso'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 1.2; ?>
							</p>
						</div>
						<p>
							Se caracteriza por su rápida preparación a una alta presión y por un sabor y textura más concentrados.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Macchiato'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 2.2; ?>
							</p>
						</div>
						<p>
							Es un café cortado típico de Italia, consiste en un expreso con una pequeña cantidad de leche caliente y espumada. En España se suele denominar café cortado.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Mocha'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 2.8; ?>
							</p>
						</div>
						<p>
							Es una variante del café con leche. Como este, suele llevar un tercio de expreso y dos tercios de leche vaporizada, pero se añade una parte de chocolate.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Coffee Latte'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 2; ?>
							</p>
						</div>
						<p>
							El Caffé Latte es un tipo de café preparado a base de café espresso y leche al vapor. Suele prepararse con un tercio de espresso, dos tercios de leche calentada y un centímetro de espuma.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Piccolo Latte'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 2.2; ?>
							</p>
						</div>
						<p>
							Es una bebida pequeña a base de leche que se sirve normalmente en un vaso de 3-4 oz o 85-114 ml.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Ristretto'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 1.5; ?>
							</p>
						</div>
						<p>
							Es un "trago corto" de un café espresso más concentrado. Se elabora con la misma cantidad de café molido, pero se extrae con un molido más fino utilizando la mitad de agua.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-menu">
						<div class="title-div justify-content-between d-flex">
							<h4><?= 'Affogato'; ?></h4>
							<p class="price float-right">
								<?= '$'(valueUnitCoffee) * 2.5; ?>
							</p>
						</div>
						<p>
							Tradicionalmente conocido como "affogato al caffe" es un postre italiano a base de café. Por lo general, toma la forma de una bola de helado o helado con sabor a leche o vainilla cubierto o "ahogado" con un trago de espresso caliente.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End menu Area -->

	<!-- Start gallery Area -->
	<section class="gallery-area section-gap" id="gallery">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Date un minuto</h1>
						<p>Relaja y saborea nuestro café</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<a href="img/g1.jpg" class="img-pop-home">
						<img class="img-fluid" src="img/g1.jpg" alt="">
					</a>
					<a href="img/g2.jpg" class="img-pop-home">
						<img class="img-fluid" src="img/g2.jpg" alt="">
					</a>
				</div>
				<div class="col-lg-8">
					<a href="img/g3.jpg" class="img-pop-home">
						<img class="img-fluid" src="img/g3.jpg" alt="">
					</a>
					<div class="row">
						<div class="col-lg-6">
							<a href="img/g4.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g4.jpg" alt="">
							</a>
						</div>
						<div class="col-lg-6">
							<a href="img/g5.jpg" class="img-pop-home">
								<img class="img-fluid" src="img/g5.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End gallery Area -->

	<!-- Start review Area -->
	<section class="review-area section-gap" id="review">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Escucha lo que dicen de nuestro café</h1>
						<p>Agradecemos a todas las organizaciones que trabajan con nosotros</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 single-review">
					<img src="img/r1.png" alt="">
					<div class="title d-flex flex-row">
						<h4>Un aroma que enamora</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Desde este comentario, queremos agradecer profundamente a toda la empresa que nos ha ayudado a hacer de nuestra labor diaria, una experiencia mucho mejor gracias a la compañía de este hermoso café.
					</p>
				</div>
				<div class="col-lg-6 col-md-6 single-review">
					<img src="img/r2.png" alt="">
					<div class="title d-flex flex-row">
						<h4>Café, café de verdad.</h4>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Excelente servicio postventa, y un inmejorable café.
					</p>
				</div>
			</div>
			<div class="row counter-row">
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">2536</h1>
					<p>Clientes felices</p>
				</div>
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">7562</h1>
					<p>Servidas en nuestra casa</p>
				</div>
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">2013</h1>
					<p>Tazas de Café</p>
				</div>
				<div class="col-lg-3 col-md-6 single-counter">
					<h1 class="counter">10536</h1>
					<p>Total Enviadas</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End review Area -->

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Experiencias ofrecidas</h1>
						<p>No es solo una taza de café, es el momento que acompaña.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 single-blog">
					<img class="img-fluid" src="img/cafe-moccha.webp" alt="">
					<ul class="post-tags">
						<li><a href="#">Viajar</a></li>
						<li><a href="#">Estilo de vida</a></li>
					</ul>
					<a href="#">
						<h4>Matcha, latte de remolacha y café de lavanda, las infusiones de moda que hacen bien a la salud</h4>
					</a>
					<p>
						Son la novedad en las tiendas de café y sus fotos abundan en las redes sociales. Las nuevas bebidas a base de plantas y especias forman parte de la movida de la alimentación sana.
					</p>
					<p class="post-date">
						18 de mayo de 2022
					</p>
				</div>
				<div class="col-lg-6 col-md-6 single-blog">
					<img class="img-fluid" src="img/b2.jpg" alt="">
					<ul class="post-tags">
						<li><a href="#">Viajar</a></li>
						<li><a href="#">Estilo de vida</a></li>
					</ul>
					<a href="#">
						<h4>¿Qué es más saludable, el café descafeinado o los lattes de maca, cúrcuma y otros superalimentos que están de moda?</h4>
					</a>
					<p>
						En los últimos años aumentó la oferta de bebidas alternativas que prometen aumentar la energía y no afectar la ansiedad o el sueño.
					</p>
					<p class="post-date">
						16 de mayo de 2022
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End blog Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Sobre nosotros</h6>
						<p>
							Somos una compañía dedicada a ofrecer las mejores sensaciones que una taza de café puede brindar. Para lograr esto contamos con una amplia experiencia en el mercado, con una amplia gama de productos y servicios.
						</p>
						<p class="footer-text">
							Copyright &copy;
							<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | Sebastian Marin
						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Novedades</h6>
						<p>Para estar siempre en contacto</p>
						<div class="" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
								<input class="form-control" name="EMAIL" placeholder="Ingresa tu email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu email '" required="" type="email">
								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>

								<div class="info pt-20"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
					<div class="single-footer-widget">
						<h6>Siguenos</h6>
						<p>En nuestras redes</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>