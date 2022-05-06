<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //index.php é quem direciona as requisições para os devidos elementos do frameword(controllers, models, views, etc) Impedi que o usuário tente executar diretamente o arquivo. php que contém o nosso controller.

class Produtos extends CI_Controller {
    public function index () {
        
        $texto = "Você esta usando o controller produtos!"; //variável texto
        
        $dados = array("mensagem" => $texto); //chave mensagem, que tem valor a variável texto criada
        
        $this->load->view("produtos/lista", $dados);  // Usar uma função chamada $this do framework para carregar as views
                           // Objeto this e load
                           // Pasta produtos/lista
           
    }

    public function listar_array() {
        
        $this->load->model("ProdutosModel", "produtos"); //1 parametro: nome da classe model 2º é o nome pelo qual eu vou passar a revenciar esse modle dentro do controller
        
        $resultado = $this->produtos->listar_todos();// método listar_todos criado no model

        echo '<pre>';

        var_dump($resultado); //imprime array mantendo sua estrutura informando os tipos de cada campo
    }

    public function listar_tabela(){
         // Carregamos nosso model (BD)
        $this->load->model("ProdutosModel", "produtos");
        // pegamos esse resultado e atribuimos a uma variável: resultado
        $resultado = $this->produtos->listar_todos();
        // passar os dados para view - array contendo dados
        $dados = array("produtos" => $resultado);
        // carregamos a view - criar uma nova pagina html pra isso
        $this->load->view("produtos/lista_tabela", $dados);
    }
} 

// Qualquer view que for criada vai ser nesse estilo
// Para várias páginas que a gente possa ter basta carregar a view como acima
