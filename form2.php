<?php

$idiomas = ["Español","English","Français"];
$musicas = ["Rock","Punk","Jazz"];
$pasatiempos = ["Musica","Arte","Deportes"];


if (isset($_POST["submit"])) {
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
$correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
$comentario = isset($_POST["comentario"]) ? $_POST["comentario"] : "";
$idioma = isset($_POST["idioma"]) ? $_POST["idioma"] : "";
$musica = isset($_POST["musica"]) ? $_POST["musica"] : "";
$pasatiempo = isset($_POST["pasatiempo"]) ? $_POST["pasatiempo"] : [];

$arrayValues = ["nombre" => $nombre, "apellido" => $apellido, "correo" => $correo, "comentario" => $comentario, "idioma" => $idioma, "musica" => $musica, "pasatiempo" => $pasatiempo];
$errores = [];

foreach ($arrayValues as $key => $value) {
    if (empty($value)) {
        $errores[$key][] = "El campo $key es requerido.";
    }
}

if ((strlen($nombre) < 3 || strlen($nombre) > 20) && !empty($nombre)) {
    $errores['nombre'][] = "El nombre debe tener al menos 3 y como máximo 20 caracteres.";
}

if ((strlen($apellido) < 3 || strlen($apellido) > 20) && !empty($apellido)) {
    $errores['apellido'][] = "El apellido debe tener al menos 3 y como máximo 20 caracteres.";
}

if ((strlen($comentario) < 5 || strlen($comentario) > 50) && !empty($comentario)) {
    $errores['comentario'][] = "El comentario debe tener entre 5 y 50 caracteres.";
}

$invalidCharacters = ["@", ".", "|", "*"];
foreach ($invalidCharacters as $char) {
    if (strpos($comentario, $char) !== false) {
        $errores['comentario'][] = "El comentario no puede contener los caracteres @, ., |, $.";
        break;
    }
}        
}


/* 
if (count($errores) > 0) {
    // Mostrar el formulario nuevamente con errores
} else {
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
} */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div>
        <form method="POST" action="">
            <h1 align="center">FORMULARIO</h1>

            <label for="nombre">Nombre:</label>
            <input type="text" class="<?php echo (isset($errores['nombre']))?"rojo":""?>" name="nombre" id="nombre">

            <?php if (isset($errores['nombre'])) : ?>
                <?php foreach ($errores['nombre'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="apellido">Apellido:</label>
            <input type="text" class="<?php echo (isset($errores['apellido']) )?"rojo":""?>" name="apellido" id="apellido">
            <?php if (isset($errores['apellido']) ) : ?>
                <?php foreach ($errores['apellido'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="correo">Correo:</label>
            <input type="email" class="<?php echo (isset($errores['correo']) )?"rojo":""?>" name="correo" id="correo">
            <?php if (isset($errores['correo']) ) : ?>
                <?php foreach ($errores['correo'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="comentario">Comentario:</label>
            <textarea name="comentario" class="<?php echo (isset($errores['comentario']) )?"rojo":""?>" id="comentario" rows="4" cols="30"></textarea>
            <?php if (isset($errores['comentario']) ) : ?>
                <?php foreach ($errores['comentario'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>
                        
            <label for="idioma">Idioma:</label>
            <select name="idioma" id="idioma">
                <?php foreach ($idiomas as $idm) : ?>
                    <?php $short = $idm[0].$idm[1] ?>
                    <option value="<?php echo $short ?>"><?php echo $idm ?></option>
                <?php endforeach; ?>
            </select>

            <?php if (isset($errores['idioma']) ) : ?>
                <?php foreach ($errores['idioma'] as $error) : ?>
                    <p class="red"><?php echo strtolower($error); ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

            <label for="musica">Música:</label>
            <?php foreach ($musicas as $msc) : ?>
                <div class="form-group">
                <?php echo $msc; ?>
                <input type="radio" class="<?php echo (isset($errores['musica']))?"rojo":""?>" name="musica" value="<?php echo strtolower($msc) ?>">
                </div>
            <?php endforeach; ?>

            <?php if (isset($errores['musica']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['musica'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>

            <br><br>

            <label for="pasatiempo">Pasatiempo:</label>
            <?php foreach ($pasatiempos as $pst) : ?>
                <div class="form-group">
                <?php echo $pst; ?>
                <input type="checkbox" class="<?php echo (isset($errores['pasatiempo']) )?"rojo":""?>" name="pasatiempo[]" value="<?php echo strtolower($pst) ?>">
                </div>
            <?php endforeach; ?>

            <?php if (isset($errores['pasatiempo']) && isset($_POST['submit'])) : ?>
                <?php foreach ($errores['pasatiempo'] as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <br><br>

                
        </form>
    </div>
</body>

</html>