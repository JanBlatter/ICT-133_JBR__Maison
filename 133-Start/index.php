<?php
/**
 * 133-Start - index.php
 * User: Jan.BLATTER
 * Date: 16.12.2019
 */

require "controler/controler.php";

if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action){
        case 'home' :
            home();
            break;
            case 'login':
            login(@$_POST);
            break;
            case 'contact':
                contact();
            break;
        case 'logout':
            break;

        default:
            home();
    }
}
else
{
    home();
}