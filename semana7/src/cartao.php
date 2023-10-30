<?php

namespace comex\semana7;

use Exception;

class Cartao implements MeioPagamento {
   
    public function __construct
    (
        private Cliente $cliente
    
    ){}

    public function tipoPagamento($valor) {
        try {
            echo $this->cliente->getNome() .", processando pagamento por cartão de crédito, no valor de R$ $valor" . PHP_EOL;

            sleep(5); 
            
            $pagamento = rand(0, 1);

            if ($pagamento === 1) {
                echo "O pagamento processado com sucesso." .PHP_EOL;
            } else {
                throw new Exception("Pagamento não efetuado.");
            }
        } catch (Exception $error) {
            echo "Erro: " . $error->getMessage() .PHP_EOL;
        }
    }
}