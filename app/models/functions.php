<?php

function is_loggedin()
{
    if(isset($_SESSION['user'])) {
        return true;
    }
    else {
        return false;
    }
}

function is_loggedin_admin()
{
    if(isset($_SESSION['user']) && $_SESSION['user']->getUsertype() == 2) {
        return true;
    }
    else {
        return false;
    }
}

function logout()
{
    session_destroy();
    unset($_SESSION['user']);
    return true;
}

function getinclude($url)
{
    include_once("C:/wamp/www/appmvc/app/$url");
}

function redirect($url)
{
    header("Location: http://localhost/appmvc/public/$url");
}