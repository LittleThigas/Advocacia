<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <title>Escritório de Advocacia</title>
        <meta charset="utf-8">

        <!-- REFERÊNCIAS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="images/demo/balanca png.png" />
        <script src="Mascara.js"></script>


        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
        <link rel="stylesheet" href="ocamento.css">
    </head>
    <body>

        <!-- INCLUSÃO DO CABEÇALHO DA PÁGINA -->
        <?php
        include 'cabecalho.php';
        ?>

<div>
    <h2>Formulário de Orçamento</h2>
    <form action="ocamento_bd.php" method="post">
        <!-- Dados do Cliente -->
        <label for="cpf_cliente">CPF do Cliente:</label>
        <input type="text" name="cpf_cliente" required>

        <label for="nome_cliente">Nome Completo do Cliente:</label>
        <input type="text" name="nome_cliente" required>

        <label for="email_cliente">Email do Cliente:</label>
        <input type="email" name="email_cliente" required>

        <label for="telefone_cliente">Telefone do Cliente:</label>
        <input type="tel" name="telefone_cliente" required>

        <label for="turno_contato">Melhor Turno para Contato:</label>
        <input type="text" name="turno_contato" required>

        <!-- Dados do Processo -->
        <label for="vara_processual">Vara Processual:</label>
        <input type="text" name="vara_processual" required>

        <label for="descricao_processo">Descrição do Processo:</label>
        <textarea name="descricao_processo" rows="4" required></textarea>

        <!-- Dados da Conta/Advogado -->
        <label for="conta_numero_oab">Número da OAB:</label>
        <input type="text" name="conta_numero_oab" required>

        <label for="nome_advogado">Nome Completo do Advogado:</label>
        <input type="text" name="nome_advogado" required>

        <label for="email_advogado">Email do Advogado:</label>
        <input type="email" name="email_advogado" required>

        <label for="cpf_advogado">CPF do Advogado:</label>
        <input type="text" name="cpf_advogado" required>

        <!-- Botão de envio -->
        <button type="submit">Enviar Orçamento</button>
    </form>
</div>

        <?php
        include 'rodape.php';
        ?>

    </body>
</html>
