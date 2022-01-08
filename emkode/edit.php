<?php 
include "conexion.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];

$query = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono' WHERE id='$id'";
$resul = mysqli_query($conn, $query);

if ($resul){
    echo "<script> alert('Los datos se han actualizado correctamente');
    location.href = 'index.php';
    </script>";
}else{
    echo "<script> alert('Los datos no se actualizaron');
    location.href = 'index.php';
    </script>";
}



?>