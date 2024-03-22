<!--Inicio Incluir-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="incluir_orcamento_backend.php">
            <p><br>

                ID: <input type="text" name="idorcamento"><br><br>

                ID Atendimento:<select size="1" name="idatendimento">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from atendimento");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>
                Valor: <input type="text" name="valor"><br><br>
                Data de validade: <input type="date" name="data_validade"><br><br>

                <input type="submit" name="Submit" value="Incluir">
        </form>
</center>
<!--Fim Incluir-->