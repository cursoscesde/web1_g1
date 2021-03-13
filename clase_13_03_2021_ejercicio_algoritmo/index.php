<?php
/* 
Cierta universidad tiene un programa para estimular a los estudiantes con buen rendimiento 
académico. SI el promedio es de 4,5 o más y el alumno es de pregrado entonces cursará 28 créditos 
y se le hará un 25% de descuento. Si el promedio es mayor o igual a 4,0 4,0 pero menor que 4,5 y el 
alumno es de pregrado, entonces cursará 25 créditos y se le hará un 10% de descuento. Si el 
promedio es mayor o igual que 3,5 y menor que 4,0 y es de pregrado, cursará 20 créditos y no tendrá ningún 
descuento. Si el promedio es mayor o igual a 2,5 y menor que 3,5 y es de pregrado, cursará 15 
créditos y no tendrá descuento. Si el promedio es menor de 2,5 y es de pregrado, no podrá 
matricularse. Si el promedio es mayor o igual a 4,5 y es de posgrado, cursará 20 créditos y se le hará 
un 20% de descuento. Si el promedio es menor de 4,5 y es de posgrado cursará 10 créditos y no 
tendrá descuento. 
Realizar la solución utilizando php que determine cuánto debe pagar un estudiante y cuántos 
créditos registra si el valor de cada crédito es de $50000 para pregrado y $300000 para posgrado
*/
$averagePerson = 4;
$academicProgram = "pregrado";
$pagar = 0;
$creditos = 0;
switch ($academicProgram) {
    case "pregrado":
        if ($averagePerson >= 4.5) {
            $creditos = 28;
            $pagar  = $creditos * 50000 * 0.75;
        } else if ($averagePerson >= 4 && $averagePerson < 4.5) {
            $creditos = 25;
            $pagar  = $creditos * 50000 * 0.90;
        } else if ($averagePerson >= 3.5 && $averagePerson < 4) {
            $creditos = 20;
            $pagar  = $creditos * 50000;
        } else if ($averagePerson >= 2.5 && $averagePerson < 3.5) {
            $creditos = 15;
            $pagar  = $creditos * 50000;
        } else if ($averagePerson < 2.5) {
            $creditos = 0;
            $pagar  = $creditos * 50000;
            echo "No puede matricularse";
        }
        break;
    case "posgrado":
        if ($averagePerson >= 4.5) {
            $creditos = 20;
            $pagar  = $creditos * 300000 * 0.80;
        } else if ($averagePerson < 4.5) {
            $creditos = 10;
            $pagar  = $creditos * 300000;
        }
        break;
}

echo "Registra {$creditos} créditos para {$academicProgram} y debe pagar {$pagar}";
