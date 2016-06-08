<?php 


function conexion()
{
    global  $DB_HOST;
    global $DB_USER;
    global $DB_PASSWORD;
    global $DB_NAME;
    
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = 'godzuki';
    $DB_NAME = 'scej';
    
 $link =@new mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_NAME);
     if(mysqli_connect_errno()) {
         print(error_db_connect());
         exit();
     } 
 return   $link;
         
}

conexion();

?>