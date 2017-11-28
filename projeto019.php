<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Argumentos por Valor de Referência </title>
</head>
<body>
	<?php
		echo "<h4>Passagem de Argumentos por valor</h4>";

		function salario ($num){
			$num += 5;
			echo  "Salario com aumento: $num <br />";
		}

		$salario = 8200;
		salario($salario);
		echo  "Salario sem aumento: $salario <br />";

		echo "<h4>Passagem de Argumentos por referência</h4>";
		function salarioa (&$num){
			$num += 5;
			echo "Salario com aumento: $num <br />";
		}

		$salarioa = 8200;
		salarioa($salario);
		echo "Salario sem aumento: $salarioa <br />";
        
	?>
	
	
</body>
</html>