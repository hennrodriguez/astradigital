<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" crossorigin="anonymous">
	
	
</head>

<body>
	
	<!-- Navbar -->
	<div class="container-fluid bg-inverse fixed-top">
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/bootstrap-solid.svg" width="30" height="30" alt="">
			</a>

			<?php wp_nav_menu( array(
				'theme_location' => 'superior',
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'navbarSupportedContent',
				'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
				'menu_class' => 'nav-item'
			) ); ?>



		</nav>
	</div>
	<!-- Navbar Fin -->

	<!-- Suscribir -->
	<div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center">
		<div class="text-center text-white">
			<h1 class="display-4">Lorem ipsum</h1>
		</div>
		<form action="" class="form-inline flex-column flex-sm-row">
			<div class="form-group mr-sm-3">
				<input type="text" placeholder="Nombre" class="form-control">
			</div>
			<div class="form-group mr-sm-3">
				<input type="text" placeholder="E-mail" class="form-control">
			</div>
			<div class="form-group mr-sm-3">
				<input type="submit" class="btn btn-primary" value="Suscribirme">
			</div>
		</form>
	</div>
	<!-- Suscribir Fin -->

