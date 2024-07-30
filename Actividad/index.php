<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/css/app.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        .nav-links {
            display: flex;
        }
        .firma {
            color: white;
            padding:10px; 
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: relative;
            bottom: 0;
        }
        main {
            margin: 0;
            min-height: 80vh;
        }
        .rojo {
            color: red;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin: 16px;
            max-width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <?php include('./encabezado.php'); ?>
    <main> 
        <?php require("usuario.php") ?> 
    </main>
    <?php include('./pie.php'); ?>
</body>