<?php

interface ClientesDAOinterface {

    public function create($id,$nome, $cpf, $email, $telefone, $endereco);
    
    public function read($id,$nome, $cpf, $email, $telefone, $endereco);
    
    public function update($id, $nome, $cpf, $email, $telefone, $endereco);
    
    public function delete($id);
    
}
