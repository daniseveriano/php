<?php
// inicialização da sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIÇÃO DE COMPETIDORES</title>
</head>

<body>
    <h1>Formulário para Inscrição de Competidores</h1>
    <!-- quando os dados são enviados pelo metodo get,
    eles vão trafegar pelo header da
    requisição, no formato query strings
Ex: http://localhost/php/script.php?name=Daniele+Cosvosk+C.+Severiano&age=34 -->
    <form action="script.php" method="post">
        <div>
            <label for="name">Seu Nome:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Sua Idade:</label>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Enviar dados do competidor">
        <?php
            $mensagemDeErro = isset($_SESSION["mensagem de erro"]) ? $_SESSION["mensagem de erro"] : "";
            if(!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
        ?>
    </form>
</body>

</html>