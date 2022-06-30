<?php include 'components/header.php'; ?>

<?php include 'cnx/coffee_list.php'; ?>

<?php include 'components/modals.php'; ?>

<!-- message form success -->
<?php if (isset($_GET['e']) && $_GET['e'] == 'ok') : ?>
	<div class="alert alert-success comment alert-dismissible fade show" role="alert">
		<h3 class="text-success">Mensaje enviado !</h3>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>
<!-- message form success -->

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
				<button type="button" class="primary-btn text-uppercase" data-toggle="modal" data-target="#modalContact">Contactanos</button>
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
				<p><span>Nosotros esperamos tu opinión</span></p>
				<p>
					Desde el inicio hasta el final de tu día, nosotros nos encargamos de hacer tu café.
				</p>
				<img class="img-fluid" src="img/signature.png" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End video-sec Area -->

<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Qué tipo de Café te servimos?</h1>
					<p>Estamos enamorados del sistema ecológico.</p>
				</div>
				<div class="filter col-lg-10 mx-auto">
					<ul class="nav nav-tabs justify-content-around" id="myTab" role="tablist">
						<li class="nav-item m-0">
							<a class="nav-link active" id="todos-tab" data-toggle="todos" href="/?filter=todos#coffee" role="tab" aria-controls="todos" aria-selected="true">Todos</a>
						</li>
						<li class="nav-item m-0">
							<a class="nav-link active" id="espresso-tab" data-toggle="espresso" href="/?filter=espresso#coffee" role="tab" aria-controls="espresso" aria-selected="false">Espresso</a>
						</li>
						<li class="nav-item m-0">
							<a class="nav-link active" id="latte-tab" data-toggle="latte" href="/?filter=latte#coffee" role="tab" aria-controls="latte" aria-selected="false">Latte</a>
						</li>
						<li class="nav-item m-0">
							<a class="nav-link active" id="specials-tab" data-toggle="specials" href="/?filter=specials#coffee" role="tab" aria-controls="specials" aria-selected="false">Specials</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row" style="row-gap: 20px;">
			<?php while ($coffee = $query->fetch_assoc()) : ?>
				<?php if (isset($_GET['filter']) && $_GET['filter'] !== 'todos') : ?>
					<?php if ($_GET['filter'] == $coffee['type_coffee']) : ?>
						<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
									<h4><?= $coffee['name_coffee']; ?></h4>
									<p class="price float-right">
										<?= $coffee['price_coffee']; ?>
									</p>
								</div>
								<p>
									<?= $coffee['description_coffee']; ?>
								</p>
							</div>
						</div>
					<?php endif; ?>
				<?php else : ?>
					<div class="col-lg-4">
						<div class="single-menu">
							<div class="title-div justify-content-between d-flex">
								<h4><?= $coffee['name_coffee']; ?></h4>
								<p class="price float-right">
									<?= $coffee['price_coffee']; ?>
								</p>
							</div>
							<p>
								<?= $coffee['description_coffee']; ?>
							</p>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
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
					<h1 class="mb-10">Con sabor a café</h1>
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

<?php include 'components/footer.php'; ?>