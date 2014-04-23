<?php 
    //print_r($_REQUEST);

function limpiarEntradaTexto($entrada) {
    $tmp=strip_tags(trim($entrada));
    if (get_magic_quotes_gpc()) { 
        $tmp = stripslashes($tmp); 
     } 
    return $tmp;
}
function validaremail ($email) {
    return(filter_var($email,FILTER_VALIDATE_EMAIL));
}
function edad($FechaNacimiento) {
            $date1 = new DateTime($FechaNacimiento); 
            $date2 = new DateTime("now"); 
            $interval = $date1->diff($date2); 
            $diff = $interval->format('%y'); 
            return $diff;  
}


        $nombre = (isset($_REQUEST['nombre']))?$_REQUEST['nombre']:"No definido";
        $FechaNacimiento = (isset($_REQUEST['FechaNacimiento']))?$_REQUEST['FechaNacimiento']:"No definido";
        //Verifica si existe dato e-mail
        $email = (isset($_REQUEST['email']))?$_REQUEST['email']:"No definido";
        $sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:"No definido";
        $familianumerosa = (isset($_REQUEST['familianumerosa']))?"si":"No";
        
//Validar el e-mail:
        if (!validaremail($email)){
        $erroremail="(Error en email)";//Hay error
        }else{
        $erroremail="";
        }
 //Validar fecha nacimiento
        $edad = edad($FechaNacimiento);
        
  $nombre= limpiarEntradaTexto($nombre);
  
print "<p>Nombre:                      $nombre</p>"; 
print "<p>Fecha de Nacimiento:         $FechaNacimiento</p>"; 
print "<p>Edad:                        $edad </p>";
print "<p>Email:                       $email.$erroremail</p>";
print "<p>Sexo:                        $sexo</p>"; 
print "<p>Familia Numerosa:            $familianumerosa</p>"; 





?>
