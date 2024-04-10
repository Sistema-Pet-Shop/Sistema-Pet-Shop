<?php
error_reporting(0);
include "../conexao.php";
$idpessoa=$_POST['idpessoa'];

$excluir = mysql_query("DELETE FROM pessoa 
						WHERE idpessoa ='$idpessoa'") 
						or die (mysql_error());


// Verificar se a exclusão foi bem-sucedida
if ($alterar) {
	echo "<script>alert('Excluído com sucesso! 🎉'); window.location.href='../excluir.html';</script>";
	}
	
mysql_close ($db);
include "../consulta/consulta_pessoa.php";
?>
