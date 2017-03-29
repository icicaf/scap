<div class="container theme-showcase" role="main">
    <div class="container">
        <h5>
            <ol class="breadcrumb">
                <li class="#">Inicio</li>
                <li class="#">Lecturas</li>
                <li class="active">Administrar lecturas</li>
            </ol>
        </h5>
    </div>

    <div id="exTab1" class="container"> 
        <ul  class="nav nav-pills">
            <li class="active">
                <a  href="#1a" data-toggle="tab">Lecturas completadas</a>
            </li>
            <li>
                <a  href="#2a" data-toggle="tab">Carga de lecturas</a>
            </li>
            <li>
                <a  href="#3a" data-toggle="tab">Claves de lectura</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <h3>Descargar lecturas completadas</h3>
                <form name="formulario_descargar_lectura" id="formulario_descargar_lectura" onsubmit="return false;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group-line">
                                <div class="col-sm-4">
                                    <label>Rutas</label>
                                    <select class="form-control" id="ruta_descarga" name="ruta_descarga" required>
                                        <option value="">Seleccione una ruta</option>';
                                    <?php
                                        foreach ($rutas as $key) {
                                            echo '<option value="'.$key['ruta_codigo'].'">'.$key['ruta_nombre'].'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label>Procesos</label>
                                    <select class="form-control" id="proceso_descarga" name="proceso_descarga" required>
                                        <option value="">Seleccione un proceso</option>';
                                    <?php
                                        foreach ($procesos as $key) {
                                            echo '<option value="'.$key['lectura_recibida_id_proceso'].'">'.$key['lectura_recibida_id_proceso'].'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <label></label>
                                    <button type="submit" id="btn_mostrar_lectura" class="btn btn-default btn-md form-control"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> Descargar lecturas</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                    <div class="table-responsive">
                <table id="tabla_lecturas_recibidas" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Servicio</th>
                            <th>Proceso</th>
                            <th>Lectura</th>
                            <th>Clave</th>
                            <th>Nombre Foto</th>
                            <th>Fecha lectura</th>
                            <th>Operador</th>
                            <th>Observación</th>
                            <th>Fecha Sync.</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Servicio</th>
                            <th>Proceso</th>
                            <th>Lectura</th>
                            <th>Clave</th>
                            <th>Nombre Foto</th>
                            <th>Fecha lectura</th>
                            <th>Operador</th>
                            <th>Observación</th>
                            <th>Fecha Sync.</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
            </div>
                </form>
            </div>
            <div class="tab-pane" id="2a">
                <h3>Lecturas </h3>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group-line">
                            <div class="col-sm-4">
                                <label>Formato planilla : </label>
                                <button type="button" class="btn btn-default btn-md"><a href="<?php base_url(); ?>public/planillas/planilla_carga_lectura.xlsx">planilla_carga_lectura.xlsx</a></button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#modal-cargarLectura" data-whatever="@mdo"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Cargar lecturas</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div> 
<!-- /container -->

<div class="modal fade" id="modal-cargarLectura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Descargar lecturas</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_cargar_lectura" name="formulario_cargar_lectura" onsubmit="return false;">
            <div class="form-group">
                <label class="control-label">Proceso de lectura</label>
                <input type="text" class="form-control" name="proceso" id="proceso" required>
            </div>
            <div class="form-group">
                <label for="listaDeshabilitada">Ruta</label>
                <select id="" class="form-control" name="ruta" id="ruta"required>
                    <option value="">Seleccione una ruta</option>';
                <?php
                    foreach ($rutas as $key) {
                        echo '<option value="'.$key['ruta_codigo'].'">'.$key['ruta_nombre'].'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Archivo .xls
                </label>
                <input type="file" class="form-control" name="planilla" required>
            </div>
            <button type="submit" id="btn_cargar_lectura" class="btn btn-success">Confirmar</button>
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
        var tabla_lecturas;
        var tabla_lecturas_recibidas;

        $('#btn_cargar_lectura').click( function() {
            if($.validar_formulario_cargar_lectura() == 0) {
                $.mostrar_lecturas_recibidas();
            }
            else
            {
                console.log($.validar_formulario_cargar_lectura());
            }
        });

        $('#btn_mostrar_lectura').click( function() {
            
            if($.validar_formulario_descargar_lectura() == 0) {
                //$.descargar_lectura();
                $.post("clecturas/descargar_excel", { proceso_descarga: $("#proceso_descarga").val()},
                   function(data) {
                     


                   });
            }
            else
            {
                console.log($.validar_formulario_descargar_lectura());
            }
        });

        $.validar_formulario_cargar_lectura = function() {
            var errores = 0;
            //valido input
            $('#formulario_cargar_lectura').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });

            $('#formulario_cargar_lectura').find('select').each(function() {
                if($(this).prop('required')) {
                    if($(this).val() == '') {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.validar_formulario_descargar_lectura = function() {
            var errores = 0;
            $('#formulario_descargar_lectura').find('select').each(function() {
                if($(this).prop('required')) {
                    if($(this).val() == '') {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }

        $.cargar_lectura = function () {
            var controlador = 'clecturas/cargar_excel';
            var data = new FormData(document.forms.namedItem('formulario_cargar_lectura'));
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
                        console.log('Subido correctamente');
                        $('#modal-cargarLectura').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){
                }
            });
        }

        $.descargar_lectura = function () {
            var controlador = 'clecturas/descargar_excel';
            var data = new FormData(document.forms.namedItem('formulario_descargar_lectura'));
            $.ajax({
                async:false, 
                type:'POST',
                url:controlador,
                data:data,
                processData:false,
                contentType:false,
                success:function(msg) {
                   
                
                },error: function(jqxhr,textStatus,error){
                }
            });
        }

        $.mostrar_lecturas_recibidas = function() {
            tabla_lecturas_recibidas = $('#tabla_lecturas_recibidas').DataTable( {
                "bDestroy" : true,
                "ajax": 'clecturas_recibidas/get_all_lecturas_recibidas',
                "columns": [{"data":"lectura_recibida_ID"},
                            {"data":"lectura_recibida_id_servicio"},
                            {"data":"lectura_recibida_id_proceso"},
                            {"data":"lectura_recibida_actual"},
                            {"data":"lectura_recibida_clave"},
                            {"data":"lectura_recibida_nombre_foto"},
                            {"data":"lectura_recibida_fecha_hora_captura"},
                            {"data":"lectura_recibida_operador_login"},
                            {"data":"lectura_recibida_obs"},
                            {"data":"lectura_recibida_fecha_hora_sincronizacion"}
                            ],
                "columnDefs": [{"targets": [ 0 ],
                                "visible": false,
                                "searchable": false}]
            });
        }

        $.mostrar_lecturas_recibidas();
    });
</script>