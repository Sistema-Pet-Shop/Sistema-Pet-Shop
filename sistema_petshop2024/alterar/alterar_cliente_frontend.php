<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/Icon.png">

    <title>Alterar Cliente</title>

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
                <a href="../alterar.html">Voltar</a>
            </div>
        </div>

    </header>
    
    <main role="main" class="container">
        <div class="my-5 col-md-8 p-5 bg-white rounded shadow-sm mx-auto">

            <form method="POST" action="alterar_cliente_backend.php">

                <div class="form-group">
                    <label for="idcliente">ID Cliente:</label>
                    <select class="form-control" id="idcliente" name="idcliente">
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
                    <label for="idpessoa">ID Pessoa:</label>
                    <select class="form-control" id="idpessoa" name="idpessoa">
                        <?php
                        include "../conexao.php";
                        $res = mysql_query("select * from pessoa");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];
                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cpf_cnpj">CPF ou CNPJ:</label>
                    <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj">
                </div>

                <button type="submit" class="btn btn-warning btn-block">Alterar</button>

            </form>
        </div>
    </main>

</body>

</html>
