<?php

require_once 'conecta.php'; 

/* Funciones */


function limpiarEntradaTexto($entrada) {
    $tmp=strip_tags(trim($entrada));
    if (get_magic_quotes_gpc()) { 
        $tmp = stripslashes($tmp); 
     } 
    return $tmp;
}

function edad($FechaNacimiento) {
            $date1 = new DateTime($FechaNacimiento); 
            $date2 = new DateTime("now"); 
            $interval = $date1->diff($date2); 
            $diff = $interval->format('%y'); 
            return $diff;  
}
function validarnombre($nombre){
     $patron = "/^[a-zA-Z]{3,}([[:space:]][[:alpha:]]{2,})*$/";
     //QUEDAMOS AKIIIII NO VA CON Ñ ni con palabras con tilde
     return preg_match($patron, $nombre);
  } 

/* Recoger datos de REQUEST y validar */


 $nombre = (isset($_REQUEST['nombre_completo']))?$_REQUEST['nombre_completo']:"No definido";
 $fecha_nacimiento = (isset($_REQUEST['fecha_nacimiento']))?$_REQUEST['fecha_nacimiento']:"No definido";
 $ciclo = (isset($_REQUEST['ciclo']))?$_REQUEST['ciclo']:"No definido";
        //$sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:"Error . Debe usted seleccionar sexo";
 $nota = $_REQUEST['nota_media'];
        
         //Variable para indicar si hay errores
 $hayerrores = False;
 $errores="";
        
 //Validar nombre
 $nombre= limpiarEntradaTexto($nombre);  
 if (!validarnombre($nombre)){
                $errornombre="(Error en nombre)";//Hay error
                $hayerrores = True;
                $errores .="&errornombre";

   }else{
                $errornombre="";
    }      

    //Validar edad
      $edad = edad($fecha_nacimiento);
         if ($edad<1){
        $erroredad="(Error en edad)";//Hay error
        }else{
        $erroredad="";
        }
      
  if($hayerrores) {
                    //echo "Hay errores...<br>";
                    echo $_SERVER['QUERY_STRING'];
                    $url = "formulario_alta.php?".$_SERVER['QUERY_STRING'].$errores;
                    header("Location: ".$url);
                    exit();
                }
                
$db = conectaBd();
 $consulta = "INSERT INTO alumno
    (nombre_completo,fecha_nacimiento, ciclo,nota_media)
    VALUES (:nombre_completo, :fecha_nacimiento, :ciclo, :nota_media)";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":nombre_completo" => $nombre, ":fecha_nacimiento" => $fecha_nacimiento,
        ":ciclo" => $ciclo,":nota_media" => $nota))) {
        $url = "listado_alumnos.php";
        header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Grabar_Nuevo_Alumno";
        header('Location:'.$url);
    }
    
//$db = null;

   

?>
