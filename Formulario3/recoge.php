<?php 
    //print_r($_REQUEST);

function limpiarEntradaTexto($entrada) {
    $tmp=strip_tags(trim($entrada));
    if (get_magic_quotes_gpc()) { 
        $tmp = stripslashes($tmp); 
     } 
    return $tmp;
}



        $nombre = (isset($_REQUEST['nombre']))?$_REQUEST['nombre']:"No definido";
        $FechaNacimiento = (isset($_REQUEST['FechaNacimiento']))?$_REQUEST['FechaNacimiento']:"No definido";
        $email = (isset($_REQUEST['email']))?$_REQUEST['email']:"No definido";
        $sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:"No definido";
        $familianumerosa = (isset($_REQUEST['familianumerosa']))?"si":"No";

  $nombre= limpiarEntradaTexto($nombre);
  
print "<p>Nombre:                      $nombre</p>"; 
print "<p>Fecha de Nacimiento:         $FechaNacimiento</p>"; 
print "<p>Email:                       $email</p>"; 
print "<p>Sexo:                        $sexo</p>"; 
print "<p>Familia Numerosa:            $familianumerosa</p>"; 





?>

