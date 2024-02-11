<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Ingreso de Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Ingreso de Producto</h2>
        <form action="../CapaLogica/ModelProducto.php" method="post">
            <div class="form-group">
                <label for="codigo">Código del Producto:</label>
                <input id="codigo" name="codigo" required="" type="number">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del Producto:</label>
                <input id="nombre" name="nombre" required="" type="text">
            </div>
            <div class="form-group">
                <label for="detalle">Detalle:</label>
                <textarea id="detalle" name="detalle" required=""></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input id="precio" min="0.01" name="precio" required="" step="0.01" type="number">
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input id="cantidad" min="1" name="cantidad" required="" type="number">
            </div>
            <div class="form-group">
                <label for="id_pedido">ID del Pedido:</label>
                <input id="id_pedido" name="id_pedido" required="" type="number">
            </div>
            <div class="form-group">
                <label for="id_proveedor">ID del Proveedor:</label>
                <input id="id_proveedor" name="id_proveedor" required="" type="number">
            </div>
            <input name="proceso" type="hidden" value="ingresar">
            <input type="submit" value="Ingresar Producto">
        </form>
    </div>
</body>
</html>
