<?php

$salario = 7600;
$comissao = 2320.29;
echo "Salário: R$ ";
echo number_format($salario, 2,",",".");
echo "<br>";

echo "Comissão: R$ " . number_format($comissao, 2,",",".") . "<br>";
echo "Total do salário deste  mês foi de R$ " ,($salario + $comissao);
echo "<br>";
?>