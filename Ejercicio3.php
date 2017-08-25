<h4><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <div class="container">
      <h1>Ejercicio Primo y No Primo</h1>
      <form method="post">
        <label>Ingrese un numero del 1 al 5:</label>
        <input type="number" name="numero" min="0"max="5">
        <input class="btn btn-primary" type="submit" name="enviar" value="calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
        <hr>
      </form>
      <?php
        $numero=$_POST['numero'];
          if ($numero==1 or $numero==2 or $numero==3 or $numero==5) {
          echo "El numero es Primo";
          }
          elseif ($numero>5) {
            echo "<h4>Numero ingresado fuera del rango</h4>";
          }
          else {
            echo "<h4>El numero no es Primo</h4>";
          }

       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
