<h4><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 7</title>
  </head>
  <body>
    <div class="container">
      <h1>Ejercicio que evalue si esta entre 10 y 100</h1>
      <form method="post">
        <label>Ingrese un numero:</label>
        <input type="number" name="numero">
        <input class="btn btn-primary" type="submit" name="enviar" value="Calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
      </form>
      <?php
        $numero = $_POST['numero'];
          if ($numero>10 && $numero<100 ) {
          echo "<h4>El numero esta entre 10 y 100</h4>";
          }
          else {
            echo "<h4>El numero no esta en el rango de 10 a 100</h4>";
          }

       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
