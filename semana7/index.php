<?php

require 'autoload.php';

$cliente = new comex\semana7\Cliente(1,'Fernando Eduardo C Silva','ferdo.castro@gmail.com', '11988580086','Rua Santa Bárbara, 111',[]);

$produto1 = new comex\semana7\Produto(1, 'Lápis', 1.99, 150);
$produto2 = new comex\semana7\Produto(2, 'Caderno', 15, 200);
$produto3 = new comex\semana7\Produto(3, 'Borracha', 0.50, 25);

$produtos = [$produto1,$produto2,$produto3]

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semana 7</title>
</head>
<body>

    <h3>
        <?php echo "Olá, " . $cliente->getNome(); ?> </br>
        <?php echo "e-mail: " . $cliente->getEmail() . PHP_EOL; ?> </br>
        <?php echo "celular: " . $cliente->celularFormatado() . PHP_EOL; ?> </br>
        <?php echo "Endereco: " . $cliente->getEndereco() . PHP_EOL;?> 
    </h3>

    <h4>
        <?php 

            foreach ($produtos as $produto) {

                echo "O produto: " .  $produto->getNome() . " custa a unidade: R$" . number_format($produto->getPreco(),2,',' ,'.') . " e possui um estoque de: " . $produto->getQuantidadeEstoque() ." Valor total em estoque: R$" . number_format($produto-> getValorEmEstoque(),2,',' ,'.'). "</br>";

            }
        
        ?>

    </h4>

    <h4>
        <?php 

            $pedido = new comex\semana7\Pedido(1, $cliente->getNome(), $produtos);

            echo "Pedido: " . $pedido->getId() ."</br>";
            echo "Cliente: " . $pedido->getCliente()."</br>";
            echo "Valor Total: R$ " . number_format($pedido->getValorTotal(), 2, ',','.') ."</br>";

        ?>
    </h4>

    <h4>
        <?php
            
            $carrinho = new comex\semana7\carrinhoCompras($produtos);

            echo "Valor total : R$ " . number_format($carrinho->getValorTotal(), 2, ',','.') ."</br>";
            echo "Valor total + desconto : R$ " . number_format($carrinho->calculaDesconto(), 2, ',','.') ."</br>";
     
        ?>
    </h4>

    <h4>
        <?php

            use comex\semana7\pix;

            echo "- Pagamento via Pix:" ."</br>";
            $pagamentoPix = new Pix($cliente);
            $valor = strval(number_format($carrinho->getValorTotal(), 2, ',','.'));
            $pagamentoPix->tipoPagamento($valor);
            
     
        ?>
    </h4>

    <h4>
        <?php

            use comex\semana7\cartao;

            echo "- Pagamento via Cartão:" ."</br>";
            $pagamentoCartao = new Cartao($cliente);
            $valor = strval(number_format($carrinho->getValorTotal(), 2, ',','.'));
            $pagamentoCartao->tipoPagamento($valor);
            
     
        ?>
    </h4>

</body>
</html>
