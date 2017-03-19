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
    <link href="./public/template_acceso_sistema/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./public/template_acceso_sistema/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./public/template_acceso_sistema/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="./public/template_acceso_sistema/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./template_acceso_sistema/ie-emulation-modes-warning.js.descarga"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
    <style type="text/css">

        body { 
                background-color: transparent; 
                background: url("./public/template_acceso_sistema/fondo_login.svg");
                background-color: #262F36; 
                background-repeat: no-repeat;
                background-position: top center; 
                background-attachment: fixed;
                backgroudn-size: contain;
                color: #34789c;
        }

        /* Ahora podemos cambiar solo la propiedad background-image */
        @media (min-width: 280px) {
            body {
                background-position: center -100px;
            }
        }
        @media (min-width: 768px) {
            body {
                background-position: center ;
            }
        }
        @media (min-width: 1200px) {
            body {
                background-position: center;
            }
        }

        h2 { color: #fff; }
        
        label { color: #fff; }

        .btn-primary {
            color: #fff;
            background-color: #F38B00;
            border-color: #fff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #347faa;
            border-color: #fff;
        }

        .btn-primary.focus, .btn-primary:focus {
            color: #fff;
            background-color: #347faa;
            border-color: #fff;
        }

        .form-control:focus {
            border-color: #F38B00;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(#e9e266), 0 2 8px rgba(#e9e266);
            box-shadow: inset 0 1px 1px rgba(#e9e266), 0 2 8px rgba(#e9e266);
        }
    </style>

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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./public/template_acceso_sistema/ie10-viewport-bug-workaround.js.descarga"></script>
</body>
</html>