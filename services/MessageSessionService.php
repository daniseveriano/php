<?php

session_start();

function setSuccessMessage($mensagem) : void //retorno vazio
{
    $_SESSION["mensagem de sucesso"] = $mensagem;
}

function getSuccessMessage() : ?string
{
    if(isset($_SESSION["mensagem de sucesso"])) {
        return $_SESSION["mensagem de sucesso"];
    }
    return null;
}

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

function removeSuccessMessage() : void
{
    if(isset($_SESSION["mensagem de sucesso"])) {
        unset($_SESSION["mensagem de sucesso"]);
    }
}

function removeErrorMessage() : void
{
    if(isset($_SESSION["mensagem de erro"])) {
        unset($_SESSION["mensagem de erro"]);
    }
}