<?php
error_reporting(0);
include "../conexao.php";

$idpet_tipo = $_POST['idpet_tipo'];
$descricao = $_POST['descricao'];

$inserir = mysql_query("INSERT INTO pet_tipo 
                (idpet_tipo,descricao) 
		        VALUES('$idpet_tipo','$descricao')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Incluído com sucesso! 🎉'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>