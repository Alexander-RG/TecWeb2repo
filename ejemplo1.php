<?php
    $nombre = 'Alexander';
    $apellidos = 'Ruiz Gareca';
    $carrera = 'Ingenieria';
    $equipo = 'Paraguay';

?>

<!DOCTYPE html>
<html lang="en">
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 20px;
            display:grid;
            place-items:center;
            height:100vh;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #e0e0ff;
            border: 1px solid #ccc;
            margin: 10px 10px;
            padding: 10px;
            border-radius: 5px;
            color: indigo;
        }
        div {
            background-color:turquoise;
            width: 300px;
            border-radius:15px;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <ul style = "color: indigo">
        <li>
        <?php
        echo $nombre;
        ?>
        </li>
        <li>
        <?php
        echo $talla;
        ?>
        </li>
        <li>
        <?php
        echo $peso;
        ?>
        </li>
        <li>
        <?php
        echo $musica;
        ?>
        </li>
        <li>
        <?php
        echo $bandera;
        ?>
        </li>
    </ul>
    </div>
</body>
</html>