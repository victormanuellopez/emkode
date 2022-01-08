<?php 

include "conexion.php";

$query = "SELECT * FROM empleados";
$resul = mysqli_query($conn,$query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>

    

    <div class="container">
    <br><br>
    <h2>Lista Empleados</h2><br>
    <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
    <br>
    <a href="agregar.php" type="button" class="btn btn-primary">Agregar</a>
    <br><br>
    <table class="table table-hover">
        <thead class="thead-ligth table-info text-dark">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php  while ($lista = mysqli_fetch_assoc($resul)){ ?>
            <tr>
                <td><?php echo $lista["nombre"]; ?></td>
                <td><?php echo $lista["apellido"]; ?></td>
                <td><?php echo $lista["correo"]; ?></td>
                <td><?php echo $lista["telefono"]; ?></td>
                <td>    
                    <a href="editar.php?id=<?php echo $lista["id"]; ?>" type="button" class="btn btn-success">Editar</a>
                    <a href="eliminar.php?id=<?php echo $lista["id"]; ?>" type="button" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
    </div>
    <script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>