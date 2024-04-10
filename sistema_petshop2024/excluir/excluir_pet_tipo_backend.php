<?php
error_reporting(0);
include "../conexao.php";
$idpet_tipo=$_POST['idpet_tipo'];

$excluir = mysql_query("DELETE FROM pet_tipo
						WHERE idpet_tipo ='$idpet_tipo'") 
						or die (mysql_error());


// Verificar se a exclusão foi bem-sucedida
if ($alterar) {
	echo "<script>alert('Excluído com sucesso! 🎉'); window.location.href='../excluir.html';</script>";
	}
	
mysql_close ($db);
include "../consulta/consulta_pet_tipo.php";
?>
