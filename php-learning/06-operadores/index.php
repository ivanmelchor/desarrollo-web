<?php

//Operadores aritmeticos
$numero1=55;
$numero2=5;
echo 'Suma: '.($numero1+$numero2).'<br>';
echo 'Resta: '.($numero1-$numero2).'<br>';
echo 'Multiplicacion: '.($numero1*$numero2).'<br>';
echo 'Division: '.($numero1/$numero2).'<br>';
echo 'Resto de una división: '.($numero1%$numero2);

//Operadores de incremento/decremento
$year=2019;
echo '<h1>'.$year.'</h1>';
$year++;            //Incremento
//$year--;          Decremento
//++$year;          Pre-incremento
//--$year;          Pre-decremento
echo '<h1>'.$year.'</h1>';

//Operadores de asignacion
$edad=21;
echo $edad;'<br>';
echo ($edad+=5);    //Equivalente a $edad = $edad + 5;

?>