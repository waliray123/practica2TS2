<?php
    include_once '../connection/registration.php';

    if(isset($_POST['tUser'])){        
        //Si esta disponible
        $user = $_POST['tUser'];
        $pass = $_POST['tPass'];
        $registro = new Register();     
        if ($registro->userExists($user, $pass)) {
            //No se puede insertar un usuario con el mismo nombre
            $errorRegistro = "Ingrese otro nombre de usuario o contraseña";
        }else{
            $registro->insertarUsuario($user,$pass);
            echo '<script language="javascript">alert("Usuario creado, Listo para ingresar");</script>';            
        }
    }else{
        
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <link rel="stylesheet" href="../css/estilos1.css">
</head>

<body>
    <?php include "../mod/header2.html" ?>
    <div id="division-Formulario">
        <center>
            <form action="" method="POST" id="formulario-Login">                
                <div id="nombre-Login">
                    Registro
                </div>
                <hr width="200">
                <p>Usuario</p>
                <input type="text" id="tUser" name="tUser">                
                <p>Contraseña</p>
                <input type="password" id="tPass" name="tPass">
                <br>
                <br>
                <input id="boton-ingreso" type="submit" value="Registrar" >
                <?php

                if (isset($errorRegistro)) {
                    echo $errorRegistro;
                }

                ?>
            </form>
        </center>
    </div>

</body>

</html>