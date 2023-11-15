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

                        if ($access == "ok") {
                          echo '
                          <script>
                              Swal.fire({
                                  position: "top",
                                  icon: "success",
                                  title: "Acceso exitoso!",
                                  showConfirmButton: false,
                                  timer: 1500
                              });
                          </script>
                      ';

                                header('Location: ../layouts.php');
                        }
                        
                        ?>
 
  <br><button type="submit" class="btn btn-primary">Iniciar</button><br><br>
  <a href="index.php?page=register" class="text-decoration-none">No tengo cuenta</button>
</form>  


  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
