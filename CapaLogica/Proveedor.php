<?php

class Proveedor{
    private string $nombre;
    private string $email;
    private $conexion; 
    
    public function __construct(ConexionDB $conexion) {
        $this->conexion = $conexion->conectar();
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function ingresarProveedor() {
        try {
            $stmt = $this->conexion->prepare("INSERT INTO proveedores (nombre,email) VALUES (?,?)");
            $stmt->execute(array($this->nombre,$this->email));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
            header("Location: ../CapaPresentacion/MenuProveedor.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function actualizarProveedor() {
        try {
            $stmt = $this->conexion->prepare("UPDATE proveedores SET email=?  WHERE nombre=?");
            $stmt->execute(array($this->email,$this->nombre));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
            header("Location: ../CapaPresentacion/MenuProveedor.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function eliminarProveedor() {
        try {
            $stmt = $this->conexion->prepare("DELETE FROM proveedores WHERE nombre=?");
            $stmt->execute(array($this->nombre));
            $count = $stmt->rowCount();
            echo "{$this->columnasAfectadas($count)}";
            header("Location: ../CapaPresentacion/MenuProveedor.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function listarProveedor() {
        try {
            $stmt = $this->conexion->prepare("SELECT * FROM proveedores");
            $stmt->execute();
            $proveedores = $stmt->fetchAll();


            echo '<br><table border="1">';
            echo '<caption><a href=" ../Index.php">Regresar</a></caption';
            echo '<tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>

            </tr>';

            foreach ($proveedores as $proveedor) {
                echo '<tr>';
                echo '<td>' . $proveedor['id'] . '</td>';
                echo '<td>' . $proveedor['nombre'] . '</td>';
                echo '<td>' . $proveedor['email'] . '</td>';
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
