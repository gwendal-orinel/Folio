<?php
$dir="page/";
require("functions.php");


// Routing table
$page="";
if(isset($_GET['page'])){
	if($_GET['page']==="diplomes-et-certifications"){ $page="diplomes-et-certifications.php"; }
	if($_GET['page']==="experiences-professionnelles"){ $page="experiences-professionnelles.php"; }
	if($_GET['page']==="competences"){ $page="competences.php"; }
	if($_GET['page']==="loisirs-et-centres-d-interet"){ $page="loisirs-et-centres-d-interet.php"; }
	if($_GET['page']==="entreprises"){ $page="entreprises.php"; }
	if($_GET['page']==="ecoles"){ $page="ecoles.php"; }
	if($_GET['page']==="Bts-sio-epreuve-e4"){ $page="bts-sio-epreuve-e4.php"; }
	if($_GET['page']==="Bts-sio-epreuve-e6"){ $page="bts-sio-epreuve-e6.php"; }
	if($_GET['page']==="Licence-ACSID-projet-application-web"){ $page="licence-ACSID-projet-application-web.php"; }
	if($_GET['page']==="Manager-systemes-informatique-et-robotique"){ $page="manager-systemes-informatique-et-robotique.php"; }
	if($_GET['page']==="veille-technologique-et-liens-utiles"){ $page="veille-technologique-et-liens-utiles.php"; }

}else{
	$page="home.php";
}

$page=$dir.$page;
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('header.php'); ?>
</head>
<body style="background-color: #FAFAFA; ">
    <div class="container">
        <div class="col-sm-12 m-b-lg" style="margin-top: 10px;">
            <div class="panel panel-default panel-profile m-b-0">
                <div class="panel-heading2" style="background-image: url(src/background.jpg);"></div>
                <div class="panel-body text-center" style="margin-bottom:-20px">
                    <img class="panel-profile-img" src="src/profil.jpg">
                    <h5 class="panel-title">Gwendal Orinel</h5>
                    <p class="m-b">
                        Chef de projet Informatique &amp; Robotique Spécialisé dans le Cloud et l'IOT
                    </p>


                    <nav id="custom-bootstrap-menu" class="navbar navbar-default col-sm-10 col-sm-offset-1">
                        <div class="container-fluid ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="col-sm-12">
                                <div class="navbar-header visible-xs">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand visible-xs" href="#">Menu</a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" >
                                    <ul class="nav navbar-nav" >
                                        <li><a href="./"><i class="fa fa-home"></i>  Accueil</a></li>

                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-newspaper-o"></i>  Présentation<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="./diplomes-et-certifications"><i class="fa fa-angle-right"></i>   Diplômes et Certifications</a></li>
                                                <li><a href="./experiences-professionnelles"><i class="fa fa-angle-right"></i>   Experiences professionelles</a></li>
                                                <li><a href="./competences"><i class="fa fa-angle-right"></i>   Competences</a></li>
                                                <li><a href="./loisirs-et-centres-d-interet"><i class="fa fa-angle-right"></i>   Loisirs et Centres d'intérêt</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="./entreprises"><i class="fa fa-building"></i>  Entreprises</a></li>
                                        <li><a href="./ecoles"><i class="fa fa-graduation-cap"></i>  Ecoles</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-stack-overflow"></i>  Mes Projets<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a><i class="fa fa-graduation-cap"></i>  BTS</a></li>
                                                <li><a href="./Bts-sio-epreuve-e4"><i class="fa fa-angle-right"></i>  Epreuves E4</a></li>
                                                <li><a href="./Bts-sio-epreuve-e6"><i class="fa fa-angle-right"></i>  Epreuves E6 </a></li>

                                                <li role="separator" class="divider"></li>

                                                <li><a><i class="fa fa-graduation-cap"></i>  Licence</a></li>
                                                <li><a href="./Licence-ACSID-projet-application-web"><i class="fa fa-angle-right"></i>  Réalisation d'une application web avancée</a></li>

                                                <li role="separator" class="divider"></li>

						 <li><a><i class="fa fa-graduation-cap"></i>  Master</a></li>
                                                <li><a href="./Manager-systemes-informatique-et-robotique"><i class="fa fa-angle-right"></i>  Projets autour de la sécurité et du cloud</a></li>

                                                <li role="separator" class="divider"></li>


                                                <li><a><i class="fa fa-lightbulb-o"></i>  Personnels</a></li>
                                                <li><a href="https://github.com/gwendal-orinel"><i class="fa fa-angle-right"></i>  Visiter mon profil Git</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="./veille-technologique-et-liens-utiles"><i class="fa fa-podcast"></i>  Veille technologique</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </div>
                    </nav>
                </div>
                <div class="panel-body" style="margin-bottom: 20px;">
					<div class="col-sm-10 col-sm-offset-1">
					   <?php include($page); ?>
					</div>
				</div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover({ html : true });
        });
    </script>
</body>
<footer>
    <?php include('footer.php'); ?>
</footer>
</html>
