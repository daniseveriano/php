<?php

function nameValidation($nome) : bool
{
    if (empty($nome)) {
        // vai criar um array de sessao (array associativo, atribui um valor a uma chave)
        // com a chave 'mensagem de erro'
        $_SESSION["mensagem de erro"] = "O nome não pode ser vazio";
        return false;
    } else if (strlen($nome) < 3) {
        $_SESSION["mensagem de erro"] = "O nome deve conter mais que 3 caracteres";
        return false;
    } else if (strlen($nome) > 40) {
        $_SESSION["mensagem de erro"] = "O nome é muito extenso!";
        return false;
    }
    return true;
}

function ageValidation($idade) : bool
{
    if (!is_numeric($idade)) {
        $_SESSION["mensagem de erro"] = "Informe um número para idade";
        return false;
    }
    return true;
}
