<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div id="bg"></div>

  <form action="" method="POST">
  <?php 
  include("conexiondb.php");
  include("validar.php");
   ?>
  
    <h1>PANEL DE ADMINISTRADOR</h1>
    <div class="form-field">
      <input type="text" placeholder="Email / Username" name="usuario"  />
    </div>

    <div class="form-field">
      <input type="password" placeholder="Password" name="pass"  />
    </div>


    <div class="form-field">
      <button class="btn" type="submit" name="log">Iniciar Sesion</button>
    </div>
  </form>
  <!-- partial -->

</body>

</html>
