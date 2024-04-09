<!--Inicio Alterar-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_funcionario_funcao_backend.php">
            <p><br>

                Funcionário Matricula:<select size="1" name="funcionario_matricula">
                    <?php
                    // Gera a lista de nota fiscal
                    include "../conexao.php";

                    $res = mysql_query("select * from funcionario");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                Função:<select size="1" name="funcao_idfuncao">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from funcao");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                <input type="submit" name="Submit" value="Alterar">
        </form>
</center>
<!--Fim Alterar-->