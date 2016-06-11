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
$generic="example";

$link = mysqli_connect('localhost', 'root', 'godzuki','scej')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully \n';
//mysqli_select_db('scej') or die('No se pudo seleccionar la base de datos'); 

$query=("CALL Inscribir_Beneficiario "
                . "('" . $sol_insc['fecha_nac'] . "', '" . $sol_insc['nombre1'] . "','" . $sol_insc['nombre2'] . "','" . $sol_insc['apellido1'] ."','" . $sol_insc['apellido2'] ."','" . $sol_insc['rut'] ."','" . $sol_insc['direccion'] ."','" . $sol_insc['genero'] . "','" . $sol_insc['entidad'] ."','" . $sol_insc['estado']  . "','".$usuario . "'," .$retorno     .");");  

$stmt =mysqli_prepare($link,$query);

mysqli_stmt_bind_param($stmt,"i", $retorno);

mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
$query2=("SELECT $retorno "); 

$result = mysqli_query($link, $query2);
list($retorno) = mysqli_fetch_row($result);
mysqli_free_result($result);




?>