<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Operadores de Inceremento e Decremento</title>
</head>
<body>
	<?php
		echo "<h3>Pós - incremento</h3>";
		$a = 5;
		echo "Deve ser 5: " . $a++ . "</br>";
		echo "Deve ser 6: " . $a . "</br>";

		echo "<h3>Pré - incremento</h3>";
		$a = 5;
		echo "Deve ser 6: " . ++$a. "</br>";
		echo "Deve ser 6: " . $a . "</br>";

		echo "<h3>Pós - decremento</h3>";
		$a = 5;
		echo "Deve ser 5: " . $a-- . "</br>";
		echo "Deve ser 4: " . $a . "</br>";

		echo "<h3>Pós - decremento</h3>";
		$a = 5;
		echo "Deve ser 4: " . --$a . "</br>";
		echo "Deve ser 4: " . $a . "</br>";

	?>
</body>
</html>	
	