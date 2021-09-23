<?php
include_once 'db.php';
include_once 'Articulo.php';

class ControlAdmin extends DB{

    public function buscarArticuloLike($nombre)
    {
        $nombreN = "%$nombre%";
        $query = $this->connect()->prepare('SELECT * FROM articulo WHERE nombre LIKE :nomb ');

        $query->execute(['nomb' => $nombreN]);

        $lista = array();
        $cont = 0;
        foreach ($query as $currentUser) {
            $nombreArt = $currentUser['nombre'];
            $precioArt = $currentUser['precio'];
            $descripcionArt = $currentUser['Descripcion'];
            $articuloNuevo = new Articulo($nombreArt,$precioArt,$descripcionArt);
            $lista[$cont] = $articuloNuevo;
            $cont++;
        }
        return $lista;
    }

    public function buscarArticulo($nombre)
    {
        $query = $this->connect()->prepare('SELECT * FROM articulo WHERE nombre = :nomb');

        $query->execute(['nomb' => $nombre]);        

        if($query->rowCount()){
            $articuloR = new Articulo("","","");
            foreach($query as $articuloQ){
                $articuloR->setNombre($articuloQ['nombre']);
                $articuloR->setPrecio($articuloQ['precio']);
                $articuloR->setDescripcion($articuloQ['Descripcion']);
            }
            return $articuloR;
        }else{
            return null;
        }
    }    

    public function insertarArticulo($nombre,$precio,$descripcion)
    {
        $query = $this->connect()->prepare('INSERT INTO articulo (id, nombre, precio, Descripcion) VALUES (NULL, :nomb , :prec , :descr)');
        $query->execute(['nomb' => $nombre,'prec' => $precio,'descr' => $descripcion]);                
    }

    public function actualizarArticulo($nombre,$precio,$descripcion)
    {
        $query = $this->connect()->prepare('UPDATE articulo SET precio = :prec , Descripcion = :descr WHERE articulo.nombre = :nomb');

        $query->execute(['nomb' => $nombre,'prec' => $precio,'descr' => $descripcion]);
    }

    public function eliminarArticulo($nombre)
    {
        $query = $this->connect()->prepare('DELETE FROM articulo WHERE articulo.nombre = :nomb');

        $query->execute(['nomb' => $nombre]);
    }

}

?>