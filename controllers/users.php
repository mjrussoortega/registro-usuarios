<?php
require_once APP_PATH .'/controllers/db.php';
require_once APP_PATH .'/controllers/session.php';

function crear_usuario($nombre, $email){

    $user = check_if_user_exist($email);

    if(! $user){
        $insert = insert_user($email , $nombre);
        if(!$insert) throw new Exception('Error al crear el usuario');
    }

    $user = obtener_usuario($email);

    $_SESSION['auth'] = true;
    save_session_Data($user);
    return true;

}

function insert_user($email , $nombre){
    global $conn;
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    return $conn->query($sql) ? true :  false;
}

function actualizar_usuario($nombre = "", $email = "", $telefono = "", $direccion = ""){

    $currentUser = get_session();

    if(!$currentUser) throw new Exception('Usuario en sesión no detectado');


    $id = (isset($currentUser['id']) && !empty($currentUser['id'])) ? $currentUser['id'] : false;
    
    if(!$id) throw new Exception('ID de Usuario en sesión no detectado');
    
    $nombre         = isset($nombre)        && !empty($nombre)              ? $nombre       : $currentUser['nombre'];
    $email          = isset($email)         && !empty($email)               ? $email        : $currentUser['email'];
    $telefono       = isset($telefono)      && !empty($telefono)            ? $telefono     : $currentUser['telefono'];
    $direccion      = isset($direccion)     && !empty($direccion)           ? $direccion    : $currentUser['direccion'];

    global $conn;

    $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email', telefono= '$telefono', direccion='$direccion' WHERE  id = '{$id}'";

    if($conn->query($sql)){
        $user = obtener_usuario($email);
        save_session_Data($user);
        return true;
    }else{
        throw new Exception('Error al actualizar el usuario');
    }

   

}

function obtener_usuario($email){
    global $conn;

    try {
        $sql = "SELECT * FROM usuarios WHERE `email` = '$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows <= 0) return false;    
        
        $user = new stdClass();

        while($row = $result->fetch_assoc()) {
            $user->id           = $row["id"];
            $user->nombre       = isset($row["nombre"])     ? $row["nombre"] : "";
            $user->email        = isset($row["email"])      ? $row["email"] : "";
            $user->telefono     = isset($row["telefono"])   ? $row["telefono"] : "";
            $user->direccion    = isset($row["direccion"])  ? $row["direccion"] : "";
        }

        return $user;

    } catch (\Exception $e) {
        
        return false;
    }

   
  
    

}



function check_if_user_exist($email){
    global $conn;

    $sql = "SELECT count(email) count FROM usuarios WHERE email = '$email'";

    try {
        $result = $conn->query($sql);
        $data   = $result->fetch_assoc();
        return ( $data['count'] > 0 ) ? true : false;

    } catch (\mysqli_sql_exception $e) {
        throw new Exception($e->getMessage());
    }

   
  
    

}