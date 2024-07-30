<?php
if (isset($_POST["bandera"])) 
{
    $foto = $_FILES['foto'];
    $expediente = $_FILES['expediente'];
    $errores = [];
    if ($_FILES['foto']['name'][-3].$_FILES['foto']['name'][-2].$_FILES['foto']['name'][-1] !== 'png') {
        $errores[] = "La foto debe ser un archivo PNG.";
    }
    if ($foto['size']>= 2*1024*1024)
    {
        $errores[] = "La foto debe pesar maximo 2MB.";
    }
    if ($_FILES['expediente']['name'][-3].$_FILES['expediente']['name'][-2].$_FILES['expediente']['name'][-1] !== 'pdf') {
        $errores[] = "El expediente debe ser un archivo PDF.";
    }
    if ($expediente['size']>= 10*1024*1024)
    {
        $errores[] = "El expediente debe pesar maximo 10MB.";
    }
    
    if (empty($errores)) {
        // Convertir la imagen a base64
        $fotoBase64 = base64_encode(file_get_contents($foto['tmp_name']));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>FORMULARIO EXPEDIENTE</title>
</head>
<body>
    <h1>FORMULARIO EXPEDIENTE</h1>
    <form method="POST" action="f3.php" enctype="multipart/form-data">


        <?php if (empty($errores)!==false && isset($_POST['bandera'])) : ?>
                <?php foreach ($errores as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
        <?php endif; ?>

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="foto">Foto: </label>
        <input type="file" name="foto" id="foto">

        <label for="expediente">Expediente: </label>
        <input type="file" name="expediente" id="expediente">

        <!-- <label for="archivo">Archivo</label>
        <input type="file" name="archivo" id="archivo"> -->
        <input type="hidden" name="bandera">
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>