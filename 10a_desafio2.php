<!-- Digite sua solução para o desafio (AQUI) -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>

<body>
    <form action="" method="post">
        <label for="nome">Nome do Produto: </label>
        <input type="text" name="nome"> <br>

        <label for="preco">Preço: </label>
        <input type="number" name="preco"> <br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        if (empty($nome)) {
            echo "<p style='color:red;'>Preencha o nome do produto!</p>";
        } elseif (empty($preco)) {
            echo "<p style='color:red;'>Preencha o preço do produto!</p>";
        } elseif (!is_numeric($preco)) {
            echo "<p style='color:red;'>O preço precisa ser um número!</p>";
        } elseif ($preco <= 0) {
            echo "<p style='color:red;'>Preço deve ser maior que zero!</p>";
        } else {
            //Conecta com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "Senai@118";
            $dbname = "exercicio";

            $conn = new mysqli($servername, $username, $password, $dbname);

            //Verifica a conexão
            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            //Insere dados no Banco de Dados
            $sql = "INSERT INTO produtos (nome,preco) VALUES ('$nome','$preco')";

            //Verifica se os dados foram cadastrados no Banco de Dados
            if ($conn->query($sql) === TRUE) {
                echo "<p style='color:darkgreen;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color:red;'>Erro ao cadastrar!</p>";
            }

            //Fecha a conexão
            $conn->close();
        }
    }
    ?>
</body>

</html>
