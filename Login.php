<?php
session_start();
	if(isset($_SESSION["login"]))
	{
	 header("location:index.php");
	  }
?>
Las sesiones almacenan la informacion en el servidor.

<br></br>
<html>
  <body>
   <form action = "Sesion.php" method = "POST">
   <label>Usuario</label>
    <input type = "text" name = "us" size = "10" maxlegth = "20">
   <br></br>

  <label>Password</label>
    <input type = "password" name = "pass" size = "10" maxlegth = "20">
  <br></br>

   <input type = "submit" value = "Enviar">
  </form>
 </body>
</html> 

