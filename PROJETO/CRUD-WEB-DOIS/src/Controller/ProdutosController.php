<?php

namespace App\Controller;


class ProdutosController
{
    public function listar()
    {
        $produtos = $_SESSION['produtos'];
        dd($produtos);
        require __DIR__ . "/../View/Produto/listagem.php";
    }

    public function editar()
    {
        $id = $_GET['id'];
        $produtos = $_SESSION['produtos'];
        $produto = $produtos[$id];
        require __DIR__ . "/../View/Produto/editar.php";
    }

    public function criar()
    {
        require __DIR__ . "/../View/Produto/formulario.php";
    }
    
    public function salvar()
    {
        $id = $_GET['id'] ?? 0;
        $dados = $_POST;

     

        if (empty($id)) {
            $maiorId = 0;
            
            foreach($_SESSION['produtos'] as $produto) {
                if ($maiorId < $produto['id']) {
                    $maiorId = $produto['id'];
                }
            }
            $id = $maiorId + 1;
        }

        $dados['id'] = $id;
        $_SESSION['produtos'][$id] = $dados;
        header("Location: /produtos");
    }

    public function deletar()
    {
        $id = $_GET['id'];
        unset($_SESSION['produtos'][$id]);
        header("Location: /produtos");
    }
}

