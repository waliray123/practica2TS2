<!DOCTYPE html>
<html>

<head>
    <title>Zona M</title>
    <link rel="stylesheet" href="css/estilos1.css">
</head>

<body>
    <!--Header-->
    <?php include "mod/header.html" ?>
    <!--Intermedio, Ingreso al Login y al registro-->
    <div class="izquierda">
        <!--Imagen Principal-->
        <img src="images/principalGuitarrista.jpg" width="800" height="600">
    </div>
    <div class="derecha">
        <!--Espacio para ingreso login-->
        <div id="contenido-Principal">
            <div id="nombre-Principal">
                LA ZONA M
            </div>
            <hr width="200">
            <div id="parrafo-Principal">
                El registro musical es lo mas importante para una tienda de musica
                <br>
                por lo que destruimos el muro de ladrillos y te brindamos acceso
                <br>
                a nuestra ZONA MUSICAL
            </div>
            <hr width="200">
            <div id="parrafo2-Principal">
                <!--Oraciones-->
            </div>
            <div class="centrado">
                <a href="mod/login.php" id="boton-ingreso">Ingresar</a>                
            </div>
        </div>
    </div>
    <script>
        let divR = document.getElementById('parrafo2-Principal');
        divR.textContent = '';
        const valor = getValorParrafo2();
        const respuesta = document.createElement("p");
        respuesta.textContent = valor;
        divR.appendChild(respuesta);

        function getValorParrafo2() {
            var valorR;
            var aleatorio = Math.round(Math.random() * 3);
            switch (aleatorio) {
                case 0:
                    valorR = "En lo que piensas si deberias irte o no mejor, presiona el siguiente boton";
                    break;
                case 1:
                    valorR = "Si deseas vivir en una oracion, presiona el siguiente boton";
                    break;
                case 2:
                    valorR = "Si deseas correr y vivir para volar presiona el siguiente boton";
                    break;
                case 3:
                    valorR = "Como los delfines, Como los delfines deseo ingresar";
                    break;
            }
            return valorR;
        }
    </script>
</body>

</html>