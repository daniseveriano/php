<?php

$Categorias = [];
$Categorias[] = "Infantil";
$Categorias[] = "Adolescentes";
$Categorias[] = "Adulto";

// print_r($Categorias);

$nome = "Daniele";
$idade = 34;

// var_dump($nome);
// var_dump($idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if($Categorias[$i] === "Infantil") {
            echo "O nadador {$nome} compete na categoria Infantil";
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if($Categorias[$i] === "Adolescentes") {
            echo "O nadador {$nome} compete na categoria Adolescentes";
        }
    }
} else {
    for ($i = 0; $i <= count($Categorias); $i++) {
        if($Categorias[$i] === "Adulto") {
            echo "O nadador {$nome} compete na categoria Adulto";
        }
    }
}
