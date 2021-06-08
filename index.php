<!DOCTYPE html>
<html lang="pt-br">
<head>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Simulador - Ze do Emprestimo</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    
</head>
<body>
  
    <div class="container-fluid col-12" >
        
        <div class="row">
            <section class="col" id="topo">
                <h1 id="text-topo">Simule o valor do seu emprestimo</h1>
            </section>
        </div>
        
        <section id="formulario" class="col-8 ">
            <h2 class="  d-flex text-index align-center justify-content-center" >Insira o Valor do seu emprestimo</h2>
            <div id="form"  align="center">
            
                <form action="index_calculo.php" method="post">
                    <label for="dinheiro">R$</label> <input type="text" class="form-control w-50 " id="dinheiro" name="dinheiro"  required style="display:inline-block" />
                    <button id="botao" class="btn btn-outline-primary btn-lg ">Simular</button>
                </form>
        
            </div>
        </section>


        <footer class="row col-12 w-100 footer">

            <div class=" col-6 container-rodape ml-5">
                <h2 class="text-rodape">
                   Zé Do Empréstimo
                </h2>
                <div class="menu-rodape">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Emprestimo</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <hr>
                <h2 class="text-rodape">
                  Endereço
                </h2><br>

                <p>
                    SDS, BLOCO F<br>
                    Brasília, DF, 73100000, BRASIL
                </p><br>

                <a href="tel:+5561999368586" class="whatsapp">   <ion-icon class="icon-zap" name="logo-whatsapp"></ion-icon> (61) 99936-8586 </a><br>

                <a href="malito:EMPRESTIMO@ZE.COM.BR" style="color: whitesmoke;">  <ion-icon class="icon-email" name = "mail-outline"> </ion-icon> EMPRESTIMO@ZE.COM.BR</a> 
               
        
        </div>
    </div>
      
                
            </div>

        </footer>
    
    </div>
    
<script>
    
    $(document).ready(function(){
        $('#dinheiro').mask('000.000.000.000.000,00', {reverse: true});
   });

   
</script>
<script type = "module" src = "https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule = "" src = "https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
</body>

</html>