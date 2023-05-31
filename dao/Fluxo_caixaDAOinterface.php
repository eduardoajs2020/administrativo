<?php

interface Fluxo_caixaDAOinterface {

    public function create($tipo, $valor, $data, $descricao);

    public function read($tipo, $valor, $data, $descricao);

    public function update($id, $tipo, $valor, $data, $descricao);

    public function delete($id);

}
