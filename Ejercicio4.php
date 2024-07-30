<?php

//sentencia if
$compra=$_GET['c'];
$puntos=0;
if ($compra>50&& $compra<=100) {
    $puntos=$puntos+5;
}
elseif ($compra>100 && $compra<=200) {
    $puntos=$puntos+15;
}
elseif ($compra>200 && $compra<=500) {
    $puntos=$puntos+30;
}
elseif($compra>500){
    $puntos=$puntos+60;
}
echo "Cantidad de puntos:";
echo $puntos;
echo "<br>";

//froma simple
$compras=$_GET['a'];
$puntos = ($compras > 50 && $compras <= 100) ? 5 :
              (($compras > 100 && $compras <= 200) ? 15 :
              (($compras > 200 && $compras <= 500) ? 30 :
              (($compras > 500) ? 60 : 0)));

    echo ("Cantidad de Puntos: ".$puntos);

    echo "<br>";

// swich

$compraa=$_GET['b'];
switch ($compraa) {
    case ($compraa > 50 && $compraa <= 100):
        $puntos=5;
        break;
    case ($compraa > 100 && $compraa <= 200):
        $puntos=15;
        break;
    case ($compraa > 200 && $compraa <= 500):
        $puntos=30;
        break;
    case ($compraa > 500):
        $puntos=60;
        break;
    default:
        $puntos=0;
        break;
}
echo ("Cantidad de Puntos: ".$puntos);
echo "<br>";

//while
echo "while";
echo "<br>";
$inferior=$_GET['i'];
$superior=$_GET['s'];
$c=0;
while ($inferior<=$superior) {
    echo $inferior;
    if ($inferior%7==0) {
        $c++;
    }
    $inferior++;
}
echo "<br>";
echo "contador: ".$c;

//for
echo "<br>";
echo "for";
echo "<br>";
$s=$_GET['h'];
$r=0;
for ($i=0; $i < $s; $i++) { 
    echo $i;
    if ($i%7==0) {
        $r++;
    }
}
echo "<br>";
echo "contador: ".$r;

//foreach
echo "<br>";
echo "foreach";
echo "<br>";
$electro=[
    ['nombre'=>'televisor',
    'precio'=> 234,
    'estado'=>true],
    ['nombre'=>'heladera',
    'precio'=> 1323,
    'estado'=>true],
    ['nombre'=>'bisicleta',
    'precio'=> 234,
    'estado'=>true],
];
foreach ($electro as $produc) {
    echo $produc['nombre'].'<br>';
    echo $produc['precio'].'<br>';
    echo ($produc['estado'])?"Disponible".'<br>':"No Disponible".'<br>';
}
echo "<pre>";
var_dump($electro);
echo "</pre>";

?>