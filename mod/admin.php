<?php
    include_once '../connection/validationLog.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Administracion</title>
    <link rel="stylesheet" href="../css/estilos2.css">
</head>

<body>
    <?php include "../mod/header3.html" ?>
    <div id="titulo-Principal">
        ADMINISTRACION
    </div>
    <br>
    <div id="acciones">
        <div id="division-Accion">
            <div id="nombre-Accion">
                Insertar Articulo
                <br>
                <br>
                <a href="insertar.php" id="btn-Accion">
                    <img src="../images/btnPlay.png" alt="" width="120" height="120">
                </a>
            </div>
        </div>
        <div id="division-Accion">
            <div id="nombre-Accion">
                Eliminar Articulo
                <br>
                <br>
                <a href="eliminar.php" id="btn-Accion">
                    <img src="../images/btnStop.png" alt="" width="120" height="120">
                </a>
            </div>
        </div>
        <div id="division-Accion">
            <div id="nombre-Accion">
                Actualizar Articulo
                <br>
                <br>
                <a href="actualizar.php" id="btn-Accion">
                    <img src="../images/btnActualizar.png" alt="" width="120" height="120">
                </a>
            </div>
        </div>
    </div>
    <div id="division-Accion2">
        <div id="nombre-Accion">
            Buscar <br> Articulo
            <br>
            <br>
            <a href="buscar.php" id="btn-Accion">
                <img src="../images/btnBuscar.png" alt="" width="120" height="120">
            </a>
        </div>
    </div>

</body>

</html>