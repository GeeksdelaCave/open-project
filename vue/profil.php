<?php
    require_once 'vue/menu.php';
?>

        <!-- banner start -->
        <!-- ================ -->
        <div class="banner default-translucent-bg" style="background-image:url('vue/images/page-about-me-banner.jpg'); background-position: 50%;">
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="http://open-project.dromcorp.eu"> Accueil </a> </li>
                        <li class="active">Profil</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center col-md-offset-2 pv-20">
                        <h1 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Mon Profil</h1>
                        <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- main-container start -->
        <!-- ================ -->
        <section class="main-container">

            <div class="container">
                <div class="row">

                    <!-- main start -->
                    <!-- ================ -->
                    <div class="main col-md-12">

                        <!-- page-title start -->
                        <!-- ================ -->
                        <h1 class="page-title">Profil user</h1>
                        <div class="separator-2"></div>
                        <!-- page-title end -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="image-box team-member shadow mb-20">
                                    <div class="overlay-container overlay-visible">
                                        <img src="vue/images/team-member-3.jpg" alt="">
                                        <a href="vue/images/team-member-3.jpg" class="popup-img overlay-link"></a>
                                        <div class="overlay-bottom">
                                            <div class="text">
                                                <h3 class="title margin-clear">Jane Doe</h3>
                                                <p class="margin-clear">CTO</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="col-lg-4 col-sm-5">
                                <h2 class="page-title"> Mes compétences </h2>
                                <div class="separator-2"></div>
                                <br/> <br/>
                                <div class="progress style-2 dark">
                                    <span class="text"></span>
                                    <div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
                                        <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">CSS</span>
                                    </div>
                                </div>
                                <div class="progress style-2 dark">
                                    <span class="text"></span>
                                    <div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="85%">
                                        <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">HTML5</span>
                                    </div>
                                </div>
                                <div class="progress style-2 dark">
                                    <span class="text"></span>
                                    <div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
                                        <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Design</span>
                                    </div>
                                </div>
                                <div class="progress style-2 dark">
                                    <span class="text"></span>
                                    <div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="80%">
                                        <span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">PHP</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-lg-offset-1">
                                <h2 class="page-title"> Diplômes </h2>
                                <div class="separator-2"></div>
                                <p class="title"> . Ingénieur en mécanique quantique</p> <br/>
                                <p class="title"> . DUT de physique chimie</p> <br/>
                                <p class="title"> . Bac scientifique</p>
                                <br/> <br/>
                                <h3 class="page-title">Me contacter</h3>
                                <ul class="list-icons">
                                    <li><a href="mailto:thibaud.cenent.pro@gmail.com"><i class="fa fa-envelope-o pr-10"></i> thibaud.cenent.pro@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- main end -->
                </div>
            </div>
        </section>
        <!-- main-container end -->

<?php
    require_once 'vue/footer.php';
    require_once 'vue/important_js.php';
?>

        <script src="vue/js/is_connect.js"></script>
        <script src="vue/js/deconnexion_utilisateur.js"></script>
    </body>
</html>
