<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <h1>Ejercicio Mayor 10</h1>
      <form method="post">
        <label>Ingrese un numero:</label>
         <input type="number" name="numero">
        <input class="btn btn-primary" type="submit" name="enviar" value="calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
      </form>
      <?php
        $numero=$_POST['numero'];
          if ($numero>10) {
          echo "<h4>El numero es mayor que 10</h4>";
          }
          else {
            echo "<h4>El numero es menor que 10</h4>";
          }

       ?>
     </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
