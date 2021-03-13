<?php

if( !is_auth() ){
    header('Location: /registro');
}
else{
    delete_session();
    header('Location: /');
} 