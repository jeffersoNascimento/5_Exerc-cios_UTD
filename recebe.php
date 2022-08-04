<?php

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $cpf = $_GET['cpf'];
    $dtnasc = $_GET['dtnasc'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];

    echo "<h1> Olá, bem vindo(a) $nome <br>";
    echo "<h1> Seu sobrenome: $sobrenome <br>";
    echo "<h1> Seu CPF: $cpf <br>";
    echo "<h1> Sua data de nasimento: $dtnasc <br>";
    echo "<h1> Seu email: $email <br>";
    echo "<h1> Sua senha: $senha <br>";

?>