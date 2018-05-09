<?php

include '../clases/Conexion.php';
include '../clases/Usuario.php';

$objConexion = new Conexion();
$objUsuario = new Usuario();

$con = $objConexion->conectar();
echo $objUsuario->comentarios($con, $_POST['comenta']);
