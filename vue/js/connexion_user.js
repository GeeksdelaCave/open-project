/**
 * Fichier JS permettant de gérer la connexion au site pour les utilisateurs inscrits
 * @author Thibaud CENENT
 * @version 1.0
 */

$(document).ready(function () {
    $('form').submit(function () {
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (reponse) {
                if(reponse.message) {
                    $("#container_connexion").html("<div class='alert alert-icon alert-success' role='alert'> <i class='fa fa-info-circle'> </i> Vous êtes bien connecté </div>");
                    window.setTimeout("location=('http://open-project.dromcorp.eu');", 1000);
                }
                else{
                    $("#container_connexion").html("<div class='alert alert-icon alert-danger' role='alert'> <i class='fa fa-times'> </i> Echec de connexion </div>");
                    window.setTimeout("location=('http://open-project.dromcorp.eu/connexion.php');", 1000);
                }
            }
        });
        return false;
    });
});
