<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/listagem.css">
    <title>Listagem de produtos</title>
</head>

<body>

    <div class="conteudoPrincipal">

        <div class="cabecalho">

            <a href="/produtos/criar"><button class="novoItem"> Novo Item </button></a>

            <div class="buscarItem"> Buscar Item </div>

        </div>

        <div class="quadradoUm">

            <div class="linhaSuperior">

                <div class="numeros"> #000001 </div>

                <div class="vestuario"> Vestuário </div>

                <div class="numeros"> SKU:123456 </div>

            </div>

            <div class="linhaDoMeio">

                <div class="produto"> Camisa Codifica+ </div>

                <div class="quantidade"> Quantidade: 100 </div>

            </div>

            <div class="linhaInferior">

            <a href="/produtos/editar?id="><button class="editar"> Editar </button></a>

                <button class="deletar"> Deletar </button>

            </div>

        </div>

        <div class="quadradoDois">

            <div class="linhaSuperior">

                <div class="numeros"> #000002 </div>

                <div class="eletronico"> Eletrônico </div>

                <div class="numeros"> SKU:123456 </div>

            </div>

            <div class="linhaDoMeio">

                <div class="produto"> Notebook </div>

                <div class="quantidade"> Quantidade: 45 </div>

            </div>

            <div class="linhaInferior">

            <a href="/editar.php"><button class="editar"> Editar </button></a>

                <button class="deletar"> Deletar </button>

            </div>

        </div>

        <div class="quadradoTres">

            <div class="linhaSuperior">

                <div class="numeros"> #000001 </div>

                <div class="escritorio"> Escritório </div>
<div class="numeros"> SKU:123456 </div>

            </div>

            <div class="linhaDoMeio">

                <div class="produto"> Caderno Anotação </div>

                <div class="quantidade"> Quantidade: 15 </div>

            </div>

            <div class="linhaInferior">

            <a href="/editar.php"><button class="editar"> Editar </button> </a>

                <button class="deletar"> Deletar </button>

        </div>

    </div>

</body>

</html>