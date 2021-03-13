<?php

// datos de la base de datos

$servername = BBDD_HOST ?: false;
$username   = BBDD_USER ?: false;
$password   = BBDD_PASS ?: '';
$bdname     = BBDD_NAME ?: false ;

global $conn;
if( !$servername || !$username  ||  !$bdname ){
    echo 'Faltan los datos para conectarse a la bbdd';
    die();
} 

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

try {
    $conn = @mysqli_connect($servername, $username, $password, $bdname);
} catch (Exception   $e) {
    echo 'Imposible conectar con bbdd';
    die();
}