<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Eliminar Pedido por ID de Proveedor
    </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>
            Eliminar Pedido
        </h2>
        <form action="../CapaLogica/ModelPedido.php" method="post">
            <div class="form-group">
                <label for="id_pedido">
                    ID Pedido:
                </label>
                <input id="id_pedido" name="id_pedido" required="" type="number">
                </input>
            </div>
            <input name="operacion" type="hidden" value="eliminar">
            <input type="submit" value="Eliminar Pedidos de este Proveedor">
            </input>
            </input>
        </form>
    </div>
</body>

</html>