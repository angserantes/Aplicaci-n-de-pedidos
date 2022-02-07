<?php 
// comprueba que el usuario haya abierto sesión o redirige

require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de productos por categoría</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
      body{
        padding: 0;
        margin: 0;
    }

   .productos{
       margin-left: 50px;
   }
    
</style>
<body>  
    <?php
    require 'cabecera.php';
    ?>
    <div class="productos">
    <?php
    $cat = cargar_categoria($_GET['categoria']);
    $productos = cargar_productos_categoria($_GET['categoria']);
    if($cat===FALSE or $productos === FALSE){
        echo "<p class='error'>Error al conectar con la base de datos</p>";
        exit;
    }

    echo "<h1>".$cat['nombre']. "</h1>";
    echo "<p>".$cat['descripcion']. "</p>";
    echo "<table>"; //abrir la tabla
    echo "<tr><th>Nombre</th><th>Descripción</th>
            <th>Peso</th><th>Stock</th><th>Comprar</th></tr>";
    foreach($productos as $producto){
        $cod = $producto['CodProd'];
        $nom = $producto['Nombre'];
        $des = $producto['Descripcion'];
        $peso = $producto['Peso'];
        $stock = $producto['Stock'];
    echo "<tr><td>$nom</td><td>$des</td><td>$peso</td><td>$stock</td>
            <td>
            <form action = 'anadir.php' method = 'POST'>
            <input name = 'unidades' type='number' min ='1' value = '1' class= 'little-input'>
            <input type = 'submit' value='Comprar'><input name = 'cod' type='hidden' value = '$cod'>
            </form>
            </td>
    </tr>"; 
    }
    echo "</table>"
    ?>
    </div>
    </body>
</html>