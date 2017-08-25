<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 18</title>
  </head>
  <body>
    <div class="container">
      <h2>Ejercicio si el tercero es igual al modulo del primero y el segundo</h2>
      <form method="post">
        <label>Ingrese un numero :</label>
        <input type="number" name="numero1">
        <br>
        <label>Ingrese un numero :</label>
        <input type="number" name="numero2">
        <br>
        <label>Ingrese un numero :</label>
        <input type="number" name="numero3">
        <br>
        <input class="btn btn-primary" type="submit" name="enviar" value="calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
        <h1>Resultado</h1>
      </form>
      <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        if ($numero1%$numero2==$numero3) {
          echo "<h4>El tercer numero ingresado es el modulo de la division <br></h4>";
        }
        else {
          echo "<h4>El tercer numero ingresado no es el modulo de la division <br></h4>";
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
