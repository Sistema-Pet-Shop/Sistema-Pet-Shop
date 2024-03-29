<?php
error_reporting(0);
include "../conexao.php";

$idorcamento=$_POST['idorcamento'];
$idatendimento=$_POST['idatendimento'];
$valor=$_POST['valor'];
$data_validade=$_POST['data_validade'];
				
$alterar = mysql_query("UPDATE orcamento 
                    SET idatendimento = '$idatendimento',
					valor = '$valor', 
					data_validade = '$data_validade'
					WHERE idorcamento = '$idorcamento'")
					or die (mysql_error());
mysql_close ($db);
include "../consulta/consulta_orcamento.php";
?>