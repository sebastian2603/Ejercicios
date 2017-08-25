<h4><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Ejercicio 16</title>
  </head>
  <body>
    <div class="container">
      <h2>Ejercicio</h2>
      <form method="post">
        <label>Oprima un boton:</label>
        <input class="btn btn-primary" type="submit" name="Añadir" value="Añadir"></button>
        <input class="btn btn-success" type="submit" name="Editar" value="Editar"></button>
        <input class="btn btn-danger" type="submit" name="Eliminar" value="Eliminar"></button>
        <br>
        <br>
        <input class="btn btn-primary" type="submit" name="enviar" value="Aceptar">
        <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>

        <hr>
        <h1>Resultado</h1>
      </form>
      <?php
        $Añadir = $_POST['Añadir'];
        $Editar = $_POST['Editar'];
        $Eliminar = $_POST['Eliminar'];

        if ($Añadir==true) {
          echo "<h4>Correcto</h4>";
        }
        elseif ($Editar==true) {
          echo "<h4>Correcto</h4>";
        }
        elseif ($Eliminar==true) {
          echo "<h4>Correcto</h4>";
        }
        else{
          echo "<h4>Incorrecto</h4>";
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
