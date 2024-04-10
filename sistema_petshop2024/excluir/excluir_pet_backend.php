<?php
error_reporting(0);
include "../conexao.php";
$idpet=$_POST['idpet'];

$excluir = mysql_query("DELETE FROM pet
						WHERE idpet_raca ='$idpet'") 
						or die (mysql_error());

						
// Verificar se a exclusão foi bem-sucedida
if ($alterar) {
	echo "<script>alert('Excluído com sucesso! 🎉'); window.location.href='../excluir.html';</script>";
	}
	
mysql_close ($db);
include "../consulta/consulta_pet.php";
?>
