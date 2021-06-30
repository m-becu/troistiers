<?php
require_once("controller/controller.php");

if ( isset($_GET['action']) ) {
    switch ($_GET['action']) {
        case 'connect':
            if ( isset($_POST["login"]) && isset($_POST["passw"]) ) connect();
            else showIndex();
            break;

        default:
            showIndex();
            break;
    }
} else {
    showIndex();
}