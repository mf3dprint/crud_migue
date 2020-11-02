<a href=agregar.php>Insertar Nueva Imagen</a>

<?php
include "conexion.php";

    //consulta para traer el producto
    $sql = "SELECT * FROM images_tabla ORDER BY id ASC";

    //ejecutar la consulta
    $resultado = $conn->query($sql);

    #Las partes de la tabla que no se repiten deben quedar fuera del bucle
    $table="<table>
                <thead>
                    <tr>
                        <th>id</th>
                       <th>imagen</th>
                        <th>creado</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>";
    #Vamos a recorrer el puntero con los datos                    
    while ($fila = $resultado->fetch_assoc()) {
        #Empezamos a guardar las filas concatenando a $table
        #Aquí, dado que estamos en una concatenación, no ponemos " en las keys de $fila
        $table.="<tr>
                    <td>$fila[id]</td>
                    <td>$fila[nombre]</td>
                    <td>$fila[creado]</td>
             
                <td><a href=\"Vista.php?order&id=$fila[id]\">Ver Imagen</a></td>
                    <td><a href=\"borrar.php?order&id=$fila[id]\">Borrar</a></td>
                </tr>";
    }
    #En la línea anterior cerramos el bucle
    #Aquí la parte restante de la tabla que no se repite
    $table.="</tbody>
            </table>";
    #Finalmente, imprimimos la tabla
    echo $table;