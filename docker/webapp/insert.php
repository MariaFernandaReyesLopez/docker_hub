<html lang="en">

    <head>
        <title>Insertar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
<body>
        <main role="main" class="container my-auto">
          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Insertar registro</a>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link">Maria Fernanda</a>
                </ul>
              </div>
            </div>
          </nav>
          <br></br>
    <form method="POST" action="insertform.php" class="main-form needs-validation" novalidate>
      <br></br>
        <div class="form-group">
            <label for="nombre">Nombre(s)</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido_paterno">Apellido paterno</label>
            <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido_materno">Apellido materno</label>
            <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" required>
        </div>
    <br></br>
    
    <div style="width: 500px;">
        <button type="submit" class="btn btn-primary" style="background:#0080FF">Guardar</button>
        <a href="index.php"><button type="button" class="btn" style="background:#C0C0C0">Atrás</button></a>
    </div>
    <br></br>
    </form>
  <!--VALIDACIÓN DE CAMPOS-->
    <script>
        var form = document.querySelector('.needs-validation');
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        })
    </script>
    
</body>
</html>