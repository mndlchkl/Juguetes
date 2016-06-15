<?php

$sol_listar = json_decode($_POST['listar'], true);
var_dump($sol_listar);
//foreach ($array as &$myjson["hijos"]) {
//}

$servername = "localhost";
$username = "root";
$password = "godzuki";
$dbname = "scej";

$mysqli = new mysqli($servername,$username,$password,$dbname);
$resp= array();

$q=("CALL Listar(" . $sol_listar['entidad'] . ", " . $sol_listar['periodo']    .");");  
/*$q=("CALL Listar(1,2016)")*/

if($result = $mysqli->query($q)){
    
    while($row = $result->fetch_array(MYSQL_ASSOC)){
        $resp[] = $row;
        
    }
    echo json_encode(array( "resultado"=>$resp ));    
}

$mysqli->close();
$result->close();

//$link = mysql_connect('localhost', 'root', 'godzuki')
//    or die('No se pudo conectar: ' . mysql_error());
//echo '(Conexión exitosa)';
//mysql_select_db('scej') or die('No se pudo seleccionar la base de datos'); 
//
//$result= array();
//
//$query=("CALL Listar(" . $sol_listar['entidad'] . ", " . $sol_listar['periodo']    .");");  
//
//  mysql_query( $query)
// or die(mysql_error());
//
//if($result === FALSE) { 
//    die(mysql_error()) ;// TODO: better error handling      
//}else{
//    
//    while($row= mysql_fetch_row($result)){
//      $result[] = $row;
//    }
//    echo $result;
//    
//}
//
// mysql_close($link);



?>