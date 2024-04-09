<!--Inicio Alterar-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_atendimento_backend.php">
            <p><br>

            ID Atendimento: <select size="1" name="idatendimento">
            <?php
            include "../conexao.php";

            $res=mysql_query("select * from atendimento");
            while ($registro=mysql_fetch_row($res))
            {
                $cod=$registro[0];
                echo "<option value=\"$cod\">$cod</option>\n";
            }
            ?>

        </select><br><br>


            ID Pet:<select size="1" name="pet_idpet">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from pet");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

            ID Cliente:<select size="1" name="idcliente">
                <?php
                include "../conexao.php";

                $res = mysql_query("select * from cliente");
                while ($registro = mysql_fetch_row($res)) {
                    $cod = $registro[0];

                    echo "<option value=\"$cod\">$cod</option>\n";
                }
                ?>
            </select><br><br>

            ID Funcionario Veterinário:<select size="1" name="funcionario_veterinario">
                <?php
                include "../conexao.php";

                $res = mysql_query("select * from funcionario");
                while ($registro = mysql_fetch_row($res)) {
                    $cod = $registro[0];

                    echo "<option value=\"$cod\">$cod</option>\n";
                }
                ?>
            </select><br><br>

            
            ID Funcionario Admissão:<select size="1" name="funcionario_entrada">
                <?php
                include "../conexao.php";

                $res = mysql_query("select * from funcionario");
                while ($registro = mysql_fetch_row($res)) {
                    $cod = $registro[0];

                    echo "<option value=\"$cod\">$cod</option>\n";
                }
                ?>
            </select><br><br>

            
            ID Funcionario Demissão:<select size="1" name="funcionario_saida">
                <?php
                include "../conexao.php";

                $res = mysql_query("select * from funcionario");
                while ($registro = mysql_fetch_row($res)) {
                    $cod = $registro[0];

                    echo "<option value=\"$cod\">$cod</option>\n";
                }
                ?>
            </select><br><br>


            Data e Hora de Entrada: <input type="datetime" name="data_hora_entrada"><br><br>
            
            Data e Hora de Saída: <input type="datetime" name="data_hora_saida"><br><br>
            
            Descrição: <input type="text" name="descricao"><br><br>

            <input type="submit" name="Submit" value="Alterar">

        </form>
</center>
<!--Fim Alterar-->