<?php
error_reporting(0);
include "conexao.php";

$idfinanceiro = $_POST['idfinanceiro'];
$idatendimento = $_POST['idatendimento'];
$compra_venda = $_POST['compra_venda'];
$valor = $_POST['valor'];
$data_vencimento = $_POST['data_vencimento'];
$data_pagamento = $_POST['data_pagamento'];
$status = $_POST['status'];
$financeiro_tipo = $_POST['financeiro_tipo'];


$inserir = mysql_query("INSERT INTO financeiro
                (idfinanceiro, idatendimento,valor,compra_venda, data_vencimento, data_pagamento, 'status',financeiro_tipo) 
		        VALUES('$idfinanceiro','$idatendimento', '$valor','$compra_venda', '$data_vencimento', '$data_pagamento', '$status','$financeiro_tipo')") or die(mysql_error());
mysql_close($db);
?>