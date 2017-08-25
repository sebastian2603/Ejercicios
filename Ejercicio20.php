<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 20</title>
  </head>
  <body>
    <div class="container">
      <h2>Ejercicio</h2>
      <form method="post">
        <label>En que unidad desea convertirla:
          <li>1. DM - Decámetro</li>
          <li>2. HM - Hectómetro</li>
          <li>3. M - Metro</li>
          <li>4. dm - Decímetro</li>
          <li>5. cm - Centímetro</li>
          <li>6. mm - Milímetro</li>
        </label>
        <br>
        <input type="number" name="lista">
        <br>
        <hr>
        <label>Digite el valor a convertir:</label>
        <input type="number" name="KM" required>
        <hr>
        <input class="btn btn-primary" type="submit" name="enviar" value="Aceptar">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
        <h1>Resultado</h1>
      </form>
      <?php
        $lista = $_POST['lista'];
        $KM = $_POST['KM'];
        $conDM=0;
        $conHM=0;
        $conM=0;
        $condm=0;
        $concm=0;
        $conmm=0;

        switch ($lista) {
          case 1:
            $conDM = 100*$KM;
            echo "<h4>$KM KM convertido a Decámetro es: $conDM Decámetros</h4>";
            break;
          case 2:
            $conHM = 10*$KM;
            echo "<h4>$KM KM convertido a Hectómetro es: $conHM Hectómetros</h4>";
            break;
          case 3:
            $conM = 1000*$KM;
            echo "<h4>$KM KM convertido a Metro es: $conM Metros</h4>";
            break;
          case 4:
            $conM = 10000*$KM;
            echo "<h4>$KM KM convertido a Decímetro es: $conM Decímetros</h4>";
            break;
            case 5:
              $conM = 100000*$KM;
              echo "<h4>$KM KM convertido a Centímetros es: $conM de Centímetros</h4>";
              break;
            case 6:
              $conM = 1000000*$KM;
              echo "<h4>$KM KM convertido a Milímetro es: $conM e Milímetros</h4>";
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
