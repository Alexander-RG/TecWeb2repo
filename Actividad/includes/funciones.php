<?php
require("conexion.php");
$conn = conectar();
function insertar($nombre,$apellido,$telefono){
    $conn = conectar();
    $sql="insert into usuario (nombre,apellido,telefono) values ('".$nombre."','".$apellido."',".$telefono.")";
    $r = mysqli_query($conn,$sql);
    echo ($r)?"Datos insertados":"Error al insertar";
}

function listar(){
    global $conn;
    $sql = "select * from usuario";
    $r = mysqli_query($conn,$sql);
    $arreglo = [];
    while($fila = mysqli_fetch_assoc($r)){
        $arreglo[]= $fila;
    }
    return $arreglo;
}
?>