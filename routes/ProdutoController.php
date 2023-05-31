<?php

require_once('../utils/Conexao.php');
require_once('../dao/ProdutoDAO.php');


class ProdutoController {

    private $produtoDAO;

    public function __construct() {

        $this->produtoDAO = new ProdutoDAO(Conexao::getConnection());

    }

    public function criarProduto($nome, $descricao, $preco, $data_lancamento) {
        
        return $this->produtoDAO->create($nome, $descricao, $preco, $data_lancamento);
    
    }

    public function buscarProduto($nome, $descricao, $preco, $data_lancamento) {
        
        return $this->produtoDAO->read($nome, $descricao, $preco, $data_lancamento);
    
    }

    public function atualizarProduto($nome, $descricao, $preco, $data_lancamento) {
    
        return $this->produtoDAO->update($nome, $descricao, $preco, $data_lancamento);
    
    }

    public function deletarProduto($id) {

       return $this->produtoDAO->delete($id);
       
    }
}

?>
