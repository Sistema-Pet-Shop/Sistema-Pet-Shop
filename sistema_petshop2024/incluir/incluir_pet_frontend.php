<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/Icon.png">

    <title>Incluir Pet</title>

    <script src="https://kit.fontawesome.com/0df5057ab7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <header>
        <div class="navbar navbar-dark bg-dark shadow p-3 fixed-top">
            <div class="container d-flex justify-content-between">
                <a href="../index.html" class="navbar-brand d-flex align-items-center">
                    <i class="fa-solid fa-paw" style="color:rgb(13,110,253); margin: 5px;"></i>
                    <strong>Sistema Pet Shop</strong>
                </a>
                <a href="../incluir.html">Voltar</a>
            </div>
        </div>

    </header>

    <main role="main" class="container">
        <div class="my-5 col-md-8 p-5 bg-white rounded shadow-sm mx-auto">

            <form method="POST" action="incluir_pet_backend.php">

                <div class="form-group">
                    <label for="idpet">ID Pet:</label>
                    <input type="text" class="form-control" id="idpet" name="idpet">
                </div>

                <div class="form-group">
                    <label for="cliente_idcliente">ID Cliente:</label>
                    <select class="form-control" id="cliente_idcliente" name="cliente_idcliente">
                        <?php
                        include "../conexao.php";
                        $res = mysql_query("select * from cliente");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];
                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="raca_idraca">ID Pet Raça:</label>
                    <select class="form-control" id="raca_idraca" name="raca_idraca">
                        <?php
                        include "../conexao.php";
                        $res = mysql_query("select * from pet_raca");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];
                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pet_tipo_idpet_tipo">ID Pet Tipo:</label>
                    <select class="form-control" id="pet_tipo_idpet_tipo" name="pet_tipo_idpet_tipo">
                        <?php
                        include "../conexao.php";
                        $res = mysql_query("select * from pet_tipo");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];
                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" id="tipo" name="tipo">
                </div>

                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="text" class="form-control" id="idade" name="idade">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Incluir</button>

            </form>
        </div>
    </main>

</body>

</html>
