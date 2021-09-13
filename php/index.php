<?php

$paginas   ['LOGIN'] = '<link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
  
<main class="form-signin">
<form>
  <img class="mb-4" src="https://cdn.clubensc.com.br/Imagens/beneficio/173dfa79057f54f919321a6b0d4317a8-full.jpg" alt="" width="150" height="100">
  <h1 class="h3 mb-3 fw-normal"></h1>
  <div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
  </div>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
</form>
</main>
';
 
$paginas   ['HOME'] = '
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
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://i.pinimg.com/originals/e1/dd/1a/e1dd1a6063a73c920d8a442cceed97e8.jpg" height="600" width="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://compass-ssl.xbox.com/assets/84/28/8428c630-0a52-42c3-8521-181ab70f1ccb.jpg?n=299441_GLP-Page-Hero-1084_1920x1080.jpg" height="600" width="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          
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
  <!--Trailer do Jogo-->
  <center><br>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/qIQ3xNqkVC4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </center><br>
  <!--Trailer do Jogo--> 
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
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <h3 class="main-title">Entre em contato conosco</h3>
            </div>
            <div class="col-md-6 contact-box">
              <i class="fas fa-phone"></i>
              <p><span class="contact-tile">Ligue para:</span> (47)9 9610-5977</p>
              <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
            </div>
            <div class="col contact-box">
              <i class="fas fa-envelope"></i>
              <p><span class="contact-tile">Envie um email:</span> faelsouza.rsg@hotmail.com</p>
            </div>
            <div class="col contact-box">
              <i class="fas fa-map-marker-alt"></i>
              <p><span class="contact-tile">Venha tomar um café:</span> Rua Selma Doering Bruns - 361</p>
            </div>
            <div class="col" id="msg-box">
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
  </footer>'; 

  $paginas   ['JOGOS'] = '<nav class="navbar navbar-light bg-black"><br>
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
                
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://criticalhits.com.br/wp-content/uploads/2021/05/GTA-5-Online.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                
                                
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1506830/header.jpg?t=1630705401" height="144" width="100"  class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  
                                </p>
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://image.api.playstation.com/vulcan/img/rnd/202010/0715/BvFOUf5GL9asjD0VNNNClG4w.jpg" height="144" width="100" class="card-img-top" alt="Imagem de Perfil 4">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                
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
                 
                          
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://s2.glbimg.com/33wqBaejqW1pfaQFTQZ9S2t8wko=/0x0:783x391/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/v/t/IPHBU6SGiSO9BOA5VVwA/mortal-kombat-11.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                 
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://olhardigital.com.br/wp-content/uploads/2021/06/PES-2022.jpg" height="150" width="100"  class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
            <div class="col-md-3"><br>
              <div class="card">
                <img src="https://s2.glbimg.com/O5rgTt_kxYNxHM_uIkaaQWlovXU=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2019/0/a/tWNcCTTAKfrgNBUXgVag/star-wars-jedi-fallen-order-gameplay-techtudo.jpg" height="150" width="100" class="card-img-top" alt="Imagem de Perfil 4">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                
                              
                                <a href="#" class="btn btn-primary">COMPRAR</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>'; 

      $paginas   ['SOBRE NÓS'] = 'Fundada no ano de 2007, a Pichau Informática é uma empresa que trabalha com os mais variados produtos, atuando principalmente no setor de informática e equipamentos eletrônicos em geral, área bastante competitiva e em constante crescimento, onde qualidade, variedade, garantia e eficiência são critérios importantíssimos para total satisfação, confiança e preferência de nossos consumidores.
  
    Além do nosso e-commerce possuímos uma loja física situada em Joinville/SC, onde temos a variedade de nosso site ao gosto dos mais exigentes clientes. Oferecemos não apenas a comodidade da compra online, mas também o tratamento olho no olho que muitos preferem e sempre confiam.
    
    Procuramos acima de tudo oferecer o que há de melhor, os melhores fornecedores, os mais atualizados produtos, o mais atencioso dos atendimentos, juntamente com os preços mais competitivos e atraentes do mercado para que nosso público encontre não apenas variedade e qualidade, mas também uma empresa que se preocupa com a felicidade e total satisfação de seus clientes e por que não, amigos!
    
    Além de nosso site, visite também nossa loja estamos a sua espera!
    
    <center>
    <img src="https://wallpaperaccess.com/full/1752211.jpg" height="400" width="800" 
    </center>
  
    '; 


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
    
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@100&display=swap" rel="stylesheet">

    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    header{
    background-image: url('https://data.1freewallpapers.com/download/game-over-4k-1920x1440.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    padding:8px 10px;
    text-align: center;
    padding-right: 900px; 
    font-family: 'Teko', sans-serif ;
    font-size: 50px;
    }
    h2{
      color:black;
      padding-left: 2000px;
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
    body{
        background-image: url('https://ovicio.com.br/wp-content/uploads/2021/06/20210609-battlefield-6.jpg');
        background-repeat: no-repeat;
        background-color: white;
        background: linear-gradient(black,black,black);
    }
    p{
        color:white;
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
        color: black;
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
    
    </center>
    </section>
<body>

</body>
</html>
