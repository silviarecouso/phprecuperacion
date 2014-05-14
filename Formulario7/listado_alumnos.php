<?php
require_once 'funciones_bd.php'; 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Alumnos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Listado de Alumnos</div>
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM alumno";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                echo "Error";
            } else {
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Nombre</th>";
                echo "<th>Fecha de Nacimiento</th>";
                echo "<th>Ciclo </th>";
                echo "<th>Nota media</th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['Id']."</td>";
                    echo "<td>";
                    echo "<a href=".$registro['Nombre']." target='_blank'>";
                    echo $registro['Nombre'];
                    echo "</a>";
                    echo "</td>";
                    echo "<td>";
                    $destino="formulario_editar_software.php?id=".$registro['id'];
                    echo "<a href=".$destino.">Editar</a></td>";
                    echo "</td>";
                    echo "<td>";
                    $destino="confirmar_eliminar_software.php?id=".$registro['id'];
                    echo "<a href=".$destino.">Eliminar</a></td>";                    
                    echo "</td>";          
                }
                echo "</table>";
            }
            
            $bd = null;
        ?>   
    </body>
</html>
