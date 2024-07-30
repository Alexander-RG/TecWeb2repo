<?php
    if (isset($_POST['submit'])) {
        $error =[];
        $matpared = isset($_POST['matpared'])? $_POST['matpared']:"";
        $mattecho = isset($_POST['mattecho'])? $_POST['mattecho']:"";
        $matpiso  = isset($_POST['matpiso'])? $_POST['matpiso']:"";
        $revoque  = isset($_POST['revoque'])? $_POST['revoque']:"";
        $fuagua  = isset($_POST['fuagua'])? $_POST['fuagua']:"";
        $diagua  = isset($_POST['diagua'])? $_POST['diagua']:"";
        $fuele  = isset($_POST['fuele'])? $_POST['fuele']:"";
        $pricom  = isset($_POST['pricom'])? $_POST['pricom']:"";
        $basura  = isset($_POST['basura'])? $_POST['basura']:"";
        $cocina  = isset($_POST['cocina'])? $_POST['cocina']:"";
        $cuartos  = isset($_POST['cuartos'])? $_POST['cuartos']:"";
        $dormir  = isset($_POST['dormir'])? $_POST['dormir']:"";
        $baño  = isset($_POST['baño'])? $_POST['baño']:"";
        $desague  = isset($_POST['desague'])? $_POST['desague']:"";
        $vivienda  = isset($_POST['vivienda'])? $_POST['vivienda']:"";

        $datos = [
            "Material Pared" => $matpared,
            "Revoque"  => $revoque,
            "Material Techo" => $mattecho,
            "Material Piso"  => $matpiso,
            "Fuente de Agua"   => $fuagua,
            "Distribucion del Agua"   => $diagua,
            "Fuente de Electricidad"   => $fuele,
            "Principal Combustible" => $pricom,
            "Basura:" => $basura,
            "Cocina:" => $cocina,
            "Cuartos:" => $cuartos,
            "Dormir:" => $dormir,
            "Baño:" => $baño,
            "Desague:" => $desague,
            "Vivienda:" => $vivienda,

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
            echo "Material Pared: " . $matpared . "<br>";
            echo "Material Techo: " .$mattecho . "<br>";
            echo "Material Piso: " . $matpiso . "<br>";
            echo "Revoque: " .$revoque . "<br>";
            echo "Fuente de Agua: " . $fuagua . "<br>";
            echo "Distribucion Agua: " . $diagua . "<br>";
            echo "Fuente de Electricidad: " . $fuele . "<br>";
            echo "Principal Combustible: " . $pricom . "<br>";
            echo "Basura: " . $basura . "<br>";
            echo "Cocina: " . $cocina . "<br>";
            echo "Dormir: " . $dormir . "<br>";
            echo "Desague: " . $desague . "<br>";
            echo "Vivienda: " . $vivienda . "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Caracteristicas de la Vivienda</title>
    <style>
        fieldset {
            border: 3px solid #4CAF50; 
            padding: 10px; 
            margin-bottom: 20px; 
        }
        .container {
            display: flex;
            justify-content: space-between; /* Distribuye espacio entre los divs */
            border: 2px solid #4CAF50; /* Para visualizar el contenedor */
            background-color: #f7fff8;
        }
        .column {
            width: 48%; /* Ajusta el ancho de las columnas según sea necesario */
            display: flex;
            padding: 10px;
            flex-direction: column;
            gap: 0px; /* Ajusta el espacio entre elementos verticalmente si es necesario */
        }
        .left, .right {
            width: 50%; /* Ajusta el tamaño según sea necesario */
            padding: 10px;
            margin-bottom: 0;
            border: 2px solid #4CAF50; /* Para visualizar los divs */
        }
        .left {
            background-color: #ffffff; /* Color de fondo para el div izquierdo */
            grid-column: 1;
            margin-bottom: 0;
        }
        .right {
            background-color: #ffffff; /* Color de fondo para el div derecho */
            grid-column: 2;
            margin-bottom: 0;
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
    <h2>CAPÍTULO C. CARACTERISTICAS DE LA VIVIENDA CON PERSONAS PRESENTES</h2>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="column">
            <!-- Contenedor 3 -->
            <div div class="left">
            <h3>3. ¿Cual es el material de construccion mas utilizado en las paredes de esta vivienda?:</h3>
            <?php
            $matPared = ["Ladrillo, bloque de cemento, hormigon", "Adobe, tapial", "Tabique, quinche", "Piedra",
            "Madera", "Caña, palma, tronco", "Otro"];
            ?>
                <?php foreach ($matPared as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="matpared" value="<?php echo ($mat) ?>" class="<?php echo isset($error[0]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[0])) {
                echo "<p>".$error[0]."</p>";
            }
            ?>
            </div>

            <!-- Contenedor 4 -->
            <div div class="left">
            <h3>4. Las paredes interiores de esta vivienda, ¿tienen revoque?:</h3>
            <?php
            $reVoque = ["Si","No"];?>
            <?php foreach ($reVoque as $mat) : ?>
                <div class="form-group">
                <?php echo $mat; ?>
                <input type="radio" name="revoque" value="<?php echo ($mat) ?>" class="<?php echo isset($error[1]) ? 'select-error' : ''; ?>">
                </div>
            <?php endforeach; ?>
            <?php 
            if (isset($error[1])) {
                echo "<p>".$error[1]."</p>";
            }
            ?>
            </div>

            <!-- Contenedor 5 -->
            <div div class="left">
            <h3>5. ¿Cual es el material de construccion mas utilizado en los techos de esta vivienda?:</h3>
            <?php
            $matTecho = ["Calamina o plancha", "Teja (de cemento, arcilla o fibrocemento)", "Losa de hormigon armado", "Paja, palma, caña, barro, jatata, mocatu, chuchio","Otro"];
            ?>
                <?php foreach ($matTecho as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="mattecho" value="<?php echo ($mat) ?>" class="<?php echo isset($error[2]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[2])) {
                echo "<p>".$error[2]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 6 -->
            <div div class="left">
            <h3>6. ¿Cual es el material de construccion mas utilizado en los pisos de esta vivienda?:</h3>
            <?php
            $matPiso = ["Tierra", "Tablon de madera", "Machimbre, parquet", "Ceramica, porcelanato","Cemento","Mosaico, baldosa","Ladrillo","Piso Flotante","Otro"];
            ?>
                <?php foreach ($matPiso as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="matpiso" value="<?php echo ($mat) ?>" class="<?php echo isset($error[3]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[3])) {
                echo "<p>".$error[3]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 7 -->
            <div class="right">
            <h3>7. Principalmente, el agua que usan en la vivienda proviene de:</h3>
            <?php
            $fuAgua = ["Cañeria de red", "Pileta publica", "Cosecha de agua de lluvia", "Pozo excavado o perforado de bomba","Pozo no protegido o sin bomba","Manantial o vertiente protegida",
            "Rio, acequia o vertiente no protegida","Carro repartidor (aguatero)","Otro"];
            ?>
                <?php foreach ($fuAgua as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="fuagua" value="<?php echo ($mat) ?>" class="<?php echo isset($error[4]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[4])) {
                echo "<p>".$error[4]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 8 -->
            <div class="right">
                <h3>8. El agua que usan en la vivienda se distribuye:</h3>
                <?php
                $diAgua = ["Por cañeria dentro de la vivienda", "Por cañeria fuera de la vivienda, pero dentro del lote o terreno", "No se distribuye por cañeria"];
                ?>
                <?php foreach ($diAgua as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="diagua" value="<?php echo ($mat) ?>" class="<?php echo isset($error[5]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[5])) {
                echo "<p>".$error[5]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 9 -->
            <div class="right">
                <h3>9. ¿De donde proviene la energia electrica que usan en la vivienda?:</h3>
                <?php
                $fuElec = ["Servicio publico de energia electrica","Motor propio (generador)","Panel solar","Otro","No tiene"];
                ?>
                <?php foreach ($fuElec as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="fuele" value="<?php echo ($mat) ?>" class="<?php echo isset($error[6]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[6])) {
                echo "<p>".$error[6]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 10 -->
            <div class="right">
                <h3>10. ¿Cual es el principal combustible o energia que utilizan para cocinar?:</h3>
                <?php
                $priComb = ["Gas en garrafa","Gas por cañeria (a domicilio)","Leña","Guano, bosta o taquia","Electricidad", "Energia solar (cocina solar)","Otro","No cocina"];
                ?>
                <?php foreach ($priComb as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="pricom" value="<?php echo ($mat) ?>" class="<?php echo isset($error[7]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[7])) {
                echo "<p>".$error[7]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 11 -->
            <div class="right">
                <h3>11. ¿Habitualmente, que hacen con la basura que generan?:</h3>
                <?php
                $Basura = ["La depositan en el contenedor o basurero publico","La entregan al carro basurero (servicio publico)","La botan en un terreno baldio o la calle",
                "La botan al rio", "La queman","La entierran","Otra forma"];
                ?>
                <?php foreach ($Basura as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="basura" value="<?php echo ($mat) ?>" class="<?php echo isset($error[8]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[8])) {
                echo "<p>".$error[8]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 12 -->
            <div class="right">
                <h3>12. ¿Tiene cuarto solo para cocinar?:</h3>
                <?php
                $Cocina = ["Si","No"];
                ?>
                <?php foreach ($Cocina as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="cocina" value="<?php echo ($mat) ?>" class="<?php echo isset($error[9]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[9])) {
                echo "<p>".$error[9]."</p>";
            }
            ?>
            </div>
            <br>
        </div>
        <div class="column">
        <!-- Columna Derecha -->
            
            <!-- Contenedor 13 -->
            <div class="right">
                <h3>13. ¿Cuántos cuartos o habitaciones ocupan, sin contar baño y cocina?:</h3>
                <?php
                $Cuartos = ["Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Ocho o mas"];
                ?>
                <?php foreach ($Cuartos as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="cuartos" value="<?php echo ($mat) ?>" class="<?php echo isset($error[10]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[10])) {
                echo "<p>".$error[10]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 14 -->
            <div class="right">
                <h3>14. De estos cuartos o habitaciones, ¿cuántos se utilizan solo para dormir?:</h3>
                <?php
                $Dormir = ["Cero","Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Ocho o mas"];
                ?>
                <?php foreach ($Dormir as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="dormir" value="<?php echo ($mat) ?>" class="<?php echo isset($error[11]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[11])) {
                echo "<p>".$error[11]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 15 -->
            <div class="right">
                <h3>15. ¿Tienen baño o letrina?:</h3>
                <?php
                $Baño = ["Sí, usado solo por su hogar","Sí, compartido con otros hogares","No tiene"];
                ?>
                <?php foreach ($Baño as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="baño" value="<?php echo ($mat) ?>" class="<?php echo isset($error[12]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[12])) {
                echo "<p>".$error[12]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 16 -->
            <div class="right">
                <h3>16. El baño o letrina, ¿tiene desagüe?:</h3>
                <?php
                $Desague = ["A la red de alcantarillado","A una cámara séptica","A un pozo ciego","A un pozo de absorción","A la superficie (calle, quebrada o río)","Es baño ecológico"];
                ?>
                <?php foreach ($Desague as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="desague" value="<?php echo ($mat) ?>" class="<?php echo isset($error[13]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[13])) {
                echo "<p>".$error[13]."</p>";
            }
            ?>
            </div>
            <!-- Contenedor 17 -->
            <div class="right">
                <h3>17. La vivienda que ocupan es:</h3>
                <?php
                $Vivienda = ["Propia y totalmente pagada","Propia y la están pagando","Prestada por parientes o amigos","Alquilada","En contrato anticrético","En contrato mixto (anticrético y alquiler)","Cedida por servicios","Otra"];
                ?>
                <?php foreach ($Vivienda as $mat) : ?>
                    <div class="form-group">
                    <?php echo $mat; ?>
                    <input type="radio" name="vivienda" value="<?php echo ($mat) ?>" class="<?php echo isset($error[14]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[14])) {
                echo "<p>".$error[14]."</p>";
            }
            ?>
            </div>

            <!-- Contenedor 18 -->
            <div class="right">
                <h3>18. Su hogar tiene:</h3>
                <?php
                $Hogar1 = ["¿Bicicleta?","¿Motocicleta o cuadratrack?","¿Vehículo automotor?","¿Carreta o carretón?","¿Deslizador, balsa, canoa o bote?","¿Refrigerador o congeladora?",
                "¿Microondas?","¿Calefón o termotanque?","¿Aire acondicionado?","¿Lavadora de ropa?"];
                ?>
                <?php foreach ($Hogar1 as $mat) : ?>
                    <div class="form-group">
                    <label for="<?php echo($mat) ?>"><?php echo($mat) ?></label>
                    <span>Si</span>
                    <input type="radio" name="<?php echo($mat) ?>" value="Si" class="<?php echo isset($error[15]) ? 'select-error' : ''; ?>">
                    <span>No</span>
                    <input type="radio" name="<?php echo($mat) ?>" value="No" class="<?php echo isset($error[15]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[15])) {
                echo "<p>".$error[15]."</p>";
            }
            ?>
            </div>

            <!-- Contenedor 19 -->
            <div class="right">
                <h3>19. Su hogar tiene:</h3>
                <?php
                $Hogar2 = ["¿Radio o equipo de sonido?","¿Televisor?","¿Computadora, laptop o tablet?","¿Teléfono celular?","¿Internet fijo en la vivienda?","¿Internet móvil (megas o datos)?"
                ,"¿Servicio de TV cable o satelital?","¿Servicio de telefonía fija?"];
                ?>
                <?php foreach ($Hogar2 as $mat) : ?>
                    <div class="form-group">
                    <label for="<?php echo($mat) ?>"><?php echo($mat) ?></label>
                    <span>Si</span>
                    <input type="radio" name="<?php echo($mat) ?>" value="Si" class="<?php echo isset($error[16]) ? 'select-error' : ''; ?>">
                    <span>No</span>
                    <input type="radio" name="<?php echo($mat) ?>" value="No" class="<?php echo isset($error[16]) ? 'select-error' : ''; ?>">
                    </div>
                <?php endforeach; ?>
            <?php 
            if (isset($error[16])) {
                echo "<p>".$error[16]."</p>";
            }
            ?>
            </div>

            <!-- Cierra Columna -->
        </div>
    </div>     
        
        
    </div>
    
    <?php
    if (isset($_POST['submit'])) {
        $errores = [];
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
    ?>
    <br>
    <input type="submit" name="submit" value="Enviar">
    </fieldset>
    </form>
</body>
</html>
