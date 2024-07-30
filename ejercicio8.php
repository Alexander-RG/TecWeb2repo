<?php
$archivo="prueba2.txt";
echo (touch($archivo))?"Archivo existe":"Archivo no existe";


// var_dump($datos);

if (touch($archivo))
{
    $datos = fopen($archivo,"w");
    fwrite($datos,"Hoy es Lunes\n");
    fwrite($datos,"Hoy es lunes de clases");
    fclose($datos);
    $datos= fopen($archivo,"r");
    while(!feof($datos))
    {
        $linea=fgets($datos,1024);
        echo $linea."<br>";
    }
}
fclose($datos);



?>

