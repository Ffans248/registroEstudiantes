<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div id="bg"></div>

  <form action="validar.php" method="POST">
    <h1>PANEL DE ADMINITRADOR</h1>
    <div class="form-field">
      <input type="email" placeholder="Email / Username" required />
    </div>

    <div class="form-field">
      <input type="password" placeholder="Password" required />
    </div>


    <div class="form-field">
      <button class="btn" type="submit">Iniciar Sesion</button>
    </div>
  </form>
  <!-- partial -->

</body>

</html>
<?php
$_SESSION; ?>