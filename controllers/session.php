<?php


function save_session_Data($user){

    foreach($user AS $data => $value){
       $_SESSION[$data] = $value;
    } 

}

function delete_session(){
    session_destroy();
}


function get_session(){
   
    return (session_id()) ? $_SESSION : false;
}