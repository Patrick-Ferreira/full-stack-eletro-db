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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
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
               

                <form  method ="POST" action="" style="margin:16px">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" >
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <input class="btn btn-info" type="submit"  value="Enviar" />
                        
                 </form>
                    
                <?php
                      $sql="select * from comentarios";
                        $result =$conn->query($sql);

                        if($result->num_rows > 0){
                            while($rows = $result->fetch_assoc()){
                  
                                echo "Data: ", $rows['data'],"<br>";
                                echo "Nome: ", $rows['nome'],"<br>";
                                echo "Mensagem: ", $rows['msg'],"<br>";
                                echo "<hr>";
                    
                            }   
                        }else {
                            echo "Nenhum produto comentario";
                        }
                  
                  ?>
            </section>    
               
                <main>
                  
                <footer id="rodape">
                    <p id="formas_pagamentos">Formas de Pagamentos</p>
                    <img width="400px" src="./imagens/Formas de Pagamento.jpeg" alt="Formas de Pagamentos"> 
                    <p class="Recode">&copy;Recode Pro</p>
                </footer>
    </body> 
</html>