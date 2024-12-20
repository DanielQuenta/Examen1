<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

require_once "../models/Database.php";
require_once "../models/Producto.php";

// Conectar a la base de datos y obtener los productos
$database = new Database();
$db = $database->getConnection();
$productoModel = new Producto($db);
$productos = $productoModel->getAllProductos(); // Método que obtiene todos los productos
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - FAZBEAR</title>
    <link rel="icon" href="fzz.jpg">

    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilos.css">

    <!-- Estilo adicional para el sidebar -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #575d63;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background-color: #343a40;
            color: white;
            padding: 10px;
        }

        .btn-gestionar {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 5px;
        }

        .btn-gestionar:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-white text-center">FAZBEAR Dashboard</h3>
        <a href="index.php">Inicio</a>
        <a href="../controllers/ProductoController.php?action=index">Gestionar Producto</a>
        <a href="../controllers/UsuarioController.php?action=index">Gestionar Clientes</a>

        <a href="../controllers/EmpleadoController.php?action=index">Gestionar Empleados</a>

        <a href="../controllers/LogoutController.php" class="text-danger">Cerrar sesión</a>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="header">
            <h4>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']['username']); ?></h4>
        </div>

        <button id="toggle-button" class="btn btn-gestionar mb-3">Gestión</button>

        <div id="link-container" class="link-container" style="display: none;">
            <a class="link-item" href="../controllers/ProductoController.php?action=index">Gestionar Producto</a>
            <a class="link-item" href="../controllers/UsuarioController.php?action=index">Gestionar Clientes</a>

            <a class="link-item" href="../controllers/EmpleadoController.php?action=index">Gestionar Empleados</a>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="templates/script.js"></script> <!-- Asegúrate de que esta ruta sea correcta -->
</body>

</html>
