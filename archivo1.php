<?php

$carpeta ="prueba/";
$archivo = "file.php";
echo (file_exists($carpeta.$archivo))?"Archivo existe":"Archivo no existe";
echo "<br>";
echo (is_file($archivo))?"Archivo existe":"Archivo no existe";
echo "<br>";
echo (is_dir($carpeta))?"Carpeta existe":"Carpeta no existe";
echo "<br>";
$archivo2 = "pan.jpg";
if (file_exists($carpeta.$archivo2))
{
    $size = filesize($carpeta.$archivo2);
    $creado = filectime($carpeta.$archivo2);
    $modificado = filemtime($carpeta.$archivo2);
    
    echo "Tamaño: ".$size."<br>";
    echo "Creado: ".$creado."<br>";
    echo "Modificado: ".$modificado."<br>";
}
?>
