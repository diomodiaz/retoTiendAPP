<?php

class Publicacion {

    public function guardarPulicacion($con, $titulo, $descripcion, $archivo) {
        //ubicar la carpeta donde almacenar files
        $carpeta = "../files/";
        //abrir la carpeta con la funcion opendir
        opendir($carpeta);
        //guardar lor archivos en la carpeta files
        $destino = $carpeta . $archivo['name'];
        copy($archivo['tmp_name'], $destino);
        $nombrearchivo = $archivo['name'];
        
        $query = "INSERT INTO posteo (id_usuario, titulo, descripcion, archivo) VALUES (1,'$titulo', '$descripcion', '$nombrearchivo')";
        $consulta = mysqli_query($con, $query);
    }
    
    public function consultarPublicaciones($con){
        $query="SELECT * FROM posteo order by id_posteo DESC";
        $consulta = mysqli_query($con, $query);
        return $consulta;
    }

}
