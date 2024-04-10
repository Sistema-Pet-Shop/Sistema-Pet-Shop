<?php
error_reporting(0);
include "../conexao.php";

$idservico = $_POST['idservico'];
$nome = $_POST['nome'];


$alterar = mysql_query("UPDATE servico 
					SET nome = '$nome'
					WHERE idservico = '$idservico'")
					or die (mysql_error());


// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close($db);
include "../consulta/consulta_servico.php";
?>