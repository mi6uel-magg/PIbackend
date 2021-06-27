<?php 
session_start();
if (isset($_POST["nombre"])){$_SESSION["nombre"] = $_POST["nombre"];} 


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<LINK rel="stylesheet" href="estilo.css" tipe="text/css" media="screen">
</head>
	
<body>


	<?php

	
if($_SESSION['nombre'] == "usuario1"){$directory='cargas1';}
	
if($_SESSION['nombre'] == "usuario2"){$directory='cargas2'; }
	
if($_SESSION['nombre'] <>  "usuario1" and $_SESSION['nombre'] <> "usuario2" ){$directory='cargas';}
	

$error = ''; 	

	
if (isset($_POST["upload"])){$error = $_FILES["archivo"]["error"];
	
if($error == UPLOAD_ERR_OK){$tmp_name = $_FILES["archivo"]["tmp_name"];
$name = basename($_FILES["archivo"]["name"]);	
							 
							

echo "<img src='cargas/$name' width= '300' height= '500'/>";
	?>
<h2>Tu archivo <?php if (move_uploaded_file($tmp_name, "$directory/$name"))					
{ echo $message = basename($_FILES["archivo"]["name"])." ha sido cargado correctamente";}
else echo $error = " no pudo ser cargado ";}
else echo $error = " no pudo ser cargado ";
}?></h2>
<a href="procesarpi2.php">volver </a>
</body>
</html>