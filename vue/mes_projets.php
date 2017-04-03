<?php
    include 'header.php';
    //start_page('Mes Projets');
?>

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="index.html">Accueil</a></li>
                <li class="active">Mes Projets</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-8">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">Mes Projets</h1>
                    <div class="separator-2"></div>
                    <!-- page-title end -->
                    <p class="lead">Tous les projets réalisés par l'utilisateur X </p>

                    <!-- isotope filters start -->
                    <div class="filters">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#" data-filter="*">Tout</a></li>
                            <li><a href="#" data-filter=".web-design">Web design</a></li>
                            <li><a href="#" data-filter=".app-development">Développement d'application</a></li>
                            <li><a href="#" data-filter=".site-building">Architectures systèmes</a></li>
                        </ul>
                    </div>
                    <!-- isotope filters end -->

                    <div class="isotope-container-fitrows row grid-space-10">
                        <div class="col-sm-6 isotope-item web-design">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators bottom margin-clear">
                                        <li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-portfolio" data-slide-to="1"></li>
                                        <li data-target="#carousel-portfolio" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="overlay-container overlay-visible">
                                                <img src="images/portfolio-1.jpg" alt="">
                                                <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="overlay-container overlay-visible">
                                                <img src="images/portfolio-1-2.jpg" alt="">
                                                <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="overlay-container overlay-visible">
                                                <img src="images/portfolio-1-3.jpg" alt="">
                                                <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>Open Project</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> November, 2016<i class="pl-10 icon-tag-1"></i> Web Design</p>
                                    <p class="text-muted">Site Web permettant aux utilisateurs de réaliser des projets en équipe grâce aux outils de gestion de projet</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                    <a href="http://localhost/OpenProject/Membres.php" class="btn btn-gray-transparent btn-animated btn-sm margin-clear"> Members <i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 isotope-item app-development">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/portfolio-2.jpg" alt="">
                                    <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="body">
                                    <h3>Help Farmers</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> December 2016<i class="pl-10 icon-tag-1"></i> App development</p>
                                    <p class="text-muted">Application en langage de programmation JAVA gérant la simulation de la vente à un marché de fermier</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 isotope-item app-development">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/portfolio-3.jpg" alt="">
                                    <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="body">
                                    <h3>Project Title</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> Feb, 2015 <i class="pl-10 icon-tag-1"></i> App development</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 isotope-item web-design">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/portfolio-4.jpg" alt="">
                                    <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="body">
                                    <h3>Project Title</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> Feb, 2015 <i class="pl-10 icon-tag-1"></i> Web Design</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 isotope-item site-building">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/portfolio-5.jpg" alt="">
                                    <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="body">
                                    <h3>Project Title</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> Feb, 2015 <i class="pl-10 icon-tag-1"></i> Site Building</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 isotope-item app-development">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/portfolio-6.jpg" alt="">
                                    <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="body">
                                    <h3>Project Title</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> Feb, 2015 <i class="pl-10 icon-tag-1"></i> App development</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 isotope-item site-building">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/portfolio-7.jpg" alt="">
                                    <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="body">
                                    <h3>Project Title</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> Feb, 2015 <i class="pl-10 icon-tag-1"></i> Site Building</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 isotope-item app-development">
                            <div class="image-box style-2 mb-20 bordered dark-bg">
                                <div class="overlay-container overlay-visible">
                                    <img src="images/portfolio-8.jpg" alt="">
                                    <a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="body">
                                    <h3>Project Title</h3>
                                    <div class="separator-2"></div>
                                    <p class="small mb-10"><i class="icon-calendar"></i> Feb, 2015 <i class="pl-10 icon-tag-1"></i> App development</p>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                    <div class="sidebar">
                    </div>
                </aside>
                <!-- sidebar end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

    <!-- footer top start -->
    <!-- ================ -->
    <!-- footer top end -->

<?php
    include 'footer.php';
    end_page();
    js2();
?>