<html lang="en">

    <head>
        <title>Ver</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>


  <body>

    <!--Vista inicial-->
    <main role="main" class="container my-auto">
      
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">Ver registros</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link">Maria Fernanda Reyes Lopez</a>
              </ul>
            </div>
          </div>
        </nav>
    <br></br>

    <!-- Page Content -->
      <br></br>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido paterno</th>
              <th scope="col">Apellido materno</th>
              <th scope="col">Email</th>
              <th scope="col">Teléfono</th>
            </tr>
          </thead>
          <tbody>
          <!--Consulta con php y sqlite3-->
              <?php
                $db = new SQLite3('agenda.db');
                $results = $db->query('SELECT * FROM personas');

                while ($row = $results->fetchArray()) { ?>
                <tr>
                <td> <?php echo $row['nombre']?> </td>
                <td> <?php echo $row['apellido_paterno']?> </td>
                <td> <?php echo $row['apellido_materno']?> </td>
                <td> <?php echo $row['email']?> </td>
                <td> <?php echo $row['telefono']?> </td>
              </tr>
              <?php } ?>
              
            </tbody>
        </table>

    <div style="width: 500px;">
        <a href="index.php"><button type="button" class="btn" style="background:#C0C0C0">Atrás</button></a>
    </div>

  </body>
</html>