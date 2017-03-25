<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>SCAP</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php base_url(); ?>public/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php base_url(); ?>public/template/login.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <form class="form-signin" action="cautenticacion" method="post">
        <h2 class="form-signin-heading">®SCAP Acceso</h2>
        <label for="usuario" class="sr-only">Nombre de usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nombre de usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">Recordar credenciales</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
      </form>
      <div align="center"> 
        <b color="white">®SCAP</b>
      </div>

    </div> 
    <!-- /container -->
</body>
</html>