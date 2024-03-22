<html>
<head>
<center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Funcionário Função</title>
<body>
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from funcionario_funcao", $db);
echo "<table border='2'>
<tr>
<td><h4>Matrícula do Funcionário</h4></td>
<td><h4>ID Função</h4></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr>
	<td>".$row["funcionario_matricula"]."</td>
	<td>".$row["funcao_idfuncao"]."</td>
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