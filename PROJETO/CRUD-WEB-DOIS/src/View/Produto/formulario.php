<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/listagem.css">
    <title>Cadastro de produtos</title>
</head>

<body>

<form method="post" action="/produtos/salvar">
    

    <div class="conteudoPrincipal">

        <div class="titulo"> Novo Item </div>

        <div class="cabecalho">

            <a href="/listagem.php"><button class="novoItem"> Voltar </button></a>

            <div class="buscarItem"> Buscar Item </div>

        </div>

        <div class="quadradoFormulario">

            <div class="quadradoFormulario__Superior"> 
               
                <label for="nome"> Nome </label> <br>
                <input type="text" name="nome"> <br>
        
            </div>

            <div class="quadradoFormulario__Meio">
                
                <div class="Meio__Metade"> 

                    <label for="sku"> SKU </label> <br>
                    <input type="text" name="sku"> <br>

                    <label for="unidade_medida"> Unidade de medida </label> <br>
                    <select type="text" name="unidade_medida"> 

                        <option value="0" selected disabled></option>
                        <option value="1">Un</option>
                        <option value="2">Kg</option>
                        <option value="3">g</option>
                        <option value="4">L</option>
                        <option value="5">mm</option>
                        <option value="6">cm</option>
                        <option value="7">m</option>
                        <option value="8">m²</option>

                    </select><br>

                </div>

                <div class="Meio__Metade"> 

                    

                        <label for="valor"> Preço </label> <br>
                        <input type="text" name="valor"> <br>

                        <label for="quantidade"> Quantidade </label> <br>
                        <input type="text" name="quantidade"> <br>

                    

                </div>
            
            </div>

            <div class="quadradoFormulario__Inferior">

                <div>
                    <label for="categoria"> Categoria </label> <br>
                    <select type="text" name="categoria"> 

                        <option value="0" selected disabled></option>
                        <option value="1">Eletrônicos</option>
                        <option value="2">Eletrodomesticos</option>
                        <option value="3">Móveis</option>
                        <option value="4">Decoração</option>
                        <option value="5">Vestuario</option>
                        <option value="7">Outros</option>

                    </select><br>
                </div>

                <input type="submit" class="cadastrar" type="submit" name="salvar" value="Cadastrar">

            </div>

        </div>

    </div>

</form>

</body>

</html>