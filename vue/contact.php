<?php
    include 'header.php';
?>

    <!-- banner start -->
    <!-- ================ -->
    <div class="banner dark-translucent-bg" style="background-image:url('images/page-contact-banner.jpg'); background-position: 50% 30%;">
        <!-- breadcrumb start -->
        <!-- ================ -->
        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.html">Accueil</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- breadcrumb end -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 pv-20">
                    <h2 class="title">Nous Contacter</h2>
                    <div class="separator mt-10"></div>
                    <p class="text-center">Si vous avez n'importe quel problème ayant un lien avec l'accessibilité ou le dynamisme du site, n'hésitez pas à nous envoyer un mail. C'est grâce à vous et à votre action que le site pourra grandir de jour en jour.</p>
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
                <form action="mail_contact.php" method="post">
                    <div class="main col-md-8 space-bottom">
                        <p class="lead">Afin de pouvoir nous contacter, veuillez renseigner les champs détaillés ci-dessous s'il vous plaît.</p>
                        <div class="alert alert-success hidden" id="MessageSent">
                            Votre message a bien été reçu ! Votre demande sera traitée dans les plus bref délais.
                        </div>
                        <div class="alert alert-danger hidden" id="MessageNotSent">
                            Erreur dans l'envoi de votre message, vérifiez les champs renseignés ou relancer la page pour réessayer .
                        </div>
                        <div class="contact-form">
                            <form id="contact-form-with-recaptcha" class="margin-clear" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" name="nom" placeholder="">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" name="mail" placeholder="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="subject">Sujet</label>
                                    <input type="text" class="form-control" id="subject" name="sujet" placeholder="">
                                    <i class="fa fa-navicon form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <input type="submit" value="Envoyer" name="action" class="submit-button btn btn-default">
                            </form>
                        </div>
                    </div>
                </form>
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-md-3 col-lg-offset-1">
                    <div class="sidebar">
                        <div class="side vertical-divider-left">
                            <h3 class="title logo-font">Open Project</h3>
                            <div class="separator-2 mt-20"></div>
                            <ul class="list">
                                <li><i class="fa fa-home pr-10"></i>10 Avenue Gaston Berger<br><span class="pl-20"> Aix en Provence, France 13100</span></li>
                                <li><i class="fa fa-phone pr-10"></i> 0617977549</li>
                                <li><i class="fa fa-envelope pr-10"></i><a href="mailto:openproject@outlook.fr">openproject@outlook.fr</a></li>
                            </ul>
                            <ul class="social-links circle small margin-clear clearfix animated-effect-1">
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- sidebar end -->
            </div>
        </div>
    </section>
    <!-- main-container end -->


<?php
    include 'footer.php';
    end_page();
    js1();
?>
