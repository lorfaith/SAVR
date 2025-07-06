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
                include_once('view/content_head.php');
                break;

            //OUR VISION
            case 'our_vision':
                 include_once('view/our_vision.php'); 
                 break;

            //SIGN IN
            case 'signin':
                 include_once('view/signin.php'); 
                 break;

            //SIGN UP
            case 'signup':
                 include_once('view/signup.php'); 
                 break;

            // Default
            default:
                echo "<p>Page not found.</p>";
                break;
        }
    }
}
?>