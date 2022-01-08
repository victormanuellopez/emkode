<?php 

include "conexion.php";
$id = $_GET['id'];
$query = "SELECT * FROM empleados WHERE id='$id'";
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

<?php  while ($lista = mysqli_fetch_assoc($resul)){ ?>
    <div class="container">
    <br><br>
    <h2>Editar Empleados</h2><br>
    <form action="edit.php" method="POST">
    <div class="form-group">
            <input type="hidden" class="form-control"  name="id" value="<?php echo $lista["id"]; ?>">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="ingrese su nombre" name="nombre" value="<?php echo $lista["nombre"]; ?>">
        </div>
        <div class="form-group">
            <label for="Apaterno">Apellido:</label>
            <input type="text" class="form-control" placeholder="ingrese su apellido"  name="apellido" value="<?php echo $lista["apellido"]; ?>">
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" placeholder="ingrese su correo electronico"  name="email" value="<?php echo $lista["correo"]; ?>">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" class="form-control" placeholder="ingrese su telefono"  name="telefono" value="<?php echo $lista["telefono"]; ?>">
        </div>

        <?php } ?>
        
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php" type="button" class="btn btn-danger">Cancelar</a>
    </form>

    </div>

</body>
</html>