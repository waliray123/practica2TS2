<?php

include_once 'db.php';

class Register extends DB{

    private $nombre;
    private $username;

    public function userExists($user, $pass){
        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE nombre = :user');
        $query->execute(['user' => $user]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function insertarUsuario($user,$pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('INSERT INTO usuario (id, nombre, contrasena) VALUES (NULL,:user ,:pass);');
        $query->execute(['user' => $user, 'pass' => $md5pass]);                 
    }

    public function getNombre(){
        return $this->nombre;
    }
}