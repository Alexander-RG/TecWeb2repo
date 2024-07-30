<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$comentario = $_POST["comentario"];
$idioma = $_POST["idioma"];
$musica = $_POST["musica"];
$pasatiempo = isset($_POST["pasatiempo"])?$_POST['pasatiempo']:[];

$campos=["nombre" => $nombre,"apellido" => $apellido,"correo" =>$correo,"comentario" => $comentario,"idioma" => $idioma,"musica" => $musica];

foreach($campos as $key => $campo)
    {
        if(empty($campo)){  
            echo '<p style="color: red;">El campo '.$key.' no debe encontrarse vacío</p>'.'<br>';
        }
        
        elseif($key=='comentario' && (strlen($campo)<=5 || strlen($campo)>=50) )
        {
            echo '<p style="color: red;">El campo '.$key.' debe tener entre 6 y 49 caracteres</p>'.'<br>';
            if($key=='comentario' && (strpos($campo,"*")!==false || strpos($campo,"/")!==false || strpos($campo,".")!==false || strpos($campo,"@")!==false )){
                echo '<p style="color: red;">El campo '.$key.' no debe contener caracteres especiales</p>'.'<br>';
            }
        }
        elseif($key=='nombre' && (strlen($campo)<=4 || strlen($campo)>=20) )
        {
            echo '<p style="color: red;">El campo '.$key.' debe tener entre 4 y 19 caracteres</p>'.'<br>';
        }
        elseif($key=='apellido' && (strlen($campo)<=4 || strlen($campo)>=20) )
        {
            echo '<p style="color: red;">El campo '.$key.' debe tener entre 4 y 19 caracteres</p>'.'<br>';
        }
        else{
            echo $key.": ".$campo;
            echo"<br>";
        }
    }
if(empty($pasatiempo))
{
    echo '<p style="color: red;">El campo pasatiempo no debe encontrarse vacío</p>'.'<br>';
}
else 
{
    echo "<ul>";
    foreach($pasatiempo as $pas)
    {
        echo "<li>".$pas."</li>";
    }
    echo "<ul>";
}


?>

