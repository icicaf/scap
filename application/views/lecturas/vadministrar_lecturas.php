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
                <a  href="#1a" data-toggle="tab">Cargar lecturas</a>
            </li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <h3>Cargar excel <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#modal-cargarLectura" data-whatever="@mdo"><span class="glyphicon glyphicon-plus right" aria-hidden="true"></span> Cargar archivo</button></h3>
        </div>
  </div>
</div> 
<!-- /container -->

<div class="modal fade" id="modal-cargarLectura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Ruta</h4>
      </div>
      <div class="modal-body">
        <form id="formulario_cargar_lectura" name="formulario_cargar_lectura" onsubmit="return false;">
            <div class="form-group">
                <label class="control-label">Archivo</label>
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
           $.cargar_lectura();
        });

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