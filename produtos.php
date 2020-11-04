<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $database ="fseletro";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("A conexão ao BD falhou" . mysqli_connect_error()); 
    }


?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <script src="js/funcoes.js"></script>
     
    </head>
    <body>
         <!--Inicio do Menu-->
         
         <?php
            include('menu.html')
         ?>
        <!--Fim do Menu-->
        <header>
            <h2>Produtos</h2>
            <hr>
        </header>
        <main>
       
                <section class="categorias">
                    <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos (12)</li>
                        <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                        <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                        <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                        <li onclick="exibir_categoria('lava_roupas')">Lavadora de roupas (2)</li>
                        <li onclick="exibir_categoria('lava_loucas')">Lava-louças (2)</li>
                    </ul>
                </section>
                <div class="produtos">
                    <?php
                      $sql="select * from produtos";
                        $result =$conn->query($sql);

                        if($result->num_rows > 0){
                            while($rows = $result->fetch_assoc()){
                    ?>

                             <div class="box_produtos" id="<?php echo $rows ["categoria"];?>" > 
                                <img src="<?php echo $rows ["imagem"];?>" width="150px" onclick="destaque(this)">
                                <br>
                                <p class="descricao">"<?php echo $rows ["descricao"];?>"</p>
                                <hr>
                                <p class="descricao"><strike>R$ <?php echo $rows ["preco"];?></strike></p>
                                <p class="preco">R$ <?php echo $rows ["preco_venda"];?></p><br>
                            </div>
                            
                
                        <?php 
                            }   
                        }else {
                            echo "Nenhum produto cadastrado";
                        }
                        
                        ?>
                                 
                  </div>

    </main>
    

        <footer id="rodape">
            <p id="formas_pagamentos">Formas de Pagamentos</p>
            <img width="400px" src="./imagens/Formas de Pagamento.jpeg" alt="Formas de Pagamentos"> 
            <p class="Recode">&copy;Recode Pro</p>
        </footer>
        
    </body>

</html>