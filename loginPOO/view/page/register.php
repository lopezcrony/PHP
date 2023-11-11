<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container justify-content-center text-center">
<div class="card m-5 p-5" style="width: 40rem;">
  <h2>Registro</h2>
  <div class="card-body">
<form id="registro" class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo" required>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Registrarse</button><br><br>
  <a href="index.php?page=login" class="text-decoration-none">Ya tengo cuenta</button>

    </div>
  </div>
</form>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>