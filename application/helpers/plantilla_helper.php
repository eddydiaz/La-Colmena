<?php 



class plantilla{

	static $intancia = null;

	static function iniciar(){
		self::$intancia = new plantilla();
	}

	function __construct(){

		?>

		
		<!DOCTYPE html>

		<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<title>La-Colmena</title>
			<meta name="description" content="">
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
			<!-- FAVICON -->
			<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-57x57.png');?>">
			<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-60x60.png');?>">
			<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-72x72.png');?>">
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-76x76.png');?>">
			<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-114x114.png');?>">
			<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-120x120.png');?>">
			<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-144x144.png');?>">
			<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-152x152.png');?>">
			<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('EXTRA/images/logo/apple-touch-icon-180x180.png');?>">
			<link rel="icon" type="image/png" href="<?php echo base_url('EXTRA/images/logo/favicon-32x32.png" sizes="32x32');?>">
			<link rel="icon" type="image/png" href="<?php echo base_url('EXTRA/images/logo/android-chrome-192x192.png" sizes="192x192');?>">
			<link rel="icon" type="image/png" href="<?php echo base_url('EXTRA/images/logo/favicon-96x96.png" sizes="96x96');?>">
			<link rel="icon" type="image/png" href="<?php echo base_url('EXTRA/images/logo/favicon-16x16.png" sizes="16x16');?>">
			<link rel="manifest" href="<?php echo base_url('EXTRA/images/logo/manifest.json');?>">
			<link rel="mask-icon" href="<?php echo base_url('EXTRA/images/logo/safari-pinned-tab.svg" color="#5bbad5');?>">
			<meta name="apple-mobile-web-app-title" content="La-Colmena">
			<meta name="application-name" content="La-Colmena">
			<meta name="msapplication-TileColor" content="#da532c">
			<meta name="msapplication-TileImage" content="/mstile-144x144.png">
			<meta name="theme-color" content="#ffffff">
			<!-- STYLESHEET -->
			<link rel="stylesheet" href="<?php echo base_url('EXTRA/css/font-awesome.min.css');?>">
			<link rel="stylesheet" href="<?php echo base_url('EXTRA/css/bootstrap.min.css');?>">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url('EXTRA/css/menu_principal.css');?>" />
			<link rel="stylesheet" href="<?php echo base_url('EXTRA/css/main.css');?>">


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="<?php echo base_url();?>js/vendor/jquery-2.2.2.min.js"><\/script>')</script>

        </head>
        <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <!-- ============ PAGE LOADER START ============ -->
            <!--<div id="loader">
            	<i class="fa fa-cog fa-4x fa-spin"></i><br><span>Cargando...</span>
            </div>-->
            <!-- ============ PAGE LOADER END ============ -->
            <div class="all-container">
            	<!-- ============ RESPONSIVE MENU ============ -->
            	<div class="menu-wrap">
            		<nav class="menu">
            			<div class="icon-list">
            				<a href="<?php echo base_url('Administrador');?>" class="active"><i class="fa fa-fw fa-home fa-2x"></i><span>Inicio</span></a>
            				<a href="#"><i class="fa fa-fw fa-user fa-2x"></i><span>Perfil</span></a>
            				<a href="#"><i class="fa fa-cog fa-2x"></i><span>Ajustes</span></a>
            				<a href="#"><i class="fa fa-fw fa-sign-out fa-2x"></i><span>Salir</span></a>
            			</div>
            		</nav>
            		<button class="close-button" id="close-button">Close Menu</button>
            		<div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
            			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
            				<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
            			</svg>
            		</div>
            	</div>
            	<!-- ============ END RESPONSIVE MENU ============ -->

        <!-- NAVIGATION
        ================== -->
        <div class="content-wrap">
        	<div class="content">
        		<nav class="navbar navbar-default navbar-fixed-top" id="menu-principal">
        			<div class="container">
        				<div class="navbar-header">
        					<!-- <button type="button" class="navbar-toggle collapsed" id="open-button"><i class="fa fa-bars fa-3x"></i></button> -->
        					<a href="" class="navbar-brand">
        						<a href="#" class="menu-btn pull-left" id="open-button"></a>
        						
        					</a>
        				</div> <!-- .navbar-header -->
        				<div class="collapse navbar-collapse" id="navbar-collapse-1">
        					<ul class="nav navbar-nav navbar-right">

        						<li class="dropdown">
        							<a href="#" class="dropdown-toggle" id="dropdown-main" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user fa-fw"></i> Eddy<span class="caret"></span>
        								<ul class="dropdown-menu">
        									<li><a href="#"><i class="fa fa-user"></i>&nbsp; Perfil</a></li>
        									<li><a href="#"><i class="fa fa-cog"></i>&nbsp; Ajustes</a></li>
        									<li><a href="#"><i class="fa fa-sign-out"></i>&nbsp; Salir</a></li>
        								</ul>
        							</a>
        						</li> <!-- .dropdown -->
        					</ul> <!-- .navbar-right -->
        				</div> <!-- .navbar-collapse -->
        			</div> <!-- .container -->
        		</nav>

        		<!-- ============ TITLE AND ROLL ============ -->
        		<div class="row" id="banner">
        			<header class="col-sm-12">
        				<img   class="img-responsive" src="<?php echo base_url('EXTRA/images/portadass.jpg');?>">
        			</header>
        		</div>   
        		<!-- ============ CONTENT SECTION ============ -->
        		




        		<?php

        	}


        	function __destruct(){

        		?>


        		<footer>
        			<div class="container-fluid">
        				<p class="text-center">&copy; <script>var fecha = new Date(); document.write(fecha.getFullYear());</script> La-Colmena. ALL RIGHTS RESERVED. | <i class="fa fa-code fa-lg"></i> with <i class="fa fa-heart"></i> and <i class="fa fa-coffee"></i> by <a href="">la_colmena.com</a>. </p>
        			</div>
        		</footer>
        	</div>
        </div><!-- .content-wrap -->

        <!-- =========== JAVASCRIPTS =========== -->
        <script src="<?php echo base_url('EXTRA/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js');?>"></script>
        <script src="<?php echo base_url('EXTRA/js/vendor/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('EXTRA/js/vendor/jquery.easing.min.js');?>"></script>
        <script src="<?php echo base_url('EXTRA/js/vendor/classie.js');?>"></script>
        <script src="<?php echo base_url('EXTRA/js/vendor/snap.svg-min.js');?>"></script>
        <script src="<?php echo base_url('EXTRA/js/vendor/main3.js');?>"></script>
        <script src="<?php echo base_url('EXTRA/js/vendor/jquery.nicescroll.js');?>"></script>
        <script src="<?php echo base_url('EXTRA/js/main.js');?>"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            /*(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');*/
        </script>
    </body>
    </html>




    <?php

}


}
