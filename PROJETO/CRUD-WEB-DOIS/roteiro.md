# Milestones

# Composer configurado 

- composer init 
- Modificar arquivo composer.json 
- composer dump-autoload 
- criar pasta public 
- criar arquivo index.php 
- colocar um echo ola mundo no arquivo index 
- rodar o servidor (php -S localhost:8000) 
 
# Estrutura de arquivos - Controller

- criar arquivos na pasta /src 
    - src/Controller/ProdutoController.php 
        - criar funções (listar, editar, criar, ...) 
        - colocar um echo "alguma coisa" dentro delas 

- Colocar o require autoload no index.php  
- Testar importação da classe no arquivo index.php, com um olá mundo 

- modificar arquivo index.php para as rotas serem apontadas para:
   /produtos -> ProdutoController -> listar()
   /produtos/editar -> ProdutoController -> editar()
   /produtos/criar -> ProdutoController -> criar()
- testar se mapeando esta funcionando, vendo se o echo alguma esta imprimindo na rota 


# Estrutura dos arquivos - templates
- criar arquivos na pasta /src (pode ser colocado em qualquer outra pasta)
    - src/View/Produto/listar.php
    - src/View/Produto/editar.php
    - src/View/Produto/criar.php

- colocar dentro detes arquivos um html genérico só para testes
- alterar ProdutoController para dar um require nestes arquivos ao invés do echo "ola mundo"

# Mapeamento do css
- criar arquivo /public/css/app.css 
- verificar se arquivo abre no browser (barra de endereço) 
- importar css em algum dos templates (view)
- verificar se atualizações no arquivo css estão aparecendo 
- css centralizar elemento
    body, html { 
        height: 100%; 
        margin: 0; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
    } 

# Criar a função para depurarmos o código
  - criar um arquivo em src/helpers.php
  - criar um função chamada "dd"
  - colocar um require no index.php para mapear essa função

# Session

  - Iniciar a session no index.php
  - Atualizar a session com nossa carga de dados de produtos caso ela esteja vazia
  - verificar se a session foi atualizada e os dados permanecem ao atualizar a página usando o "dd"

# listagem
  - Editar a listagem de produtos para pegar os dados da session
  - Adicionar o link de deletar

# tela de editar
  - pegar os dados que vem da session para preencher a tela de editar
  - ajustar o form (method e action)
  - action -> /produtos/salvar?id=(o id)

# tela de criar
  - ajustar o form (method e action)
  - action -> /produtos/salvar

# controller
  - criar métodos de deletar, salvar vazios
  - mapear no index.php os métodos do controller (pegando o id e os dados do post)
  - colocar um dd nos métodos para validar os dados que chegam, ao salvar e deletar
  - criar lógica de salvamento / deletar
  - colocar um redirecionamento para o index.php
  - adicionar mais um campo, quantidade no banco de dados e formulário
