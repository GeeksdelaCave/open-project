/**
 * Java Script permettant de gérer la bonne rentrée de la saisie par l'utilisateur au cours de l'inscription
 * @author Thibaud CENENT
 * @version 1.1
 */

$(document).ready(function () {
    var nom = $('#nom'),
        prenom = $('#prenom'),
        age = $('#age'),
        metier = $('#metier'),
        e_mail = $('#mail'),
        password = $('#mdp'),
        confirm_password = $('#mdp_confirme');
    $('#annuler').click(function () {
        window.location.assign('http://open-project.dromcorp.eu');
    });
    $('form').submit(function () {
        if (mots_de_passe_identiques(password, confirm_password) && verifier_inscription(nom, prenom, age, e_mail, metier)) {
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (retour) {
                    if (retour.reponse == 0) {
                        $("#inscription").html("<div class='alert alert-icon alert-success' role='alert'> <i class='fa fa-info-circle'> </i> Inscription validée </div>");
                        window.setTimeout("location=('http://open-project.dromcorp.eu');", 1000);
                    }
                    else if(retour.reponse == 1){
                        $("#inscription").html("<div class='alert alert-icon alert-warning' role='alert'> <i class='fa fa-times'> </i> Echec d 'inscription </div>");
                        window.setTimeout("location=('http://open-project.dromcorp.eu/inscription.php');", 1000);
                    }
                    else if(retour.reponse == 2)
                        $('#inscription').html("E_mail déjà utilisé");
                }
            });
        }
        else
            $('#inscription').html("Formulaire incomplet ou les mots de passe ne sont pas identiques");
        return false;
    });
});

function verifier(champ){
    return champ.val() != "";

}
function verifier_inscription(nom, prenom, age, mail, metier){
    return (verifier(nom) && verifier(prenom) && verifier(age) && verifier(mail) && verifier(metier));
}

function mots_de_passe_identiques(mdp, mdp_confirme){
    return mdp.val() == mdp_confirme.val();
}
