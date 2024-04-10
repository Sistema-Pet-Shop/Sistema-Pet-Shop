<?php
error_reporting(0);
include "../conexao.php";
$idpet_raca=$_POST['idpet_raca'];

$excluir = mysql_query("DELETE FROM pet_raca 
						WHERE idpet_raca ='$idpet_raca'") 
						or die (mysql_error());


// Verificar se a exclusão foi bem-sucedida
if ($alterar) {
	echo "<script>alert('Excluído com sucesso! 🎉'); window.location.href='../excluir.html';</script>";
	}
	
mysql_close ($db);
include "../consulta/consulta_pet_raca.php";
?>
