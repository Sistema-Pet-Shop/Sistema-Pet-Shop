<?php
error_reporting(0);
include "../conexao.php";

$idpet = $_POST['idpet'];
$tipo = $_POST['tipo'];
$idade = $_POST['idade'];
$raca_idraca = $_POST['raca_idraca'];
$cliente_idcliente = $_POST['cliente_idcliente'];
$pet_tipo_idpet_tipo = $_POST['pet_tipo_idpet_tipo'];

$alterar = mysql_query("UPDATE pet 
					SET tipo = '$tipo',
					idade = '$idade',
					raca_idraca = '$raca_idraca',
					cliente_idcliente = '$cliente_idcliente',
					pet_tipo_idpet_tipo = '$pet_tipo_idpet_tipo'
					WHERE idpet = '$idpet'")
					or die (mysql_error());

// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close($db);
include "../consulta/consulta_pet.php";
?>