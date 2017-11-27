<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Switch</title>
</head>
<body>
	
	<?php
		$a = 4;

		switch($a){
			case 1:
			echo "Sacar Dinheiro";
			break;
			case 2:
				echo "Depositar dinheiro";
			break;
			case 3:
				echo "Imprimir Cheque";
			break;	

			default:
				echo "Opção nnao encontrada";
			break;	
	}
		
	?>    
</body>
</html>