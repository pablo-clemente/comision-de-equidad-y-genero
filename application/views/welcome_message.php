<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<body>
	<header class="intro">
		<div class="container">
			<div class="row">
				<img class="center-block img-responsive front_img"
					src="<?=base_url()?>layouts/img/local/CEG_Logo.png">
				<h1 class=" center-block">Comisión de Equidad y Género</h1>
				<a class="btn btn-default main_btn" href="<?=base_url()?>home">Entrar</a>
			</div>
		</div>
	</header>

	<!-- Full Page Image Background Carousel Header -->
	<header id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for Slides -->
		<div class="carousel-inner">
			<div class="item active">
				<!-- Set the first background image using inline CSS below. -->
				<div class="fill" style="background-image:url('<?=base_url() ?>layouts/img/local/Foto1.jpg');"></div>
				<div class="carousel-caption">
					<h2></h2>
				</div>
			</div>
			<div class="item">
				<!-- Set the second background image using inline CSS below. -->
				<div class="fill" style="background-image:url('<?=base_url() ?>layouts/img/local/Foto4.jpg');"></div>
				<div class="carousel-caption">
					<h2></h2>
				</div>
			</div>
			<div class="item">
				<!-- Set the third background image using inline CSS below. -->
				<div class="fill" style="background-image:url('<?=base_url() ?>layouts/img/local/Foto7.jpg');"></div>
				<div class="carousel-caption">
					<h2></h2>
				</div>
			</div>
		</div>

		<!-- Controls
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        -->

	</header>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Script to Activate the Carousel -->
	<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>