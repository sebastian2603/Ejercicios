<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 11</title>
  </head>
  <body>
    <div class="container">
      <h1>Ejercicio Primo </h1>
      <form method="post">
        <label>Ingrese un numero:</label>
        <input type="number" name="numero1" min="0"max="5">
        <br>
        <label>Ingrese un numero:</label>
        <input type="number" name="numero2" min="0"max="5">
        <br>
        <input class="btn btn-primary" type="submit" name="enviar" value="calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
      </form>
      <?php
        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];


          if (($numero1==1 or $numero1==2 or $numero1==3 or $numero1==5) && ($numero2==1 or $numero2==2 or $numero2==3 or $numero2==5)){
            echo "<h4>Los numeros son primos</h4>";
          }
          elseif (($numero1==1 or $numero1==2 or $numero1==3 or $numero1==5) && ($numero2==4)) {
            echo "<h4>El numero uno es primo y el segundo no</h4>";
          }
          elseif (($numero2==1 or $numero2==2 or $numero2==3 or $numero2==5) && ($numero1==4)) {
            echo "<h4>El numero uno no es primero y el segundo si</h4>";
          }
          else {
            echo "<h4>Ninguno de los dos es primo</h4>";
          }

       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
