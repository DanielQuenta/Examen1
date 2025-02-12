<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="icon" href="fzz.jpg">
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>

<?php include(__DIR__ . '/../templates/header2.php'); ?>

    <h1>Clientes</h1>
    <a href="../controllers/ClienteController.php?action=create">Crear Nuevo Cliente</a>
    <table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Fecha de Registro</th>
            <th>Username</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['idcliente']; ?></td>
                <td><?php echo htmlspecialchars($cliente['nombre']); ?></td>
                <td><?php echo htmlspecialchars($cliente['apellido']); ?></td>
                <td><?php echo htmlspecialchars($cliente['email']); ?></td>
                <td><?php echo htmlspecialchars($cliente['telefono']); ?></td>
                <td><?php echo htmlspecialchars($cliente['direccion']); ?></td>
                <td><?php echo htmlspecialchars($cliente['fecha_registro']); ?></td>
                <td><?php echo htmlspecialchars($cliente['username']); ?></td>
                <td>
                    <a href="../controllers/ClienteController.php?action=show&id=<?php echo $cliente['idcliente']; ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="../controllers/ClienteController.php?action=edit&id=<?php echo $cliente['idcliente']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="../controllers/ClienteController.php?action=delete&id=<?php echo $cliente['idcliente']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

    
    <a href="../views/welcome3.php">VOLVER INICIO</a>

    <div class="links">
        <a href="../views/welcome3.php">Volver al inicio</a>
    </div>

<?php include(__DIR__ . '/../templates/footer2.php'); ?>
</body>
</html>
