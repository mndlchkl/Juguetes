<?php
$servername = "localhost";
$username = "root";
$password = "godzuki";
$dbname = "scej";

$link = mysql_connect('localhost', 'root', 'godzuki')
    or die('No se pudo conectar: ' . mysql_error());
echo '(Conexión exitosa)';
mysql_select_db('scej') or die('No se pudo seleccionar la base de datos'); 

$resp= array();

$q=("Select Edad,Entidad.nombre,nombre,apellido,fecha_nac from beneficiario inner join entidad on entidad.id=beneficiario.entidad_id; "); 


  mysql_query( $query)
 or die(mysql_error());


/*$q=("CALL Listar(1,2016)")*/

if($result = $mysqli->query("Select Edad,Entidad.nombre,nombre,apellido,fecha_nac from beneficiario inner join entidad on entidad.id=beneficiario.entidad_id; ")){   
    while($row = $result->fetch_array(MYSQL_ASSOC)){
        $resp[] = $row;
        
    }
    echo json_encode(array( "resultado"=>$resp ));    
}


$result->close();
$mysqli->close();




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