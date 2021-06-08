<?php

$valorEmprestimo = $_POST['dinheiro'];


//formatando primeiro o valor recebido tirando a virgula e botando o ponto e depois tira o ponto e bota espaço
$valorEmprestimo = str_replace(",",".",str_replace(".","",$valorEmprestimo));


$calculo1 =  $valorEmprestimo/((100 - 16.9)/100);
//Fim calculo da parcela 1X
$calculo2 =  $valorEmprestimo/((100 - 18.33)/100);
$parcela2 = $calculo2/2;
//Fim calculo parcela 2X
$calculo3 =  $valorEmprestimo/((100 - 18.74)/100);
$parcela3 = $calculo3/3;
//Fim calculo parcela 3X
$calculo4 =  $valorEmprestimo/((100 - 19.16)/100);
$parcela4 = $calculo4/4;
//Fim calculo parcela 4X
$calculo5 =  $valorEmprestimo/((100 - 19.56)/100);
$parcela5 = $calculo5/5;
//Fim calculo parcela 5X
$calculo6 =  $valorEmprestimo/((100 - 19.96)/100);
$parcela6 = $calculo6/6;
//Fim calculo parcela 6X
$calculo7 =  $valorEmprestimo/((100 - 22.37)/100);
$parcela7 = $calculo7/7;
//Fim calculo parcela 7X
$calculo8 =  $valorEmprestimo/((100 - 22.77)/100);
$parcela8 = $calculo8/8;
//Fim calculo parcela 8X
$calculo9 =  $valorEmprestimo/((100 - 23.17)/100);
$parcela9 = $calculo9/9;
//Fim calculo parcela 9X
$calculo10 =  $valorEmprestimo/((100 - 23.56)/100);
$parcela10 = $calculo10/10;
//Fim calculo parcela 10X
$calculo11 =  $valorEmprestimo/((100 - 23.95)/100);
$parcela11 = $calculo11/11;
//Fim calculo parcela 11X
$calculo12 =  $valorEmprestimo/((100 - 28.34)/100);
$parcela12 = $calculo12/12;
//Fim calculo parcela 12X

?>