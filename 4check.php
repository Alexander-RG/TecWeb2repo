<?php
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
$carrera = isset($_POST["carrera"]) ? $_POST["carrera"] : "";

$archivo="form4.txt";
echo (touch($archivo))?"Archivo existe\n":"Archivo no existe\n";

if (touch($archivo))
{
    $datos = fopen($archivo,"w");
    fwrite($datos,"Nombre: $nombre\n");
    fwrite($datos,"Apellido: $apellido\n");
    fwrite($datos,"Carrera: $carrera");
    fclose($datos);
    $datos= fopen($archivo,"r");
    while(!feof($datos))
    {
        $linea=fgets($datos,1024);
        echo $linea."<br>";
    }
}
fclose($datos);


