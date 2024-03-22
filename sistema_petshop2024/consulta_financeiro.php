<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Financeiro</title>
<body>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from financeiro", $db);
echo "<table border='2'>
<tr>
<td><h4>ID Financeiro</h4></td>
<td><h4>Valor</h4></td>
<td><h4>Data Vencimento</h4></td>
<td><h4>Data Pagamento</h4></td>
<td><h4>ID Atendimento</h4></td>
<td><h4>Compra e Venda</h4></td>
<td><h4>Status</h4></td>
<td><h4>Tipo Financeiro</h4></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr>
	<td>".$row["idfinanceiro"]."</td>
	<td>".$row["valor"]."</td>
	<td>".$row["data_vencimento"]."</td>
	<td>".$row["data_pagamento"]."</td>
	<td>".$row["idatendimento"]."</td>
	<td>".$row["compra_venda"]."</td>
	<td>".$row["status"]."</td>
	<td>".$row["financeiro_tipo"]."</td>
	</tr><br>";
	}
	echo "</table></center>";
	echo "<br />";mysql_free_result($result);
mysql_close ($db);
?>
<br><br>
<form><center>
<input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
</form></center>
</center>
<!--Fim Consulta-->