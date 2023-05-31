<?php

interface UsuariosDAOinterface {

    public function create($username, $password);

    public function read($username, $password);

    public function update($username, $password,  $id);

    public function delete($id);

    public function login($username, $password);

}
