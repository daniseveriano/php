<?php
// inicialização da sessão
include "services/MessageSessionService.php";
include "services/ServiceValidation.php";
include "services/CategoriesService.php";

$nome = $_POST["name"];
$idade = $_POST["age"];

defineCategory($nome, $idade);

header("Location: index.php");
