<?php

class Producto{
    private int $codigo;
    private string $nombre;
    private string $detalle;
    private float $precio; 
    private int $cantidad;
    private int $id_pedido;
    private int $id_proveedor;

    private $conexion; 
    
    public function __construct(ConexionDB $conexion) {
        $this->conexion = $conexion->conectar();
    }

    public function setCodigo(int $codigo): void {
        $this->codigo = $codigo;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
    public function setDetalle(string $detalle): void {
        $this->detalle = $detalle;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }

    public function setCantidad(int $cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function setId_pedido(int $id_pedido): void {
        $this->id_pedido = $id_pedido;
    }

    public function setId_proveedor(int $id_proveedor): void {
        $this->id_proveedor = $id_proveedor;
    }


    public function getCodigo(): int {
        return $this->codigo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
    public function getDetalle(): string {
        return $this->detalle;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getCantidad(): int {
        return $this->cantidad;
    }

    public function getId_pedido(): int {
        return $this->id_pedido;
    }

    public function getId_proveedor(): int {
        return $this->id_proveedor;
    }


    public function ingresarProducto() {
        try {
            $stmt = $this->conexion->prepare("INSERT INTO productos (codigo,nombre,detalle,precio,cantidad,id_pedido,id_proveedor) VALUES (?,?,?,?,?,?,?)");
            $stmt->execute(array($this->codigo,$this->nombre,$this->detalle, $this->precio, $this->cantidad,$this->id_pedido,$this->id_proveedor));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
            header("Location: ../CapaPresentacion/MenuProducto.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function actualizarProducto() {
        try {
            $stmt = $this->conexion->prepare("UPDATE productos SET nombre=?, detalle=?, precio=?, cantidad=?, id_pedido=?, id_proveedor=?  WHERE codigo=?");
            $stmt->execute(array($this->nombre, $this->detalle, $this->precio, $this->cantidad,$this->id_pedido,$this->id_proveedor, $this->codigo));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function eliminarProducto() {
        try {
            $stmt = $this->conexion->prepare("DELETE FROM productos WHERE codigo=?");
            $stmt->execute(array($this->codigo));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function listarProducto() {
        try {
            $stmt = $this->conexion->prepare("SELECT * FROM productos");
            $stmt->execute();
            $productos = $stmt->fetchAll();

            echo '<table border="1">';
            echo '<caption><a href=" ../Index.php">Regresar</a></caption';
            echo '<tr>
            <th>Id</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Id_pedido</th>
            <th>Id_proveedor</th>
            </tr>';

            foreach ($productos as $producto) {
                echo '<tr>';
                echo '<td>' . $producto['id'] . '</td>';
                echo '<td>' . $producto['codigo'] . '</td>';
                echo '<td>' . $producto['nombre'] . '</td>';
                echo '<td>' . $producto['detalle'] . '</td>';
                echo '<td>' . number_format($producto['precio'], 2) . '</td>';
                echo '<td>' . $producto['cantidad'] . '</td>';
                echo '<td>' . $producto['id_pedido'] . '</td>';
                echo '<td>' . $producto['id_proveedor'] . '</td>';
                echo '</tr>';
            }
            echo '</table> <br>';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function columnasAfectadas($count): string {
        if($count<>null && $count>0) {
            $sms= "Operación realizada correctamente";
        }else {
            $sms= "Error, revise la conexion con su Base de datos";
        }
        return $sms;
    }
}
