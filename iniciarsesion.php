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
<?php
$usuario= $_POST['nombre'];
$contrasena= $_POST['contra'];	
	
$pass = array("nombre"=>"miguel","contraseña"=>12345,);

	
if ($usuario == "usuario1" and $contrasena == 12345 ) { header("Location:procesarpi2.php");} else if ($usuario == "usuario2" and $contrasena == 12345) { header("Location:procesarpi2.php");}else if($usuario == "miguel" and 12345 ) { header("Location:panelnuevo.php");}

else{echo "Usuario o Contraseña incorrecta";}
	
	?>
<body>
	<a href="index.php">Inicio</a>
</body>
</html>