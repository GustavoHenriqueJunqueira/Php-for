<?php

for ($i=0; $i<10; $i--){

echo $i . " "; 
}
//Este exemplo 2 do for na verdade é um erro esperado que o laço de repetição vai acabar entrando em um loop infinito, como você está iniciando a variavel em 0 e espera que chegue até 10 o contador no final da condição deveria ser ++ e não --. Da forma com que foi escrito a variavel irá começar em 0 e o proximo numero será o -1,-2,-3,-4 e por ai em diante, se a variavel não alcançar o objetivo que é 10 a execução do programa nunca vai parar e ai está operigo pois pode chegar a derubar um site por causa de um erro simples.
?>