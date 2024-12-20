<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #343a40; /* Fondo oscuro */
            color: white; /* Color de texto blanco para contraste */
        }
        .container {
            margin-top: 20px; /* Espacio superior */
        }
        .product-card {
            background-color: #495057; /* Color de fondo de la tarjeta */
            border: 1px solid #6c757d; /* Borde ligero */
            border-radius: 10px; /* Bordes redondeados para la tarjeta */
            padding: 20px; /* Espaciado interno */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra para efecto de profundidad */
        }
        footer {
            margin-top: 20px; /* Espacio superior para el footer */
            text-align: center; /* Centrar el texto del footer */
            color: #ccc; /* Color más claro para el footer */
        }
        .product-image {
            max-width: 100%; /* La imagen se ajustará al ancho del contenedor */
            height: auto;
            border: 1px solid #ddd; /* Borde ligero alrededor de la imagen */
            border-radius: 5px; /* Bordes redondeados para la imagen */
        }
        h1 {
            color: #ffc107; /* Color del título */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Ver Producto</h1>
        <div class="product-card">
            <div class="card-body">
                <p><strong>ID:</strong> <?php echo htmlspecialchars($producto['idproducto']); ?></p>
                <p><strong>Nombre:</strong> <?php echo htmlspecialchars($producto['nombre']); ?></p>
                <p><strong>Descripción:</strong> <?php echo htmlspecialchars($producto['descripcion']); ?></p>
                <p><strong>Precio:</strong> <?php echo htmlspecialchars($producto['precio']); ?> €</p>
                <p><strong>Stock:</strong> <?php echo htmlspecialchars($producto['stock']); ?></p>
                <p><strong>Fecha de Registro:</strong> <?php echo htmlspecialchars($producto['fecha_registro']); ?></p>

                <!-- Mostrar la imagen del producto -->
                <?php if (!empty($producto['image_path'])): ?>
                    <div>
                        <strong>Imagen:</strong><br>
                        <img src="<?php echo htmlspecialchars($producto['image_path']); ?>" 
                             alt="<?php echo htmlspecialchars($producto['nombre']); ?>" 
                             class="product-image">
                    </div>
                <?php else: ?>
                    <p>No hay imagen disponible para este producto.</p>
                <?php endif; ?>
                
                <a href="../views/welcome2.php" class="btn btn-primary mt-3">Volver a la lista</a>
            </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 FAZBEARxd. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
