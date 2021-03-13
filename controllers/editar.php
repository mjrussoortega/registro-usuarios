<?php

require_once dirname(__DIR__) .'/settings.php'; 

if ($_POST){
    $nombre         =  (isset($_POST["nombre"])         && !empty($_POST["nombre"]))         ? $_POST["nombre"]        : false;
    $email          =  (isset($_POST["email"])          && !empty($_POST["email"]))          ? $_POST["email"]         : false;
    $direccion      =  (isset($_POST["direccion"])      && !empty($_POST["direccion"]))      ? $_POST["direccion"]     : false;
    $telefono       =  (isset($_POST["telefono"])       && !empty($_POST["telefono"]))       ? $_POST["telefono"]      : false;
    
    try {
        if(actualizar_usuario($nombre,$email,$telefono,$direccion)){
            header("Location: /perfil?updated=true");
        }else{
            header('Location: /error');
        }
    } catch (Exception $e) {
        header('Location: /error');
    }
    
}



