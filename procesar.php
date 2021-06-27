<?php
session_start();
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
<h1><?php echo $_SESSION["usuarios"];?></h1>
	<h2>Galeria</h2>
<div class="contenedorgallery">
	
	
<?php
    if($_SESSION['usuarios'] == "usuario1"){$directory='cargas1';}
  if($_SESSION['usuarios'] == "usuario2"){$directory='cargas2'; }
	

	
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (!in_array($archivo,array(".",".."))){

             echo '<img  width="100px" src="'.$directory."/".$archivo.'">'."\n"."<br>".$archivo;
        
    }}
    $dirint->close();

?>
</div>
<h2>borrar archivos</h2>
<form action="borrararchivo.php" method="post"  >
<label for="archivo">Escribe el nombre de un archivo:</label><br>	
<input type="text" name="archivo">
<button type="submit" name="upload">borrar</button>
</div>
</body>
</html>
