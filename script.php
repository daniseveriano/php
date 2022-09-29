<?php
// inicialização da sessão
session_start();

//array numerico, iniciando do zero
$Categorias = [];
$Categorias[] = "Infantil";
$Categorias[] = "Adolescentes";
$Categorias[] = "Adulto";

// print_r($Categorias);

$nome = $_POST["name"];
$idade = $_POST["age"];

if(empty($nome)) {
    // vai criar um array de sessao (array associativo, atribui um valor a uma chave)
    // com a chave 'mensagem de erro'
    $_SESSION["mensagem de erro"] = "O nome não pode ser vazio";
    return;
}
if(strlen($nome) < 3) {
    echo "O nome deve conter mais que 3 caracteres";
    return;
}
if(strlen($nome) > 40) {
    echo "O nome é muito extenso!";
    return;
}
if(!is_numeric($idade)) {
    echo "Informe um número para idade";
    return;
}

// var_dump($nome);
// var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if ($Categorias[$i] === "Infantil") {
            echo "O nadador {$nome} compete na categoria Infantil";
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if ($Categorias[$i] === "Adolescentes") {
            echo "O nadador {$nome} compete na categoria Adolescentes";
        }
    }
} else {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if ($Categorias[$i] === "Adulto") {
            echo "O nadador {$nome} compete na categoria Adulto";
        }
    }
}