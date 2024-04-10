<?php
error_reporting(0);
include "../conexao.php";
$idcompra_venda=$_POST['idcompra_venda'];

$excluir = mysql_query("DELETE FROM compra_venda 
						WHERE idcompra_venda ='$idcompra_venda'") 
						or die (mysql_error());

// Verificar se a exclusão foi bem-sucedida
if ($alterar) {
	echo "<script>alert('Excluído com sucesso! 🎉'); window.location.href='../excluir.html';</script>";
	}
	
mysql_close ($db);
include "../consulta/consulta_compra_venda.php";
?>
