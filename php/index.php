<?php
    $paginas = ['HOME'=>'','SOBRE'=>'Battlefield 2042 é umvideogame de tiro em primeira pessoa desenvolvido pela DICE e publicado pela Electronic Arts . É a décima sétima edição dasérie Battlefield e sucessora de Battlefield V de 2018. O jogo está programado para ser lançado em 22 de outubro de 2021, para o Microsoft Windows , PlayStation 4 , PlayStation 5 , Xbox One , e Xbox Série X e Série S . Ao contrário dosjogosanteriores do Battlefield , o Battlefield 2042 será apenas multijogador e não terá uma campanha para um único jogador.','CONTATO'=>'','FAQ'=>'Perguntas frequentes'];
    $paginas   ['CONTATO'] = '<form><input type="text" placeholder="Seu nome..." /></form>'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto/Mural</title>
    <!--bot css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!--bot css-->
    <!--bot js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <!--bot js-->

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
        background: linear-gradient(black,#069,black);
    }
    p{
        color: white;
    } 
    img{
        text-align: center;
        
    }  
    h3{
        color: white;
    }
    div{
        background-color: black;
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
    <center><br>
    <img src="https://images5.alphacoders.com/115/thumb-1920-1151026.jpg" width="910" />
    </center>
    </section>
<body>
<!--Bot carrousel-->
<center><br> 
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images7.alphacoders.com/115/1151173.jpg" height="600" width="500" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/e1/dd/1a/e1dd1a6063a73c920d8a442cceed97e8.jpg" height="600" width="500" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://compass-ssl.xbox.com/assets/84/28/8428c630-0a52-42c3-8521-181ab70f1ccb.jpg?n=299441_GLP-Page-Hero-1084_1920x1080.jpg" height="600" width="500" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Bot carrousel-->  

<!--Trailer do Jogo-->
<center><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/gc-VT5hOciI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>    
<!--Trailer do Jogo-->

<!--Time da empresa-->
<div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">TABELA DE JOGOS</h3>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/pt/1/10/Battlefield_5_capa.png" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">JOGO BATTLEFIELD V VALOR: R$150,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/pt/1/10/Battlefield_5_capa.png" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">JOGO BATTLEFIELD V VALOR: R$150,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/pt/1/10/Battlefield_5_capa.png" class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">JOGO BATTLEFIELD V VALOR: R$150,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/pt/1/10/Battlefield_5_capa.png" class="card-img-top" alt="Imagem de Perfil 4">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">JOGO BATTLEFIELD V VALOR: R$150,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--Time da empresa-->

</body>
</html>
