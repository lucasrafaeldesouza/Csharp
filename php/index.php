<?php
    $paginas = ['HOME'=>'','SOBRE'=>'Battlefield 2042 é umvideogame de tiro em primeira pessoa desenvolvido pela DICE e publicado pela Electronic Arts . É a décima sétima edição dasérie Battlefield e sucessora de Battlefield V de 2018. O jogo está programado para ser lançado em 22 de outubro de 2021, para o Microsoft Windows , PlayStation 4 , PlayStation 5 , Xbox One , e Xbox Série X e Série S . Ao contrário dosjogosanteriores do Battlefield , o Battlefield 2042 será apenas multijogador e não terá uma campanha para um único jogador.','CONTATO'=>'','FAQ'=>'Perguntas frequentes'];
    $paginas   ['CONTATO'] = '<form><input type="text" placeholder="Seu nome..." /></form>'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Projeto</title>
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
        text-align: center;
        color: #069;
    }
    footer{
      background-color: #069;
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
<iframe width="560" height="315" src="https://www.youtube.com/embed/qIQ3xNqkVC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center><br>
<!--Trailer do Jogo-->

<!--Tabela de jogos-->

<nav class="navbar navbar-light bg-black"><br>
  <div class="container">
    <form class="d-flex">
      <input class="form-control me-2" type="Pesquisar por jogo" placeholder="Pesquisar por jogo" aria-label="Pesquisar por jogo">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title"></h3><br>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://cdn1.epicgames.com/b30b6d1b4dfd4dcc93b5490be5e094e5/offer/RDR2476298253_Epic_Games_Wishlist_RDR2_2560x1440_V01-2560x1440-2a9ebe1f7ee202102555be202d5632ec.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">RED DEAD REDEMPTION
                  <p class="card-text">VALOR R$200,00 
                                </p>
                                </P>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://criticalhits.com.br/wp-content/uploads/2021/05/GTA-5-Online.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"> GRAND THEFT AUTO V
                  <p class="card-text"> VALOR: R$100,00
                                </p>
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1506830/header.jpg?t=1630705401" height="150" width="100"  class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">FIFA 2022 
                  <p class="card-text">VALOR: R$200,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://image.api.playstation.com/vulcan/img/rnd/202010/0715/BvFOUf5GL9asjD0VNNNClG4w.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 4">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">NEED FOR SPEED HEAT 
                  <p class="card-text"> VALOR: R$150,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title"></h3><br>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://cdn2.unrealengine.com/egs-battlefield2042goldedition-dice-editions-g1a-00-1920x1080-8c5f388aac93.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">BATTLEFIELD 2042
                  <p class="card-text">VALOR R$200,00 
                                </p>
                                </P>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://s2.glbimg.com/33wqBaejqW1pfaQFTQZ9S2t8wko=/0x0:783x391/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/v/t/IPHBU6SGiSO9BOA5VVwA/mortal-kombat-11.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"> MORTAL KOMBAT XI
                  <p class="card-text"> VALOR: R$150,00
                                </p>
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://olhardigital.com.br/wp-content/uploads/2021/06/PES-2022.jpg" height="150" width="100"  class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">PES 2022 
                  <p class="card-text">VALOR: R$200,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://s2.glbimg.com/O5rgTt_kxYNxHM_uIkaaQWlovXU=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2019/0/a/tWNcCTTAKfrgNBUXgVag/star-wars-jedi-fallen-order-gameplay-techtudo.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 4">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">STAR WARS JEDI: FALLEN ORDER
                  <p class="card-text"> VALOR: R$150,00
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--Tabela de jogos-->



<div id="apply-area"><br>
        <div class="container-fluid"><br>
          <div class="row">
            <center>
            <div class="col-md-4 apply-box" id="company-img"></div>
            <div class="col-md-2 apply-box" id="pattern-img">
            </center> 
              <h4>Gosta de desafios?</h4>
              <p>Temos várias posições abertas, entre elas: Software Engineer, UI/UX Designer, Project Manager e mais.</p>
              <p>Clique no botão abaixo e confira os benefícios e as posições em aberto.</p>
              <p>Aqui você terá a chance de trabalhar com as melhores tecnologias e os profissionais mais capacitados.</p>
              <a href="#" class="main-btn" id="apply-btn">Saiba Mais</a><br>
            </div>
          </div>
        </div>
      </div>


    <footer><br>
    <div id="contact-area"><br> 
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (47)9 9610-5977</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> faelsouza.rsg@hotmail.com</p>
            </div>
            <div class="col-md-4 contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha tomar um café:</span> Rua Selma Doering Bruns - 361</p>
            </div>
            <div class="col-md-6" id="msg-box">
              <p>Ou nos deixe uma mensagem:</p>
            </div>
            <div class="col-md-6" id="contact-form">
              <form action="">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control" placeholder="Assunto" name="subject">
                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                <input type="submit" class="main-btn">
              </form>
            </div>
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <p>Desenvolvido por <a href="https://www.horadecodar.com.br" target="_blank">Lucas Rafael</a> &copy; 2021</p>
            </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
