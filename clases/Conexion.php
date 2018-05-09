<?php


class Conexion {
    
    public function conectar(){
        $link = mysqli_connect("localhost", "root", "", "tiendapp");
        if ($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        return $link;
    }
}