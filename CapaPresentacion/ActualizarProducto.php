<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">
        <h2>Actualización de Producto</h2>
        <form action="../CapaLogica/ModelProducto.php" method="post">
            <div class="form-group">
                <label for="codigo">Codigo del Producto a Actualizar:</label>
                <input id="codigo" name="codigo" required="" type="number">
            </div>
            <div class="form-group">
                <label for="nombre">Nuevo Nombre del Producto:</label>
                <input id="nombre" name="nombre" required="" type="text">
            </div>
            <div class="form-group">
                <label for="detalle">Nuevo Detalle:</label>
                <input id="detalle" name="detalle" required="" type="text">
            </div>
            <div class="form-group">
                <label for="precio">Nuevo Precio:</label>
                <input id="precio" min="0.01" name="precio" required="" step="0.01" type="number">
            </div>
            <div class="form-group">
                <label for="cantidad">Nueva Cantidad:</label>
                <input id="cantidad" min="1" name="cantidad" required="" type="number">
            </div>
            <div class="form-group">
                <label for="id_pedido">Id Pedido:</label>
                <input id="id_pedido" min="1" name="id_pedido" required="" type="number">
            </div>
            <div class="form-group">
                <label for="id_proveedor">Id Proveedor:</label>
                <input id="id_proveedor" min="1" name="id_proveedor" required="" type="number">
            </div>
            <input name="proceso" type="hidden" value="actualizar">
            <input type="submit" value="Actualizar Producto">
        </form>
    </div>

</body>

</html>