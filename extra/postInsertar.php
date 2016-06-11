<?php

$myjson = json_decode($_POST['enviado'], true);
var_dump($myjson);
//foreach ($array as &$myjson["hijos"]) {
//}

$servername = "localhost";
$username = "alejandro";
$password = "Alejandro123";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn->query("INSERT INTO Usuario VALUES "
                . "('" . $myjson['usuario'] . "', '" . $myjson['nombre'] . "','" . $myjson['apellido'] . "')") === TRUE) {
    echo "OK";
} else {
    echo "FALLO";
}
$conn->close();
?>
