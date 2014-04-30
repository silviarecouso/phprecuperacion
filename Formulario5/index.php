<?php
//Recoger datos de vuelta si los hay
    $nombre = (isset($_REQUEST['nombre']))?$_REQUEST['nombre']:"";
    $FechaNacimiento = (isset($_REQUEST['FechaNacimiento']))?$_REQUEST['FechaNacimiento']:"";
    $email = (isset($_REQUEST['email']))?$_REQUEST['email']:"";
    $sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:"Selecciona";
    $familianumerosa = (isset($_REQUEST['familianumerosa']))?True:False;
    
       //errores
        if (isset($_REQUEST['errornombre'])){
            $msg_errornombre="El nombre no es correcto ...";
        }else{
            $msg_errornombre="";
            
        }
        if (isset($_REQUEST['erroredad'])){
            $msg_erroredad="La edad no es correcto ...";
        }else{
            $msg_erroredad="";
            
        }
         if (isset($_REQUEST['erroremail'])){
            $msg_erroremail="El email no es correcto ...";
        }else{
            $msg_erroremail="";
            
        }
          if (isset($_REQUEST['errorsexo'])){
            $msg_errorsexo="Sexo no definido ...";
        }else{
            $msg_errorsexo="";
            
        }
 ?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>
    <body>
        <form action="recoge.php"> 
            <div>
                <p>Nombre:<input <?php if($msg_errornombre !="") echo "class='error'";?> type="text" name="nombre" value="<?php echo $nombre ?>"/><?php echo $msg_errornombre ?></p>
            </div>
                <p>Fecha Nacimiento:<input <?php if($msg_erroredad !="") echo "class='error'";?>type="date" name="FechaNacimiento" value="<?php echo $FechaNacimiento ?>" /><?php echo $msg_erroredad ?></p>
                <p>Email<input <?php if($msg_erroremail !="") echo "class='error'";?>type="text" name="email" value="<?php echo $email ?>" /></p>
                <p>Sexo:<select <?php if($msg_errorsexo !="") echo "class='error'";?>name="sexo">
                    <option <?php if($sexo == "Selecciona") echo "selected='selected'"; ?> value="Selecciona">Selecciona...</option>
                    <option <?php if($sexo == "Mujer") echo "selected='selected'";?> value="Mujer">Mujer</option>
                    <option <?php if($sexo == "Hombre") echo "selected='selected'";?> value="Hombre">Hombre</option>
                </select><?php echo $msg_errorsexo ?></p>
                <p>Familia Numerosa: 
                    <input type="checkbox"<?php if($familianumerosa) echo "checked='checked'"; ?>  name="familianumerosa" value="Si"/>
                </p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>