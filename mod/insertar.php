<?php
include_once '../connection/validationLog.php';
include_once '../connection/Articulo.php';
include_once '../connection/controlAdmin.php';

if (isset($_POST['nombreArt'])) {
    //Si esta disponible
    $nombreArticulo = $_POST['nombreArt'];
    $precioArticulo = $_POST['precioArt'];
    $descrArticulo = $_POST['descripcion'];    
    
    $controlAdmin = new ControlAdmin();
    $articuloB = $controlAdmin->buscarArticulo($nombreArticulo);

    if ($articuloB == null) {
        //Se inserta el articulo ya que ninguno tiene ese nombre     
        $controlAdmin->insertarArticulo($nombreArticulo, $precioArticulo, $descrArticulo);
        echo '<script language="javascript">alert("Articulo Insertado");</script>';
    } else {
        //No se inserta el articulo
        //Error, Alertar
        echo '<script language="javascript">alert("Error al insertar: No se puede insertar el articulo con el mismo nombre");</script>';
    }
    
} else {
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Insertar</title>
    <link rel="stylesheet" href="../css/estilos2.css">
</head>

<body>
    <?php include "../mod/header3.html" ?>
    <div id="titulo-Principal">
        INSERTAR ARTICULO
    </div>
    <div id="division-Formularios">
        <center>
            <form action="" method="POST" id="formulario-Ins">
                <p>Nombre</p>
                <input type="text" placeholder="Guitarra" class="texto" name="nombreArt">
                <p>Precio</p>
                <input type="number" placeholder="100" class="texto" name="precioArt">
                <p>Descripcion</p>
                <textarea name="descripcion" id="" cols="50" rows="7" class="texto" ></textarea>
                <br>
                <input type="submit" value="Guardar" id="boton-Guardar">
            </form>
        </center>
    </div>
</body>

</html>