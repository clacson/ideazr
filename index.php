<?php
    require('helper/main.php');

    if(isset($_GET['controler']) && isset($_GET['action']) && file_exists(LINK_CONTROLER.$_GET['controler']).'.php') {
        include(LINK_CONTROLER.$_GET['controler'].'.php');
        $className = 'controler'.$_GET['controler'];
        $actionName = $_GET['action'];
        $controler = new $className();
        $controler->$actionName();
    } else {
        include('404.html');
    }
?>
