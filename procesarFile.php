<?php
//ubicar la carpeta donde almacenar files
  $carpeta = "files/";
//abrir la carpeta con la funcion opendir
opendir($carpeta);
//guardar lor archivos en la carpeta files
$destino = $carpeta.$_FILES['foto']['name']; 
copy($_FILES['foto']['tmp_name'],$destino);
echo "Archivo subido exitosamente";
$nombre = $_FILES['foto']['name'];
//imprimir la imagen en pantalla
echo "<img src=\"files/$nombre\">";

?>