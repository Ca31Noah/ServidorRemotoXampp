<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Actualización de Pedido
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>
            Actualización de Pedido
        </h2>
        <form action="../CapaLogica/ModelPedido.php" method="post">
            <div class="form-group">
                <label for="id_pedido">
                    ID Pedido:
                </label>
                <input id="id_pedido" name="id_pedido" required="" type="number">
                </input>
            </div>
            <div class="form-group">
                <label for="id_producto">
                    ID Producto:
                </label>
                <input id="id_producto" name="id_producto" required="" type="number">
                </input>
            </div>
            <div class="form-group">
                <label for="id_proveedor">
                    ID Proveedor:
                </label>
                <input id="id_proveedor" name="id_proveedor" required="" type="number">
                </input>
            </div>
            <div class="form-group">
                <label for="cantidad_pedida">
                    Cantidad Pedida:
                </label>
                <input id="cantidad_pedida" name="cantidad_pedida" required="" type="number">
                </input>
            </div>
            <div class="form-group">
                <label for="fecha_pedido">
                    Fecha de Pedido:
                </label>
                <input id="fecha_pedido" name="fecha_pedido" required="" type="date">
                </input>
            </div>
            <div class="form-group">
                <label for="estado_pedido">
                    Estado del Pedido:
                </label>
                <select id="estado_pedido" name="estado_pedido" required="">
                    <option value="">
                        Seleccionar Estado
                    </option>
                    <option value="pendiente">
                        Pendiente
                    </option>
                    <option value="en_proceso">
                        En Proceso
                    </option>
                    <option value="enviado">
                        Enviado
                    </option>
                    <option value="entregado">
                        Entregado
                    </option>
                </select>
            </div>
            <input name="operacion" type="hidden" value="actualizar">
            <input type="submit" value="Actualizar Pedido">
            </input>
            </input>
        </form>
    </div>
</body>

</html>