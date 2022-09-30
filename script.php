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

// var_dump($nome);
// var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if ($Categorias[$i] === "Infantil") {
            $_SESSION["mensagem de sucesso"] = "O nadador {$nome} compete na categoria Infantil";
            header("Location: index.php");
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if ($Categorias[$i] === "Adolescentes") {
            $_SESSION["mensagem de sucesso"] = "O nadador {$nome} compete na categoria Adolescentes";
            header("Location: index.php");
            return;
        }
    }
} else {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if ($Categorias[$i] === "Adulto") {
            $_SESSION["mensagem de sucesso"] = "O nadador {$nome} compete na categoria Adulto";
            header("Location: index.php");
            return;
        }
    }
}
