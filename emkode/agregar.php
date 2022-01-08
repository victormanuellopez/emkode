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
    <h2>Agregar Empleados</h2><br>
    <form action="insert.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" placeholder="ingrese su nombre" name="nombre" id="nombre">
        </div>
        <div class="form-group">
            <label for="Apaterno">Apellido:</label>
            <input type="text" class="form-control" placeholder="ingrese su apellido"  name="apellido" id="apellido">
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" placeholder="ingrese su correo electronico"  name="email" id="email">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" class="form-control" placeholder="ingrese su telefono"  name="telefono" id="telefono">
        </div>
      
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php" type="button" class="btn btn-danger">Cancelar</a>
    </form>
    </div>

</body>
</html>