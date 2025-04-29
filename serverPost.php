<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $genero = $_POST['genero'];
    $mensagem = $_POST['mensagem'];
    $tipo = $_POST['tipo'];

    echo '<p> O nome é: ' . $nome . '</p>';
    echo '<p> O email é: ' . $email . '</p>';
    echo '<p> O telefone é: ' . $telefone . '</p>';
    echo '<p> A data é: ' . $data . '</p>';
    echo '<p> O genêro é: ' . $genero . '</p>';
    echo '<p> A mensagem é: ' . $mensagem . '</p>';
    echo '<p> O tipo é: ' . $tipo . '</p>';

?>

