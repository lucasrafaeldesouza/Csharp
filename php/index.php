<?php
    $paginas = ['HOME'=>'','SOBRE'=>'Battlefield 2042 é umvideogame de tiro em primeira pessoa desenvolvido pela DICE e publicado pela Electronic Arts . É a décima sétima edição dasérie Battlefield e sucessora de Battlefield V de 2018. O jogo está programado para ser lançado em 22 de outubro de 2021, para o Microsoft Windows , PlayStation 4 , PlayStation 5 , Xbox One , e Xbox Série X e Série S . Ao contrário dosjogosanteriores do Battlefield , o Battlefield 2042 será apenas multijogador e não terá uma campanha para um único jogador.','CONTATO'=>'','FAQ'=>'Perguntas frequentes'];
    $paginas['CONTATO'] = '<form><input type="text" placeholder="Seu nome..." /></form>'; 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Título da página</title>
    <style type="text/css">
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    header{
    background-color:#069;
    padding:8px 10px;
    text-align: center;
    }
    a{
     display: inline-block;
     margin: 0 10px;
     color: white;
     font-size: 18px;
    }
    section{
        max-width: 960px;
        margin: 20px auto;
        padding: 0 2%;
    }
    h2{
    background-color: #069;
    color: white;
    padding: 8px 10px;
    }
    body{
        background-color: black;
    }
    p{
        color: white;
    }
    </style>
</head>
<body>
    <header>

    <?php

     foreach ($paginas as $key => $value) {
            echo '<a href="?page='.$key. '">'.$key.'</a>';
     }
    ?>
    </header>
    <section>
    <h2>
      <?php
       $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');
       
       if(!array_key_exists($pagina, $paginas)){
         $pagina ='HOME';
       }
       
       echo $pagina;
      ?>
      </h2>
    <P><?php echo $paginas[$pagina]; ?></P>
    <center>
    <img src="https://images5.alphacoders.com/115/thumb-1920-1151026.jpg" width="910" />
    </center>
    </section>
<body>
    
</body>
</html>