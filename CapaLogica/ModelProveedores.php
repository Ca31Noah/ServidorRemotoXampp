<?php

include('../CapaDatos/Conexion.php');
include('Proveedor.php');

$conexionDB = new ConexionDB();
$proveedor = new Proveedor($conexionDB);

if (!empty($_POST["ataque"])) {
    $ataque = $_POST["ataque"];

    if ($ataque == "ingresar") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $proveedor->setNombre($nombre);
        $proveedor->setEmail($email);
        $proveedor->ingresarProveedor();
    }elseif ($ataque == "actualizar") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $proveedor->setNombre($nombre);
        $proveedor->setEmail($email);
        $proveedor->actualizarProveedor();
    }elseif ($ataque == "eliminar") {
        $nombre = $_POST["nombre"];
        $proveedor->setNombre($nombre);
        $proveedor->eliminarProveedor();
    }
}else{
    $proveedor->listarProveedor();
    
}

