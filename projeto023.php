<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Cookies </title>
</head>
<body>
	<?php
	   echo "<h4>Penutima Aula  do Módulo de PHP  </h4>";
	   setcookie("afiliado", "5323", (time() + (3 * 24 * 3600)));

	   $afiliado = $_COOKIE["afiliado"];

	   echo "Número do afiliado: $afiliado";	

	?>
	
</body>
</html>