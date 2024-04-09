<?php
error_reporting(0);
include "../conexao.php";

$idservico = $_POST['idservico'];
$nome = $_POST['nome'];

$inserir = mysql_query("INSERT INTO servico
                (idservico, nome) 
		        VALUES('$idservico','$nome')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Atendimento incluído com sucesso!'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>