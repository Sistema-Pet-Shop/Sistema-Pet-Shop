<!--Inicio Incluir-->

<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    
    <link rel="stylesheet" type="text/css" href="formata_padrao.css" />-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="incluir_atendimento_backend.php">
            <p><br>

            ID Atendimento: <input type="text" name="idatendimento"><br><br>

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


            Data e Hora de Entrada: <input type="datetime-local" name="data_hora_entrada"><br><br>
            
            Data e Hora de Saída: <input type="datetime-local" name="data_hora_saida"><br><br>
            
            Descrição: <input type="text" name="descricao"><br><br>

            <input type="submit" name="Submit" value="Incluir">

        </form>
</center>
<!--Fim Incluir-->