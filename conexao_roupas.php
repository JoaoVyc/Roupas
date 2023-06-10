<?php
// Verifica se a requisição foi feita via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores dos campos do formulário
    $tamanho = $_POST['tamanho'];
    $tipo = $_POST['tipo'];
    $genero = $_POST['genero'];
    $cor = $_POST['cor'];
    $quantidade = $_POST['quantidade'];

    // Conexão com o banco de dados (substitua pelos seus dados)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'roupas_senas';

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve um erro na conexão
    if ($conn->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $conn->connect_error);
    }

    // Prepara a query SQL para inserir os dados
    $sql = "INSERT INTO roupas (tamanho, tipo, genero, cor, quantidade)
            VALUES ('$tamanho', '$tipo', '$genero', '$cor', '$quantidade')";

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        echo 'A roupa foi cadastrada com sucesso';
    } else {
        echo 'Erro ao cadastrar a roupa: ' . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>
