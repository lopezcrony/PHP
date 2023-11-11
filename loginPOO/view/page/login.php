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
<div class="card m-5 p-3" style="width: 30rem;">
  <h2>Iniciar sesión</h2>
  <div class="card-body">
  <form method="post" class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <?php
                        $access = autenticationSystem::verifyLogin();

                        echo ($access);
                        if ($access == "ok") {

                                header('Location: ../layouts.php');
                        }
                        
                        ?>
 
  <button type="submit" class="btn btn-primary">Iniciar</button><br><br>
  <a href="index.php?page=register" class="text-decoration-none">No tengo cuenta</button>
</form>  


  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>