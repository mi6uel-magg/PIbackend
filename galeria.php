<?php
session_start();
if (isset($_POST["nombre"])){$_SESSION["nombre"] = $_POST["nombre"];} 
?>
<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Imágenes dinámicas de una carpeta en php</title>
<LINK rel="stylesheet" href="estilo.css" tipe="text/css" media="screen">
</head>

<body>
<H1>Galeria de  <?php echo $_SESSION['nombre'];?> </H1>	
<div class="contenedorgallery">

<?php
    if($_SESSION['nombre'] == "usuario1"){$directory='cargas1';}
if($_SESSION['nombre'] == "usuario2"){$directory='cargas2'; }
if($_SESSION['nombre'] <>  "usuario1" and $_SESSION['nombre'] <> "usuario2" ){$directory='cargas';}
	
	
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (!in_array($archivo,array(".",".."))){

             echo '<img width="100px" src="'.$directory."/".$archivo.'">'."\n"."<br>".$archivo;
          
    }}
    $dirint->close();
	?></div>
<a href="procesarpi2.php">volver </a>
</body>
</html>