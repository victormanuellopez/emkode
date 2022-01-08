<?php 
include "conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO empleados(nombre,apellido,correo,telefono) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";
$resul = mysqli_query($conn, $query);

if ($resul){
    echo "<script> alert('Los datos se guardaron exitosamente');
    location.href = 'index.php';
    </script>";
}else{
    echo "<script> alert('Los datos no se guardaron');
    location.href = 'index.php';
    </script>";
}

?>