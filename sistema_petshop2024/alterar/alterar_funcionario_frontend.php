<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/Icon.png">
    <title>Alterar Funcionário</title>
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
            <form method="POST" action="alterar_funcionario_backend.php">

                <div class="form-group">
                    <label for="matricula">ID Funcionário:</label>
                    <select class="form-control" id="matricula" name="matricula">
                        <?php
                        include "../conexao.php";
                        $res = mysql_query("select * from funcionario");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];
                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md mb-3 mx-auto">
                        <label for="pessoa_idpessoa">ID Pessoa:</label>
                        <select class="form-control" id="pessoa_idpessoa" name="pessoa_idpessoa">
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

                
                    <div class="col-md mb-3 mx-auto">
                        <label for="funcao_idfuncao">ID Função:</label>
                        <select class="form-control" id="funcao_idfuncao" name="funcao_idfuncao">
                            <?php
                            include "../conexao.php";
                            $res = mysql_query("select * from funcao");
                            while ($registro = mysql_fetch_row($res)) {
                                $cod = $registro[0];
                                echo "<option value=\"$cod\">$cod</option>\n";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="data_admissao">Data de admissão:</label>
                    <input type="date" class="form-control" id="data_admissao" name="data_admissao">
                </div>

                <div class="form-group">
                    <label for="data_demissao">Data de demissão:</label>
                    <input type="date" class="form-control" id="data_demissao" name="data_demissao">
                </div>

                <button type="submit" class="btn btn-warning btn-block">Alterar</button>

            </form>
        </div>
    </main>

</body>

</html>
