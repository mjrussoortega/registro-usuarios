<?php
//mi primera modificacion
session_start();
// prueba de conflicto

define('APP_PATH', __DIR__ );
define('BBDD_NAME', 'bdmiguel' );
define('BBDD_USER', 'root' );
define('BBDD_HOST', 'localhost' );
define('BBDD_PASS', '' );


require_once (APP_PATH .'/controllers/db.php');
require_once (APP_PATH .'/controllers/session.php');
require_once (APP_PATH .'/middlewares/auth.php');
require_once (APP_PATH .'/controllers/users.php');
