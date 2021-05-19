<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if($nome && $email && $idade) {

    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao); //setar cookie

    echo 'NOME: '.$nome."<br/>";
    echo 'E-MAIL: '.$email."<br/>";
    echo 'IDADE: '.$idade."<br/>";
} else {
    header("Location: index.php"); //redireciona
    exit;
}