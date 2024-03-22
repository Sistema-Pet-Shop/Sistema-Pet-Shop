<!--Inicio Incluir-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="incluir_cliente_backend.php">
            <p><br>

                ID: <input type="text" name="idcliente"><br><br>

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

                <input type="submit" name="Submit" value="Incluir">
        </form>
</center>
<!--Fim Incluir-->