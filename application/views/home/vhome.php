<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>SCAP</title>

    <!-- Bootstrap core CSS -->
    <link href="./public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="./public/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./public/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./public/bootstrap/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./public/bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Panel de control</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="#"><a href="#">Inicio</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lecturas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Administrar lecturas</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="./cgestion_lecturas/descargar_lecturas">Estado de lecturas</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rutas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Administrar rutas</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Administrar usuarios</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Scap Demo <span class="caret"></span>
                        </a>  
                        <ul class="dropdown-menu"> 
                            <li><a href="#">Configuración</a></li> 
                            <li role="separator" class="divider"></li> 
                            <li><a href="#">Cerrar sesión</a></li> 
                        </ul> 
                    </li> 
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
 
    <div class="container theme-showcase" role="main">
        <ol class="breadcrumb">
            <li class="active">Inicio</li>
        </ol>
        <div class="col-md-9" role="main">
            <div class="panel panel-default">
            <!-- Default panel contents -->
                <div class="panel-heading">Listado de archivos subidos para lecturas</div>
                <div class="panel-body">
                    <p>Formato Planilla</p>
                    <form role="form">
                      <div class="form-group">
                        <label for="ejemplo_email_1">Email</label>
                        <input type="email" class="form-control" id="ejemplo_email_1"
                               placeholder="Introduce tu email">
                      </div>
                      <div class="form-group">
                        <label for="ejemplo_password_1">Contraseña</label>
                        <input type="password" class="form-control" id="ejemplo_password_1" 
                               placeholder="Contraseña">
                      </div>
                      <div class="form-group">
                        <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
                        <input type="file" id="ejemplo_archivo_1">
                        <p class="help-block">Ejemplo de texto de ayuda.</p>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Activa esta casilla
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>

                <!-- Table -->
                <table class="table">
                    ...
                </table>
            </div>
        </div>
        <div class="col-md-3" role="main">
            <div class="panel panel-default">
                 <div class="panel-heading">Ultimos archivos cargados</div>
                <div class="panel-body">
                    <div class="list-group">
                        <div class="list-group"> 
                            <a href="#" class="list-group-item active"> <h4 class="list-group-item-heading"> <span class="glyphicon glyphicon-file"></span>nombre_archivo1233.xls</h4> <p class="list-group-item-text">2017-03-12 a las 15:45</p> 
                            </a>
                            <br>
                            <a href="#" class="list-group-item active"> <h4 class="list-group-item-heading"> <span class="glyphicon glyphicon-file"></span>nombre_archivo1233.xls</h4> <p class="list-group-item-text">2017-03-12 a las 15:45</p> 
                            </a>
                            <br>
                            <a href="#" class="list-group-item active"> <h4 class="list-group-item-heading"> <span class="glyphicon glyphicon-file"></span>nombre_archivo1233.xls</h4> <p class="list-group-item-text">2017-03-12 a las 15:45</p> 
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->

        

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/bootstrap/jquery.min.js"><\/script>')</script>
    <script src="./public/bootstrap/js/bootstrap.min.js"></script>
    <script src="./public/bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./public/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>
