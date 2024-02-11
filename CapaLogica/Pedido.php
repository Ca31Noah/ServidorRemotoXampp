<?php

class Pedido{
    private int $id_pedido;
    private int $id_producto;
    private int $id_proveedor;
    private int $cantidad_pedida;
    private string $fecha_pedido; 
    private string $estado_pedido;

    private $conexion; 
    
    public function __construct(ConexionDB $conexion) {
        $this->conexion = $conexion->conectar();
    }

    public function setId_pedido(int $id_pedido): void {
        $this->id_pedido = $id_pedido;
    }

    public function setId_producto(int $id_producto): void {
        $this->id_producto = $id_producto;
    }

    public function setId_proveedor(int $id_proveedor): void {
        $this->id_proveedor = $id_proveedor;
    }
    public function setCantidad_pedida(int $cantidad_pedida): void {
        $this->cantidad_pedida = $cantidad_pedida;
    }

    public function setFecha_pedido(string $fecha_pedido): void {
        $this->fecha_pedido = $fecha_pedido;
    }

    public function setEstado_pedido(string $estado_pedido): void {
        $this->estado_pedido = $estado_pedido;
    }

    public function getId_pedido(): int {
        return $this->id_pedido;
    }

    public function getId_producto(): int {
        return $this->id_producto;
    }

    public function getId_proveedor(): int {
        return $this->id_proveedor;
    }
    public function getCantidad_pedida(): int {
        return $this->cantidad_pedida;
    }

    public function getFecha_pedido(): string {
        return $this->fecha_pedido;
    }

    public function getEstado_pedido(): string {
        return $this->estado_pedido;
    }


    public function ingresarPedido() {
        try {
            $stmt = $this->conexion->prepare("INSERT INTO pedidos (id_pedido, id_producto,id_proveedor,cantidad_pedida,fecha_pedido, estado_pedido) VALUES (?,?,?,?,?,?)");
            $stmt->execute(array($this->id_pedido,$this->id_producto,$this->id_proveedor,$this->cantidad_pedida, $this->fecha_pedido , $this->estado_pedido));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
            header("Location: ../CapaPresentacion/MenuProducto.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function actualizarPedido() {
        try {
            $stmt = $this->conexion->prepare("UPDATE pedidos SET id_producto=?, id_proveedor=?, cantidad_pedida=?, fecha_pedido=?, estado_pedido=? WHERE id_pedido=?");
            $stmt->execute(array($this->id_producto, $this->id_proveedor, $this->cantidad_pedida, $this->fecha_pedido, $this->estado_pedido, $this->id_pedido));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
            header("Location: ../CapaPresentacion/MenuProducto.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function eliminarPedido() {
        try {
            $stmt = $this->conexion->prepare("DELETE FROM pedidos WHERE id_pedido=?");
            $stmt->execute(array($this->id_pedido));
            header("Location: ../CapaPresentacion/MenuProducto.php");
            echo "Pedido eliminado correctamente";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function listarPedido() {
        try {
            $stmt = $this->conexion->prepare("SELECT * FROM pedidos");
            $stmt->execute();
            $pedidos = $stmt->fetchAll();
    

            echo '<table border="1">';
            echo '<caption><a href=" ../Index.php">Regresar</a></caption';
            echo '<tr>
            <th>Id Pedido</th>
            <th>Id Producto</th>
            <th>Id Proveedor</th>
            <th>Cantidad Pedida</th>
            <th>Fecha del Pedido</th>
            <th>Estado del pedido</th>
            </tr>';
    
            foreach ($pedidos as $pedido) {
                echo '<tr>';
                echo '<td>' . $pedido['id_pedido'] . '</td>';
                echo '<td>' . $pedido['id_producto'] . '</td>';
                echo '<td>' . $pedido['id_proveedor'] . '</td>';
                echo '<td>' . $pedido['cantidad_pedida'] . '</td>';
                echo '<td>' . $pedido['fecha_pedido'] . '</td>';
                echo '<td>' . $pedido['estado_pedido'] . '</td>';
                echo '</tr>';
            }
    
            echo '</table>';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }    

    private function columnasAfectadas($count): string {
        if ($count !== null && $count > 0) {
            $sms = "Operación realizada correctamente";
        } else {
            $sms = "Error, revise la conexión con su Base de datos";
        }
    
        return $sms;
    }

}


