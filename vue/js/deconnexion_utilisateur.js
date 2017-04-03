/**
 * Fichier JS gérant la déconnexion de l'utilisateur du site
 * @author Thibaud CENENT
 * @version 1.0
 */

$(document).ready(function () {
    $('#deconnexion').click(function () {
        $.ajax({
            url : '../../json/deconnexion.php',
            success : function(reponse){
                console.log(reponse);
                window.setTimeout("location=('http://open-project.dromcorp.eu');", 1000);
            }
        });
    });
});

