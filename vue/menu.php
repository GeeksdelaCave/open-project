<?php
    require_once 'vue/header.php'
?>

        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">

            <!-- header-container start -->
            <div class="header-container">

                <!-- header-top end -->

                <!-- header start -->
                <!-- classes:  -->
                <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
                <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
                <!-- "full-width": mandatory class for the full-width menu layout -->
                <!-- "centered": mandatory class for the centered logo layout -->
                <!-- ================ -->
                <header class="header  fixed    clearfix">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 ">
                                <!-- header-left start -->
                                <!-- ================ -->
                                <div class="header-left clearfix">

                                    <!-- logo -->
                                    <div id="logo" class="logo">
                                        <img id="logo_img" src="vue/images/logo_open_project.png" width="50%" alt="The Project">
                                    </div>

                                    <!-- name-and-slogan -->
                                    <div class="site-slogan">
                                        Concrétisez vos idées !
                                    </div>

                                </div>
                                <!-- header-left end -->

                            </div>
                            <div class="col-md-9">

                                <!-- header-right start -->
                                <!-- ================ -->
                                <div class="header-right clearfix">

                                    <!-- main-navigation start -->
                                    <!-- classes: -->
                                    <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                    <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                    <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                                    <!-- ================ -->
                                    <div class="main-navigation  animated with-dropdown-buttons">

                                        <!-- navbar start -->
                                        <!-- ================ -->
                                        <nav class="navbar navbar-default" role="navigation">
                                            <div class="container-fluid">

                                                <!-- Toggle get grouped for better mobile display -->
                                                <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>

                                                </div>

                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                    <!-- main-menu -->
                                                    <ul class="nav navbar-nav ">

                                                        <li class="dropdown">
                                                            <a href="http://open-project.dromcorp.eu"> Accueil </a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="http://open-project.dromcorp.eu/visualisation_projets.php"> Visualisation Projets</a>
                                                        </li>
                                                        <li class="dropdown" id="menu_connect1" style="display: none;">
                                                            <a class="dropdown-toggle" data-toggle="dropdown"> Projet </a>
                                                            <ul class="dropdown-menu">
                                                                <li> <a href="http://open-project.dromcorp.eu/creer_projet.php"> Créer un nouveau projet </a> </li>
                                                                <li> <a href="http://open-project.dromcorp.eu/projets_utilisateur.php"> Liste des projets ayant participé </a> </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown" id="menu_connect2" style="display: none;">
                                                            <a href="http://open-project.dromcorp.eu/recrutement.php"> Recrutement </a>
                                                        </li>
                                                    </ul>
                                                    <!-- main-menu end -->

                                                    <!-- header buttons -->
                                                    <div class="header-dropdown-buttons" id="non_connect" style="display: none;">
                                                        <a href="http://open-project.dromcorp.eu/inscription.php" class="btn btn-sm hidden-xs btn-default"> Inscription </a>
                                                        <a href="http://open-project.dromcorp.eu/connexion.php" class="btn btn-sm hidden-xs btn-default"> Connexion </a>
                                                    </div>
                                                    <div class="header-dropdown-buttons" id="connect" style="display: none;">
                                                        <a href="http://open-project.dromcorp.eu/profil.php" class="btn btn-sm hidden-xs btn-default"> Profil </a>
                                                        <button type="button" class="btn btn-sm hidden-xs btn-default" id="deconnexion"> Déconnexion </button>
                                                    </div>
                                                    <!-- header buttons end-->

                                                </div>

                                            </div>
                                        </nav>
                                        <!-- navbar end -->

                                    </div>
                                    <!-- main-navigation end -->
                                </div>
                                <!-- header-right end -->

                            </div>
                        </div>
                    </div>

                </header>
                <!-- header end -->
            </div>
            <!-- header-container end -->
            <!-- banner start -->
            <!-- ================ --    <!-- header-container end -->