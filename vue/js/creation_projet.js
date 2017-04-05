/**
 * Fichier JS gérant la création d'un projet pour un utilisateur en particulier
 * @author Thibaud CENENT
 * @version 1.0
 */

$(document).ready(function () {
    $('#annuler').click(function () {
       window.location.assign('http://open-project.dromcorp.eu');
    });
    $('form').submit(function () {
       var name_project = $('#name_projet'),
           description_projet = $('#description_projet'),
           objectifs_projet = $('#objectifs_projet'),
           profils_recherches = $('#profils_projet');
        if(verifier_creation_projet(name_project, description_projet, objectifs_projet, profils_recherches)){
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (retour) {
                    if(retour.reponse == 0){
                        $("#creation_projet").html("<div class='alert alert-icon alert-success' role='alert'> <i class='fa fa-info-circle'> </i> Votre projet a bien été crée</div>");
                        window.setTimeout("location=('http://open-project.dromcorp.eu');", 1000);
                    }
                    else{
                        $("#creation_projet").html("<div class='alert alert-icon alert-warning' role='alert'> <i class='fa fa-times'> </i> Echec de création de votre projet </div>");
                        window.setTimeout("location=('http://open-project.dromcorp.eu/creer_projet.php');", 1000);
                    }
                }
            })
        }
        else
            $('#creation_projet').html('Vous n\'avez pas rempli correctement le formulaire');
       return false;
    });
});

function verifier(champ){
    return champ.val() != "";

}
function verifier_creation_projet(name_project, description_projet, objectifs_projet, profils_recherches){
    return (verifier(name_project) && verifier(description_projet) && verifier(objectifs_projet) && verifier(profils_recherches));
}
