<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomrmulario Login</title>
</head>

<body>

    <form action="login.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Ingresar">
    </form>
</body>

</html>