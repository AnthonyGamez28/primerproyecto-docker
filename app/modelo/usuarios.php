<?php 

include_once 'parametros.php';
include_once 'conexion.php';
class Usuarios{
    public static function listar($datos){
        $sql="SELECT * FROM usuarios";
        $conn = new Conexion($datos);
        $pdo = $conn->getConexion();
        $cmd = $pdo->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

//var_dump(usuarios::listar($datosConexion));