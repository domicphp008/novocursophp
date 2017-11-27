<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>If ... Elseif Else</title>
</head>
<body>
	
	<?php
		$a = 5;
		echo "Valor da variável: $a </br>";
		if($a == 2){
			echo "Depositar dinheiro";
	    }elseif($a == 3){
	    	echo "Sacar dinheiro";
	    }elseif ($a == 4) {
	    	echo "Imprimir Cheque";
	    }elseif($a == 5){
	    	echo " Pagar Boleto";
	    }
	    else{
	    	echo "Opço não econtrada";
	    }
	?>    
</body>
</html>