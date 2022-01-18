<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Navigation Bar -->
	<nav class="navbar navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="<?=base_url() ?>"><img class="img_nav" alt="Brand"
					src="<?=base_url() ?>layouts/img/local/CEG_Logo.png"></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right underlineheader0">
					<li class="nav0 btt"><a href="<?=base_url() ?>">¿Qué es la CEG?</a>
					</li>
					<li class="nav2 btt"><a href="<?=base_url() ?>actividades">Actividades</a>
					</li>
					<li class="nav3 btt"><a href="<?=base_url() ?>convocatorias">Convocatorias</a>
					</li>
					<li class="nav4 btt"><a href="<?=base_url() ?>media">Fotos y vídeos</a>
					</li>
					<li class="nav1 btt"><a href="<?=base_url() ?>fuentes">Sitios de interés</a>
					</li>
					<!-- <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="#">Page 1-1</a></li>
						<li><a href="#">Page 1-2</a></li>
						<li><a href="#">Page 1-3</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>