<?php
// criação de uma array
$produtos = [
   "maça"=> 2.99, "uva" => 1.99, "laranja" => 3.99 
];
// exibir os preços da lista
echo "Lista preços: \n";
foreach ($produtos as $produto => $preço){
echo $produto. " custa R$". $preço. "\n";}
//calculando o total
$total = 0;
foreach ($produtos as $preço) {
    $total += $preço;
}
echo "Total: R$". $total;
?>
