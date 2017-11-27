<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Estrutura de Controle</title>
</head>
<body>
	 <?php
		$a = 10;
		$b = 8;
		$c = 2;

		if(($a == 10)and($b == 8)){
			echo "Utilizado AND: Verdadeiro. <br />";
		}

		if(($a == 10) or ($b == 7)){
			echo "Utilizado OR: Verdadeiro. <br />";
		}

		if(($a == 10) xor ($b == 7)){
			echo "Utilizado XOR: Verdadeiro. <br />";
		}

		if(!empty($c)){
			echo "Utilizado !: Verdadeiro. <br />";

		}

		if(($a == 10)&&($b == 8)){
			echo "Utilizado &&: Verdadeiro. <br />";
		}

		if(($a == 10) || ($b == 7)){
			echo "Utilizado ||: Verdadeiro. <br />";
		}


	 ?>
		



</body>
</html>