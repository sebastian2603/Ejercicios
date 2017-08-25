<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
      <h1>Ejercicio De Par Impar</h1>
      <form method="post">
        <label>Ingrese un numero:</label>
        <input type="number" name="numero" value="">
        <input class="btn btn-primary" type="submit" name="enviar" value="calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
      </form>
      <?php
        $numero=$_POST['numero'];
          if ($numero%2==0) {
          echo "<h4>El numero es Par</h4>";
          }
          else {
            echo "<h4>El numero es Impar</h4>";
          }

       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
