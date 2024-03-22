<!--Inicio Incluir-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="incluir_orcamento_backend.php">
            <p><br>

                ID: <input type="text" name="idcompra_venda"><br><br>

                ID Fornecedor:<select size="1" name="idfornecedor">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from fornecedor");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID Cliente:<select size="" name="cliente_idcliente">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from cliente");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                Descrição: <input type="text" name="descricao"><br><br>
                Valor: <input type="text" name="valor"><br><br>
                Numero nota fiscal: <input type="text" name="nro_nota"><br><br>
                Tipo: <input type="text" name="tipo"><br><br>

                <input type="submit" name="Submit" value="Incluir">
        </form>
</center>
<!--Fim Incluir-->