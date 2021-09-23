<?php
include_once '../connection/validationLog.php';

include_once '../connection/Articulo.php';
include_once '../connection/controlAdmin.php';

if (isset($_POST['articuloBuscar'])) {
    //Si esta disponible
    $nombreArticulo = $_POST['articuloBuscar'];    
    $controlAdmin = new ControlAdmin();
    $articulosB = $controlAdmin->buscarArticuloLike($nombreArticulo);   
} else {
    //No esta buscando    
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Buscar</title>
    <link rel="stylesheet" href="../css/estilos2.css">
</head>

<body>
    <?php include "../mod/header3.html" ?>
    <div id="titulo-Principal">
        BUSCAR ARTICULOS
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
    <br>
    <center>
        <div id="titulo-Secundario">
            Lista de Articulos
        </div>
        <div id="division-TablaBuscar">
            <table id="tabla-Buscar">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                </tr>
                <?php
                //Si esta la lista realizar el for each
                    if(isset($articulosB)){
                        foreach($articulosB as $articulo){
                            echo "<tr>";
                            echo "<td>".$articulo->getNombre()."</td>";
                            echo "<td>".$articulo->getPrecio()."</td>";
                            echo "<td>".$articulo->getDescripcion()."</td>";
                            echo "<tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </center>
</body>

</html>