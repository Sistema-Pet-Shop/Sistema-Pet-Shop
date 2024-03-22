<!--Início Incluir-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_orcamento_backend.php">
            <p><br>

                ID:<select size="1" name="idorcamento">
                    <?php
                    // Gera a lista 

                    include "conexao.php";

                    $res = mysql_query("select * from orcamento");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];
                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID Atendimento:<select size="1" name="idatendimento">
                    <?php
                    // Gera a lista de nota fiscal

                    // include "conexao.php";
                    $db = mysql_connect("127.0.0.1", "root", "vertrigo");
                    mysql_select_db("sistema_petshop2024", $db);

                    $res = mysql_query("select * from atendimento");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];
                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>
                Valor: <input type="text" name="valor"><br><br>
                Data de validade: <input type="text" name="data_validade"><br><br>

                <input type="submit" name="Submit" value="Alterar">
        </form>
</center>
<!--Fim Incluir-->