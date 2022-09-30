<?php

function defineCategory($nome, $idade) : ?string
{
    //array numerico, iniciando do zero
    $categorias = ["Infantil", "Adolescentes", "Adulto"];

    if(nameValidation($nome) && ageValidation($idade))
    {
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] === "Infantil") {
                    setSuccessMessage(mensagem: "O nadador {$nome} compete na categoria {$categorias[$i]}");
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] === "Adolescentes") {
                    setSuccessMessage(mensagem: "O nadador {$nome} compete na categoria {$categorias[$i]}");
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] === "Adulto") {
                    setSuccessMessage(mensagem: "O nadador {$nome} compete na categoria {$categorias[$i]}");
                    return null;
                }
            }
        }
    } else {
        return getErrorMessage();
    }   
}
