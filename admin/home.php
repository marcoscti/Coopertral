<?php
session_start();
require_once '../classes/ControllerUser.php';
$ccu= new ControllerUser();
$ccu->verifySession();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Coopertral</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Coopertral
                </a>
            </div>
        <!--Aqui vai o menu-->
            <?php
            require_once "menu.php";
            ?>
        <!--Fim menu-->
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--nome user-->
                    <?php
                    require_once "validacao.php";
                    ?>
                    <!--Fim nome user-->
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="logoff.php">
                               <i class="pe-7s-power"></i> Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="content all-icons">
                                <div class="row">
                                  <div class="font-icon-list col-lg-3 col-md-3 col-sm-3 col-xs-12 col-xs-12">
                                    <a href="#"><div class="font-icon-detail"><i class="pe-7s-album"></i>
                                    </div></a>

                                  </div>
                                  <div class="font-icon-list col-lg-3 col-md-3 col-sm-3 col-xs-12 col-xs-12">
                                    <div class="font-icon-detail"><i class="pe-7s-arc"></i>
                                      
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-3 col-md-3 col-sm-3 col-xs-12 col-xs-12">
                                    <div class="font-icon-detail"><i class="pe-7s-back-2"></i>
                                      
                                    </div>

                                  </div>
                                  <div class="font-icon-list col-lg-3 col-md-3 col-sm-3 col-xs-12 col-xs-12">
                                    <div class="font-icon-detail"><i class="pe-7s-bandaid"></i>
                                      
                                    </div>

                                  </div>
                                  </div>
                                </div>


                            </div>
                        </div>
                    </div>
                <div class="row">
                <div class="col-md-12">
                        
                            <h3>Aqui você poderá:</h3>
        <ol type="A">
            <li>Editar os dados do seu comércio</li>
            <li>Editar a sua galeria de fotos.</li>
            <li>Ver quantas pessoas Visitaram no seu link.</li>
        </ol>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Rodapé-->
    <?php
    require_once "footer.php";
    ?>
    <!--Fim rodapé-->

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
