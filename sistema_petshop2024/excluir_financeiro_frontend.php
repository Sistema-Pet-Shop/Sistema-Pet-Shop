<!--Início Excluir-->
<center>
    <body bgcolor="lightsteelblue">
    <form method="POST" action="excluir_financeiro_backend.php">
        <p><br>
            Codigo:<select size="1" name="idfinanceiro">
            <?php
                // Gera a lista de codigo ocupacao
                include "conexao.php";
                $res=mysql_query("select * from financeiro");
                while ($registro=mysql_fetch_row($res))
                {
                $cod=$registro[0];

                echo "<option value=\"$cod\">$cod</option>\n";
                }
            ?>
            </select><br><br>
        </p> <br>
        <input type="submit" name="Submit" value="Excluir">
    </form>
</center>
<!--Fim Excluir-->