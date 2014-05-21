<?php

require_once 'conecta.php'; 

$db = conectaBd();
    $nombre = $_REQUEST['nombre_completo'];
    $FechaNacimiento = $_REQUEST['Fecha_nacimiento'];
    $ciclo =  $_REQUEST['ciclo'];
    $nota =  $_REQUEST['nota_media'];
    
    $consulta = "INSERT INTO alumno
    (nombre_completo,Fecha_nacimiento, ciclo,nota_media)
    VALUES (:nombre_completo, :Fecha_nacimiento, :ciclo, :nota_media)";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":nombre_completo" => $nombre, ":Fecha_nacimiento" => $FechaNacimiento,
        ":ciclo" => $ciclo,":nota_media" => $nota))) {
        $url = "listado_alumnos.php";
        header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Grabar_Nuevo_Alumno";
        header('Location:'.$url);
    }

    $db = null;


?>
