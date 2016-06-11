<?php

$sol_insc = json_decode($_POST['enviado'], true);
var_dump($sol_insc);
//foreach ($array as &$myjson["hijos"]) {
//}

$servername = "localhost";
$username = "root";
$password = "godzuki";
$dbname = "scej";

$retorno = "@ret";
$usuario = 1;

$link = mysql_connect('localhost', 'root', 'godzuki')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully \n';
mysql_select_db('scej') or die('No se pudo seleccionar la base de datos'); 


$query=("CALL Inscribir_Beneficiario "
                . "('" . $sol_insc['fecha_nac'] . "', '" . $sol_insc['nombre1'] . "','" . $sol_insc['nombre2'] . "','" . $sol_insc['apellido1'] ."','" . $sol_insc['apellido2'] ."','" . $sol_insc['rut'] ."','" . $sol_insc['direccion'] ."','" . $sol_insc['genero'] . "','" . $sol_insc['entidad'] ."','" . $sol_insc['estado']  . "','".$usuario . "'," .$retorno     .");");  
$query2=("SELECT $retorno "); 

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
 //$result2 = mysql_query($query2)or die('Consulta2 fallida: ' . mysql_error());

echo  $result ;




?>