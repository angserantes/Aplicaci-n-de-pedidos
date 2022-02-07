<?php

require_once 'bd.php';

// formulario de login habitual
// si va bien abre sesión, guarda el usuario y redirige a principal.php
// si va mal da mensaje de error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
    if($usu==FALSE) {
        $err = TRUE;
        $usuario = $_POST['usuario'];
    }else{
        session_start();
        $_SESSION['usuario'] = $usu;
        $_SESSION['carrito'] = [];
        header("Location:categorias.php");
        return;
    }
   }
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <style>
    .login{
      display: flex;
      margin-top: 150px;
      margin-left: 550px;
    }

  </style>
  <body>
   <div class="login">
   <?php if(isset($_GET["redirigido"])) {
      echo "<p>Haga login para continuar <p>";
    }?>
    <?php if(isset($err) and $err == TRUE) {
      echo "<p>Revise usuario y contraseña <p>";
    }?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
      <label for="usuario">Usuario</label>
      <input value="<?php if(isset($usuario)) echo $usuario;?>" id="usuario" name="usuario" type="text"><br><br>
      <label for="clave">Clave</label>
      <input id="clave" name="clave" type="password"><br><br>
      <input type="submit">
    </form>
    </div>
  </body>

</html>