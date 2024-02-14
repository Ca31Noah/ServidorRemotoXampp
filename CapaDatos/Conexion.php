<?php

class ConexionDB {
    private $server = "192.168.1.100";
    private $database = "comercial";
    private $username = "Noa";
    private $password = "3323";
    private $conexion;

    public function conectar(){
        try {
            $this->conexion = new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);
 
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function cerrarConexion(){ 
        $this->conexion = null;
    }
}
