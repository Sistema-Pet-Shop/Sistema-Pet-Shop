<!--Início Excluir-->
<center>
    <body bgcolor="lightsteelblue">
    <form method="POST" action="excluir_compra_venda_backend.php">
        <p><br>
            Codigo:<select size="1" name="idcompra_venda">
            <?php
                // Gera a lista de codigo ocupacao
                include "conexao.php";
                $res=mysql_query("select * from compra_venda");
                while ($registro=mysql_fetch_row($res))
                {
                $cod=$registro[0];
                $descricao=$registro[1];
                echo "<option value=\"$cod\">$descricao</option>\n";
                }
            ?>
            </select><br><br>
        </p> <br>
        <input type="submit" name="Submit" value="Excluir">
    </form>
</center>
<!--Fim Excluir-->