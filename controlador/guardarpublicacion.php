<?php

include '../clases/Conexion.php';
include '../clases/Publicacion.php';

$objConexion = new Conexion();
$objPublicacion = new Publicacion();

$con = $objConexion->conectar();

$objPublicacion->guardarPulicacion($con, $_POST['titulo'], $_POST['descripcion'], $_FILES['foto']);

header('Location: ../verPublicaciones.php');
