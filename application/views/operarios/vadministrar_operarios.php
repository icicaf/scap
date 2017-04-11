<div class="container theme-showcase" role="main">
    <div class="container">
        <h5>
            <ol class="breadcrumb">
                <li class="#">Inicio</li>
                <li class="#">Operarios</li>
                <li class="active">Administrar operadores</li>
            </ol>
        </h5>
    </div>
    <div id="exTab1" class="container"> 
        <ul  class="nav nav-pills">
            <li class="active">
                <a  href="#1a" data-toggle="tab">Listado de operadores</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <h3>Todos los operadores <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#modal-crearOperador" data-whatever="@mdo"><span class="glyphicon glyphicon-plus right" aria-hidden="true"></span> Añadir operador</button></h3>                                                
                <div class="col-lg-11">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="tabla_operadores" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Login</th>
                                        <th>Pass</th>
                                        <th>Nombre</th>
                                        <th>Observación</th>
                                        <th>Creación</th>
                                        <th>Fecha Sync</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Login</th>
                                        <th>Pass</th>
                                        <th>Nombre</th>
                                        <th>Observación</th>
                                        <th>Creación</th>
                                        <th>Fecha Sync</th>
                                        <th>status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div> 
<!-- /container -->
<div class="modal fade" id="modal-crearOperador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Operario</h4>
            </div>
            <div class="modal-body">
                <form id="formulario_nuevo_operador" name="formulario_nuevo_operador" onsubmit="return false;">
                    <div class="form-group">
                        <label class="control-label">Login</label>
                        <input type="text" class="form-control" name="login" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Pass</label>
                        <input type="text" class="form-control" name="pass" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Observación</label>
                        <input type="text" class="form-control" name="obs" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estado</label>
                        <input type="text" class="form-control" name="status" value="Activo" readonly required>
                    </div>
                    <button type="submit" id="btn_insertar_operador" class="btn btn-success">Confirmar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-editarOperador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Editar ruta</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_editar_operador" name="formulario_editar_operador" onsubmit="return false;">
            <div class="form-group" hidden>
                <label class="control-label">ID de operario</label>
                <input type="text" class="form-control" name="editar_id" id="editar_id" readonly required>
            </div>
            <div class="form-group">
                <label class="control-label">Login
                <input type="text" class="form-control" name="editar_login" id="editar_login" readonly required>
                </label><button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-md">Eliminar</button>

            </div>
            <div class="form-group">
                <label class="control-label">Pass</label>
                <input type="text" class="form-control" name="editar_pass" id="editar_pass" required>
            </div>
            <div class="form-group">
                <label class="control-label">Nombre</label>
                <input type="text" class="form-control" name="editar_nombre" id="editar_nombre" >
            </div>
            <div class="form-group">
                <label class="control-label">Observación</label>
                <input type="text" class="form-control" name="editar_obs" id="editar_obs" >
            </div>
            <div class="form-group">
                <label class="control-label">Estado</label>
                <select id="" class="form-control" name="editar_estatus" id="editar_estatus" disabled required>
                    <option value="1" selected>Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
            <button type="submit" id="btn_editar_operador" class="btn btn-success">Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-md" id="modal-eliminarOperador" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Eliminar operador</h4>
            </div>
            <div class="modal-body">
                <form id="formulario_eliminar_operador" name="formulario_eliminar_operador" onsubmit="return false;">
                    <div class="form-group" hidden>
                        <label class="control-label">ID de operario</label>
                        <input type="text" class="form-control" name="eliminar_id" id="eliminar_id" readonly required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Login</label>
                        <input type="text" class="form-control" name="eliminar_login" id="eliminar_login" readonly required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input type="text" class="form-control" name="eliminar_nombre" id="eliminar_nombre" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estado</label>
                        <input type="text" class="form-control" name="eliminar_status" id="eliminar_status" readonly>
                    </div>
                    <button type="submit" id="btn_eliminar_operador" class="btn btn-danger">Eliminar operador</button>
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
        var tabla_operadores;

        $('#btn_insertar_operador').click( function() {
            if($.validar_formulario_nuevo_operador() == 0) {
                $.guardar_operador();
                $('#formulario_nuevo_operador').each (function() {
                    this.reset();       
                });
                $.mostrar_operadores();
            }
        });

        $('#btn_editar_operador').click( function() {
            if($.validar_formulario_editar_operador() == 0) {
                $.editar_ruta();
                $('#formulario_editar_operador').each (function() {
                    this.reset();       
                });
                $.mostrar_operadores();
            }
        });

        $('#btn_eliminar_operador').click( function() {
            $.eliminar_operario();
            $.mostrar_operadores();
        });

        $.validar_formulario_nuevo_operador = function() {
            var errores = 0;
            $('#formulario_nuevo_operador').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.validar_formulario_editar_operador = function() {
            var errores = 0;
            $('#formulario_editar_operador').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.guardar_operador = function () {
            var controlador = 'coperadores/insertar_operador';
            var data = new FormData(document.forms.namedItem('formulario_nuevo_operador'));
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
                        $('#modal-crearOperador').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

        $.editar_ruta = function () {
            var controlador = 'coperadores/editar_operador';
            var data = new FormData(document.forms.namedItem('formulario_editar_operador'));
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
                        $('#modal-editarOperador').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

        $.eliminar_operario = function () {
            var controlador = 'coperadores/eliminar_operador';
            var data = new FormData(document.forms.namedItem('formulario_eliminar_operador'));
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
                        $('#modal-eliminarOperador').modal('toggle');
                        $('#modal-editarOperador').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

        $.mostrar_operadores = function() {
            tabla_operadores = $('#tabla_operadores').DataTable( {
                "bDestroy" : true,
                "ajax": 'coperadores/get_operadores',
                "columns": [{"data":"operador_ID"},
                            {"data":"operador_login"},
                            {"data":"operador_pass"},
                            {"data":"operador_nombre"},
                            {"data":"operador_obs"},
                            {"data":"operador_fecha_hora_creacion"},
                            {"data":"operador_fecha_hora_sync"},
                            {"data":"operador_status"}],
                "columnDefs": [{"targets": [ 0 ],
                                "visible": false,
                                "searchable": false}]
            });
            
            //
            // tabla_operadores.on( 'order.dt search.dt', function () {
            //     t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            //         cell.innerHTML = i+1;
            //     } );
            // } ).draw();
        }

        $.mostrar_operadores();

        $('#tabla_operadores tbody').on( 'dblclick', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }else {
                tabla_operadores.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

            if(typeof tabla_operadores.row(this).index() === 'undefined') {
            }else{
                index = tabla_operadores.row(this).index();
                $('#eliminar_id').val(tabla_operadores.row(index).data()['operador_ID']);
                $('#eliminar_login').val(tabla_operadores.row(index).data()['operador_login']);
                $('#eliminar_nombre').val(tabla_operadores.row(index).data()['operador_nombre']);
                $('#eliminar_status').val(tabla_operadores.row(index).data()['operador_status']);
                
                $('#editar_id').val(tabla_operadores.row(index).data()['operador_ID']);
                $('#editar_login').val(tabla_operadores.row(index).data()['operador_login']);
                $('#editar_pass').val(tabla_operadores.row(index).data()['operador_pass']);
                $('#editar_nombre').val(tabla_operadores.row(index).data()['operador_nombre']);
                $('#editar_obs').val(tabla_operadores.row(index).data()['operador_obs']);
                $('#editar_status').val(tabla_operadores.row(index).data()['operador_status']);
                
                $('#modal-editarOperador').modal('toggle');
            }
        });

        $('#example').popover('toggle')
    });
</script>