<div class="d-flex vh-100 align-items-center justify-content-center w-100">
    <div class="card p-4 text-center">
    <h1>Gestión de Usuarios</h1> 

    <p>Esta es una aplicación web de gestión de usuarios (CRUD)</p>

       <div class="d-flex justify-content-between">
            <?php if( !is_auth()){
                echo '<a href="/registro" class=" mx-auto">Registrarse</a>';
            } else {
                echo '<a href="/perfil">Ver mi perfil</a>';
                echo '<a href="/logout" id="logout-link">Salir</a>';
            } ?>
            
        </div>
    </div>
</div>
