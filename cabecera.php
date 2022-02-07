

<nav class="navbar navbar-expand-lg navbar-light"  style="background-color:#FCE8E6 ; margin-bottom:50px;color:white;">
<div style="margin-left: 20px; color:black;">
Usuario: <?php echo $_SESSION['usuario']['correo']?> 
</div> 
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 700px;">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="categorias.php">Home</a>
        <a class="nav-link" href="carrito.php">Ver carrito</a>
        <a class="nav-link" href="logout.php">Cerrar sesión</a>
       
      </div>
    </div>
  </div>
</nav>