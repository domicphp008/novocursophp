<?php
require 'confi.php';
$conexao= new mysqli(WINEX_POST,WINEX_USER,WINEX_PASS,WINE_DB);
if ($cone->connect_error) {
	echo "Error ao conectar com o bando de dados".$conexao->connect_error;
}else{
	echo "Conexao com o bando de dados feita com sucesso";
	
}
?>