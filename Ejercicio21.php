<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 21</title>
  </head>
  <body>
    <div class="container">
      <h2>Ejercicio del Valor Neto</h2>
      <form method="post">
        <label>Ingrese valor bruto:</label>
        <input type="number" name="bruto">
        <br>
        <input class="btn btn-primary" type="submit" name="enviar" value="calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
        <h1>Resultado</h1>
      </form>
      <?php
        $bruto=$_POST['bruto'];
        $neto=0;

      if ($bruto>250000) {
        $neto=$bruto-($bruto*0.10);
          echo "<h4>Su valor a pagar es de: $neto <br></h4>";
        }
        elseif ($bruto<250000) {
          $neto=$bruto-($bruto*0.5);
            echo "<h4>Su valor a pagar es de: $neto <br></h4>";
          }
        else {
          echo "<h4>Usted no tiene descuento <br></h4>";
        }

       ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
