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

$link = mysql_connect('localhost', 'root', 'godzuki')
    or die('No se pudo conectar: ' . mysql_error());
echo '(Conexión exitosa)';
mysql_select_db('scej') or die('No se pudo seleccionar la base de datos'); 

$query=("CALL Inscribir_Beneficiario "
                . "('" . $sol_insc['fecha_nac'] . "', '" . $sol_insc['nombre1'] . "','" . $sol_insc['nombre2'] . "','" . $sol_insc['apellido1'] ."','" . $sol_insc['apellido2'] ."','" . $sol_insc['rut'] ."','" . $sol_insc['direccion'] ."','" . $sol_insc['genero'] . "'," . $sol_insc['entidad'] ."," . $sol_insc['estado']  . ",".
                $usuario .");");  

 //Calling the total_price stored procedure using the @t OUT parameter

 $result= mysql_query( $query)
 or die(mysql_error());
 
if($result === FALSE) { 
    die(mysql_error()) ;// TODO: better error handling      
}else{
    while($row = mysql_fetch_row($result))
             {
             if ($row[0] == 1){
                 echo "Ha sido inscrito";
             }
             if ($row[0] == -1){
                  echo "Ya fue inscrito en este periodo";
             }      
              if ($row[0] == 2){
                 echo "Inscrito correctamente";   
              }
             if ($row[0] == -2){
                 echo "No cumple el limite de edad";   
              }
             
             }  
    
}


mysql_close($link);



?>