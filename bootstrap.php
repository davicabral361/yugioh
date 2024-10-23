<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href= "../yugioh/img/kuriboh.png">
    <link rel="stylesheet" type="text/css" href="../yugioh/css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>




    <title>Yu-Gi-Oh!</title>
  </head>
  <body>
    <section>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../yugioh/img/logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produtos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Cartas Avulsas</a></li>
                  <li><a class="dropdown-item" href="#">Produtos Selados</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Acessórios</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria.php">Galeria</a>
              </li>
            </ul>
          </div>
          <form id="row" name="row" method="post" action="carta.php">
               <label>Selecione o tipo da carta: </label>
               <select name="cartaSelect">
               <option value="mago">Mago</option>
               <option value="dragao">Dragão</option>
               <option value="guerreiro">Guerreiro</option>
               <option value="fada">Fada</option>
               <option value="maquina">Máquina</option>
               <option value="demonio">Demônio</option>
               <br/><br/>
               <input type="submit" name="Submit" value="Pesquisar"/>
               </select>
            </form>
        </div>
      </nav>
              <?php
                if(isset($_COOKIE['cartaCookie'])){
                $carta = $_COOKIE['cartaCookie'];
                if($carta == "mago"){
                  echo('<div class="row">
                  <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <center>
                      <img src="../yugioh/img/magonegro.jpg" class="d-block w-50" alt="...">
                      <h5 class="card-title">Mago Negro</h5>
                      <h5 class="card-text">R$ 19,99</h5>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Detalhes</a>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                      </center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <center>
                    <img src="../yugioh/img/maganegra.jpg" class="d-block w-50" alt="...">
                    <h5 class="card-title">Pequena Maga Negra</h5>
                    <h5 class="card-text">R$ 19,99</h5>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">Detalhes</a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/paladino.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Paladino Negro</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal19">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <center>
            <img src="../yugioh/img/magotempo.jpg" class="d-block w-50" alt="...">
            <h5 class="card-title">Mago do Tempo</h5>
            <h5 class="card-text">R$ 19,99</h5>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal22">Detalhes</a>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
            </center>
          </div>
        </div>
      </div>
              </div>');
                }else{
                  echo(false);
                }
              }
              ?>
              <?php
              if(isset($_COOKIE['cartaCookie'])){
                $carta = $_COOKIE['cartaCookie'];
                if($carta == "dragao"){
                  echo('<div class="row">
                  <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <center>
                      <img src="../yugioh/img/stardust.jpg" class="d-block w-50" alt="...">
                      <h5 class="card-title">Dragão da Poeira Estelar</h5>
                      <h5 class="card-text">R$ 14,90</h5>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Detalhes</a>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                      </center>
                    </div>
                  </div>
                  </div>
                  <div class="col-sm-3">
                  <div class="card">
                  <div class="card-body">
                    <center>
                    <img src="../yugioh/img/oddeyes.jpg" class="d-block w-50" alt="...">
                    <h5 class="card-title">Dragão Pêndulo de Olhos Anômalos</h5>
                    <h5 class="card-text">R$ 15,90</h5>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">Detalhes</a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                    </center>
                  </div>
                  </div>
                  </div>
              <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <center>
                  <img src="../yugioh/img/blueeyes.jpg" class="d-block w-50" alt="...">
                  <h5 class="card-title">Dragão Branco de Olhos Azuis</h5>
                  <h5 class="card-text">R$ 19,99</h5>
                  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">Detalhes</a>
                  <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                  </center>
                </div>
              </div>
              </div>
            <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <center>
                <img src="../yugioh/img/archfiend.jpg" class="d-block w-50" alt="...">
                <h5 class="card-title">Dragão Vermelho Arquidemônio</h5>
                <h5 class="card-text">R$ 14,90</h5>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11">Detalhes</a>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                </center>
              </div>
            </div>
            </div>
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/chaosemperor.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Imperador do Caos - Enviado do Fim</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal14">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
          </div>
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/redeyes.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Negro de Olhos Vermelhos</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal15">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
          </div>
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/quasar.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão da Explosão Quasar</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal21">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/rainbow.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Arco-Íris</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal23">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
          </div>');
                }else{
                  echo(false);
                }
              }
              ?>
              <?php
              if(isset($_COOKIE['cartaCookie'])){
                $carta = $_COOKIE['cartaCookie'];
                if($carta == "guerreiro"){
                  echo('<div class="row">
                  <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <center>
                      <img src="../yugioh/img/neos.png" class="d-block w-50" alt="..."> 
                      <h5 class="card-title">Neos, o HERÓI do Elemento</h5>
                      <h5 class="card-text">R$ 14,90</h5>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Detalhes</a>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                      </center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <center>
                    <img src="../yugioh/img/hope.jpg" class="d-block w-50" alt="...">
                    <h5 class="card-title">Número 39: Utopia</h5>
                    <h5 class="card-text">R$ 14,90</h5>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">Detalhes</a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                    </center>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <center>
                  <img src="../yugioh/img/brilhonegro.jpg" class="d-block w-50" alt="...">
                  <h5 class="card-title">Soldado do Brilho Negro - Enviado do Princípio</h5>
                  <h5 class="card-text">R$ 14,90</h5>
                  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal10">Detalhes</a>
                  <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <center>
                <img src="../yugioh/img/junk.png" class="d-block w-50" alt="...">
                <h5 class="card-title">Guerreiro Sucata</h5>
                <h5 class="card-text">R$ 14,90</h5>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal13">Detalhes</a>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/law.png" class="d-block w-50" alt="...">
              <h5 class="card-title">Lei Obscura, o HERÓI Mascarado</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal18">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        </div>');
                }else{
                  echo(false);
                }
              }
              ?>
              <?php
              if(isset($_COOKIE['cartaCookie'])){
                $carta = $_COOKIE['cartaCookie'];
                if($carta == "maquina"){
                  echo('<div class="row">
                  <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <center>
                      <img src="../yugioh/img/cyberdragon.jpg" class="d-block w-50" alt="...">
                      <h5 class="card-title">Dragão Final Cibernético</h5>
                      <h5 class="card-text">R$ 14,90</h5>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal9">Detalhes</a>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                      </center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                <div class="card">
          <div class="card-body">
            <center>
            <img src="../yugioh/img/golem.jpg" class="d-block w-50" alt="...">
            <h5 class="card-title">Golem do Mecanismo Antigo</h5>
            <h5 class="card-text">R$ 14,90</h5>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal16">Detalhes</a>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
            </center>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/leo.png" class="d-block w-50" alt="...">
              <h5 class="card-title">Número 88: Engenhoca Marionete de Leão</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal20">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
                </div>');
                }else{
                  echo(false);
                }
              }
              ?>
              <?php
              if(isset($_COOKIE['cartaCookie'])){
                $carta = $_COOKIE['cartaCookie'];
                if($carta == "fada"){
                  echo('<div class="row">
                  <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <center>
                      <img src="../yugioh/img/kuribohalado.jpg" class="d-block w-50" alt="...">
                      <h5 class="card-title">Kuriboh Alado</h5>
                      <h5 class="card-text">R$ 14,90</h5>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">Detalhes</a>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                      </center>
                    </div>
                  </div>
                </div>
                </div>');
                }else{
                  echo(false);
                }
              }
              ?>
              <?php
              if(isset($_COOKIE['cartaCookie'])){
                $carta = $_COOKIE['cartaCookie'];
                if($carta == "demonio"){
                  echo('<div class="row"><div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <center>
                      <img src="../yugioh/img/caveira.jpg" class="d-block w-50" alt="...">
                      <h5 class="card-title">Caveira Invocada</h5>
                      <h5 class="card-text">R$ 19,99</h5>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal12">Detalhes</a>
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                      </center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <center>
                    <img src="../yugioh/img/yubel.jpg" class="d-block w-50" alt="...">
                    <h5 class="card-title">Yubel</h5>
                    <h5 class="card-text">R$ 14,90</h5>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal17">Detalhes</a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
                    </center>
                  </div>
                </div>
              </div>
              </div>');
                }else{
                  echo(false);
                }
              }
              ?>

      <div>
        <center>
  
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h5><font color="black">Booster Yu-Gi-Oh! Fantasmas do Passado</h5>
              <h5>R$ 36,90</h5></font>
              <img src="../yugioh/img/fantasmasdopassado.jpg" class="d-block w-60" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <h5><font color="black">2 Decks Yu-Gi-Oh! Dos Deuses Egípcios Obelisco O Atormentador e Slifer O Dragão Celeste</h5>
              <h5>R$ 129,90</h5></font>
              <img src="../yugioh/img/deusesegipcios.jpg" class="d-block w-60" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
              <div class="carousel-item">
              <h5><font color="black">Yu-Gi-Oh! Decks de Heróis Lendários</h5>
              <h5>R$ 159,90</h5></font>
              <img src="../yugioh/img/heroislendarios.jpg" class="d-block w-60" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <h5><font color="black">Yu-Gi-Oh! Decks dos Dragões Lendários</h5>
              <h5>R$ 199,99</h5></font>
              <img src="../yugioh/img/dragoeslendarios.jpg" class="d-block w-60" alt="...">
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
      </center>  
      </div>
    </section>  
    
    <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/neos.png" class="d-block w-50" alt="..."> 
              <h5 class="card-title">Neos, o HERÓI do Elemento</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/magonegro.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Mago Negro</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/stardust.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão da Poeira Estelar</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/hope.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Número 39: Utopia</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/oddeyes.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Pêndulo de Olhos Anômalos</h5>
              <h5 class="card-text">R$ 15,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/blueeyes.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Branco de Olhos Azuis</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/maganegra.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Pequena Maga Negra</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/kuribohalado.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Kuriboh Alado</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal8">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/cyberdragon.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Final Cibernético</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal9">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/brilhonegro.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Soldado do Brilho Negro - Enviado do Princípio</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal10">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/archfiend.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Vermelho Arquidemônio</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/caveira.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Caveira Invocada</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal12">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/junk.png" class="d-block w-50" alt="...">
              <h5 class="card-title">Guerreiro Sucata</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal13">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/chaosemperor.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Imperador do Caos - Enviado do Fim</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal14">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/redeyes.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Negro de Olhos Vermelhos</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal15">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/golem.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Golem do Mecanismo Antigo</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal16">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/yubel.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Yubel</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal17">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/law.png" class="d-block w-50" alt="...">
              <h5 class="card-title">Lei Obscura, o HERÓI Mascarado</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal18">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/paladino.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Paladino Negro</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal19">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/leo.png" class="d-block w-50" alt="...">
              <h5 class="card-title">Número 88: Engenhoca Marionete de Leão</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal20">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/quasar.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão da Explosão Quasar</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal21">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/magotempo.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Mago do Tempo</h5>
              <h5 class="card-text">R$ 19,99</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal22">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <center>
              <img src="../yugioh/img/rainbow.jpg" class="d-block w-50" alt="...">
              <h5 class="card-title">Dragão Arco-Íris</h5>
              <h5 class="card-text">R$ 14,90</h5>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal23">Detalhes</a>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal">Comprar</a>
              </center>
            </div>
          </div>
        </div>
    </div>
       
       
        <div class="modal fade" id="exampleModal1" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal1">Neos, o HERÓI do Elemento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Guerreiro</p>
                <p>Nível: 7</p>
                <p>ATK/DEF  2500/2000</p>
                <p>Número: 89943723</p>
                <p>Texto do card:</p><p>Um novo HERÓI do Elemento chegou do Neoespaço! Quando ele inicia uma Fusão de Contato com um Neoespacial, seus poderes desconhecidos vêm à tona.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal2">Mago Negro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Mago</p>
                <p>Nível: 7</p>
                <p>ATK/DEF  2500/2100</p>
                <p>Número: 46986414</p>
                <p>Texto do card:</p><p>O mago definitivo em termos de ataque e defesa.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal3">Dragão da Poeira Estelar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: VENTO</p>
                <p>Tipo: Dragão/Sincro/Efeito</p>
                <p>Nível: 8</p>
                <p>ATK/DEF  2500/2000</p>
                <p>Número: 44508094</p>
                <p>Texto do card:</p><p>1 Regulador + 1 ou mais monstros não-Reguladores</p><p>Durante o turno de qualquer duelista, quando um card ou efeito que destruiria um ou mais cards for ativado: você pode oferecer este card como Tributo; negue a ativação e, se isso acontecer, destrua-o. Durante a Fase Final, se este efeito foi ativado neste turno (e não foi negado): você pode Invocar este card por Invocação-Especial do seu Cemitério.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal4" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal4">Número 39: Utopia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Guerreiro/XYZ/Efeito</p>
                <p>Rank: 4</p>
                <p>ATK/DEF  2500/2000</p>
                <p>Número: 84013237</p>
                <p>Texto do card:</p><p>2 monstros de Nível 4</p><p>Quando o monstro de qualquer duelista declarar um ataque: você pode desassociar 1 Matéria Xyz deste card; negue o ataque. Quando este card for alvo de um ataque enquanto ele não tem Matérias Xyz: destrua este card.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal5" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal5">Dragão Pêndulo de Olhos Anômalos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Dragão/Pêndulo/Efeito</p>
                <p>Nível: 7</p>
                <p>Escala: 4</p>
                <p>ATK/DEF  2500/2000</p>
                <p>Número: 16178681</p>
                <p>Texto do card:</p><p>Efeito de Pêndulo:</p><p>Você pode reduzir a 0 o dano de batalha que você sofrer de uma batalha envolvendo um Monstro Pêndulo que você controla. Durante sua Fase Final: você pode destruir este card e, se isso acontecer, adicione 1 Monstro Pêndulo com 1500 ou menos de ATK do seu Deck à sua mão. Você só pode usar cada Efeito de Pêndulo de "Dragão Pêndulo de Olhos Anômalos" uma vez por turno.</p><p>Efeito de Monstro:</p><p>Se este card batalhar um monstro do oponente, qualquer dano de batalha que este card causar ao seu oponente é dobrado.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal6" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal6">Dragão Branco de Olhos Azuis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Dragão</p>
                <p>Nível: 8</p>
                <p>ATK/DEF  3000/2500</p>
                <p>Número: 89631139</p>
                <p>Texto do card:</p><p>Este lendário dragão é uma poderosa máquina de destruição. Praticamente invencível, muito poucos enfrentaram essa magnifica criatura e viveram para contar a história.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal7" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal7">Pequena Maga Negra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Mago/Efeito</p>
                <p>Nível: 6</p>
                <p>ATK/DEF  2000/1700</p>
                <p>Número: 38033121</p>
                <p>Texto do card:</p><p>Ganha 300 de ATK para cada "Mago Negro" ou "Mago do Caos das Trevas" no Cemitério.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal8" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal8">Kuriboh Alado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Fada/Efeito</p>
                <p>Nível: 1</p>
                <p>ATK/DEF  300/200</p>
                <p>Número: 57116033</p>
                <p>Texto do card:</p><p>Se este card no campo for destruído e enviado para o Cemitério: pelo resto do turno, você não sofre dano de batalha.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal9" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal9">Dragão Final Cibernético</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Máquina/Fusão/Efeito</p>
                <p>Nível: 10</p>
                <p>ATK/DEF  4000/2800</p>
                <p>Número: 01546123</p>
                <p>Texto do card:</p><p>"Dragão Cibernético" + "Dragão Cibernético" + "Dragão Cibernético"</p><p>A Invocação-Fusão deste card só pode ser feita com as Matéria Fusão acima. Se este card atacar um monstro em Posição de Defesa, cause dano de batalha perfurante ao seu oponente.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal10" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal10">Soldado do Brilho Negro - Enviado do Princípio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Guerreiro/Efeito</p>
                <p>Nível: 8</p>
                <p>ATK/DEF  3000/2500</p>
                <p>Número: 72989439</p>
                <p>Texto do card:</p><p>Não pode ser Invocado por Invocação-Normal/Baixado. Primeiro você deve Invocá-lo por Invocação-Especial (da sua mão) ao banir 1 monstro de LUZ e 1 monstro de TREVAS do seu Cemitério. Uma vez por turno: você pode ativar 1 desses efeitos.</p><p>● Escolha 1 monstro no campo; bana o alvo com a face para cima. Este card não pode atacar no turno em que você ativar este efeito.</p><p>● Durante a Etapa de Dano, se este card estiver atacando e destruir um monstro do oponente em batalha: ele pode realizar um segundo ataque em seguida.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal11" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal11">Dragão Vermelho Arquidemônio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Dragão/Sincro/Efeito</p>
                <p>Nível: 8</p>
                <p>ATK/DEF  3000/2000</p>
                <p>Número: 70902743</p>
                <p>Texto do card:</p><p>1 Regulador + 1 ou mais monstros não-Reguladores</p><p>Depois do cálculo de dano, se este card atacar um monstro em Posição de Defesa que seu oponente controla: destrua todos os monstros em Posição de Defesa que seu oponente controla. Durante a sua Fase Final: destrua todos os outros monstros que você controla que não declararam um ataque neste turno. Este card deve estar com a face para cima no campo para que você possa ativar e resolver este efeito.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal12" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal12">Caveira Invocada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Demônio</p>
                <p>Nível: 6</p>
                <p>ATK/DEF  2500/1200</p>
                <p>Número: 38033121</p>
                <p>Texto do card:</p><p>Um demônio com poderes das trevas para confundir os inimigos. Entre os monstros do tipo demônio, é dos mais fortes.</p><p>(Este card deve ser sempre considerado como um card "Arquidemônio".)</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal13" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal13">Guerreiro Sucata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Guerreiro/Sincro/Efeito</p>
                <p>Nível: 5</p>
                <p>ATK/DEF  2300/1300</p>
                <p>Número: 60800381</p>
                <p>Texto do card:</p><p>"Sucata Sincron" + 1 ou mais monstros não-Reguladores</p><p>Se este card for Invocado por Invocação-Sincro: ele ganha ATK igual ao ATK total de todos os monstros de Nível 2 ou menos que você controla atualmente.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal14" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal14">Dragão Imperador do Caos - Enviado do Fim</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Dragão/Efeito</p>
                <p>Nível: 8</p>
                <p>ATK/DEF  3000/2500</p>
                <p>Número: 82301904</p>
                <p>Texto do card:</p><p>Não pode ser Invocado por Invocação-Normal/Baixado. Primeiro deve ser Invocado por Invocação-Especial (da sua mão) ao banir 1 monstro de LUZ de 1 de TREVAS do seu Cemitério. Você pode pagar 1000 Pontos de Vida; envie todos os cards na mão e no campo de ambos os duelistas para o Cemitério e, depois, cause 300 de dano ao seu oponente para cada card enviado para o Cemitério por este efeito.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal15" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal15">Dragão Negro de Olhos Vermelhos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Dragão</p>
                <p>Nível: 7</p>
                <p>ATK/DEF  2400/2000</p>
                <p>Número: 74677422</p>
                <p>Texto do card:</p><p>Um dragão feroz com um ataque letal.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal16" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal16">Golem do Mecanismo Antigo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TERRA</p>
                <p>Tipo: Máquina/Efeito</p>
                <p>Nível: 8</p>
                <p>ATK/DEF  3000/3000</p>
                <p>Número: 83104731</p>
                <p>Texto do card:</p><p>Não pode ser Invocado por Invocação-Especial. Se este card atacar um monstro em Posição de Defesa, cause dano de batalha perfurante ao seu oponente. Se este card atacar, seu oponente não pode ativar quaisquer Cards de Magia/Armadilha até o final da Etapa de Dano.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal17" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal17">Yubel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Demônio/Efeito</p>
                <p>Nível: 10</p>
                <p>ATK/DEF  0/0</p>
                <p>Número: 78371394</p>
                <p>Texto do card:</p><p>Este card não pode ser destruído em batalha. Você não sofre dano de batalha de batalhas envolvendo este card. Antes do cálculo de dano, quando este card com a face para cima em Posição de Ataque for atacado por um monstro do oponente: cause dano ao seu oponente igual ao ATK desse monstro. Durante a sua Fase Final: ofereça como Tributo 1 outro monstro ou destrua este card. Quando este card for destruído, exceto pelo seu próprio efeito: o seu dono pode Invocar por Invocação-Especial 1 "Yubel - Encarnação do Terror" da sua mão, Deck ou Cemitério.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal18" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal18">Lei Obscura, o HERÓI Mascarado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Guerreiro/Fusão/Efeito</p>
                <p>Nível: 6</p>
                <p>ATK/DEF  2400/1800</p>
                <p>Número: 58481572</p>
                <p>Texto do card:</p><p>Deve ser Invocado por Invocação-Especial com "Mudar a Máscara" e não pode ser Invocado por Invocação-Especial de nenhuma outra forma. Qualquer card enviado para o Cemitério do seu oponente, em vez disso, é banido. Uma vez por turno, se o seu oponente adicionar um ou mais cards do Deck dele à mão (exceto durante a Fase de Compra ou a Etapa de Dano): você pode banir 1 card aleatório da mão do seu oponente.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal19" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal19">Paladino Negro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Mago/Fusão/Efeito</p>
                <p>Nível: 8</p>
                <p>ATK/DEF  2900/2400</p>
                <p>Número: 98502113</p>
                <p>Texto do card:</p><p>"Mago Negro" + "Blader Notável"</p><p>Deve ser Invocado por Invocação-Fusão e não pode ser Invocado por Invocação-Especial de nenhuma outra forma. Durante o turno de qualquer duelista, quando um Card de Magia for ativado: você pode descartar 1 card; negue a ativação e, se isso acontecer, destrua-o. Este card deve estar com a face para cima no campo para ativar e resolver este efeito. Este card ganha 500 de ATK para cada monstro do Tipo Dragão no campo ou no Cemitério de qualquer duelista.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal20" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal20">Número 88: Engenhoca Marionete de Leão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: TREVAS</p>
                <p>Tipo: Máquina/XYZ/Efeito</p>
                <p>Rank: 8</p>
                <p>ATK/DEF  3200/2300</p>
                <p>Número: 48995978</p>
                <p>Texto do card:</p><p>3 monstros de Nível 8</p><p>Uma vez por turno, se você não tiver cards na sua Zona dos Cards de Magia & Armadilha: você pode desassociar 1 Matéria Xyz deste card e, se isso acontecer, coloque 1 Marcador de Destino neste card. Você não pode conduzir sua Fase de Batalha no turno em que ativar este efeito. Quando 3 Marcadores de Destino estiverem neste card, você vence o Duelo.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal21" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal21">Dragão da Explosão Quasar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Dragão/Sincro/Efeito</p>
                <p>Nível: 12</p>
                <p>ATK/DEF  4000/4000</p>
                <p>35952884</p>
                <p>Texto do card:</p><p>1 Monstro Sincro Regulador + 2 ou mais Monstros Sincro não-Reguladores</p><p>Deve ser Invocado por Invocação-Sincro e não pode ser Invocado por Invocação-Especial de nenhuma outra forma. O número máximo de ataques por Fase de Batalha deste card é igual ao número de monstros não-Reguladores usados como Matéria Sincro. Uma vez por turno, durante o turno de qualquer duelista, quando um card ou efeito for ativado: você pode negar a ativação e, se isso acontecer, destrua-o. Quando este card deixar o campo: você pode Invocar por Invocação-Especial 1 "Dragão da Explosão Estelar" do seu Deck Adicional.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal22" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal22">Mago do Tempo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Mago/Efeito</p>
                <p>Nível: 2</p>
                <p>ATK/DEF  500/400</p>
                <p>Número: 71625222</p>
                <p>Texto do card:</p><p>Uma vez por turno: você pode lançar uma moeda e escolher cara ou coroa. Se você ganhar, destrua todos os monstros que seu oponente controla. Se você perder, destrua todos monstros que você controla e, se isso acontecer, você sofre dano igual à metade do ATK total que esses monstros destruídos tinham no campo.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModal23" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="#exampleModal23">Dragão Arco-Íris</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Atributo: LUZ</p>
                <p>Tipo: Dragão/Efeito</p>
                <p>Nível: 10</p>
                <p>ATK/DEF  4000/0</p>
                <p>Número: 79856792</p>
                <p>Texto do card:</p><p>(Este card deve ser sempre considerado como um card "Cristalino/a Definitivo/a".)</p><p>Não pode ser Invocado por Invocação-Normal/Baixado. Deve ser Invocado por Invocação-Especial (da sua mão) ao ter 7 cards "Fera Cristalina" com nomes diferentes no seu campo e/ou Cemitério. Este card não pode ativar os seguintes efeitos no turno em que for Invocado por Invocação-Especial. (Efeito Rápido): você pode enviar para o Cemitério todos os monstros "Fera Cristalina" com a face para cima que você controla; este card ganha 1000 de ATK para cada monstro enviado para o Cemitério. Você pode banir todos os monstros "Fera Cristalina" do seu Cemitério; embaralhe no Deck todos os cards no campo.</p>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        
        <footer class="bg-light text-center text-white">
          <div class="container p-4 pb-0">
            <section class="mb-4">
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #3b5998;"
                href="#!"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>
        
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #55acee;"
                href="#!"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>
        
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #dd4b39;"
                href="#!"
                role="button"
                ><i class="fab fa-google"></i
              ></a>
        
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #ac2bac;"
                href="#!"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
        
              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #0082ca;"
                href="#!"
                role="button"
                ><i class="fab fa-linkedin-in"></i
              ></a>

              <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #333333;"
                href="#!"
                role="button"
                ><i class="fab fa-github"></i
              ></a>
            </section>
          </div>
        
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Davi de Oliveira Cabral</a>
          </div>
        </footer>

        <div vw class="enabled">
          <div vw-access-button class="active"></div>
          <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
          </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
          new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>




 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>