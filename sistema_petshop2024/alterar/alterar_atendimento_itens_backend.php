<?php
error_reporting(0);
include "../conexao.php";

$idservico = $_POST['idservico'];
$idatendimento = $_POST['idatendimento'];
$descricao = $_POST['descricao'];


$alterar = mysql_query("UPDATE atendimento_itens 
                    SET idatendimento = '$idatendimento',
					descricao = '$descricao'
					WHERE idservico = '$idservico'")
	or die(mysql_error());

// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close($db);
include "../consulta/consulta_atendimento_itens.php";
?>