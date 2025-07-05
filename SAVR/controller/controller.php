<?php
// File: controller/controller.php

require_once('Model/model.php');

class Controller
{
    public $model = null;

    function __construct()
    {
        $this->model = new Model();
    }

    public function getPages()
    {
        $command = 'content';

        if (isset($_REQUEST['command'])) {
            $command = $_REQUEST['command'];
        }

        switch ($command) {
            // HOME CASE
            case 'content':
                include_once('view/content_head.html');
                echo '<link rel="stylesheet" href="./css/home.css">';
                break;

            //OUR VISION
            case 'our_vision':
                include_once('view/our_vision.html');
                echo '<link rel="stylesheet" href="./css/our_vision.css">';
                break;

            // Default
            default:
                echo "<p>Page not found.</p>";
                break;
        }
    }
}
?>
