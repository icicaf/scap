<table class="table">
    <thead>
        <th>ID</th>
        <th>Código de ruta</th>
        <th>Nombre de ruta</th>
        <th>Fecha de creación</th>
        <th>Observación</th>
        <th>Localidad</th>
    </thead>
    <tbody>
        <?php 
            foreach ($rutas as $key) {
                echo '<tr>
                        <td>'.$key['ruta_ID'].'</td>
                        <td>'.$key['ruta_codigo'].'</td>
                        <td>'.$key['ruta_nombre'].'</td>
                        <td>'.$key['ruta_fecha_hora_creacion'].'</td>
                        <td>'.$key['ruta_obs'].'</td>
                        <td>'.$key['ruta_localidad_ID'].'</td>
                    </tr>';
            }
        ?>
    </tbody>
</table>