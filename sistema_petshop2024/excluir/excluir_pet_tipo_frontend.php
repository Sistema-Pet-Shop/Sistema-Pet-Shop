<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/Icon.png">
    <title>Excluir Tipo de Pet</title>
    <script src="https://kit.fontawesome.com/0df5057ab7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark shadow p-3 fixed-top">
            <div class="container d-flex justify-content-between">
                <a href="../index.html" class="navbar-brand d-flex align-items-center">
                    <i class="fas fa-paw" style="color:rgb(13,110,253); margin-right: 5px;"></i>
                    <strong>Sistema Pet Shop</strong>
                </a>
                <a href="../excluir.html">Voltar</a>
            </div>
        </nav>
    </header>

    <main role="main" class="container">
        <div class="my-5 col-md-6 p-5 bg-white rounded shadow-sm mx-auto">
            <form method="POST" action="excluir_pet_tipo_backend.php">

                <div class="form-group">
                    <label for="idpet_tipo">Código:</label>
                    <select class="form-control" id="idpet_tipo" name="idpet_tipo">
                        <?php
                        include "../conexao.php";
                        $res = mysql_query("select * from pet_tipo");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];
                            $descricao = $registro[1];
                            echo "<option value=\"$cod\">$descricao</option>\n";
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-danger btn-block">Excluir</button>

            </form>
        </div>
    </main>

</body>

</html>
