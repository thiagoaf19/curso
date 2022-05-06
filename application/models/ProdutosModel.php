<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //index.php é quem direciona as requisições para os devidos elementos do frameword(controllers, models, views, etc) Impedi que o usuário tente executar diretamente o arquivo. php que contém o nosso controller.

class ProdutosModel extends CI_Model {

    public function listar_todos () { //Vai listar todos os produtos
        $this->db->select('codigo, nome, preco'); //BD tabela Produtos que possui colunas (nome, nome e preco)

        $resultado = $this->db->get("produtos")->result(); // resultado tipo array contendo dados do produto que vão vir do BD, cada chave do array vai referenciar uma coluna e seu respectivo valor
                                                // result dentro get vai trazer somente os registros que preciso
                                                // passa esse valor para uma variável para que possa trabalar com ela.
        return $resultado; //retorno
    }
}