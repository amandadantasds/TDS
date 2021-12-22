<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/quiz.css">
  <title>Sul</title>
</head>

<body>
  <header>
    <h1 id="titlesul">Sul</h1>
    <img id="personagem" src="./assets/personagem-quiz.svg">
  </header>
  <main>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <h2 id="culinariatitle">Culinária</h2>
    <div class="culinaria">
      <img src="assets/culinariaexemplo.png">
      <div class="conteudoculinaria">
        <p>baião de dois é um prato típico do nordeste do brasil. é preparado com arroz e feijão, geralmente feijão
          verde
          ou novo. pode levar queijo coalho e carne. você conhece este prato?</p>
        <div id="botao">
          <button type="button"><a>Sim</a></button>
          <button type="button"><a>Não</a></button>
        </div>
      </div>
    </div>

    <div class="seta">
      <img id="esconder" src="assets/seta.png">
    </div>

    <div class="cards" id="cardsculinaria">
      <div class="card1">
        <img src="assets/cardexemplo.png">
        <p id="title">Acarajé</p>
        <p>bolinho feito de massa de feijão-fradinho, cebola e sal, e frito em azeite de dendê</p>
      </div>

      <div class="card2">
        <img src="assets/cardexemplo.png">
        <p id="title">Acarajé</p>
        <p>bolinho feito de massa de feijão-fradinho, cebola e sal, e frito em azeite de dendê</p>
      </div>

      <div class="card3">
        <img src="assets/cardexemplo.png">
        <p id="title">Acarajé</p>
        <p>bolinho feito de massa de feijão-fradinho, cebola e sal, e frito em azeite de dendê</p>
      </div>
    </div>

    <div class="texto" id="textoculinaria">
      <p>estes são outros pratos nordestinos deliciosos que você devereria conhecer!</p>
    </div>

    <h2>Música</h2>
    <div class="musica">
      <p>Alceu Valença é um grande cantor e compositor nordestino. uma de suas músicas mais famosas se chama
        “anunciação”. você conhece este artista?</p>
      <div id="botao">
        <button type="button"><a>Sim</a></button>
        <button type="button"><a>Não</a></button>
      </div>
    </div>

    <div class="seta">
      <img id="escondermusica" src="assets/seta.png">
    </div>
    <div class="cards" id="cardsmusica">
      <div class="card1">
        <img src="assets/musicaexemplo.png">
        <p id="title">ivete sangalo </p>
        <p>cantora baiana,
          nascida em 1972.
          um de seus grandes hits é “poeira”
        </p>
      </div>

      <div class="card2">
        <img src="assets/musicaexemplo.png">
        <p id="title">ivete sangalo </p>
        <p>cantora baiana,
          nascida em 1972.
          um de seus grandes hits é “poeira”
        </p>
      </div>

      <div class="card3">
        <img src="assets/musicaexemplo.png">
        <p id="title">ivete sangalo </p>
        <p>cantora baiana,
          nascida em 1972.
          um de seus grandes hits é “poeira”
        </p>
      </div>
    </div>

    <div class="texto" id="textomusica">
      <p>não conhecia? não tem problema! agora você sabe um pouco sobre alceu e também sobre estes outros grandes
        artistas nordestinos!</p>
    </div>

    <h2>Pontos Turísticos</h2>
    <div class="pontos">
      <img src="assets/pontosimgexemplo.png">
      <div class="conteudopontos">
        <p>este é um ponto turístico muito famoso na bahia. é parte da cultura artística, teatral, literária e musical
          BAIANA. Você o conhece? digite o nome dele abaixo. </p>
        <div id="input">
          <input type="text" placeholder="digite sua resposta aqui">
        </div>
        <div id="botao">
          <button type="button" id="responder"><a>responder</a></button>
          <button type="button" id="responder"><a>pular</a></button>
        </div>
      </div>
    </div>
    </div>

    <div class="seta">
      <img id="esconderpontos" src="assets/seta.png">
    </div>
    <div class="cards" id="cardspontos">
      <div class="card1">
        <img src="assets/pontosexemplo.png">
        <p id="title">Praia do Patacho</p>
        <p>localizada no Município alagoano de Porto de pedras
        </p>
      </div>

      <div class="card2">
        <img src="assets/pontosexemplo.png">
        <p id="title">Praia do Patacho</p>
        <p>localizada no Município alagoano de Porto de pedras
        </p>
      </div>

      <div class="card3">
        <img src="assets/pontosexemplo.png">
        <p id="title">Praia do Patacho</p>
        <p>localizada no Município alagoano de Porto de pedras
        </p>
      </div>
    </div>
    <div class="texto" id="textopontos">
      <p>ficamos felizes em saber que você conhece O Centro Histórico de Salvador!
        talvez você goste de conhecer estes outros locais também. </p>
    </div>

    <div class="final">
      <button type="button" id="concluir"><a href="regioesfinal.html">concluir fase</a></button>
    </div>
  </main>
  <footer>
    <p>Brimu 2021 &copy;</p>
  </footer>
</body>
<script src="https://kit.fontawesome.com/3eecc79a6a.js" crossorigin="anonymous"></script>
<script src="./js/scriptquiz.js"></script>

</html>