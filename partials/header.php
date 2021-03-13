<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="/">My APP</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<?php if (!is_auth()) : ?>
    <li class="nav-item">
        <a class="nav-link " aria-current="page" href="/registro">Registro</a>
    </li>
<?php endif ?>

</ul>

<ul class="navbar-nav mb-2 mb-lg-0 ml-auto">
    <li class="nav-item" >
        <a class="nav-link  " aria-current="page" href="/<?php echo is_auth() ? 'perfil' : 'registro' ?>"> <?php echo is_auth() ? 'Ver Perfil' : 'Registro' ?> <i class="far fa-user ml-2"></i></a>
    </li>
    <?php if(is_auth()) : ?>
    <li class="nav-item" >
        <a class="nav-link  " aria-current="page" href="/logout">Salir</a>
    </li>
    <?php endif; ?>
</ul>

</div>
</div>
</nav>
