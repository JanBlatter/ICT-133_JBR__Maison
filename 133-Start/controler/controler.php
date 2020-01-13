<?php
/**
 * 133-Start - controler.php
 * User: Jan.BLATTER
 * Date: 16.12.2019
 */
session_start();

require "model/model.php";

/**
 * Function to redirect the user to the home page
 * (depending the action received by the index)
 */

function home(){
    $_GET['action']="home";
    require "view/home.php";

}


function login($POST){
    $_GET['action']="login";
    $username=@$_POST["username"];
    $password=@$_POST["password"];

    if (checkLogin($password,$username)){
        require"view/home.php";
        $_SESSION['login'] = $username;

    }
    else

    require "view/login.php";

}
function logout(){
    $_SESSION=array();
    session_destroy();
    require"view/login.php";

}





