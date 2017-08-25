<h4><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 22</title>
  </head>
  <body>
    <div class="container">
      <h2>Ejercicio del Sena</h2>
      <form method="post">
        <label>Ingrese cuantos años lleva en sena:</label>
        <input type="number" name="años">
        <br>
        <input class="btn btn-primary" type="submit" name="enviar" value="calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
        <h1>Resultado</h1>
      </form>
      <?php
        $años=$_POST['años'];
        $sueldo= 34000000;
        $aumento=0;
        $aumento1=0;

      if ($años==5) {
        $aumento=$sueldo*0.05;
        $aumento1=$sueldo+$aumento;
          echo "<h4>Usted lleva $años años en el Sena y se le aplicara un aumento del 5% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br></h4>";
        }
      elseif (($años<10) && ($años>5)) {
        $aumento=$sueldo*0.10;
        $aumento1=$sueldo+$aumento;
          echo "<h4>Usted lleva $años años en el Sena y se le aplicara un aumento del 10% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br></h4>";
        }
      elseif (($años<5) &&($años>3)) {
        $aumento=$sueldo*0.025;
        $aumento1=$sueldo+$aumento;
          echo "<h4>Usted lleva $años años en el Sena y se le aplicara un aumento del 2.5% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br></h4>";
      }
      elseif ($años>10) {
        $aumento=$sueldo*0.15;
        $aumento1=$sueldo+$aumento;
          echo "<h4>Usted lleva $años años en el Sena y se le aplicara un aumento del 15% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br></h4>";
        }
      elseif ($años==10) {
          echo "<h4>Usted lleva $años años en el Sena por lo tanto no se le aplicara un aumento al sueldo basico: $sueldo <br></h4>";
          }
        else {
          echo "<h4>Usted no tiene aumento <br></h4>";
        }

       ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
