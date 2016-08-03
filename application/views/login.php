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
            <div id="loader">
                <i class="fa fa-cog fa-4x fa-spin"></i><br><span>Cargando...</span>
            </div>
        <!-- ============ PAGE LOADER END ============ -->
        <div class="all-container">
            <!-- ============ CONTENT SECTION ============ -->
            <section id="content" class="wrap">
                <div class="container">
                    <div class="row">
                    	<div class="col-md-12 center-logo">
                			<div class="" id="circle"><img src="<?php echo base_url('EXTRA/images/logo.png');?>" class="img-logo" alt=""></div>
                    	</div>
                        <form class="col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4" accept="" method="post">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center"><h2 class="text-white">Iniciar sesión</h2></div>
                                <div class="panel-body">
                                    <!-- user -->
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="user">Usuario</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="users"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" id="user" placeholder="Usuario" aria-describedby="users">
                                        </div>
                                    </div> <!-- /user -->
                                    <!-- password -->
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="passw">Clave</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="password"><i class="fa fa-key"></i></span>
                                            <input type="password" class="form-control" id="passw" placeholder="****" aria-describedby="password">
                                        </div>
                                    </div> <!-- /password -->
                                    <div id="btn-default-page">
                                        <input type="submit" class="btn btn-primary btn-lg col-sm-12" value="Entrar">
                                    </div>
                                </div> <!-- .panel-body -->
                            </div> <!-- .panel -->
                        </form>
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </section><!-- #content -->
            <!-- <footer>
                <div class="container-fluid">
                    <p class="text-center">&copy; <script>var fecha = new Date(); document.write(fecha.getFullYear());</script> DataMed. ALL RIGHTS RESERVED. | <i class="fa fa-code fa-lg"></i> with <i class="fa fa-heart"></i> and <i class="fa fa-coffee"></i> by <a href="">ALL OF US</a>. </p>
                </div>
            </footer> -->
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