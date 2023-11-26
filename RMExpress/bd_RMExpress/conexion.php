<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión</title>
</head>

<body>
    <?php
    $enlace = mysqli_connect("localhost:8080", "root", "superadministrador", "rm_express");
    if (!$enlace) {
        die("No puedo conectarme a la base de datos: " . mysqli_connect_error());
    }
    echo "Conexión exitosa";
    mysqli_close($enlace);
    ?>
</body>

</html>