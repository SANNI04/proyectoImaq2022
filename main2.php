<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
    header("Location:index.html");
    exit(0);
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
 
    <section class="content-header">
      <h1>
        <small>Panel de control de <strong><?php echo $_SESSION['usuario'];?></strong></small>        
        <small style="float:right"><a href="logout.php">Cerrar la sesión</a></small>
      </h1>

    </section>


  <!-- FormularioEventos -->
 


  
  </script>

</body>

</html>