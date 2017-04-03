<?php
    require_once 'vue/header.php';
?>

        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">

            <!-- background image -->
            <div class="fullscreen-bg"></div>

            <!-- banner start -->
            <!-- ================ -->
            <div class="pv-40 dark-translucent-bg">
                <div class="container">
                    <div class="object-non-visible text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                        <div class="form-block center-block p-30 light-gray-bg border-clear" id="container_connexion">
                            <h2 class="title text-left"> Connexion </h2>
                            <div id="connexion"></div> <br/>
                            <form class="form-horizontal text-left" action="../json/connexion.php" method="post">
                                <div class="form-group has-feedback">
                                    <label for="inputUserName" class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="mail" name="mail" placeholder="E-mail" required>
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="inputPassword" class="col-sm-3 control-label"> Mot de passe </label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                                        <i class="fa fa-lock form-control-feedback"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-8">
                                        <button type="submit" class="btn btn-group btn-default btn-animated"> Se connecter <i class="fa fa-user"></i></button>
                                    </div>
                                </div>
                            </form>
                            <p> Vous n'avez pas de compte ? <a href="http://open-project.dromcorp.eu/inscription.php"> Inscrivez vous</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->

        </div>
        <!-- page-wrapper end -->

<?php
    require_once 'vue/footer.php';
    require_once 'vue/important_js.php';
?>

        <script src="vue/js/connexion_user.js"></script>
    </body>
</html>