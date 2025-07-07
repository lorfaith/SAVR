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

            //SIGN UP CUSTOMER
            case 'signupCustomer':
                 include_once('view/signup_customer.php'); 
                 break;

            //to find what type of user e log-in
            case 'process login':
                 include_once('view/process_login.php'); 
                 break;

            //WELCOME
            case 'welcome':
                 include_once('view/welcome.php'); 
                 break;
            
            //REGISTER CUSTOMER
            case 'registerCustomer':
                 include_once('view/register_customer.php'); 
                 break;

            //REGISTER CUSTOMER ID
            case 'registerCustomerID':
                 include_once('view/register_customer_id.php'); 
                 break;
          
            //SIGN UP STORE
            case 'signupStore':
                 include_once('view/signup_store.php'); 
                 break;

            // Default
            default:
                echo "<p>Page not found.</p>";
                break;
        }
    }
}
?>