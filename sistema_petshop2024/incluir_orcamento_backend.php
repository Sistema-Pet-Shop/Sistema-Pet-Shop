<?php
error_reporting(0);
include "conexao.php";
$idorcamento = $_POST['idorcamento'];
$idatendimento = $_POST['idatendimento'];
$valor = $_POST['valor'];
$data_validade = $_POST['data_validade'];

$inserir = mysql_query("INSERT INTO orcamento 
                (idorcamento,idatendimento,valor,data_validade) 
		        VALUES('$idorcamento','$idatendimento','$valor',
				'$data_validade')") or die(mysql_error());
mysql_close($db);
?>