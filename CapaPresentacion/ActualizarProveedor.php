<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Actualizar Proveedor por Nombre
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>
            Actualizar Proveedor por Nombre
        </h2>
        <form action="../CapaLogica/ModelProveedores.php" method="POST">
            <div class="form-group">
                <label for="nombre">
                    Nombre del Proveedor:
                </label>
                <input id="nombre" name="nombre" required="" type="text">
                </input>
            </div>
            <div class="form-group">
                <label for="email">
                    Nuevo Correo Electrónico:
                </label>
                <input id="email" name="email" required="" type="email">
                <input name="ataque" type="hidden" value="actualizar">
                </input>
                </input>
            </div>
            <input type="submit" value="Actualizar Proveedor">
        </form>
    </div>
</body>

</html>