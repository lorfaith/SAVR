<?php
// echo '<div>';
//     include_once("view/header.html");
// echo '</div>';

// echo '<br><br><br>';

echo '<div>';
    require_once('controller/controller.php');
    $controller = new Controller();
    $controller->getPages();
echo '</div>';
?>
