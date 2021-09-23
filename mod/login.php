<?php

include_once '../connection/user.php';
include_once '../connection/user_session.php';

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) {
    //echo "Hay sesión";
    $user->setUser($userSession->getCurrentUser());
    //include_once '../mod/admin.php';
    header("Location: ../mod/admin.php");
    exit;
} else if (isset($_POST['username']) && isset($_POST['password'])) {
    //echo "Validación de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExists($userForm, $passForm)) {
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        //include_once '../mod/admin.php';
        header("Location: ../mod/admin.php");
    } else {
        //echo "nombre de usuario y/o password incorrecto";
        $errorLogin = "Nombre de usuario y/o password es incorrecto";
    }
} else {
    //echo "Login";
    //include_once 'vistas/login.php';
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/estilos1.css">
</head>

<body>
    <?php include "../mod/header2.html" ?>
    <div id="division-Formulario">
        <center>
            <form action="" method="POST" id="formulario-Login">                
                <div id="nombre-Login">
                    Iniciar Sesion
                </div>
                <hr width="200">
                <p>Usuario</p>
                <input type="text" id="tUser" name="username">
                <p>Contraseña</p>
                <input type="password" id="tPass" name="password">
                <br>
                <br>
                <input id="boton-ingreso" type="submit" value="Ingresar">
                <?php

                if (isset($errorLogin)) {
                    echo "<br>";
                    echo "<p>".$errorLogin."</p>";
                }

                ?>
            </form>
        </center>
    </div>
</body>

</html>