<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $destinatario = $_POST['destinatario'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO envios(destinatario, direccion, descripcion)
            VALUES('$destinatario', '$direccion', '$descripcion')";

    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Envío</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">

<h2>Nuevo Envío</h2>

<form method="POST">

    <input type="text" name="destinatario" placeholder="Destinatario" required>

    <input type="text" name="direccion" placeholder="Dirección" required>

    <textarea name="descripcion" placeholder="Descripción"></textarea>

    <button type="submit">Guardar</button>

</form>

<a href="index.php">Volver</a>

</div>

</body>
</html>