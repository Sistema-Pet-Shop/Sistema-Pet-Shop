<!--Inicio Incluir-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="incluir_pet_backend.php">
            <p><br>

            ID Pet: <input type="text" name="idpet"><br><br>
            ID Cliente:<select size="1" name="cliente_idcliente">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from cliente");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID Pet Raça:<select size="1" name="raca_idraca">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from pet_raca");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

                ID Pet Tipo:<select size="1" name="pet_tipo_idpet_tipo">
                    <?php
                    include "conexao.php";

                    $res = mysql_query("select * from pet_tipo");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>


                Tipo: <input type="text" name="tipo"><br><br>
                
                Idade: <input type="text" name="idade"><br><br>
                

                <input type="submit" name="Submit" value="Incluir">
        </form>
</center>
<!--Fim Incluir-->