<?php

echo"<select>";

for ($i = date("Y"); $i > date("Y")-100; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';

}
echo "<select/>";

//Neste exemplo numero 3 estamos fazendo um quadro de seleção dos anos do ano em que estamos até 100 anos atras, muito utilizado em cadastros.
?>