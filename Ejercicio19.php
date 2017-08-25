<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 19</title>
  </head>
  <body>
    <div class="container">
      <h2>Ejercicio</h2>
      <form method="post">
        <label>Seleccione:
          <li>1. Triangulo</li>
          <li>2. Rectangulo</li>
          <li>3. Trapecio</li>
        </label>
        <br>
        <input type="number" name="lista">
        <br>
        <hr>
        <label>Digite el lado:</label>
        <input type="number" name="lado" required>
        <hr>
        <input class="btn btn-primary" type="submit" name="enviar" value="Aceptar">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
        <h1>Resultado</h1>
      </form>
      <?php
        $lista = $_POST['lista'];
        $lado = $_POST['lado'];
        $sumaT=0;
        $sumaR=0;
        $sumaTr=0;//Trapecio

        switch ($lista) {
          case 1:
            $sumaT = $lado * 3;
            echo "<h4>El perimetro del Triangulo es: $sumaT</h4>";
            break;
          case 2:
            $sumaR = $lado * 4;
            echo "<h4>El perimetro del Rectangulo es: $sumaR</h4>";
            break;
          case 3:
            $sumaTr = $lado * 4;
            echo "<h4>El perimetro del Trapecio es: $sumaTr</h4>";
            break;
          default:
            echo "<h4>No eligio ninguna opcion del menú</h4>";
            break;
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
