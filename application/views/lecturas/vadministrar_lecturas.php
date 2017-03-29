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
                <a  href="#1a" data-toggle="tab">Estado de lecturas</a>
            </li>
            <li>
                <a  href="#2a" data-toggle="tab">Carga de lecturas</a>
            </li>
            <li>
                <a  href="#3a" data-toggle="tab">Claves de lecturas</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <h3>Estado de lecturas</h3>
                <div class="panel-body">
                
                </div>

            </div>
            <div class="tab-pane" id="2a">
                <h3>Lecturas <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#modal-cargarLectura" data-whatever="@mdo"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Cargar lecturas</button></h3>
                <div class="panel-defualt">
                    Formato planilla : <a href="<?php base_url(); ?>public/planillas/planilla_carga_lectura.xlsx">planilla_carga_lectura.xlsx</a>
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
        <h4 class="modal-title" id="exampleModalLabel">Carga de lectura</h4>
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

        $('#btn_cargar_lectura').click( function() {
            if($.validar_formulario_editar_ruta() == 0) {
                $.cargar_lectura();
            }
            else
            {
                console.log($.validar_formulario_editar_ruta());
            }
        });

        $.validar_formulario_editar_ruta = function() {
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
    });
</script>