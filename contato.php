<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $database ="fseletro";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("A conexão ao BD falhou" . mysqli_connect_error()); 
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

     $sql ="insert into comentarios (nome, msg) values ('$nome','$msg')";
     $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="UTF-8">
        <title>Fale Conosco - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        
    </head>
    <body>
         <!--Inicio do Menu-->
         <?php
            include('menu.html')
         ?>
        <!--Fim do Menu-->
        <header>
            <h2>Contato</h2>
            <hr>
        </header>
        
      
    </main>
            <section class="completo-contatos">

                <div class="contatos">

                    <img class="img" src="./imagens/email.jpg" width="40px">
                    <p>contato@fullstackeletro.com</p>  

                </div>
               
                <div class="contatos">

                    <img class="img" src="./imagens/Whatsapp_1.png" width="40px">
                    <p>(11) 99999-9999                   </p>   

                </div>
                <form method ="POST" action="" style="margin:16px">
                Nome:<br>
                <input type="text" name="nome" style="width:500px"><br>
                Mensagem:<br>
                <input type="text" name="msg" style="width:500px"><br>
                <input type="submit" name="submit" value="enviar" style="margin-top:8px"><br>

                </form>

            </section>    
               
                <main>
                  
                <footer id="rodape">
                    <p id="formas_pagamentos">Formas de Pagamentos</p>
                    <img width="400px" src="./imagens/Formas de Pagamento.jpeg" alt="Formas de Pagamentos"> 
                    <p class="Recode">&copy;Recode Pro</p>
                </footer>
    </body> 
</html>