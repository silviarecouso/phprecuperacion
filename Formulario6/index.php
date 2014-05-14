<?php
//Recoger datos de vuelta si los hay
    $email = (isset($_REQUEST['email']))?$_REQUEST['email']:"";
    $password = (isset($_REQUEST['password']))?$_REQUEST['password']:"";
    
    
       //errores        
        if (isset($_REQUEST['erroremail'])){
            $msg_erroremail="El email no es correcto ...";
        }else{
            $msg_erroremail="";
            
        }
          if (isset($_REQUEST['errorpassword'])){
            $msg_errorpassword="Password no valido ...";
        }else{
            $msg_errorpassword="";
            
        }
 ?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>
    <body>
        <form action="recoge.php"> 
          
               
                <p>Email<input <?php if($msg_erroremail !="") echo "class='error'";?>type="text" name="email" value="<?php echo $email ?>" /></p>
                
                <p>Password<input type="password"<?php if($password !="")  ?>  name="password" value="<?php echo $password?>""/>
                </p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>