<?php

class ConexionDB {
    private $server = "localhost";
    private $database = "comercial";
    private $username = "root";
    private $password = "";
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
