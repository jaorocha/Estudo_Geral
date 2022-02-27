<?php

#msg
echo 'Olá Mundo Cruel';

$mensagem = '<br>Olá Mundo Cruel';

echo $mensagem;

#operações 
echo '<br>Operações - ';
$A = 2; 
$B = 3;

$soma = $A + $B;
print $soma;

#operações condicionais
echo '<br>Operações Condicionais - ';
$A = 2; 
$B = 3;

if($A % 2 == 1){
  echo 'Numero par';
}
else{
    echo 'Numero par';
}
 # laços de repetição
#while
echo '<br>while - ';
$i = 0;
while ($i <= 10) {
    echo $i;
    $i++;
}

#do..while
echo '<br>Do..while - ';
$i = 0;
do{
    echo $i;
    $i++;
} while ($i <= 10);

#for
echo '<br>For - ';
for ($i = 0; $i <10; $i++){
    echo $i;
}
#foreacj
echo '<br>Foreach - ';
$i = [0,1,2,3,4,5,6,7,8,9];
foreach ($i as $j) {
    echo $j;
}

#Arrays
echo '<br>Arrays - ';
$variavel = array(1,2,3,4,5,6,7,8,9);
print_r($variavel);

echo '<br> ou Arrays - ';
foreach($variavel as $v){
    echo $v;
} 

echo '<br>Arrays (opções) - ';
$variavel = array("A"=>"ABACAXI", "B"=>"BOLA", "C"=>"CACHORRO");
print_r($variavel);

echo '<br> ou Arrays - ';
foreach($variavel as $v){
    echo $v;
}
echo '<br>Arrays POR ELEMENTO - ';
    echo $variavel["A"];






