<div class="container theme-showcase" role="main">
    <div class="container">
        <h5>
            <ol class="breadcrumb">
                <li class="#">Inicio</li>
                <li class="#">Rutas</li>
                <li class="active">Administrar rutas</li>
            </ol>
        </h5>
    </div>

    <div id="exTab1" class="container"> 
        <ul  class="nav nav-pills">
            <li class="active">
                <a  href="#1a" data-toggle="tab">Listado de rutas</a>
            </li>
            <li>
                <a href="#2a" data-toggle="tab">Asignar rutas</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <h3>Todas las rutas de lecturas <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#modal-crearRuta" data-whatever="@mdo"><span class="glyphicon glyphicon-plus right" aria-hidden="true"></span> Añadir ruta</button></h3>                                                

                <div class="col-lg-11">
                    <div class="panel-body">
                        <div class="table-responsive">

                            <table id="tabla_rutas" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Observación</th>
                                        <th>Creación</th>
                                        <th>Localidad</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Observación</th>
                                        <th>Creación</th>
                                        <th>Localidad</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="2a">
                <h3>Creación de nuevas rutas de lectura</h3>
                <div class="panel-body">
                
                </div>
            </div>
        </div>
  </div>
</div> 
<!-- /container -->

<div class="modal fade" id="modal-crearRuta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Ruta</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_nueva_ruta" name="formulario_nueva_ruta" onsubmit="return false;">
            <div class="form-group">
                <label class="control-label">Código de ruta</label>
                <input type="text" class="form-control" name="codigo" required>
            </div>
            <div class="form-group">
                <label class="control-label">Nombre ruta</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label class="control-label">Observación</label>
                <input type="text" class="form-control" name="observacion" >
            </div>
            <button type="submit" id="btn_crear_ruta" class="btn btn-success">Confirmar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-editarRuta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Editar ruta</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_editar_ruta" name="formulario_editar_ruta" onsubmit="return false;">
            <div class="form-group" hidden>
                <label class="control-label">ID de ruta
                <input type="text" class="form-control" name="editar_id" id="editar_id" readonly required>
            </div>
            <div class="form-group">
                <label class="control-label">Código de ruta
                <input type="text" class="form-control" name="editar_codigo" id="editar_codigo" required>
                </label><button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-md">Eliminar</button>
            </div>
            <div class="form-group">
                <label class="control-label">Nombre ruta</label>
                <input type="text" class="form-control" name="editar_nombre" id="editar_nombre" required>
            </div>
            <div class="form-group">
                <label class="control-label">Observación</label>
                <input type="text" class="form-control" name="editar_observacion" id="editar_observacion" >
            </div>
            <button type="submit" id="btn_editar_ruta" class="btn btn-success">Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-md" id="modal-eliminarRuta" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Eliminar ruta</h4>
            </div>
            <div class="modal-body">
                <form id="formulario_eliminar_ruta" name="formulario_eliminar_ruta" onsubmit="return false;">
                    <div class="form-group" hidden>
                        <label class="control-label">ID de ruta
                        <input type="text" class="form-control" name="eliminar_id" id="eliminar_id" readonly required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Código de ruta
                        <input type="text" class="form-control" value="" id="eliminar_codigo" readonly required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nombre de ruta
                        <input type="text" class="form-control" value="" id="eliminar_nombre"  readonly required>
                    </div>
                    <button type="submit" id="btn_eliminar_ruta" class="btn btn-danger">Eliminar ruta</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        var tabla_rutas;

        $('#btn_crear_ruta').click( function() {
            console.log('btn_crear_ruta : '+$.validar_formulario_nueva_ruta());

            if($.validar_formulario_nueva_ruta() == 0){
                $.guardar_ruta();
                 $.cargar_tabla();
            }else{
                console.log('ERROR AL GUARDAR RUTA');
            }
        });

        $('#btn_editar_ruta').click( function() {
            console.log('btn_editar_ruta : '+$.validar_formulario_editar_ruta());

            if($.validar_formulario_editar_ruta() == 0){
                $.editar_ruta();
                $.cargar_tabla();
            }else{
                console.log('ERROR AL EDITAR RUTA');
            }
        });

        $('#btn_eliminar_ruta').click( function() {
            $.eliminar_ruta();
             $.cargar_tabla();
        });

        $.validar_formulario_nueva_ruta = function() {
            var errores = 0;
            $('#formulario_nueva_ruta').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.validar_formulario_editar_ruta = function() {
            var errores = 0;
            $('#formulario_editar_ruta').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.guardar_ruta = function () {
            var controlador = 'crutas/insert_ruta';
            var data = new FormData(document.forms.namedItem('formulario_nueva_ruta'));
            $.ajax({
                async:false, 
                type:'POST',
                url:controlador,
                data:data,
                processData:false,
                contentType:false,
                success:function(msg) {
                    console.log(msg);
                    if(msg > 0) {
                        console.log('Ingresado correctamente');
                        $('#modal-crearRuta').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){
                }
            });
        }

        $.editar_ruta = function () {
            var controlador = 'crutas/editar_ruta';
            var data = new FormData(document.forms.namedItem('formulario_editar_ruta'));
            $.ajax({
                async:false, 
                type:'POST',
                url:controlador,
                data:data,
                processData:false,
                contentType:false,
                success:function(msg) {
                    console.log(msg);
                    if(msg > 0) {
                        console.log('Editado correctamente');
                        $('#modal-editarRuta').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){
                }
            });
        }

        $.eliminar_ruta = function () {
            var controlador = 'crutas/eliminar_ruta';
            var data = new FormData(document.forms.namedItem('formulario_eliminar_ruta'));
            $.ajax({
                async:false, 
                type:'POST',
                url:controlador,
                data:data,
                processData:false,
                contentType:false,
                success:function(msg) {
                    console.log(msg);
                    if(msg > 0) {
                        console.log('Eliminado correctamente');
                        
                        $('#modal-eliminarRuta').modal('toggle');
                        $('#modal-editarRuta').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){
                }
            });
        }

        $.cargar_tabla = function()
        {
            tabla_rutas = $('#tabla_rutas').DataTable( {
                "bDestroy" : true,
                "ajax": 'crutas/get_rutas',
                "columns": [{"data":"ruta_ID"},
                            {"data":"ruta_codigo"},
                            {"data":"ruta_nombre"},
                            {"data":"ruta_obs"},
                            {"data":"ruta_fecha_hora_creacion"},
                            {"data":"ruta_localidad_ID"}],
                "columnDefs": [
                                {
                                    "targets": [ 0 ],
                                    "visible": false,
                                    "searchable": false
                                }]   
            });

            // tabla_rutas.on( 'order.dt search.dt', function () {
            //     t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            //         cell.innerHTML = i+1;
            //     } );
            // } ).draw();
        }

        $.cargar_tabla();

        $('#tabla_rutas tbody').on( 'dblclick', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                //$(this).removeClass('selected');
            }else {
                tabla_rutas.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

            if(typeof tabla_rutas.row(this).index() === 'undefined'){
            }else{
                index = tabla_rutas.row(this).index();
                $('#editar_id').val(tabla_rutas.row(index).data()['ruta_ID']);
                $('#eliminar_id').val(tabla_rutas.row(index).data()['ruta_ID']);
                $('#eliminar_codigo').val(tabla_rutas.row(index).data()['ruta_codigo']);
                $('#eliminar_nombre').val(tabla_rutas.row(index).data()['ruta_nombre']);
                $('#editar_codigo').val(tabla_rutas.row(index).data()['ruta_codigo']);
                $('#editar_nombre').val(tabla_rutas.row(index).data()['ruta_nombre']);
                $('#editar_observacion').val(tabla_rutas.row(index).data()['ruta_obs']);
                $('#modal-editarRuta').modal('toggle');
            }
        });


        $('#example').popover('toggle')
    });

</script>