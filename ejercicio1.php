<?php

$nombre = 'Alexander';
$talla = 2.34;
$peso = 84;
$musica = array("Ska","Punk",25); 
$bandera = true;

// $numeros = $_GET[array('x','y','z')]; 1
$numeros = array($_GET['A'],$_GET['B'],$_GET['C']);
$numeros2 = array(4,5,6); 

$letras = array($_GET['X'],$_GET['Y'],$_GET['Z']);


print("Nombre: ".$nombre );
echo "<br/>";
printf("Talla: ".$talla );
echo "<br/>";
print_r("Peso: ".$peso );
echo "<br/>";
echo("Bandera: ".$bandera );
echo "<br/>";
var_dump($musica);
echo "<br/>";
/*Operadores*/

$a = $_GET['a'];
$b = $_GET['b'];

echo ("el resultado de la suma es: ".$a+$b."<br/>");
echo ("el resultado de la resta es: ".$a-$b)."<br/>";
echo ("el resultado de la multiplicacion es: ".$a*$b."<br/>");
echo ("el resultado de la division es: ".$a/$b."<br/>");
echo ("el resultado del modulo es: ".$a%$b)."<br/>";

/* Comparativos */

var_dump($a>$b);
echo "<br/>";
var_dump($a<$b);
echo "<br/>";
var_dump($a<=$b);
echo "<br/>";
var_dump($a>=$b);
echo "<br/>";
var_dump($a==$b);
echo "<br/>";
var_dump($a===$b);
echo "<br/>";
var_dump($a<=>$b);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


var_dump($numeros2[0]<$numeros2[1]);
echo "<br/>";
var_dump($numeros2[0]>$numeros2[1]);
echo "<br/>";
var_dump($numeros2[0]==$numeros2[1]);
echo "<br/>";
var_dump($numeros2[2]<$numeros2[1]);
echo "<br/>";
var_dump($numeros2[2]>$numeros2[1]);
echo "<br/>";
var_dump($numeros2[2]==$numeros2[1]);
echo "<br/>";
var_dump($numeros2[0]<$numeros2[2]);
echo "<br/>";
var_dump($numeros2[0]>$numeros2[2]);
echo "<br/>";
var_dump($numeros2[0]==$numeros2[2]);
echo "<br/>";
var_dump($letras);
?>

/*