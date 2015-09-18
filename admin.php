<?php
@session_start();

#if ( !isset($_SESSION['userId']) ){
#	header("Location: index.php");
#	die;
#}

include 'db.php';

if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		/* clientes */
		case "CrearRuta":
			$paginaPHP = "php/CrearRuta.php";
		break;
		case "ConsultarRuta":
		$paginaPHP="php/ConsultarRuta.php";
		break;
		case "guardaRutas":
			$paginaPHP = "php/saveRutas.php";
		break;
		case "clientesEditar":
			$paginaPHP = "php/clientesEditar.php";
		break;
		case "verActivos":
			$paginaPHP = "php/verActivos.php";
		break;

	}
} else {
	$paginaPHP = "php/index.php";
}

$errorMsg = "";

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head> <meta charset="utf-8" />
<title>GPS</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/adminCss.css">
<!--<script type="text/javascript" src="js/jquery-2.1.4.js"></script>-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
<script src="js/app.v1.js"></script>
<script type="text/javascript" src="js/admin.js"></script>

 <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.steps.css">
        <script src="lib/modernizr-2.6.2.min.js"></script>
        <script src="lib/jquery-1.9.1.min.js"></script>
        <script src="lib/jquery.cookie-1.3.1.js"></script>
        <script src="build/jquery.steps.js"></script>
        <script type="text/javascript" src="js/JsConsulta.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.11.4/jquery-ui.css">
<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
</head>
<body class="">
	<section class="vbox">
		<header class="bg-black dk header navbar navbar-fixed-top-xs">
			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">GPS</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar_default.jpg"> </span> admin <b class="caret"></b> </a>
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li class="divider"></li>
						<li> <a href="cerrar.php">Salir</a> </li>
					</ul>
				</li>
			</ul>
		</header>
		<section>
			<section class="hbox stretch">
				<!-- .aside -->
				<aside class="bg-black lter aside-md hidden-print hidden-xs" id="nav">
					<section class="vbox">
						<section class="w-f scrollable">
							<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
								<!-- nav -->
								<nav class="nav-primary hidden-xs">
									<ul class="nav">
										<li> <a href="admin.php?m=CrearRuta"> <i class="fa fa-angle-right"></i> <span>Crear Ruta</span> </a> </li>
										<li id="consulta"> <a href="admin.php?m=ConsultarRuta"> <i class="fa fa-angle-right"></i> <span>Consulta</span> </a> </li>

										<li class="">
											<a href="#webpage" class=""><i class="fa fa-angle-right icon"></i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Configuracion</span> </a>
											<ul class="nav lt" style="display: none;">
												<li id="load"> <a href="admin.php?m=guardaRutas"> <i class="fa fa-angle-right"></i> <span>Guardar Rutas</span> </a> </li>
										
											</ul>
										</li>
									</ul>
								</nav>
								<!-- / nav -->
							</div>
						</section>
					</section>
				</aside>
				<!-- /.aside -->
				<section id="content">
					<section class="vbox">
						<!--<header class="header bg-white b-b b-light"> <p>Layout with black color</p> </header>-->
						<section class="scrollable wrapper w-f">
							<?php include $paginaPHP; ?>
						</section>
						<footer class="footer bg-white b-t b-light text-right">
							<p><a href="http://nuevolaredo.f403.mx">F403.MX Nuevo Laredo</a></p>
						</footer>
					</section>
					<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
				</section>
			</section>
		</section>
	</section>
	<!-- Bootstrap -->
	<!-- App -->
	<script src="js/app.plugin.js"></script>
</body>
</html>