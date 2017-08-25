<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 8</title>
  </head>
  <body>
    <div class="container">
      <h1>Ejercicio de Caracteres</h1>
      <form method="post">
        <label>Ingrese una letra:</label>
        <input type="text" name="texto">
        <input class="btn btn-primary" type="submit" name="enviar" value="Calcular">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
      </form>
      <?php
        $texto = $_POST['texto'];
          if ($texto=='A' or $texto=='a' or $texto=='E' or $texto=='e' or $texto=='I' or$texto=='i' or $texto=='O' or $texto=='o' or $texto=='U' or $texto=='u') {
          echo "<h4>La letra ingresada es una Vocal</h4>";
          }
          else {
            echo "<h4>La letra ingresada es una consonante</h4>";
          }

       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
