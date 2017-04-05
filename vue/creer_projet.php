<?php
    require_once 'vue/menu.php';
?>

        <!-- banner start -->
        <!-- ================ -->
        <div class="banner dark-translucent-bg" style="background-image:url('images/page-contact-banner.jpg'); background-position: 50% 30%;">
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="http://open-project.dromcorp.eu"> Accueil</a></li>
                        <li class="active">Créer un projet</li>
                    </ol>
                </div>
            </div>
            <!-- breadcrumb end -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center col-md-offset-2 pv-20">
                        <h2 class="title">Créer un projet</h2>
                        <div class="separator mt-10"></div>
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
                    <div class="main col-md-8 space-bottom">
                        <div class="contact-form">
                            <form method="post" action="../json/creer_projet.php" class="margin-clear" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Nom du projet*</label>
                                    <input type="text" class="form-control" id="name_projet" name="name_projet" placeholder="">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">Type de projet*</label>
                                    <select class="form-control" name="select_type_projet">
                                        <option value="Application Web"> Application Web </option>
                                        <option value="Application Mobile"> Application Mobile </option>
                                        <option value="Application Embarquée"> Application Embarquée </option>
                                        <option value="Jeu Vidéo"> Jeu Vidéo </option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Description*</label>
                                    <textarea class="form-control" rows="6" id="description_projet" name="description_projet" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Objectifs*</label>
                                    <textarea class="form-control" rows="6" id="objectifs_projet" name="objectifs_projet" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Profils Recherchés*</label>
                                    <textarea class="form-control" rows="6" id="profils_projet" name="profils_projet" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <button type="submit" class="submit-button btn btn-default"> Créer ce projet <i class="fa fa-check"></i></button>
                                <button type="button" class="submit-button btn btn-default" id="annuler"> Annuler <i class="fa fa-times"></i></button>
                            </form> <br/>
                            <div id="creation_projet"></div>
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
    <script src="vue/js/creation_projet.js"></script>
    </body>
</html>

