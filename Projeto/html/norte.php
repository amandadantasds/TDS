<?php
include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/quiz.css">
  <title>Norte</title>
</head>

<body>
  <header>
    <h1 id="titlenorte">Norte</h1>
    <img id="personagem" src="../assets/personagem-quiz.svg">
  </header>
  <main>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <h2 id="culinariatitle">Culinária</h2>
    <div class="culinaria">
      <img src="../assets/culinariaexemplo.png">
      <div class="conteudoculinaria">
        <p>
          <?php
          $query_pergunta = mysqli_query($connect, "SELECT IdQuestão AS id_questao, Enunciado FROM `questão` WHERE IdRegião=1 AND IdCategoria=2 LIMIT 1");
          while ($exibe = mysqli_fetch_assoc($query_pergunta)) {
            echo $exibe['Enunciado'];
            $id_questao = $exibe['id_questao'];
          }
          ?>
        </p>

        <div id="botao">
          <form action="#" method="GET">
            <button type="submit" value="Sim" name="Sim"><a>Sim</a></button>
            <button type="submit" value="Não" name="Não"><a>Não</a></button>
            <?php
            $resposta_usuario = '';
            $query_resposta = mysqli_query($connect, "SELECT texto FROM `alternativa` WHERE IdQuestão = $id_questao AND Certo = 1 LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_resposta)) {
              $resposta = $exibe['texto'];
              if (isset($_GET["Sim"])) {
                $resposta_usuario = 'Sim';
              } else if (isset($_GET["Não"])) {
                $resposta_usuario = 'Não';
              }
            }
            ?>
          </form>
        </div>
      </div>
    </div>

    <div class="seta">
      <img id="esconder" src="../assets/seta.png">
    </div>

    <div class="cards" id="cardsculinaria">
      <div class="card1">
        <img src="../assets/cardexemplo.png">
        <p id="title">
          <?php
          if ($resposta == $resposta_usuario) {
            $query_cards = mysqli_query($connect, "SELECT c.Título, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 1 ORDER BY c.IdQuestão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Título'];
              $id_cartao = $exibe['id_cartao'];
            }
          } else {
            $query_cards = mysqli_query($connect, "SELECT c.Título, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 0 ORDER BY c.IdQuestão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Título'];
              $id_cartao = $exibe['id_cartao'];
            }
          }
          ?>
        </p>
        <p>
          <?php
          if ($resposta == $resposta_usuario) {
            $query_cards = mysqli_query($connect, "SELECT c.Texto, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 1 ORDER BY c.IdQuestão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Texto'];
              $id_cartao = $exibe['id_cartao'];
            }
          } else {
            $query_cards = mysqli_query($connect, "SELECT c.Texto, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 0 ORDER BY c.IdQuestão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Texto'];
              $id_cartao = $exibe['id_cartao'];
            }
          }
          ?>
        </p>
      </div>

      <div class="card2">
        <img src="../assets/cardexemplo.png">
        <p id="title">
          <?php
          $id_cartao = $id_cartao + 1;
          if ($resposta == $resposta_usuario) {
            $query_cards = mysqli_query($connect, "SELECT c.Título, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 1 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Título'];
              $id_cartao = $exibe['id_cartao'];
            }
          } else {
            $query_cards = mysqli_query($connect, "SELECT c.Título, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 0 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Título'];
              $id_cartao = $exibe['id_cartao'];
            }
          }
          ?>
        </p>
        <p>
          <?php
          if ($resposta == $resposta_usuario) {
            $query_cards = mysqli_query($connect, "SELECT c.Texto, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 1 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Texto'];
              $id_cartao = $exibe['id_cartao'];
            }
          } else {
            $query_cards = mysqli_query($connect, "SELECT c.Texto, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 0 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Texto'];
              $id_cartao = $exibe['id_cartao'];
            }
          }
          ?>
        </p>
      </div>

      <div class="card3">
        <img src="../assets/cardexemplo.png">
        <p id="title">
          <?php
          $id_cartao = $id_cartao + 1;
          if ($resposta == $resposta_usuario) {
            $query_cards = mysqli_query($connect, "SELECT c.Título, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 1 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Título'];
              $id_cartao = $exibe['id_cartao'];
            }
          } else {
            $query_cards = mysqli_query($connect, "SELECT c.Título, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 0 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Título'];
              $id_cartao = $exibe['id_cartao'];
            }
          }
          ?>
        </p>
        <p>
          <?php
          if ($resposta == $resposta_usuario) {
            $query_cards = mysqli_query($connect, "SELECT c.Texto, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 1 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Texto'];
              $id_cartao = $exibe['id_cartao'];
            }
          } else {
            $query_cards = mysqli_query($connect, "SELECT c.Texto, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdCartão = $id_cartao AND c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 0 ORDER BY c.IdCartão LIMIT 1");
            while ($exibe = mysqli_fetch_assoc($query_cards)) {
              echo $exibe['Texto'];
              $id_cartao = $exibe['id_cartao'];
            }
          }
          ?>
        </p>
      </div>
    </div>

    <div class="texto" id="textoculinaria">
      <p>
        <?php
        if ($resposta == $resposta_usuario) {
          $query_cards = mysqli_query($connect, "SELECT c.Título, c.Texto, com.comentário, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 1 ORDER BY c.IdCartão LIMIT 1");
          while ($exibe = mysqli_fetch_assoc($query_cards)) {
            echo $exibe['comentário'];
          }
        } else {
          $query_cards = mysqli_query($connect, "SELECT c.Título, c.Texto, com.comentário, c.IdCartão AS id_cartao FROM `cartão` AS c JOIN `comentário` AS com JOIN `alternativa` AS a WHERE c.IdQuestão = $id_questao AND a.IdAlternativa = com.IdAlternativa AND a.certo = 0 ORDER BY c.IdCartão LIMIT 1");
          while ($exibe = mysqli_fetch_assoc($query_cards)) {
            echo $exibe['comentário'];
          }
        }
        ?>
      </p>
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
      <img id="escondermusica" src="../assets/seta.png">
    </div>
    <div class="cards" id="cardsmusica">
      <div class="card1">
        <img src="../assets/musicaexemplo.png">
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
        <p>
          <?php
          $query_pergunta = mysqli_query($conn, "SELECT Enunciado FROM `questão` WHERE IdRegião=1 AND IdCategoria=1 LIMIT 1");
          while ($exibe = mysqli_fetch_assoc($query_pergunta)) {
            echo $exibe['Enunciado'];
          }
          ?>
        </p>
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
      <button type="button" id="concluir"><a href="regioesnorte.html">concluir fase</a></button>
    </div>
  </main>
  <footer>
    <p>Brimu 2021 &copy;</p>
  </footer>
</body>
<script src="https://kit.fontawesome.com/3eecc79a6a.js" crossorigin="anonymous"></script>
<script src="../js/scriptquiz.js"></script>

</html>