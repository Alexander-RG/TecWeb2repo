<?php
    if (isset($_POST['submit'])) {
        $error =[];
        $incisoa = isset($_POST['incisoa'])? $_POST['incisoa']:"";;
        $incisob = isset($_POST['incisob'])? $_POST['incisob']:"";
        $incisoc = isset($_POST['incisoc'])? $_POST['incisoc']:"";
        $incisoa2 = isset($_POST['incisoa2'])? $_POST['incisoa2']:"";
        $incisob2 = isset($_POST['incisob2']) ? $_POST['incisob2'] : "";

        $datos = [
            "incisoa" => $incisoa,
            "incisob" => $incisob,
            "incisoc" => $incisoc,
            "incisoa2" => $incisoa2,
            "incisob2" => $incisob2,
        ];

        $cont = 0;
        foreach ($datos as $dato => $value) {
            if (empty($value)) {
                $error[]= "<font color='#FF0000'>El campo $dato es requerido. </font><br>";
                $cont++;
            }
        }
        if ($cont > 0) {
            $error[]= "Debes ingresar todos los campos";
        } else {
            echo "La vivienda es: "."<br>";
            echo "Vivienda particular: " . $incisoa . "<br>";
            echo "Tipo de vivienda: " .$incisob . "<br>";
            echo "Sin vivienda: " . $incisoc . "<br>";
            echo "La vivienda esta: "."<br>";
            echo "Ocupada: " . $incisoa2 . "<br>";
            echo "Desocupada: " .  $incisob2 . "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Vivienda</title>
    <style>
        fieldset {
            border: 3px solid #4CAF50; 
            padding: 10px; 
            margin-bottom: 20px; 
        }
        .container {
            display: flex;
            justify-content: space-between; /* Distribuye espacio entre los divs */
            border: 1px solid #4CAF50; /* Para visualizar el contenedor */
            padding: 5px;
            background-color: #f7fff8;
        }
        .columna {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px; /* Ajusta el espacio entre columnas si es necesario */
        }
        .left, .right {
            width: 48%; /* Ajusta el tamaño según sea necesario */
            padding: 10px;
            border: 2px solid #4CAF50; /* Para visualizar los divs */
        }
        .left {
            background-color: #ffffff; /* Color de fondo para el div izquierdo */
        }
        .right {
            background-color: #ffffff; /* Color de fondo para el div derecho */
        }
        .complete {
            border: 2px solid #4CAF50; /* Para visualizar el contenedor */
        }
        h2{
            color: #018507;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        h3 {
            color: #018507;
            font-size: 1.2em;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        h4 {
            color: #018507;
            font-size: 1.2em;
            margin-top: 20px; 
            margin-bottom: 10px;
        }
        option{
            color: #018507;
        }
        select{
            color: #02b809;
        }
        input[type="submit"] {
            background-color: #4CAF50; 
            color: white; 
            padding: 10px 50px;
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 1em; 
        }

        input[type="submit"]:hover {
            background-color: #02c20a;
        }
        label {
            display: block; /* Cada etiqueta en una nueva línea */
            margin-top: 10px; /* Espaciado superior */
            font-size: 1.2em;
            font-weight: bold; /* Texto en negrita */
            color: #018507; /* Color del texto */
        }
        input[type="file"] {
            display: block; /* Mostrar en una nueva línea */
            margin-top: 10px; /* Espaciado superior */
            padding: 5px; /* Espaciado interno */
            border: 1px solid #018507; /* Borde */
            border-radius: 5px; /* Bordes redondeados */
            font-size: 1em; /* Tamaño de fuente */
            color: #018507;
        }
    </style>
</head>
<body>
<fieldset>
    <h2>CAPÍTULO B. TIPO DE VIVIENDA</h2>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <div div class="left">
        <h3>1. La vivienda es:</h3>
        <h4>A. Vivienda particular</h4>
        <?php
        $tiposA = ["Casa", "Choza, pahuichi", "Departamento", "Cuarto(s) o habitacion(es) suelta(s)",
        "Vivienda improvisada o vivienda movil", "Establecimiento no destinado para vivienda"];
        function IncisoA($tiposA) {
            $html = '';
            foreach ($tiposA as $tipoa) {
                $html .= "<option value='$tipoa'>$tipoa</option>";
            }
            return $html;
        }
        ?>
        <select id="incisoa" name="incisoa" class="<?php echo isset($error[0]) ? 'select-error' : ''; ?>">
            <option value="">Seleccione vivienda particular</option>
            <?php echo IncisoA($tiposA); ?>
        </select>
        <?php 
        if (isset($error[0])) {
            echo "<p>".$error[0]."</p>";
        }
        ?>
        <br>
        <h4>B. Tipo de vivienda</h4>
        <?php
        $tiposB = ["Hotel, hostal, residencial olojamiento", "Hospital o clinica con internacion", 
        "Cuartel o establecimiento militar o policial", "Residencia u otro de adultos mayores",
        "Albergue de niñas(os) y adolecentes", "Recinto penitenciario o de reintegracion",
        "Camapamento de trabajo", "Otra(Instituto de rehabilitacion, convento"];
        function IncisoB($tiposB) {
            $html = '';
            foreach ($tiposB as $tipob) {
                $html .= "<option value='$tipob'>$tipob</option>";
            }
            return $html;
        }
        ?>
        <select id="incisob" name="incisob" class="<?php echo isset($error[1]) ? 'select-error' : ''; ?>">
            <option value="">Seleccione tipo de vivienda</option>
            <?php echo IncisoB($tiposB); ?>
        </select>
        <?php 
        if (isset($error[1])) {
            echo "<p>".$error[1]."</p>";
        }
        ?>
        <br>
        <h4>C. Sin vivienda</h4>
        <?php
            $tiposC = ["Persona que vive en la calle", "En transito: terminal, aeropuerto, puerto u otro"];
            function IncisoC($tiposC) {
                $html = '';
                foreach ($tiposC as $tipoc) {
                    $html .= "<option value='$tipoc'>$tipoc</option>";
                }
                return $html;
            }
            ?>
            <select id="incisoc" name="incisoc" class="<?php echo isset($error[2]) ? 'select-error' : ''; ?>">
                <option value="">Seleccione sin vivienda</option>
                <?php echo IncisoC($tiposC); ?>
            </select>
            <?php 
            if (isset($error[2])) {
                echo "<p>".$error[2]."</p>";
            }
        ?>
        <br>
        </div>
        <br>
        <div class="right">
            <h3>2. La vivienda está:</h3>
            <h4>A. Ocupada</h4>
            <?php
            $tiposA2 = ["Con personas presentes", "Con personas temporalmente ausentes"];
            function IncisoA2($tiposA2) {
                $html = '';
                foreach ($tiposA2 as $tipoa2) {
                    $html .= "<option value='$tipoa2'>$tipoa2</option>";
                }
                return $html;
            }
            ?>
            <select id="incisoa2" name="incisoa2" class="<?php echo isset($error[3]) ? 'select-error' : ''; ?>">
                <option value="">Seleccione tipo ocupada</option>
                <?php echo IncisoA2($tiposA2); ?>
            </select>
            <?php 
        if (isset($error[3])) {
            echo "<p>".$error[3]."</p>";
        }
        ?>
        <br>
            <h4>B. Desocupada</h4>
            <?php
            $tiposB2 = ["Para alquilar y/o vender", "Terminándose de construir o reparar", "Abandonada"];
            function IncisoB2($tiposB2) {
                $html = '';
                foreach ($tiposB2 as $tipob2) {
                    $html .= "<option value='$tipob2'>$tipob2</option>";
                }
                return $html;
            }
            ?>
            <select id="incisob2" name="incisob2" class="<?php echo isset($error[4]) ? 'select-error' : ''; ?>">
                <option value="">Seleccione tipo desocupada</option>
                <?php echo IncisoB2($tiposB2); ?>
            </select>
            <?php 
        if (isset($error[4])) {
            echo "<p>".$error[4]."</p>";
        }
        ?>
        </div>
        
    </div>
    <div class="complete">
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $foto = isset($_FILES['foto']) ? $_FILES['foto'] : null;
        $errores = [];
        
        if ($foto) {
            $fileType = mime_content_type($foto['tmp_name']);
            if ($fileType != 'image/png' && $fileType != 'image/jpeg' || $foto['size'] > 2 * 1024 * 1024) {
                $errores[] = "La foto debe ser un archivo PNG o JPG y no superar los 2MB.";
            } else {
                echo "<p style='color: green;'>La foto es válida y cumple con los requisitos.</p>";
            }
        } else {
            $errores[] = "No se ha subido ningún archivo.";
        }
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
    ?>
    <label for="foto">Foto de la vivienda:</label>
    <input type="file" id="foto" name="foto">
    <br>
</div>


    <br>
    <input type="submit" name="submit" value="Enviar">
    </fieldset>
    </form>
</body>
</html>
