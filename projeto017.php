<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Comando de Repetição - Foreach </title>
</head>
<body>
	<?php
		$vetor = array('A','B', 'C', 'D');
		foreach ($vetor as $item) {
			echo "Valor atual do vetor: $item. <br />";
		}
	?>
	
	
</body>
</html>