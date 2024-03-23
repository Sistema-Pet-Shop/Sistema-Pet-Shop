<!--Inicio Alterar-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_cliente_backend.php">
            <p><br>

                ID: <select size="1" name="idcliente">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from cliente");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID Pessoa:<select size="1" name="idpessoa">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from pessoa");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>
                CPF ou CNPJ: <input type="text" name="cpf_cnpj"><br><br>

                <input type="submit" name="Submit" value="Alterar">
        </form>
</center>
<!--Fim Alterar-->