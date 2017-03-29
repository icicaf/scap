<div class="container theme-showcase" role="main">
    <div class="container">
        <h5>
            <ol class="breadcrumb">
                <li class="#">Inicio</li>
                <li class="#">Dispositivos</li>
                <li class="active">Administrar dispositivos</li>
            </ol>
        </h5>
    </div>
    <div id="exTab1" class="container"> 
        <ul  class="nav nav-pills">
            <li class="active">
                <a  href="#1a" data-toggle="tab">Listado de dispositivos</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <h3>Todos los dispositivos <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#modal-crearDispositivo" data-whatever="@mdo"><span class="glyphicon glyphicon-plus right" aria-hidden="true"></span> Añadir dispositivo</button></h3>                                                
                <div class="col-lg-11">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="tabla_dipositivos" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Imei</th>
                                        <th>Observación</th>
                                        <th>status</th>
                                        <th>Creación</th>
                                        <th>Propietario</th>
                                        <th>Función</th>
                                        <th>Fecha Sync</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Imei</th>
                                        <th>Observación</th>
                                        <th>status</th>
                                        <th>Creación</th>
                                        <th>Propietario</th>
                                        <th>Función</th>
                                        <th>Fecha Sync</th>
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
<div class="modal fade" id="modal-crearDispositivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Dispositivo</h4>
            </div>
            <div class="modal-body">
                <form id="formulario_nuevo_dispositivo" name="formulario_nuevo_dispositivo" onsubmit="return false;">
                    <div class="form-group">
                        <label class="control-label">imei</label>
                        <input type="text" class="form-control" name="imei" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">obs</label>
                        <input type="text" class="form-control" name="obs" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">creacion</label>
                        <input type="text" class="form-control" name="creacion" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Observación</label>
                        <input type="text" class="form-control" name="obs" >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <input type="text" class="form-control" name="status" value="1" readonly required>
                    </div>
                    <button type="submit" id="btn_insertar_dipositivo" class="btn btn-success">Confirmar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-editarDispositivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Editar ruta</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_editar_dispositivo" name="formulario_editar_dispositivo" onsubmit="return false;">
            <div class="form-group" hidden>
                <label class="control-label">ID de operario</label>
                <input type="text" class="form-control" name="editar_id" id="editar_id" readonly required>
            </div>
            <div class="form-group">
                <label class="control-label">imei
                <input type="text" class="form-control" name="editar_imei" id="editar_imei" readonly required>
                </label><button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-md">Eliminar</button>

            </div>
            <div class="form-group">
                <label class="control-label">obs</label>
                <input type="text" class="form-control" name="editar_obs" id="editar_obs" required>
            </div>
            <div class="form-group">
                <label class="control-label">creacion</label>
                <input type="text" class="form-control" name="editar_creacion" id="editar_creacion" >
            </div>
            <div class="form-group">
                <label class="control-label">Observación</label>
                <input type="text" class="form-control" name="editar_obs" id="editar_obs" >
            </div>
            <div class="form-group">
                <label class="control-label">Status</label>
                <input type="text" class="form-control" name="editar_status" id="editar_status">
            </div>
            <button type="submit" id="btn_editar_dispositivo" class="btn btn-success">Guardar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-md" id="modal-eliminardisositivo" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Eliminar disositivo</h4>
            </div>
            <div class="modal-body">
                <form id="formulario_eliminar_disositivo" name="formulario_eliminar_disositivo" onsubmit="return false;">
                    <div class="form-group" hidden>
                        <label class="control-label">ID de operario</label>
                        <input type="text" class="form-control" name="eliminar_id" id="eliminar_id" readonly required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">imei</label>
                        <input type="text" class="form-control" name="eliminar_imei" id="eliminar_imei" readonly required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">creacion</label>
                        <input type="text" class="form-control" name="eliminar_creacion" id="eliminar_creacion" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <input type="text" class="form-control" name="eliminar_status" id="eliminar_status" readonly>
                    </div>
                    <button type="submit" id="btn_eliminar_disositivo" class="btn btn-danger">Eliminar disositivo</button>
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
        var tabla_dipositivos;

        $('#btn_insertar_dipositivo').click( function() {
            if($.validar_formulario_nuevo_dispositivo() == 0) {
                $.guardar_dispositivo();
                $('#formulario_nuevo_dispositivo').each (function() {
                    this.reset();       
                });
                $.mostrar_disositivoes();
            }
        });

        $('#btn_editar_dispositivo').click( function() {
            if($.validar_formulario_editar_dispositivo() == 0) {
                $.editar_ruta();
                $('#formulario_editar_dispositivo').each (function() {
                    this.reset();       
                });
                $.mostrar_disositivoes();
            }
        });

        $('#btn_eliminar_disositivo').click( function() {
            $.eliminar_operario();
            $.mostrar_disositivoes();
        });

        $.validar_formulario_nuevo_dispositivo = function() {
            var errores = 0;
            $('#formulario_nuevo_dispositivo').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.validar_formulario_editar_dispositivo = function() {
            var errores = 0;
            $('#formulario_editar_dispositivo').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.guardar_dispositivo = function () {
            var controlador = 'cdisositivoes/insertar_disositivo';
            var data = new FormData(document.forms.namedItem('formulario_nuevo_dispositivo'));
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
                        $('#modal-crearDispositivo').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

        $.editar_ruta = function () {
            var controlador = 'cdisositivoes/editar_dispositivo';
            var data = new FormData(document.forms.namedItem('formulario_editar_dispositivo'));
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
                        $('#modal-editarDispositivo').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

        $.eliminar_operario = function () {
            var controlador = 'cdisositivoes/eliminar_disositivo';
            var data = new FormData(document.forms.namedItem('formulario_eliminar_disositivo'));
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
                        $('#modal-eliminardisositivo').modal('toggle');
                        $('#modal-editarDispositivo').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

        $.mostrar_disositivoes = function() {
            tabla_dipositivos = $('#tabla_dipositivos').DataTable( {
                "bDestroy" : true,
                "ajax": 'cdisositivoes/get_disositivoes',
                "columns": [{"data":"disositivo_ID"},
                            {"data":"disositivo_imei"},
                            {"data":"disositivo_obs"},
                            {"data":"disositivo_creacion"},
                            {"data":"disositivo_obs"},
                            {"data":"disositivo_fecha_hora_creacion"},
                            {"data":"disositivo_fecha_hora_sync"},
                            {"data":"disositivo_status"}],
                "columnDefs": [{"targets": [ 0 ],
                                "visible": false,
                                "searchable": false}]
            });
            
            //
            // tabla_dipositivos.on( 'order.dt search.dt', function () {
            //     t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            //         cell.innerHTML = i+1;
            //     } );
            // } ).draw();
        }

        $.mostrar_disositivoes();

        $('#tabla_dipositivos tbody').on( 'dblclick', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }else {
                tabla_dipositivos.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

            if(typeof tabla_dipositivos.row(this).index() === 'undefined') {
            }else{
                index = tabla_dipositivos.row(this).index();
                $('#eliminar_id').val(tabla_dipositivos.row(index).data()['disositivo_ID']);
                $('#eliminar_imei').val(tabla_dipositivos.row(index).data()['disositivo_imei']);
                $('#eliminar_creacion').val(tabla_dipositivos.row(index).data()['disositivo_creacion']);
                $('#eliminar_status').val(tabla_dipositivos.row(index).data()['disositivo_status']);
                
                $('#editar_id').val(tabla_dipositivos.row(index).data()['disositivo_ID']);
                $('#editar_imei').val(tabla_dipositivos.row(index).data()['disositivo_imei']);
                $('#editar_obs').val(tabla_dipositivos.row(index).data()['disositivo_obs']);
                $('#editar_creacion').val(tabla_dipositivos.row(index).data()['disositivo_creacion']);
                $('#editar_status').val(tabla_dipositivos.row(index).data()['disositivo_status']);
                
                $('#modal-editarDispositivo').modal('toggle');
            }
        });

        $('#example').popover('toggle')
    });
</script>