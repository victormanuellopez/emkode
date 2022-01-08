<?php 
include "conexion.php";

$id = $_GET['id'];

$query = "DELETE FROM empleados WHERE id='$id'";
$resul = mysqli_query($conn, $query);

if ($resul){
    echo "<script> alert('Los datos se eliminaron exitosamente');
    location.href = 'index.php';
    </script>";
}else{
    echo "<script> alert('Los datos no se pudieron eliminar');
    location.href = 'index.php';
    </script>";
}

?>