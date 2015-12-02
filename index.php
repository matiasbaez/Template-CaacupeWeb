<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!Doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
	<head>
		<jdoc:include type="head" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css"/> 
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css"/>

		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.min.css"/> 
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css"/>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery-ui.min.css"/>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css"/>

		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-ui.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-2.1.1.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/prefix.js"></script><!--Agrega los prefijos del CSS3 automaticamente sin tener que escribirlos en todos-->
	</head>
	<body>
		<div class="contenedor">
			<header>
				<div class="logo">
					<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo1.jpg" width="150" alt="">
					<a href="#">Caacup&eacute; Web</a>
				</div>

				<nav class="mainmenu">
					<jdoc:include type="modules" name="mainmenu" style="xhtml"/>
				</nav>
			</header>

			<div class="submenu">				
				<a href="#">Salud</a>
				<a href="#">Turismo</a>
				<a href="#">Comercios</a>
				<a href="#">Educacion</a>
				<a href="#">Recreacion</a>
				<a href="#">Instituciones publicas</a>
				<a href="#">Instituciones Financieras</a>
				<a href="#">Entretenimiento y Actividades</a>
			</div>

			<section class="main" role="main">
				<article class="content">
					<jdoc:include type="component"/>
				</article>
			</section>

			<aside>
				<div class="widget">
					<jdoc:include type="modules" name="recientes" style="xhtml"/>
				</div>

				<div class="widget">
					<jdoc:include type="modules" name="acceso" style="xhtml"/>
				</div>

				<div class="widget">
					<jdoc:include type="modules" name="megusta" style="xhtml"/>
				</div>
			</aside>

			<footer>
				<section class="links">
					<jdoc:include type="modules" name="mainmenu" style="xhtml"/>
				</section>

				<div class="derechos">
					<h4>&copy; Derechos reservados Caacup&eacute; Web</h4>
				</div>

				<div class="social">
					<a href="#" class="icon-facebook3"></a>
					<a href="#" class="icon-twitter3"></a>
					<a href="#" class="icon-googleplus4"></a>
				</div>
			</footer>
		</div>

		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

	</body>
</html>
