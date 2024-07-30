<?php


function conectar() {
    $conn = mysqli_connect("localhost","root","","tecweb");
    if(!$conn){
        echo "Error en la conexion".mysqli_connect_error();
    }
    else{
        echo "conexion correcta";
    }

    return $conn;
}
    

?>
