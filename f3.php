<?php
    $foto = $_FILES['foto'];
    $expediente = $_FILES['expediente'];
    $errores = [];
  
    if(strlen($_FILES['foto']['name']) > 0 && strlen($_FILES['expediente']['name']) >0  )
    {
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
        if (!empty($errores)) {
            // Convertir la imagen a base64
            foreach ($errores as $error) {
                echo "  <p class='red'>$error</p>";
            }

            exit;
          
        }   else{
            $fotoBase64 = base64_encode(file_get_contents($foto['tmp_name']));
        }
    }
    else
    {
        echo "Envie todos los campos";
    }
    

    var_dump($errores);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>EXPEDIENTE</title>
</head>
<body>
    <div class="card">
        <img src="data:image/png;base64,<?= base64_encode(file_get_contents($_FILES['foto']['tmp_name'])) ?>" alt="Imagen">
        <div class="info">
        <?php if (!empty($errores)) : ?>
                <?php foreach ($errores as $error) : ?>
                    <p class="red"><?php echo $error; ?></p>
                <?php endforeach; ?>
        <?php endif; ?>
            <div><strong>NOMBRE:</strong> <?= $_FILES['foto']['name'] ?></div>
            <div><strong>TAMAÑO (FOTO):</strong> <?= $_FILES['foto']['size'] ?> bytes</div>
            <div><strong>EXPEDIENTE:</strong> <?= $_FILES['expediente']['name'] ?></div>
            <div><strong>TAMAÑO (EXPEDIENTE):</strong> <?= $_FILES['expediente']['size'] ?> bytes</div>
        </div>
    </div>
</body>
</html>