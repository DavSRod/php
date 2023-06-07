<?php
$nombre = readline("ingresar nombre completo del trabajador:  \n");
$sueldo = readline("ingresar sueldo:  \n");

$aumento = $sueldo * 0.15;
$sueldofinal = $sueldo + $aumento;

echo "Bienvenido, señor $nombre, su sueldo tendrá un aumento de $aumento. Por tanto, el sueldo que se le empezará a pagar de ahora en adelante es de $sueldofinal. Gracias por ser parte de nuestra empresa.\n";
?>