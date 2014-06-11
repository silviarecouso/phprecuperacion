<?php
session_start();
require_once 'conecta.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Recuperacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="formulario">&nbsp;</div>
        <h1>Confirmar Borrado</h1>
        <ul>
            <li><a href="formulario_alta.php">Inicio</a></li>            
        <li><a href="listado_alumnos.php.php">Listado</a></li>
        </ul>
                <?php

$_SESSION['id'] = (isset ($_REQUEST['id']))?
        $_REQUEST['id']:0;

$bd = conectaBd();

$consulta = "SELECT * FROM alumno WHERE Id=".$_SESSION['id'];
$resultado = $bd ->query($consulta);

if (!$resultado){
    $url = "error.php?msg_error=error_Consulta_Editar";
   header('Location:', $url);
    
} else {
       $registro = $resultado->fetch();
       
      if(!$registro) {
         $url = "error.php?msg_error=Error:_No_Se_borra";
        header('Location:'.$url);
           
       } else {
           
           echo "<table border=1>";
           echo "<tr>";
           echo "<td>Id Categoria</td>"; 
           echo "<td>";
           echo $registro['id'];
           echo "</td>";
           echo "</tr>";
        
           echo "<tr>";
           echo "<td>NombreCompleto</td>";
           echo "<td>";
           echo $registro['nombre_completo'];
           echo "</td>";
           echo "</tr>";
           
           echo "<tr>";
           echo "<td>Fecha Nacimiento</td>"; 
           echo "<td>";
           echo $registro['Fecha_nacimiento'];
           echo "</td>";
           echo "</tr>";
           
           echo "</table>";
       }
  }
?>
                <ul>
        <li><a href="borrar.php">Borrar</a></li>            
        </ul>
    </body>
</html>

