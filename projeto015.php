<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Do ... While</title>
</head>
<body>
	
	<?php
		$a = 1;
		$b = 2;

		do{
			if($a == 1){
			    echo "E-mail Teste: $a <br />";	
			}else{
				echo "- Enviado: $a <br />";
			}
			
			$a++;
		}while($a < $b);
    ?>    
</body>
</html>