<?php
session_start();
	if(!isset($_SESSION["login"]))
	{
	 header("location:Login.php");
	  }
?>

index.php<a href =  "logout.php">Cerrar Sesion</a>
	<h1>
	   <?php
	     echo "Bienvenido".$_SESSION["login"];
	    ?>
	</h1>