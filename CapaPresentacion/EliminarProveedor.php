<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Eliminar Proveedor por Nombre
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>
            Eliminar Proveedor por Nombre
        </h2>
        <form action="../CapaLogica/ModelProveedores.php" method="post">
            <div class="form-group">
                <label for="nombre">
                    Nombre del Proveedor:
                </label>
                <input id="nombre" name="nombre" required="" type="text">
                <input name="ataque" type="hidden" value="eliminar">
                </input>
                </input>
            </div>
            <input type="submit" value="Eliminar Proveedor">
                
        </form>
    </div>
</body>

</html>