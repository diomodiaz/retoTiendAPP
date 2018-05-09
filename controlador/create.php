<?php

include '../clases/Conexion.php';
include '../clases/Usuario.php';

$objConexion = new Conexion();
$con = $objConexion->conectar();

$objUsuario = new Usuario();
echo $objUsuario->registrar($con, $_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['mail'], $_POST['username'], $_POST['password'])."<br>";

echo "<td><a href='../index.html'>Volver</a></td>";
