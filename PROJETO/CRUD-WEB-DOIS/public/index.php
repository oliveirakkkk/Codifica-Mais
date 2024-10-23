<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/helper.php';

session_start();

use App\Controller\ProdutosController;
$produto = new ProdutosController();

if (empty($_SESSION)) {
    $_SESSION['produtos'] = [
        1 => [
           'id' => 1,
           'nome' => "Camisa codifica +"
        ],
        2 => [
            'id' => 2,
            'nome' => "Notebook"
        ]
    ];
}

$caminho = rtrim($_SERVER['PATH_INFO'], '/');

if ($caminho == '/produtos/criar') {
    return $produto->criar();
}
if ($caminho == '/produtos/editar') {
    return $produto->editar();
}
if ($caminho == '/produtos') {
    return $produto->listar();
}
if ($caminho == '/produtos/salvar') {
    return $produto->salvar();
}
if ($caminho == '/produtos/deletar') {
    return $produto->deletar();
}



echo "Página não encontrada :(";
