<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/regioes.css">
  <title>Regiões</title>
</head>

<body>
  <header>
    <label>
      <img id="iconnav" src="./assets/iconnav.svg">
    </label>

    <nav id="navigation">
      <ul>
        <li id="linorte"><a href="#nortetitle">Norte</a></li>
        <li><a href="#centrotitle">Centro Oeste</a></li>
        <li><a href="#nordestetitle">Nordeste</a></li>
        <li><a href="#sudestetitle">Sudeste</a></li>
        <li><a href="#sultitle">Sul</a></li>
        <li><a href="logout.php">Sair<img class="sair" src="./assets/sair.svg"></a></li>
      </ul>
    </nav>

    <h1>Regiões</h1>
    <img id="personagem" src="./assets/regiao-personagem.svg">
  </header>
  <main>

    <div class="modal-overlay">
      <div id="modal">
        <img id="sair" onclick="Modal.close()" src="./assets/x.svg">
        <div id="form">
          <h2>Quase lá!</h2>
          <img src="./assets/estrela.gif">
          <h3>Você completou a região Sudeste e recebeu sua quarta estrela! Complete a região Sul para finalizar a
            trilha.</h3>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>

    <div class="conteudo">
      <img id="esquerdaimg" src="./assets/norte.png">
      <div class="texto">
        <h2 id="nortetitle">Norte</h2>
        <p>A região Norte reune os estados: Acre, Amapá, Amazonas, Pará, Rondônia, Roraima e Tocantins. É reconhecida,
          principalmente, por abrigar a maior floresta tropical do mundo e sua rica biodiversidade, sendo de grande
          importância ecológica para o país.</p>
        <img id="estrela" src="assets/estrela.gif">
      </div>
    </div>

    <div class="conteudobackground">
      <div class="texto">
        <h2 id="centrotitle">Centro Oeste</h2>
        <p>Goiás, Mato Grosso e Mato Grosso do Sul são os estados que constituem o Centro Oeste, região menos populosa
          do Brasil. Essa região abriga também o Distrito Federal, sendo a capital administrativa do país.</p>
        <img id="estrela" src="assets/estrela.gif">
      </div>
      <img id="direitaimg" src="./assets/centrooeste.png">
    </div>

    <div class="conteudo">
      <img id="esquerdaimg" class="nordesteimg" src="./assets/nordeste.png">
      <div class="texto">
        <h2 id="nordestetitle">Nordeste</h2>
        <p class="nordestep">O clima quente do Nordeste é a principal característica dessa região. Seus 9 estados são
          Alagoas, Bahia,
          Ceará, Maranhão, Paraíba, Pernambuco, Rio Grande do Norte e Sergipe, todos eles são banhados pelo Oceano
          Atlântico.</p>
        <img id="estrela" src="assets/estrela.gif">
      </div>
    </div>

    <div class="conteudobackground">
      <div class="texto" id="textosudeste">
        <h2 id="sudestetitle">Sudeste</h2>
        <p>Além de abrigar o centro financeiro do país, sudeste é também a região mais visitada e populosa do Brasil.
          Rio de Janeiro, São Paulo, Minas Gerais e Espírito Santo são os estados que a compõe.</p>
        <img id="estrela" src="assets/estrela.gif">
      </div>
      <img id="direitaimg" class="sudesteimg" src="./assets/sudeste.png">
    </div>

    <div class="conteudo">
      <img id="esquerdaimg" class="sulimg" src="./assets/sul.png">
      <div class="texto">
        <h2 id="sultitle">Sul</h2>
        <p>O Sul do Brasil é composto pelos estados do Paraná, Santa Catarina e Rio Grande do Sul.
          Essa é a menor e também mais fria região do país, se destacando por sua cultura fortemente influenciada por
          europeus.</p>
        <button class="jogar"><a href="sul.html">Jogar</a></button>
      </div>
    </div>
  </main>
  <footer>
    <p>Brimu 2021 &copy;</p>
  </footer>
</body>

<script src="https://kit.fontawesome.com/3eecc79a6a.js" crossorigin="anonymous"></script>
<script src="./js/scriptregioes.js"></script>

</html>