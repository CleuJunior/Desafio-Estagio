<?php

Class Maquina{
    private $preco = array(
        "Lata A" => 3.45, 
        "Lata B" => 5.90, 
        "Lata C" => 6.25, 
        "Lata D" => 2.80
    );
    
    private $qt_estoque = array (
        "Lata A" => 30, 
        "Lata B" => 23,
        "Lata C" => 15, 
        "Lata D" => 8

    );

    private $valor_vendas_total = 0;

    private function total_vendas($lata, $quant_compra){
        $this->valor_vendas_total += $this->preco[$lata] * $quant_compra;
    }

    public function getLucroVendas(){
        return "Total vendido: " . $this->valor_vendas_total . " dinheiro(s)";
    }

    public function comprar($lata, $quant_compra, $valor_pago)
    {
        if($this->qt_estoque[$lata] >= $quant_compra):
            if($this->qt_estoque[$lata] >= $quant_compra && $valor_pago == ($this->preco[$lata] * $quant_compra)):
                $this->total_vendas($lata, $quant_compra); 
                $this->qt_estoque[$lata] -= $quant_compra;
                return "Compra bem sucedida";

            elseif($this->qt_estoque[$lata] >= $quant_compra && $valor_pago > ($this->preco[$lata] * $quant_compra)):
                $this->total_vendas($lata, $quant_compra); 
                $this->qt_estoque[$lata] -= $quant_compra;
                return "Compra bem sucedida, devolver troco de : " . ($valor_pago - $this->preco[$lata] * $quant_compra);

            elseif($this->qt_estoque[$lata] >= $quant_compra && $valor_pago < ($this->preco[$lata] * $quant_compra)):
                return "Nao foi possivel efetuar a compra, faltam: " . ($this->preco[$lata] * $quant_compra - $valor_pago);

            endif;
        else:
            return "A quantidade de latas e menor do que a do estoque: " . $this->qt_estoque[$lata];
        endif;
    }

     
    public function estoque()
    {
        return "Lata A: " . $this->qt_estoque["Lata A"] . " em estoque" .  "\n".
               "Lata B: " . $this->qt_estoque["Lata B"] . " em estoque" . "\n" .
               "Lata C: " . $this->qt_estoque["Lata C"] . " em estoque" . "\n" .
               "Lata D: "  . $this->qt_estoque["Lata D"] . " em estoque" . "\n";
    }
}

// Teste

$maquina = new Maquina();

//  Quantidade em estoque e o total vendido inicial da maquina

echo "*********************\n";
echo $maquina->estoque();
echo "*********************\n";
echo $maquina->getLucroVendas();

echo "\n";
echo "\n";

// Teste de valores de compra, troco e em estoque

echo $maquina->comprar("Lata A", 15, 51.75) . "\n";
echo $maquina->comprar("Lata B", 8, 68.90) . "\n";
echo $maquina->comprar("Lata C", 12, 60)  . "\n";
echo $maquina->comprar("Lata D", 3, 10) . "\n";
echo $maquina->comprar("Lata D", 7, 10) . "\n";

echo "\n";

// Testes apos a venda dos produtos e quantidade de lucro apos as vendas

echo "*********************\n";
echo $maquina->estoque();
echo "*********************\n";
echo $maquina->getLucroVendas();