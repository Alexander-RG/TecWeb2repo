<?php
echo "Array";
$platos=array("saice", "sopa", "pescado");
$platos=["saice", "sopa", "chancho"];

echo "<pre>";
var_export($platos);    
echo "</pre>";

//insertar datos 
echo "insertar datos";
$platos[2]="nuevo plato";
$platos[3]="chancho";
echo "<pre>";
var_export($platos);
echo "</pre>";

//insertar al inicio
echo "insertar al inicio";
array_unshift($platos, "Lomito");
echo "<pre>";
var_export($platos);
echo "</pre>";
//Inseertar al final
echo "Inseertar al final";
array_push($platos, "Picante de pollo");
echo "<pre>";
var_export($platos);
echo "</pre>";

//Array de dos dimensiones
echo "Array de dos dimensiones";
$electrodomesticos=[
    "nombre"=>"televisor",
    "modelo"=>"LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=>"china",
    "Accesorios"=>[
        "smart"=>"si",
        "bluetooth"=>"no",
        "control"=>"si",
    ]
];
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
echo $electrodomesticos["nombre"]."<br>";   
echo $electrodomesticos["precio"]."<br>";
echo $electrodomesticos['Accesorios']["smart"]."<br>";
echo "<br>";


echo "Inseertar al final";
//array_push($electrodomesticos['Accesorios'], ["usb"=>"si"]);
$electrodomesticos['Accesorios']['usb']="si";
echo "<pre>";
var_export($electrodomesticos);
echo "</pre>";

//Segunda forma
echo "Segunda forma";
$electrodomesticos2=array(
    "nombre"=>"televisor",
    "modelo"=>"LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=>"china",
    "Accesorios"=>[
        "smart"=>"si",
        "bluetooth"=>"no",
        "control"=>"si",
    ]
    );
echo "<pre>";
var_dump($electrodomesticos2);
echo "</pre>";

//Manejar los indices
echo "Manejar los indices";
echo "<br>";
$clientes =[];
var_dump(empty($platos));
echo "<br>";
var_dump(empty($electrodomesticos));
echo "<br>";
var_dump(empty($clientes));
echo "<br>";
var_dump(isset($clientes)); //dice si esta declarado 
echo "<br>";
var_dump(isset($electrodomesticos['procedencia']));
echo "<br>";

//ordenar de menor a mayor
echo "ordenar de menor a mayor";
sort($platos);
echo "<pre>";
var_dump($platos);
echo "</pre>";
//Ordenar de mayor a menor
echo "Ordenar de mayor a menor";
rsort($platos);
echo "<pre>";
var_dump($platos);
echo "</pre>";

//Ordenar Array de dos dimenciones en orden alfabetico ascendente
echo "Ordenar Array de dos dimenciones en orden alfabetico ascendente";
asort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

//Ordenar Array de dos dimenciones en orden alfabetico decendente
echo "Ordenar Array de dos dimenciones en orden alfabetico decendente";
arsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

//Ordenar Array de dos dimenciones por indices ascendente
echo "Ordenar Array de dos dimenciones por indices ascendente";
ksort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

//Ordenar Array de dos dimenciones por indices decendente
echo "Ordenar Array de dos dimenciones por indices decendente";
krsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
?>