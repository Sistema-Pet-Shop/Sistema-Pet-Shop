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

$inserir = mysql_query("INSERT INTO compra_venda 
                (idcompra_venda,idfornecedor,cliente_idcliente,descricao,valor,nro_nota,tipo) 
		        VALUES('$idcompra_venda','$idfornecedor','$cliente_idcliente',
				'$descricao','$valor','$nro_nota','$tipo')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Atendimento incluído com sucesso!'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>