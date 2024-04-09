<?php
error_reporting(0);
include "../conexao.php";

$idservico = $_POST['idservico'];
$idatendimento = $_POST['idatendimento'];
$descricao = $_POST['descricao'];

$inserir = mysql_query("INSERT INTO atendimento_itens 
                (idservico, idatendimento, descricao) 
		        VALUES('$idservico','$idatendimento', '$descricao')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Atendimento incluído com sucesso!'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>