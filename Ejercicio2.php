<?php
$cliente='Juan Perez';
//saber tamano de la cadena
print(strlen($cliente));
echo "<br>";
var_dump($cliente);
echo "<br> -- <br>";

//limpar espacios en blanco
$texto=" Jose perez ";
var_dump($texto);
echo "<br>";
$texto2 = strlen(trim($texto));
echo $texto2."<br>";
echo trim($texto)."<br> -- <br>";

//Convertir minusculas y mayusculas
echo (strtolower($cliente));
echo "<br>";
echo (strtoupper($texto));
echo "<br> -- <br>";

//comparacion
var_dump($cliente == $texto);
echo "<br>";
var_dump(strtolower($cliente) === strtolower($texto));
echo "<br> -- <br>";

//reemplazar
echo str_replace("Juan", "Matias", $cliente);
echo "<br> -- <br>";

//Buscar posicion
echo strpos($cliente, "Perez");
echo "<br> -- <br>";

//Buscar
echo substr_count($cliente, "an");
echo "<br> -- <br>";

//Dividir una cadena
$cadena=explode("e", $texto);
var_dump($cadena);
echo "<br> -- <br>";

//unir cadena
$cadena2=implode("e", $cadena);
var_dump($cadena2);
echo "<br> -- <br>";


//ACTIVIDAD

$usuario= $_GET['a'];
$contrasena= $_GET['b'];
$repetir= $_GET['c'];
echo "Usuario: ";
print(strlen($usuario));
echo "<br>";
$dividir=explode("a", $usuario);
var_dump($dividir);
echo "<br>";
var_dump (substr_count($dividir[0], "m"));
echo "<br>";
var_dump (substr_count($dividir[1], "m"));
echo "<br>";
var_dump (substr_count($dividir[2], "m"));
echo "<br>";
/** */
echo "Contraseña: ";
var_dump(strtolower($contrasena) === strtolower($repetir));
echo "<br>";
?>