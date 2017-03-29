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
    <link href="<?php base_url(); ?>public/bootstrap/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./public/bootstrap/js/ie-emulation-modes-warning.js"></script>


 <script src="./public/bootstrap/js/jquery.mins.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./public/bootstrap/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#scapMenuPrincipal_administrarRutas').click(function() {
                var url = '<?php base_url(); ?>cscap/rutas';
                $('#div_panel_central').load(url, function(response,status,xhr) {
                    console.log('cargado : '+url);
                });
            })

            $('#scapMenuPrincipal_administrarLecturas').click(function() {
                var url = '<?php base_url(); ?>cscap/lecturas';
                $('#div_panel_central').load(url, function(response,status,xhr) {
                    console.log('cargado : '+url);
                });
            })

            $('#scapMenuPrincipal_administrarOperadores').click(function() {
                var url = '<?php base_url(); ?>cscap/operadores';
                $('#div_panel_central').load(url, function(response,status,xhr) {
                    console.log('cargado : '+url);
                });
            })

            $('#scapMenuPrincipal_administrarDispositivos').click(function() {
                var url = '<?php base_url(); ?>cscap/dispositivos';
                $('#div_panel_central').load(url, function(response,status,xhr) {
                    console.log('cargado : '+url);
                });
            })
        });
    </script>

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
                            <li><a id="scapMenuPrincipal_administrarLecturas" href="#">Administrar lecturas</a></li>
                            <li role="separator" class="divider"></li>
                            <!-- <li><a href="#">Estado de lecturas</a></li> -->
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rutas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="scapMenuPrincipal_administrarRutas" href="#">Administrar rutas</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operadores <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="scapMenuPrincipal_administrarOperadores" href="#">Administrar Operadores</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dispositivos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="scapMenuPrincipal_administrarDispositivos" href="#">Administrar dispositivos</a></li>
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
                            <li><a href="<?php base_url(); ?>../scap.cl">Cerrar sesión</a></li> 
                        </ul> 
                    </li> 
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
 
    <div class="container theme-showcase" role="main">
        

        <div id="div_panel_central">
            <ol class="breadcrumb">
                <li class="active">Inicio</li>
            </ol>
        </div>
    </div> <!-- /container -->
  </body>

</html>
