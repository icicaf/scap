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
            <div class="tab-pane" id="3a">
                <h3>Claves de lectura <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#modal-crearClave" data-whatever="@mdo"><span class="glyphicon glyphicon-plus right" aria-hidden="true"></span> Crear clave</button></h3>                                                
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="tabla_claves" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Acronimo</th>
                                        <th>Requiere lectura</th>
                                        <th>Requiere foto</th>
                                        <th>Observación</th>
                                        <th>Fecha creación</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                       <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Acronimo</th>
                                        <th>Requiere lectura</th>
                                        <th>Requiere foto</th>
                                        <th>Observación</th>
                                        <th>Fecha creación</th>
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

<div class="modal fade" id="modal-crearClave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Clave</h4>
            </div>
            <div class="modal-body">
                <form id="formulario_nueva_clave" name="formulario_nueva_clave" onsubmit="return false;">
                    <div class="form-group">
                        <label class="control-label">Nombre clave</label>
                        <input type="text" class="form-control" name="clave_nombre" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Acronimo</label>
                        <input type="text" class="form-control" name="clave_acronimo" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Requiere lectura</label>
                        <input type="text" class="form-control" name="clave_requiere_lectura" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Require foto</label>
                        <input type="text" class="form-control" name="clave_requiere_foto" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Observacion</label>
                        <input type="text" class="form-control" name="clave_obs" >
                    </div>
                    <button type="submit" id="btn_crear_clave" class="btn btn-success">Confirmar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-editarClave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Editar clave</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_editar_ruta" name="formulario_editar_ruta" onsubmit="return false;">
            <div class="form-group" hidden>
                <label class="control-label">ID de clave
                <input type="text" class="form-control" name="editar_clave_id" id="editar_clave_id" readonly required>
            </div>
            <div class="form-group">
                <label class="control-label">Nombre clave
                <input type="text" class="form-control" name="editar_clave_nombre" id="editar_clave_nombre" required>
                </label><button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-md">Eliminar</button>
            </div>
            <div class="form-group">
                <label class="control-label">Acronimo clave</label>
                <input type="text" class="form-control" name="editar_clave_acronimo"  id="editar_clave_acronimo" required>
            </div>
            <div class="form-group">
                <label class="control-label">Require foto</label>
                <input type="text" class="form-control" name="editar_clave_requiere_foto" id="editar_clave_requiere_foto" required>
            </div>
            <div class="form-group">
                <label class="control-label">Require lectura</label>
                <input type="text" class="form-control" name="editar_clave_requiere_lectura" id="editar_clave_requiere_lectura" required>
            </div>
            <div class="form-group">
                <label class="control-label">Observacion</label>
                <input type="text" class="form-control" name="editar_clave_obs" id="editar_clave_obs" >
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

<div class="modal fade bs-example-modal-md" id="modal-eliminarClave" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Eliminar clave</h4>
            </div>
            <div class="modal-body">
                <form id="formulario_eliminar_clave" name="formulario_eliminar_clave" onsubmit="return false;">
                    <div class="form-group" hidden>
                        <label class="control-label">ID de clave
                        <input type="text" class="form-control" name="eliminar_clave_id" id="eliminar_clave_id" readonly required>
                    </div>
                    
                    <button type="submit" id="btn_eliminar_clave" class="btn btn-danger">Eliminar clave</button>
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
        var tabla_lecturas_recibidas;
        var tabla_claves;

        $('#btn_eliminar_clave').click( function() {
            $.eliminar_clave();
            $.mostrar_claves();
        });

         $.eliminar_clave = function () {
            var controlador = 'cclaves/eliminar_clave';
            var data = new FormData(document.forms.namedItem('formulario_eliminar_clave'));
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
                        $('#modal-eliminarClave').modal('toggle');
                        $('#modal-editarClave').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

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

        $.mostrar_claves = function() {
            tabla_claves = $('#tabla_claves').DataTable( {
                "bDestroy" : true,
                "ajax": 'cclaves/get_claves',
                "columns": [{"data":"clave_ID"},
                            {"data":"clave_nombre"},
                            {"data":"clave_acronimo"},
                            {"data":"clave_requiere_lectura"},
                            {"data":"clave_requiere_foto"},
                            {"data":"clave_obs"},
                            {"data":"clave_fecha_hora_creacion"}
                            ],
                "columnDefs": [{"targets": [ 0 ],
                                "visible": false,
                                "searchable": false}]
            });
        }



         $('#btn_crear_clave').click( function() {
            if($.validar_formulario_nueva_clave() == 0) {
                $.guardar_clave();
                $('#formulario_nueva_clave').each (function() {
                    this.reset();       
                });
                $.mostrar_claves();
            }
        });

        $.validar_formulario_nueva_clave = function() {
            var errores = 0;
            $('#formulario_nueva_clave').find('input').each(function() {
                if($(this).prop('required')) {
                    if($(this).val().length == 0) {
                        console.log('Errores:'+ $(this).attr('name'));
                        errores++;
                    }
                }
            });
            return errores;
        }


         $.guardar_clave = function () {
            var controlador = 'cclaves/insert_clave';
            var data = new FormData(document.forms.namedItem('formulario_nueva_clave'));
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
                        $('#modal-crearClave').modal('toggle');
                    }
                },error: function(jqxhr,textStatus,error){}
            });
        }

        $.mostrar_lecturas_recibidas();
        $.mostrar_claves();

        $('#tabla_claves tbody').on( 'dblclick', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }else {
                tabla_claves.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }

            if(typeof tabla_claves.row(this).index() === 'undefined') {
            }else{
                index = tabla_claves.row(this).index();
               
                $('#eliminar_clave_id').val(tabla_claves.row(index).data()['clave_ID']);                
                
                $('#editar_id').val(tabla_claves.row(index).data()['clave_ID']);
                $('#editar_clave_nombre').val(tabla_claves.row(index).data()['clave_nombre']);
                $('#editar_clave_acronimo').val(tabla_claves.row(index).data()['clave_acronimo']);
                $('#editar_clave_obs').val(tabla_claves.row(index).data()['clave_obs']);
                $('#editar_clave_requiere_foto').val(tabla_claves.row(index).data()['clave_requiere_foto']);
                $('#editar_clave_requiere_lectura').val(tabla_claves.row(index).data()['clave_requiere_lectura']);
                $('#modal-editarClave').modal('toggle');
            }
        });
    });
</script>