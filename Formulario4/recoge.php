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
function validarnombre($nombre){
     $patron = "/^[a-zA-Z1]{3,}([[:space:]][[:alpha:]]{2,})*$/";
     //QUEDAMOS AKIIIII NO VA CON Ñ ni con palabras con tilde
     return preg_match($patron, $nombre);
}


        $nombre = (isset($_REQUEST['nombre']))?$_REQUEST['nombre']:"No definido";
        $FechaNacimiento = (isset($_REQUEST['FechaNacimiento']))?$_REQUEST['FechaNacimiento']:"No definido";
        $email = (isset($_REQUEST['email']))?$_REQUEST['email']:"No definido";
        //$sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:"Error . Debe usted seleccionar sexo";
        $sexo = $_REQUEST['sexo'];
        $familianumerosa = (isset($_REQUEST['familianumerosa']))?"si":"No";
        
        
        
//Validar nombre
  $nombre= limpiarEntradaTexto($nombre);  
  if (!validarnombre($nombre)){
        $errornombre="(Error en nombre)";//Hay error
        }else{
        $errornombre="";
        }
//Validar el e-mail:
        if (!validaremail($email)){
        $erroremail="(Error en email)";//Hay error
        }else{
        $erroremail="";
        }
 //Validar fecha nacimiento
        $edad = edad($FechaNacimiento);
         if ($email<18){
        $erroredad="(Error en edad)";//Hay error
        }else{
        $erroredad="";
        }
 //Validar sexo
        if ($sexo=="Selecciona"){
        $errorsexo="Error sexo no definido";
        $sexo="";
        }else{
         $errorsexo="";
        }
   
        
  
  
print "<p>Nombre:                      $nombre $errornombre</p>"; 
print "<p>Fecha de Nacimiento:         $FechaNacimiento</p>"; 
print "<p>Edad:                        $edad$erroredad </p>";
print "<p>Email:                       $email $erroremail</p>";
print "<p>Sexo:                        $sexo $errorsexo</p>"; 
print "<p>Familia Numerosa:            $familianumerosa</p>"; 



?>
