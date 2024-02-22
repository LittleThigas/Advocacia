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

    $cpf_cliente = $_POST["cpf_cliente"];
    $nome_cliente = $_POST["nome_cliente"];
    $email_cliente = $_POST["email_cliente"];
    $telefone_cliente = $_POST["telefone_cliente"];
    $turno_contato = $_POST["turno_contato"];
    $vara_processual = $_POST["vara_processual"];
    $descricao_processo = $_POST["descricao_processo"];
    $conta_numero_oab = $_POST["conta_numero_oab"];
    $nome_advogado = $_POST["nome_advogado"];
    $email_advogado = $_POST["email_advogado"];
    $cpf_advogado = $_POST["cpf_advogado"];

    $sql = "INSERT INTO ORCAMENTO (cpf, nome_completo, email, telefone, turno_contato, vara_processual, descricao_processo, conta_numero_oab, nome_completo_advogado, email_advogado, cpf_advogado)
            VALUES ('$cpf_cliente', '$nome_cliente', '$email_cliente', '$telefone_cliente', '$turno_contato', '$vara_processual', '$descricao_processo', '$conta_numero_oab', '$nome_advogado', '$email_advogado', '$cpf_advogado')";

        if(executarComando($sql)){
            echo "<h2> Conta Realizada! </h2>";
        }else{
            echo "<h2> Falha ao realizar a conta. </h2>";
        }
    ?>
</body>
</html>

