<!--Inicio Alterar-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_fornecedor_backend.php">
            <p><br>

                ID: <select size="1" name="idfornecedor">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from fornecedor");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID Pessoa:<select size="1" name="idpessoa">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from pessoa");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>
                Nome Fantasia: <input type="text" name="nomefantasia"><br><br>

                Razão Social: <input type="text" name="razaosocial"><br><br>

                <input type="submit" name="Submit" value="Alterar">
        </form>
</center>
<!--Fim Alterar-->