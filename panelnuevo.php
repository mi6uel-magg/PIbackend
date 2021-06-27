<?php
session_start();
if (isset($_POST["nombre"])){$_SESSION["nombre"] = $_POST["nombre"];} 
if (isset($_POST["correo"])){$_SESSION["correo"] = $_POST["correo"];}
if (isset($_POST["contrasena"])){$_SESSION["contrasena"] = $_POST["contrasena"];}
if (isset($_POST["usuarios"])){$_SESSION["usuarios"] = $_POST["usuarios"];} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<LINK rel="stylesheet" href="estilo.css" tipe="text/css" media="screen">
</head>

<body>

</body>
<h1>Hola <?php echo $_SESSION["nombre"];?></h1>

<h2>Elige un usario par administar</h2>

<form action="procesar.php" method="post">
	<label for="usuarios"><h2>Usuarios</h2> </label>
<select id="genero"	name="usuarios">
	<option value="usuario1">Usuario1</option>
	<option value="usuario2">Usuiario2</option>
	</select><br><br><input type="submit" value="Administrar">
	</form>
	
<a href="cerrarsesion.php">cerrar sesion</a>
</html>