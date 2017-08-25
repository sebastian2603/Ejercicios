<h4><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 9</title>
  </head>
  <body>
    <div class="container">
      <h1>Ejercicio de La Semana</h1>
      <form method="post">
        <label>Ingrese un numero del 1 al 7:</label>
        <input type="number" name="numero">
        <input class="btn btn-primary" type="submit" name="enviar" value="Calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
      </form>
      <?php
        $numero = $_POST['numero'];
        switch ($numero) {
          case 1:
            echo "<h4>El dia de la semana es LUNES</h4>";
            break;
          case 2:
            echo "<h4>El dia de la semana es MARTES</h4>";
            break;
          case 3:
            echo "<h4>El dia de la semana es MIERCOLES</h4>";
            break;
          case 4:
            echo "<h4>El dia de la semana es JUEVES</h4>";
            break;
          case 5:
            echo "<h4>El dia de la semana es VIERNES</h4>";
            break;
          case 6:
            echo "<h4>El dia de la semana es SABADO</h4>";
            break;
          case 7:
            echo "<h4>El dia de la semana es DOMINGO</h4>";
            break;

          default:
            echo "<h4>El numero ingresado esta fuera de rango</h4>";
            break;
        }

       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
