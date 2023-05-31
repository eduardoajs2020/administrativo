<?php

interface Clientes_pjDAOinterface {

    public function create($id,$nome, $cnpj, $email, $telefone, $endereco);
    
    public function read($id,$nome, $cnpj, $email, $telefone, $endereco);
    
    public function update($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    public function delete($id);
    
}
