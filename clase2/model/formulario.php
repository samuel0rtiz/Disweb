<?php
require_once "../config/conexion.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Formulario extends Conexion {
    public function __construct() {
    }

    public function altaUsuario($nombre, $carrera, $tipo) {
        $query = "INSERT INTO tb_usuario (nombre, carrera, tipo) VALUES (:nombre, :carrera, :tipo)";
        $sql = Conexion::conectar()->prepare($query);
    
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':carrera', $carrera);
        $sql->bindParam(':tipo', $tipo, PDO::PARAM_INT); // Asegura que sea entero
    
        return $sql->execute();
    }
    public function listar_usuarios (){
        $query = "SELECT  id_usuario,nombre,carrera FROM tb_usuario";
        $sql = Conexion::conectar()->prepare($query);
        if ($sql->execute()) {
            $rows=$sql->fetchALL(\PDO::FETCH_OBJ);
            return json_encode($rows);

        } else {
            return false;
        }
        
    
     




    }
    
}
?>
