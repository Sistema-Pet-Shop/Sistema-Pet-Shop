<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/Icon.png">
    <title>Alterar Compra/Venda</title>
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
            <form method="POST" action="alterar_compra_venda_backend.php">

                <div class="form-group">
                    <label for="idcompra_venda">ID:</label>
                    <select class="form-control" id="idcompra_venda" name="idcompra_venda">
                        <?php
                        include "../conexao.php";
                        $res = mysql_query("select * from compra_venda");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];
                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md mb-3 mx-auto">
                        <label for="idfornecedor">ID Fornecedor:</label>
                        <select class="form-control" id="idfornecedor" name="idfornecedor">
                            <?php
                            include "../conexao.php";
                            $res = mysql_query("select * from fornecedor");
                            while ($registro = mysql_fetch_row($res)) {
                                $cod = $registro[0];
                                echo "<option value=\"$cod\">$cod</option>\n";
                            }
                            ?>
                        </select>
                    </div>

            
                    <div class="col-md mb-3 mx-auto">
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
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao">
                </div>

                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" id="valor" name="valor">
                </div>

                <div class="form-group">
                    <label for="nro_nota">Número Nota Fiscal:</label>
                    <input type="text" class="form-control" id="nro_nota" name="nro_nota">
                </div>

                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" id="tipo" name="tipo">
                </div>

                <button type="submit" class="btn btn-warning btn-block">Alterar</button>

            </form>
        </div>
    </main>

</body>

</html>
