<?php
    require('helper/main.php');

    if(isset($_GET['view']) && file_exists(LINK_VIEW.$_GET['view']).'.php')
        header('Location: '.LINK_VIEW.$_GET['view'].'.php');
    else
        header('Location: 404.php');
?>
