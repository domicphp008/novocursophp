<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Função </title>
</head>
<body>
	<?php
		function promocao($codigo){
			if($codigo == "cursophp"){
				$erro = true;
			}
			return $erro;
	    }

	    $codigo = "cursophp";
	    if(promocao ($codigo)){
	    	echo "codigo Válido";
	    }else{
	    	echo "Codigo Inválido";
	    }
	?>
	
	
</body>
</html>