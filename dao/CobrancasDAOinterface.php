<?php

interface CobrancasDAOinterface {

    public function create($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento );

    public function read($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento );

    public function update($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento );

    public function delete($id);

}
