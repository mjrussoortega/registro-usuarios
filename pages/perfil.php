<?php

if( !is_auth() ) header('Location: /registro');


$nombre     =  (isset($_SESSION["nombre"])            && !empty($_SESSION["nombre"]))        ? $_SESSION["nombre"]     : false;
$email      =  (isset($_SESSION["email"])             && !empty($_SESSION["email"]))          ? $_SESSION["email"]      : false;
$direccion  =  (isset($_SESSION["direccion"])         && !empty($_SESSION["direccion"]))      ? $_SESSION["direccion"]  : false;
$telefono   =  (isset($_SESSION["telefono"])          && !empty($_SESSION["telefono"]))       ? $_SESSION["telefono"]   : false;

?>
    
<div class="container">
<div class="row">

<div class="col-6 offset-md-3 my-5">

<div class="text-center mb-3">
<h1 class="h3 mb-3 fw-normal ">Mi perfil</h1>
<?php echo "Hola, <i>{$nombre}</i> bienvenido a mi app, puedes actualizar tus datos, completando el siguiente formulario." ?>
</div>
<form action="controllers/editar.php" method="post">

<?php if( isset($_REQUEST['updated']) && $_REQUEST['updated'] == 'true') : ?>


<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Felicidades <?php echo $nombre; ?> </strong> Tu cuenta se ha actualizado exitosamente.
</div>

<?php endif; ?>
    <div class="form-group mb-2">
       <label for="inputNombre" >Nombre </label>
    <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="nombre " value ="<?php echo $nombre;?>" required autofocus> 
    </div>

    <div class="form-group mb-2">
       <label for="inputEmail" >Email </label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email " value ="<?php echo $email;?>" required disabled> 
    </div>

    <div class="form-group mb-2">
       <label for="inputDireccion" >Dirección</label>
    <textarea type="text" name="direccion" id="inputDireccion" class="form-control" placeholder="dirección"><?php echo $direccion;?></textarea> 
    </div>

    <div class="form-group mb-2">
       <label for="inputTelefono" >Telefono</label>
    <input type="text" name="telefono" id="inputTelefono" class="form-control" placeholder="telefono " value ="<?php echo $telefono;?>" > 
    </div>

    <div class="form-group">
      <button class="w-100 btn btn-lg btn-primary" type="submit" >Actualizar</button>
    </div>
</form>
</div>

</div>

</div>