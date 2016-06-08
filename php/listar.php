<?php 
include('conexion.php');


$entidad = $_POST["entidad"]; 
$periodo = $_POST["periodo"]; 


$con = conexion();

$resultado = $con->query("CALL LISTAR(1, 2016)");

$datos = array();

while ($row = $resultado->fetch_assoc()){
    $datos[] = $row;
    
}



echo json_encode($datos);






?>