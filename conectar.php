<?php
$localhost = 'localhost'; 
$username = 'root'; 
$password = '1234'; 
$database = 'aiuda'; //no se te olvide cambiarlo :v

$conn = new mysqli($localhost, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>
