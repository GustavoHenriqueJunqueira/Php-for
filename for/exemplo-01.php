<?php

for ($i = 0; $i <= 1000; $i+=5) { //Neste momento ofor está estavelecendo uma condição para aparecer na tela, da forma que irá começar no 0 vai até o numero 1000 contando de 5 em 5.

	if($i > 200 && $i < 800) continue; //Já no if, está adicionando outra condição if (se caso o i for mair que 200 e i menor que 800 não será exibido na tela)

	if ($i === 900) break; // Outra condição que quando o i chegar a 900 irá parar a execução do for e itia continuar o programa depois da lina 11.

echo $i . "<br>";
}


?>