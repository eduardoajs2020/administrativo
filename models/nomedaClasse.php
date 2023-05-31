<?php

class nomedaclasse implements nomedaclasseDAOinterface {
    
    private $nomedoarquivoDAO;

    public function __construct($nomedoarquivoDAO) {
        $this->nomedoarquivoDAO = $nomedoarquivoDAO;
    }

    public function nomedaFuncao($parametro1, $parametro2) {
        // Lógica para realizar a operação desejada
    }

}
