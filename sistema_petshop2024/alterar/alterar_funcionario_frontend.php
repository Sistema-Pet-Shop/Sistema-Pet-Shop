<!--Inicio Alterar-->

<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_funcionario_backend.php">
            <p><br>

                ID: <select size="1" name="matricula">
                    <?php

                    include "../conexao.php";

                    $res = mysql_query("select * from funcionario");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID Pessoa:<select size="1" name="pessoa_idpessoa">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from pessoa");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID função:<select size="1" name="funcao_idfuncao">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from funcao");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                Data de admissão: <input type="date" name="data_admissao"><br><br>
                Data de demissão: <input type="date" name="data_demissao"><br><br>

                <input type="submit" name="Submit" value="Alterar">
        </form>
</center>
<!--Fim Alterar-->