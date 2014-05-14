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
            <div><a href="conecta.php">ConectaBD</a></div>
        </form>
    </body>
</html>