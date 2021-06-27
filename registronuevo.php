<?php
session_start();
if (isset($_POST["nombre"])){$_SESSION["nombre"] = $_POST["nombre"];} 
if (isset($_POST["correo"])){$_SESSION["correo"] = $_POST["correo"];}
if (isset($_POST["contrasena"])){$_SESSION["contrasena"] = $_POST["contrasena"];}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<LINK rel="stylesheet" href="estilo.css" tipe="text/css" media="screen">
</head>

<body>
	
	<h2>Bienvenido <?php echo $_SESSION["nombre"];?></h2>
<div class="contenedorcentral">
	<p>En Fotosweb podras almacenar tus imagenes, ver tu galeria, y borrar achivos cuando ya no los necesites, ademas tus archivos siempre estaran protegidos por tu usuario y contraseña</p>
	<br>
	<a href="procesarpi2.php" class="boton">Comienza aqui
</a></div>
</body>
</html>
	