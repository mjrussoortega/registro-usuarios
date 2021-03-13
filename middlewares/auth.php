<?php

function login($email, $pass){

}

function logout(){
    session_destroy();
}

function is_auth(){
    $session_id = session_id ();

    if(!$session_id) return false;

    $auth = isset($_SESSION['auth']) && !empty($_SESSION['auth']) ? $_SESSION['auth'] : false ;

    return ($auth) ? true : false;
}