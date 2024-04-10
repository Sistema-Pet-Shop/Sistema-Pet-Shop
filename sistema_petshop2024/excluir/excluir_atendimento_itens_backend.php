<?php
error_reporting(0);
include "../conexao.php";
$idcliente=$_POST['idcliente'];

$excluir = mysql_query("DELETE FROM cliente 
						WHERE idcliente ='$idcliente'") 
						or die (mysql_error());

// Verificar se a exclusão foi bem-sucedida
if ($alterar) {
	echo "<script>alert('Excluído com sucesso! 🎉'); window.location.href='../excluir.html';</script>";
	}
	
mysql_close ($db);
include "../consulta/consulta_cliente.php";
?>
