<?php
require("includes/funciones.php");

if (isset($_POST["submit"])) {
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
    $arrayValues = ["nombre" => $nombre, "apellido" => $apellido, "telefono" => $telefono];
    $errores = [];
    foreach ($arrayValues as $key => $value) {
        if (empty($value)) {
            $errores[$key][] = "El campo $key es requerido.";
        }
    }
    
    if ((strlen($nombre) < 1 || strlen($nombre) > 20) && !empty($nombre)) {
        $errores['nombre'][] = "El nombre debe tener como máximo 20 caracteres.";
    }
    
    if ((strlen($apellido) < 1 || strlen($apellido) > 20) && !empty($apellido)) {
        $errores['apellido'][] = "El apellido debe tener como máximo 20 caracteres.";
    }
    echo $telefono;
    
    $caracteres = str_split($telefono);
    foreach ($caracteres as $caracter) {
        if (!is_numeric($caracter)) { // Verifica si el carácter no es un número
            $errores['telefono'][] = "El telefono debe incluir unicamente numeros enteros.";
            break; // Sale del foreach si se encuentra un error
        }
    }
    if (empty($errores)) {
        insertar($nombre,$apellido,$telefono); 
    }

    $usuarios = listar();
}
?>


<form action="" method="post">
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
    <label for="telefono">Telefono:</label>
    <input type="text" class="<?php echo (isset($errores['telefono']) )?"rojo":""?>" name="telefono" id="telefono">
    <?php if (isset($errores['telefono']) ) : ?>
        <?php foreach ($errores['telefono'] as $error) : ?>
            <p class="red"><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <br><br>
    <input type="submit" name="submit" value="Enviar">
</form>
<?php foreach(listar() as $usuario) : ?>
        <div class="card">
            <h2><?php echo $usuario['nombre'] . ' ' . $usuario['apellido']; ?></h2>
            <p>Teléfono: <?php echo $usuario['telefono']; ?></p>
        </div>
<?php endforeach; ?>