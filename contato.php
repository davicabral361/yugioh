<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href= "../yugioh/img/kuriboh.png">
    <link rel="stylesheet" type="text/css" href="../yugioh/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../yugioh/css/estilo1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>




    <title>Yu-Gi-Oh!</title>
  </head>
  <body>
  <?php
    if(isset($_COOKIE['cartaCookie'])){
        $carta = $_COOKIE['cartaCookie'];
        echo("<body bgcolor = ".$carta.">");
    }else{
        echo("<body bgcolor = 'black'>");
    }
    ?>
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
                <a class="nav-link active" aria-current="page" href="bootstrap.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
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
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <form>
    <div>  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Email</b></label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu Email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><b>Senha</b></label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua Senha">
        <br><br>
        <select class="form-select" aria-label="Default select example">
          <option selected>Selecione um dos itens abaixo:</option>
          <option value="1">Reclamação</option>
          <option value="2">Elogio</option>
          <option value="3">Sugestão</option>
        </select>
        <br><br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua mensagem"></textarea>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            <font color="white"><h5>Aceitar termos do site</h5></font>
          </label>
        </div>
      </div>
    </div>
    </form>
    </div>
  </body>
</html>    
    