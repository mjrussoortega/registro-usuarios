<?php
global $conn;

require_once dirname(__DIR__) .'/settings.php'; 

if ($_POST){


    $nombre         =  (isset($_POST["nombre"])         && !empty($_POST["nombre"]))         ? $_POST["nombre"]        : false;
    $email          =  (isset($_POST["email"])          && !empty($_POST["email"]))          ? $_POST["email"]         : false;
    
    
    try {
        $crear = crear_usuario($nombre,$email);
        if($crear){
            header("Location: /perfil");
        }
    } catch (Exception $e) {
        header('Location: /error');
    }
    
}



