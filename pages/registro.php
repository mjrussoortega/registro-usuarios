<?php

if( is_auth() ) header('Location: /perfil');


?>

<div class="container text-center">
<div class="row">
<div class="col-6 offset-md-3">
<main class="form-signin">
  <form action = "/controllers/insertar.php" method = "POST">
    
    <h1 class="h3 mb-3 fw-normal">Registro</h1>
    <p>Completa tus datos para registrarte</p>

    <div class="form-group mb-2">
       <label for="inputNombre" class="visually-hidden">Nombre </label>
    <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="nombre " required autofocus> 
    </div>
    <div class="form-group mb-2">
       <label for="inputEmail" class="visually-hidden">Email </label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email " required autofocus> 
    </div>

    <div class="form-group">

    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>

    </div>
  </form>
</main>
</div>
</div>
</div>
