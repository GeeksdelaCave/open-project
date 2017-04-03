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

						<div class="form-block center-block p-30 light-gray-bg border-clear text-left">
							<h2 class="title"> Inscription </h2>
                            <div id="inscription"></div> <br/>
							<form class="form-horizontal" action="../json/inscription.php" method="post" role="form" >

                                <div class="form-group has-feedback">
                                    <label for="inputLastName" class="col-sm-3 control-label"> Nom  <span class="text-danger small">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                </div>

								<div class="form-group has-feedback">
									<label for="inputFirstName" class="col-sm-3 control-label"> Prénom <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label class="col-sm-3 control-label"> Age <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="number" class="form-control" id="age" name="age" placeholder="Age" >
										<i class="fa fa-birthday-cake form-control-feedback"></i>
									</div>
								</div>

                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label"> Métier <span class="text-danger small">*</span> </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="metier" name="metier" placeholder="Metier">
                                        <i class="fa fa-send form-control-feedback"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="inputMail" class="col-sm-3 control-label"> Adresse e-mail <span class="text-danger small">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="mail" name="e_mail" placeholder="quelquechose@exemple.eu">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
									<label class="col-sm-3 control-label"> Mot de passe </label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="mdp" name="mot_de_passe" placeholder=".....">
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
								</div>

                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label"> Confirmer le mot de passe</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="mdp_confirme" placeholder=".....">
                                        <i class="fa fa-lock form-control-feedback"></i>
                                    </div>
                                </div>

								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-8">
										<button type="submit" class="btn btn-group btn-default btn-animated" id="inscription" > S'inscrire <i class="fa fa-check"></i></button>
                                        <button type="button" class="btn btn-group btn-default btn-animated" id="annuler"> Annuler <i class="fa fa-arrow-circle-right"> </i> </button>
									</div>
								</div>
							</form>
						</div>
                    </div>
                </div>
            </div>
        </div>

<?php
    require_once 'vue/footer.php';
    require_once 'vue/important_js.php';
?>
        <script src="vue/js/inscription_user.js"></script>
    </body>
</html>
