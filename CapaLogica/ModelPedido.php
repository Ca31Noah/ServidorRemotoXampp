<?php
include('../CapaDatos/Conexion.php');
include('Pedido.php');

$conexionDB = new ConexionDB();
$pedido = new Pedido($conexionDB);

if (!empty($_POST["operacion"])) {
    $operacion = $_POST["operacion"];
    if($operacion == "ingresar") {
        $id_pedido = $_POST["id_pedido"];
        $id_producto = $_POST["id_producto"];
        $id_proveedor = $_POST["id_proveedor"];
        $cantidad_pedida = $_POST["cantidad_pedida"];
        $fecha_pedido = $_POST["fecha_pedido"];
        $estado_pedido = $_POST["estado_pedido"];
        $pedido->setId_pedido($id_pedido);
        $pedido->setId_producto($id_producto);
        $pedido->setId_proveedor($id_proveedor);
        $pedido->setCantidad_pedida($cantidad_pedida);
        $pedido->setFecha_pedido($fecha_pedido);
        $pedido->setEstado_pedido($estado_pedido);
        $pedido->ingresarPedido();
    }elseif ($operacion == "actualizar") {
        $id_pedido = $_POST["id_pedido"];
        $id_producto = $_POST["id_producto"];
        $id_proveedor = $_POST["id_proveedor"];
        $cantidad_pedida = $_POST["cantidad_pedida"];
        $fecha_pedido = $_POST["fecha_pedido"];
        $estado_pedido = $_POST["esatdo_pedido"];
        $pedido->setId_pedido($id_pedido);
        $pedido->setId_producto($id_producto);
        $pedido->setId_proveedor($id_proveedor);
        $pedido->setCantidad_pedida($cantidad_pedida);
        $pedido->setFecha_pedido($fecha_pedido);
        $pedido->setEstado_pedido($estado_pedido);
        $pedido->actualizarPedido();
    }elseif ($operacion == "eliminar") {
        $id_pedido = $_POST["id_pedido"];
        $pedido->setId_pedido($id_pedido);
        $pedido->eliminarPedido();
    }
}else{
    $pedido->listarPedido();
}