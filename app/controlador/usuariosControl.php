<?php
include_once '../modelo/usuarios.php';
include_once '../modelo/parametros.php';
class UsuariosControl{
    public static function listar($datos){
        return Usuarios::listar($datos);
    }
}

echo json_encode(UsuariosControl::listar($datosConexion));