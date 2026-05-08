<?php
include("conexion.php");

$sql = "SELECT * FROM envios";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Envíos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>Sistema de Gestión de Envíos 📦</h1>

    <a href="crear.php" class="btn">+ Crear Envío</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Destinatario</th>
            <th>Dirección</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>

        <?php while($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['destinatario']; ?></td>
            <td><?php echo $fila['direccion']; ?></td>
            <td><?php echo $fila['descripcion']; ?></td>
            <td><?php echo $fila['fecha_envio']; ?></td>

            <td>
                <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
                |
                <a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>