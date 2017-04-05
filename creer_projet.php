<?php

require_once 'header.php';

if($_SESSION['is_connect'])
    require_once 'vue/creer_projet.php';

else{
    header('Location: http://open-project.dromcorp.eu');
    exit();
}