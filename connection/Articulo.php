<?php
class Articulo {
    private $nombre;
    private $descripcion;
    private $precio;

    public function __construct($nom,$prec,$descr)
    {
        $this->nombre = $nom;
        $this->descripcion = $descr;
        $this->precio = $prec;
    }

    public function setNombre($nom){
        $this->nombre = $nom;
    }

    public function setDescripcion($descr){
        $this->descripcion = $descr;
    }

    public function setPrecio($prec){
        $this->precio = $prec;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPrecio(){
        return $this->precio;
    }
}
?>