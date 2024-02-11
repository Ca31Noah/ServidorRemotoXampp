<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eliminar Producto</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Eliminar Producto</h2>
    <form action="../CapaLogica/ModelProducto.php" method="post">
        <div class="form-group">
            <label for="codigo">Código del Producto a Eliminar:</label>
            <input id="codigo" name="codigo" required="" type="number">
        </div>
        <input name="proceso" type="hidden" value="eliminar">
        <input type="submit" value="Eliminar Producto">
    </form>
</div>

</body>
</html>
