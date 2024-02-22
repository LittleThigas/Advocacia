<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    include ('conexao_bd.php');

    $numero_oab = $_POST["numero_oab"];
    $nome_advogado = $_POST["nome_advogado"];
    $email_advogado = $_POST["email_advogado"];
    $cpf_advogado = $_POST["cpf_advogado"];

    $sql = "INSERT INTO conta (numero_oab, nome_completo_advogado, email_advogado, cpf_advogado)
            VALUES ('$numero_oab', '$nome_advogado', '$email_advogado', '$cpf_advogado')";

    if(executarComando($sql)){
        echo "<h2> Conta Realizada! </h2>";
    }else{
        echo "<h2> Falha ao realizar a conta. </h2>";
    }
?>

</body>
</html>