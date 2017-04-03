/**
 * Fichier JS permettant d'afficher le menu en fonction de si l'utilisateur est connecté ou non
 * @author Thibaud CENENT
 * @version 1.0
 */

$(document).ready(function () {
    $.ajax({
        url : '../../json/is_connect.php'
    }).done(function (connection) {
        if(connection.rep) {
            $('#menu_connect1').show();
            $('#menu_connect2').show();
            $('#non_connect').hide();
            $('#connect').show();
        }
        else{
            $('#connect').hide();
            $('#non_connect').show();
            $('#menu_connect').hide();
            $('#menu_connect2').hide();
        }
    })
});
