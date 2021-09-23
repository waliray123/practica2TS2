<?php

include_once 'db.php';

class User extends DB{

    private $nombre;
    private $username;
    //SELECT * FROM usuario WHERE nombre = '' AND contrasena = '' SELECT * FROM usuario'' 
    public function userExists($user, $pass){
        $md5pass = md5($pass);        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE nombre = :user AND contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE nombre = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['nombre'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}
