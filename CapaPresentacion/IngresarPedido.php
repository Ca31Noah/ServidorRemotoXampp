<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Ingreso de Pedido</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Ingreso de Pedido</h2>
        <form action="../CapaLogica/ModelPedido.php" method="post">
            <div class="form-group">
                <label for="id_pedido">ID del Pedido:</label>
                <input id="id_pedido" name="id_pedido" required="" type="number">
            </div>
            <div class="form-group">
                <label for="id_producto">ID del Producto:</label>
                <input id="id_producto" name="id_producto" required="" type="number">
            </div>
            <div class="form-group">
                <label for="id_proveedor">ID del Proveedor:</label>
                <input id="id_proveedor" name="id_proveedor" required="" type="number">
            </div>
            <div class="form-group">
                <label for="cantidad_pedida">Cantidad Pedida:</label>
                <input id="cantidad_pedida" min="1" name="cantidad_pedida" required="" type="number">
            </div>
            <div class="form-group">
                <label for="fecha_pedido">Fecha del Pedido:</label>
                <input id="fecha_pedido" name="fecha_pedido" required="" type="date">
            </div>
            <div class="form-group">
                <label for="estado_pedido">Estado del Pedido:</label>
                <select id="estado_pedido" name="estado_pedido" required="">
                    <option value="En Proceso">En Proceso</option>
                    <option value="Completado">Completado</option>
                    <option value="Cancelado">Cancelado</option>
                </select>
            </div>
            <input name="operacion" type="hidden" value="ingresar">
            <input type="submit" value="Ingresar Pedido">
        </form>
    </div>
</body>

</html>