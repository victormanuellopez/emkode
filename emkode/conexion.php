<?php 

$servename = "localhost";
$database = "emkode";
$username = "root";
$password = "";

$conn = mysqli_connect($servename, $username, $password, $database);

if(!$conn){
    die("conexion fallida:" .mysqli_connect_error());
}

?>