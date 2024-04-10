<?php
error_reporting(0);
include "../conexao.php";

$idcompra_venda = $_POST['idcompra_venda'];
$idfornecedor = $_POST['idfornecedor'];
$cliente_idcliente = $_POST['cliente_idcliente'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$nro_nota = $_POST['nro_nota'];
$tipo = $_POST['tipo'];
				
$alterar = mysql_query("UPDATE compra_venda 
                    SET idcompra_venda = '$idcompra_venda',
					idfornecedor = '$idfornecedor', 
					cliente_idcliente = '$cliente_idcliente',
					descricao = '$descricao',
					valor = '$valor',
					nro_nota = '$nro_nota',
					tipo = '$tipo'
					
					WHERE idcompra_venda = '$idcompra_venda'")
					or die (mysql_error());


// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}
					
mysql_close ($db);
include "../consulta/consulta_compra_venda.php";
?>