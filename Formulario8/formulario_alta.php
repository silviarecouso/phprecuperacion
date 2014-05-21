<?php
require_once 'conecta.php'; 
require_once 'proceso_alta';
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
        <h1>Alta alumno</h1>
           <ul>           
                <li><a href="listado_alumnos.php">Listado</a></li>
          </ul>
        
        <form action="proceso_alta.php" method="GET">
            <div>Nombre completo: <input type="text" name="nombre_completo"/>
            </div>
            <div> Fecha de Nacimiento<input type="date" name="fecha_nacimiento"/></div>
            </div>
            <div> Ciclo<input type="text" name="ciclo"/></div>
            </div>
            <div> Nota media<input type="text" name="notamedia"/></div>
            </div>
            <input type="submit" value="Grabar" />
        </form>
    </body>
</html>

