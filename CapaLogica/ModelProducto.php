<?php

include('../CapaDatos/Conexion.php');
include('Producto.php');

include('Proveedor.php');

$conexionDB = new ConexionDB();

$producto = new Producto($conexionDB);

if (!empty($_POST["proceso"])) {
    $proceso = $_POST["proceso"];

    if ($proceso == "ingresar") {
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $detalle = $_POST["detalle"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];
        $id_pedido = $_POST["id_pedido"];
        $id_proveedor = $_POST["id_proveedor"];
        $producto->setCodigo($codigo);
        $producto->setNombre($nombre);
        $producto->setDetalle($detalle);
        $producto->setPrecio($precio);
        $producto->setCantidad($cantidad);
        $producto->setId_pedido($id_pedido);
        $producto->setId_proveedor($id_proveedor);
        $producto->ingresarProducto();
    }elseif ($proceso == "actualizar") {
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $detalle = $_POST["detalle"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];
        $id_pedido = $_POST["id_pedido"];
        $id_proveedor = $_POST["id_proveedor"];
        $producto->setCodigo($codigo);
        $producto->setNombre($nombre);
        $producto->setDetalle($detalle);
        $producto->setPrecio($precio);
        $producto->setCantidad($cantidad);
        $producto->setId_pedido($id_pedido);
        $producto->setId_proveedor($id_proveedor);
        $producto->actualizarProducto();
    }elseif ($proceso == "eliminar") {
        $codigo = $_POST["codigo"];
        $producto->setCodigo($codigo);
        $producto->eliminarProducto();
    }
}else{

    $producto->listarProducto();
    
}

