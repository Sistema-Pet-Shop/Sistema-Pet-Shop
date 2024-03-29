<!--Início Excluir-->
<center>
    <body bgcolor="lightsteelblue">
    <form method="POST" action="excluir_servico_backend.php">
        <p><br>
            Codigo:<select size="1" name="idservico">
            <?php
                // Gera a lista de codigo ocupacao
                include "../conexao.php";
                $res=mysql_query("select * from servico");
                while ($registro=mysql_fetch_row($res))
                {
                $cod=$registro[0];
                $nome=$registro[1];
                echo "<option value=\"$cod\">$nome</option>\n";
                }
            ?>
            </select><br><br>
        </p> <br>
        <input type="submit" name="Submit" value="Excluir">
    </form>
</center>
<!--Fim Excluir-->