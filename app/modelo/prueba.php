<?php

include_once 'parametros.php';
include_once 'conexion.php';

$conn = new Conexion($datosConexion);
if($conn->getConexion()) echo "Conexion Exitosa";
else echo "No se pudo realizar la conexion";