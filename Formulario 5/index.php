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
        
 ?>

<html>
    <body>
        <form action="recoge.php"> 
            <p>Nombre:<input type="text" name="nombre" value="<?php echo $nombre ?>"/><?php echo $msg_errornombre ?></p>
            <p>Fecha Nacimiento:<input type="date" name="FechaNacimiento" value="<?php echo $FechaNacimiento ?>" /></p>
            <p>Email<input type="text" name="email" value="<?php echo $email ?>" /></p>
            <p>Sexo:<select name="sexo">
                    <option <?php if($sexo == "Selecciona") echo "selected='selected'"; ?> value="Selecciona">Selecciona...</option>
                    <option <?php if($sexo == "Mujer") echo "selected='selected'";?> value="Mujer">Mujer</option>
                    <option <?php if($sexo == "Hombre") echo "selected='selected'";?> value="Hombre">Hombre</option>
                </select></p>
                <p>Familia Numerosa: 
                    <input type="checkbox"<?php if($familianumerosa) echo "checked='checked'"; ?>  name="familianumerosa" value="Si"/>
                </p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>