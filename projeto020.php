<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Funções Recursivas </title>
</head>
<body>
	<?php
	
		function exibe($num){
			if($num!= 0){
				echo "Valor passado para a função: $num <br />";
				exibe($num-1);
			}
		}


		exibe (10);
	?>
</body>
</html>