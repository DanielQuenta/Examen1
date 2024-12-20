<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <link rel="stylesheet" href="../bootstrap-4.0.0/css/bootstrap.min.css"> <!-- Agregar Bootstrap -->
    
</head>
<body>
    <?php include(__DIR__ . '/../templates/header2.php'); ?>
    <div class="container mt-5"> <!-- Usar contenedor de Bootstrap -->
    <h1 class="text-center mb-4">Crear Cliente</h1>
    <form action="../../controllers/UsuarioController.php?action=store" method="post">
        <div class="form-group row">
            <label for="nombre" class="col-sm-3 col-form-label">Nombre:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="apellido" class="col-sm-3 col-form-label">Apellido:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="telefono" class="col-sm-3 col-form-label">Teléfono:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="direccion" class="col-sm-3 col-form-label">Dirección:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="fecha_registro" class="col-sm-3 col-form-label">Fecha de Registro:</label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Nombre de Usuario:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Contraseña:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
<br>
        <button type="submit" class="btn btn-primary">Crear</button> <!-- Botón Bootstrap -->
    </form>

    <div class="links mt-3"> <!-- Añadir margen superior -->
        <a href="../welcome3.php" class="btn btn-link">Volver al inicio</a>
    </div>
</div>



    <?php include(__DIR__ . '/../templates/footer2.php'); ?>
</body>
</html>
