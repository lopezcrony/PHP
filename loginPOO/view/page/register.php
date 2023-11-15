<div class="container justify-content-center text-center">
<div class="card m-5 p-5" style="width: 40rem;">
  <h2>Registro</h2>
  <div class="card-body">
<form id="registro" class="container">
<div class="form-group row"> 
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input name="document" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Documento de identidad">
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="nombreUsuario" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre">
                            </div>
                            <div class="col-sm-6">
                                <input name="apellidoUsuario" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                            </div>
                        </div>

  <?php
  $register=autenticationSystem::addUser();

  echo ($register);
  if ($register=='ok') {
         echo '
          <script>
          Swal.fire({
              position: "top",
              icon: "success",
              title: "Registro exitoso!",
              showConfirmButton: false,
              timer: 1500
            });
          </script>
      ';
  }
  

?>

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
