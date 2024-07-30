

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div>

        <?php
        if (isset($_POST["submit"])) {
            
        }
        $nombre = isset($_POST["nombre"])?$_POST["nombre"]:"";
        $apellido = isset($_POST["apellido"])?$_POST["apellido"]:"";
        $correo = isset($_POST["correo"])?$_POST["correo"]:"";
        $comentario = isset($_POST["comentario"])?$_POST["comentario"]:"";
        $idioma = isset($_POST["idioma"])?$_POST["idioma"]:"";
        $musica = isset($_POST["musica"])?$_POST["musica"]:"";
        $pasatiempo = isset($_POST["pasatiempo"])?$_POST["pasatiempo"]:[];;

        $arrayValues = ["nombre" => $nombre, "apellido" => $apellido, "correo" => $correo, "comentario" => $comentario, "idioma" => $idioma, "musica" => $musica, "pasatiempo" => $pasatiempo];

        $invalidos = 0;
        foreach ($arrayValues as $key => $value) {
            if (empty($value)) {
                echo "<p class='red'>El campo $key es requerido. </p>";
                $invalidos++;
            }
        }

        if ($invalidos > 0) {
            echo "<hr>";
        }


        if ((strlen($nombre) < 3 || strlen($nombre) > 20) && !empty($nombre)) {
            echo "<p class='red'>El nombre  deben tener al menos 3 y como maximo 20 caracteres. </p>";
            $invalidos++;
        }
        if ((strlen($apellido) < 3 || strlen($apellido)) > 20 && !empty($apellido)) {
            echo "<p class='red'>El apellido deben tener al menos 3 y como maximo 20 caracteres. </p>";
            $invalidos++;
        }

        if ((strlen($comentario) < 5 || strlen($comentario) > 50) && !empty($comentario)) {
            echo "<p class='red'>El comentario debe tener al menos 10 caracteres.</p>";
            $invalidos++;
        }

        $invalidCharacters = ["@", ".", "|", "*"];

        foreach ($invalidCharacters as $value) {
            if (strpos($comentario, $value) !== false) {
                echo "<p class='red'>El comentario no puede contener los caracteres @, ., |, $. </p>";
                break;
            }
        }



        if ($invalidos > 0) {
            echo "</br>Por favor, complete los campos requeridos para poder continuar.";
            exit;
        }

        // show all the data
        echo "<h1>BIENVENIDO</h1>";
        echo "Nombre: $nombre<br>";
        echo "Apellido: $apellido<br>";
        echo "Correo: $correo<br>";
        echo "Comentario: $comentario<br>";
        echo "Idioma: $idioma<br>";
        echo "Música: $musica<br>";
        echo "Pasatiempos: ";
        echo "<ul>";
        foreach ($pasatiempo as $p) {
            echo "<li>$p</li> ";
        }
        echo "</ul>";
        ?>
    </div>
</body>

</html>