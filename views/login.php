<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/estilos.css"> <!-- Esta línea es correcta -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery y Bootstrap JS desde CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

    <div class="login-container">
        <form action="../controllers/LoginController.php" method="post" class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button> <!-- Botón Bootstrap -->
            <div class="form-group">
    <label for="cuenta" class="small">¿No tienes una cuenta? <a href="../views/cliente/create.php" class="btn btn-link">Regístrate aquí</a></label>
</div>

            <div class="links">
                
                <a class="btn btn-link" href="../views/welcome.php">Volver al inicio</a>
                <a class="btn btn-link" href="../views/loginempleado.php">Iniciar sesión EM</a>
            </div>
        </form>
    </div>

    <?php include('templates/footer.php'); ?>
</body>
</html>
