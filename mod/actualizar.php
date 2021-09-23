<?php
include_once '../connection/validationLog.php';
include_once '../connection/Articulo.php';
include_once '../connection/controlAdmin.php';

if (isset($_POST['articuloBuscar'])) {
    //Si esta disponible
    $nombreArticulo = $_POST['articuloBuscar'];
    $controlAdmin = new ControlAdmin();
    $articuloB = $controlAdmin->buscarArticulo($nombreArticulo);

    if ($articuloB == null) {
        //No se puede insertar un usuario con el mismo nombre        
        echo '<script language="javascript">alert("Articulo No encontrado, busque con otro nombre");</script>';
    } else {
        $nomArt = $articuloB->getNombre();
        $preArt = $articuloB->getPrecio();
        $desArt = $articuloB->getDescripcion();
        echo '<script language="javascript">alert("Articulo Encontrado, Listo para Actualizar");</script>';
    }
} else {
}
if (isset($_POST['nombreArt'])) {
    //Si esta disponible
    $nombreArticulo = $_POST['nombreArt'];
    $precioArticulo = $_POST['precioArt'];
    $descrArticulo = $_POST['descripcion'];
    $controlAdmin = new ControlAdmin();

    $articuloB = $controlAdmin->actualizarArticulo($nombreArticulo,$precioArticulo,$descrArticulo);
    echo '<script language="javascript">alert("Articulo Actualizado");</script>';
} else {
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Actualizar</title>
    <link rel="stylesheet" href="../css/estilos2.css">
</head>

<body>
    <?php include "../mod/header3.html" ?>
    <div id="titulo-Principal">
        ACTUALIZAR ARTICULO
    </div>
    <center>
        <div id="division-Buscar">
            <form action="" method="POST">
                <h1>Buscar</h1>
                <input type="text" class="texto" placeholder="Guitarra" name="articuloBuscar">
                <br>
                <br>
                <input type="submit" value="Buscar" id="boton-Buscar">
            </form>
        </div>
    </center>
    <div id="division-Formularios">
        <center>
            <form action="" method="POST" id="formulario-Ins">
                <p>Nombre</p>
                <input type="text" class="texto" value="<?php if(isset($nomArt)){echo $nomArt;}?>" name="nombreArt">
                <p>Precio</p>
                <input type="number" class="texto" value="<?php if(isset($preArt)){echo $preArt;}?>" name="precioArt">
                <p>Descripcion</p>
                <textarea name="descripcion" id="" cols="50" rows="7" class="texto"><?php if(isset($desArt)){echo $desArt;}?></textarea>
                <br>
                <input type="submit" value="Actualizar" id="boton-Guardar">
            </form>
        </center>
    </div>
</body>

</html>