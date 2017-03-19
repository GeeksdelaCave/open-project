<?php

    require_once ('header.php');

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
						<!-- logo -->
						<!--<div id="logo" class="logo">
							<h3 class="margin-clear"><a href="index.html" class="logo-font link-light">The <span class="text-default">Project</span></a></h3>
						</div> -->

						<div class="form-block center-block p-30 light-gray-bg border-clear text-left">
							<h2 class="title"> Inscription </h2>
							<form class="form-horizontal" role="form">

								<div class="form-group has-feedback">
									<label for="inputFirstName" class="col-sm-3 control-label">Prénom <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputFirstName" placeholder="Prenom" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputLastName" class="col-sm-3 control-label">Nom  <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputLastName" placeholder="Nom" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputDateNaissance" class="col-sm-3 control-label">Date de naissance  <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="date" class="form-control" id="inputDateNaissance" placeholder="jj/mm/aaaa" required>
										<i class="fa fa-birthday-cake form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputAdresse" class="col-sm-3 control-label">Adresse</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputAdresse" placeholder="">
										<i class="fa fa-send form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputComplement" class="col-sm-3 control-label">Complément d'adresse</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputComplement" placeholder="">
										<i class="fa fa-send form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputCodePostal" class="col-sm-3 control-label">Code postal <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputCodePostal" placeholder="13000" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputVille" class="col-sm-3 control-label">Ville <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputVille" placeholder="" required>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputPays" class="col-sm-3 control-label">Pays <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputPays" placeholder="France" required>
										<i class="fa fa-globe form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputNumTel" class="col-sm-3 control-label">N° de téléphone <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="tel" class="form-control" id="inputNumTel" placeholder="+33600000000" required>
										<i class="fa fa-phone form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="inputMail" class="col-sm-3 control-label">Adresse e-mail <span class="text-danger small">*</span></label>
									<div class="col-sm-8">
										<input type="email" class="form-control" id="inputMail" placeholder="quelquechose@exemple.eu" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-8">
										<div class="checkbox">
											<label>
												<input type="checkbox" required> En cochant la case vous acceptez notre <a href="#">politique de confidentialité</a>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-8">
										<button type="submit" class="btn btn-group btn-default btn-animated">Inscription <i class="fa fa-check"></i></button>
									</div>
								</div>
							</form>
						</div>

<?php

    require ('footer.php');

?>