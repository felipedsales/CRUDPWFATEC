<?php

$banco = new PDO('sqlite:meu_banco.db');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$genero = $_POST['genero'];
$mensagem = $_POST['mensagem'];
$tipo = $_POST['tipo'];

if (
    empty($nome) || empty($email) || empty($telefone) || empty($data) ||
    empty($genero) || empty($mensagem) || empty($tipo)
) {
    echo "Erro: Todos os campos devem ser preenchidos.";
} else {
    $sql = "INSERT INTO INSCRITO (nome, email, telefone, data, genero, mensagem, tipo) 
            VALUES (:nome, :email, :telefone, :data, :genero, :mensagem, :tipo)";

    $stmt = $banco->prepare($sql);

    if ($stmt) {
        $executou = $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':telefone' => $telefone,
            ':data' => $data,
            ':genero' => $genero,
            ':mensagem' => $mensagem,
            ':tipo' => $tipo
        ]);

        if ($executou) {
            echo "Dados inseridos com sucesso.";
        } else {
            echo "Erro ao inserir os dados.";
        }
    } else {
        echo "Erro ao preparar a consulta SQL.";
    }
}

?>
