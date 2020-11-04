<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="UTF-8">
        <title>Nossas Lojas - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        
    </head>
    <body>
           <!--Inicio do Menu-->
           <?php
            include('menu.html')
         ?>
        <!--Fim do Menu-->
       <header>
        <h2>Nossas Lojas</h2>
        <hr>
        </header> 
        
            <main>
                
                <div class="lojas">
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10&ordm; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </div>

                <div class="lojas">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 985</p>
                    <p>3&ordm; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </div>

                <div class="lojas">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major &Aacute;vila, 370</p>
                    <p>Vila Mariama</p>
                    <p>(47) 5555-5555</p>
                    
                </div>

            </main>
           
            
        <footer id="rodape">
            <p id="formas_pagamentos">Formas de Pagamentos</p>
            <img width="400px" src="./imagens/Formas de Pagamento.jpeg" alt="Formas de Pagamentos"> 
            <p class="Recode">&copy;Recode Pro</p>
        </footer>
         
    </body>
</html>