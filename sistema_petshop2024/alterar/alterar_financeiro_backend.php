<?php
error_reporting(0);
include "../conexao.php";

$idfinanceiro = $_POST['idfinanceiro'];
$idatendimento = $_POST['idatendimento'];
$compra_venda = $_POST['compra_venda'];
$valor = $_POST['valor'];
$data_vencimento = $_POST['data_vencimento'];
$data_pagamento = $_POST['data_pagamento'];
$status = $_POST['status'];
$financeiro_tipo = $_POST['financeiro_tipo'];

				
$alterar = mysql_query("UPDATE financeiro 
                    SET idatendimento = '$idatendimento',
                    compra_venda = '$compra_venda',
					valor = '$valor', 
					data_vencimento = '$data_vencimento',
					data_pagamento = '$data_pagamento',
					status = '$status',
					financeiro_tipo = '$financeiro_tipo'
					
					WHERE idfinanceiro = '$idfinanceiro'")
					or die (mysql_error());

// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close ($db);
include "../consulta/consulta_financeiro.php";
?>