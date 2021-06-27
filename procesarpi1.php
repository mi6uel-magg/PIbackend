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
</head>
<?php
$usuario= $_POST['usuario'];
$contrasena= $_POST['contra'];	
	
$pass = array("nombre"=>"miguel","contraseña"=>12345,);

	
if ($usuario == $pass["nombre"] and $contrasena == $pass["contraseña"] ) { header("Location:procesarpi2.php");}

else{echo "Usuario o Contraseña incorrecta";}
	
	?>
<body>
</body>
</html>