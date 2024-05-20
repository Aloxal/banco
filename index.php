<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de sangre</title>
   <link rel="stylesheet" href="style.css">  
</head>

<body>
<form method="post"autocomplete="off">

<h2>Bienvenido</h2>

<div class="input-group"> 
    
  <div class="input-container">
    <input type ="text" name="name" placeholder="nombre">
    <i class="fa-solid fa-user"></i>
  </div>

  <div class="input-container">
    <input type ="password" name="password" placeholder="contraseña">
    <i class="fa-solid fa-lock"></i>
  </div>
      
  <div class="input-container">
    <input type ="email" name="email" placeholder="correo">
    <i class="fa-solid fa-envelope"></i>
  </div>

  <div class="input-container">
    <input type ="tel" name="phone" placeholder="telefono">
    <i class="fa-solid fa-phone"></i>
  </div>

  <a href="#">Terminos y condiciones </a>
  <input type="submit" name="send" class="btn" value="enviar">
</div>
</form>

   <?php
   include("send.php");
   ?>

</body>
</html>