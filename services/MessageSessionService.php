<?php

session_start();

function setErrorMessage($mensagem) : void //retorno vazio
{
    $_SESSION["mensagem de erro"] = $mensagem;
}

function getErrorMessage() : ?string
{
    if(isset($_SESSION["mensagem de erro"])) {
        return $_SESSION["mensagem de erro"];
    }
    return null;
}