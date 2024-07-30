<?php

$usuario = $_POST["usuario"];
$password = $_POST["password"];
echo strlen(($usuario))>=10?"Bienvenido: ".$usuario."<br>":"El usuario ingresado debe tener 10 caracteres como minimo"."<br>";
$num = [0,1,2,3,4,5,6,7,8,9];
$c=0;
foreach($num as $valor) 
    {
        if (strpos($password, $valor)!==false) 
        {
            $c++;
        }
    }
    echo ($c>0)?"Contraseña correcta":"Error en la contraseña";
?>