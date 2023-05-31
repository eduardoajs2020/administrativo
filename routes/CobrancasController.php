<?php

require_once ('../utils/Conexao.php');
require_once ('../dao/CobrancasDAO.php');


class CobrancasController {

    private $cobrancasDAO;

    public function __construct() {

        $this->cobrancasDAO = new CobrancasDAO(Conexao::getConnection());

    }

    public function criarCobranca($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento) {
        
        return $this->cobrancasDAO->create($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento);
    
    }

    public function buscarCobranca($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento) {
        
        return $this->cobrancasDAO->read($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento);
    
    }

    public function atualizarCobranca($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento) {
    
        return $this->cobrancasDAO->update($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento);
    
    }

    public function deletarCobranca($id) {

       return $this->cobrancasDAO->delete($id);
       
    }
}

?>
