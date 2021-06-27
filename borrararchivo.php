<?php
session_start();
if (isset($_POST["nombre"])){$_SESSION["nombre"] = $_POST["nombre"];} 
if (isset($_POST["correo"])){$_SESSION["correo"] = $_POST["correo"];}
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
<h3>
<?php
 
if($_SESSION['nombre']== "miguel"){$directory = 'cargas1';}
	

	
if($_SESSION['nombre'] == "usuario1"){$directory='cargas1';}
	
if($_SESSION['nombre'] == "usuario2"){$directory='cargas2'; }

if($_SESSION['nombre'] <>  "usuario1" and $_SESSION['nombre'] <> "usuario2" and $_SESSION['nombre'] <> "miguel"){$directory='cargas';}
	
$archivo = $_POST["archivo"];



	
if(is_file($directory."/".$archivo))
{
unlink($directory."/".$archivo); echo "$archivo borrado de $directory" ;
}
else
{
echo ( $_SESSION["nombre"] . $archivo ." no existe vuelve a escribir el nombre ".$directory );
}
?></h3>
<a href="procesarpi2.php">Regresar</a>
</body>
</html>	 