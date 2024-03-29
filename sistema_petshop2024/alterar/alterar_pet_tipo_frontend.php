<!--Inicio Alterar-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_pet_tipo_backend.php">
            <p><br>

                ID: <select size="1" name="idpet_tipo">
                        <?php
                        include "../conexao.php";

                        $res = mysql_query("select * from pet_raca");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];

                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select><br><br>

                Descrição: <input type="text" name="descricao"><br><br>
                

                <input type="submit" name="Submit" value="Alterar">
        </form>
</center>
<!--Fim Alterar-->