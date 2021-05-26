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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/style_calculo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
    <title>Zé do Emprestimo - Simulador</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="dist/jquery.maskMoney.min.js" type="text/javascript"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</head>
<body >
  
    <div class="container-fluid col-12" >
        
        <div class="row">
            <section class="col" id="topo">
                <h1 id="text-topo">Simule o valor do seu emprestimo</h1>
            </section>
        </div>
        <section id="formulario" class="col-12s mt-2">
            <h2 class="text-index  d-flex text-index align-center justify-content-center">Parcelas </h2>
            
            <div class="container-flex">
               
                <div class="box">
                    <span class="span">1X</span><br>
                    <b id="valor"><?= "R$ ". number_format($calculo1,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo1,2,',','.') ?></small>
                </div>
                 <div class="box ">
                    <span class="span">2X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela2,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo2,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">3X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela3,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo3,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">4X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela4,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo4,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">5X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela5,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo5,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">6X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela6,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo6,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">7X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela7,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo7,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">8X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela8,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo8,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">9X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela9,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo9,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">10X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela10,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo10,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">11X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela11,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo11,2,',','.') ?></small>
                </div>
                <div class="box">
                    <span class="span">12X</span><br>
                    <b id="valor"><?= "R$ ". number_format($parcela12,2,',','.') ?></b>
                    <hr>
                    <small class="small"><?= "R$ ". number_format($calculo12,2,',','.') ?></small>
              
                </div>
            </div>
            <div class="row div-api"> 
                
                <a  class="btn btn-info w-25 ml-3 botao-api" data-index="0" data-type="button" tabindex="0" data-href="https://api.whatsapp.com/send?phone=5561999368586" href="https://api.whatsapp.com/send?phone=5561999368586" target="_blank"  data-property="buttons">Peça seu Emprestimo</a>
              
            </div>
           
                
            </div>
        </section>

       
    
    </div>
 
</body>

</html>