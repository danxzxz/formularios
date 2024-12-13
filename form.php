<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (empty($nome) || empty($email)) {
        echo "Preencha todos os campos!<br>";

    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo "Seu formato de email é inválido.";

    }else{
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email);
        header("Location: valeu.php");
        exit();
    }
}