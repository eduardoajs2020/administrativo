<?php

interface ProdutoDAOinterface {

    public function create($nome, $descricao, $preco, $data_lancamento);

    public function read($nome, $descricao, $preco, $data_lancamento);

    public function update($nome, $descricao, $preco, $data_lancamento);

    public function delete($id);

}
