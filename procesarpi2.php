<?php
session_start();
if (isset($_POST["nombre"])){$_SESSION["nombre"] = $_POST["nombre"];} 

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
<h2>Hola <?php echo $_SESSION["nombre"];?></h2>
<div class="contenedorcentral">
<div class=cajaspi1><h3>Sube una imagen </h3>
<form action="subirarchivo.php" method="post" enctype="multipart/form-data" >
<label for="archivo">Selecciona un archivo:</label><br>	
<input type="file" name="archivo" accept="image/*">
	<button type="submit" name="upload">Subir</button></form>
</div><div class="cajaspi1"><h3>Visita tu galeria</h3>
	<a class="boton" href="galeria.php">galeria</a></div>
<div class="cajaspi1">
<h3>borra un  archivo</h3>

<form action="borrararchivo.php" method="post"  >
<label for="archivo">Escribe el nombre de un archivo:</label><br>	
<input type="text" name="archivo">
<button type="submit" name="upload">borrar</button>
</div>
</div>
<a href="cerrarsesion.php">cerrar sesion</a>
</html>