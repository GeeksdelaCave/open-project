<?php

require_once 'header.php';

if(isset($_SESSION['is_connect']))
    require_once 'vue/profil.php';
else{
    header('Location: http://open-project.dromcorp.eu');
    exit();
}