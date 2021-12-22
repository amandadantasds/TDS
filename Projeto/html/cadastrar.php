<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sobrenome = $_POST['sobrenome'];
?>

<?php

if (empty($email) or empty($senha) or empty($nome) or empty($sobrenome)) {
?>

  <!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
  </head>

  <body>
    <div class="conteudo">
      <h2 id="principal"> JÁ POSSUI UM CADASTRO? CLIQUE <a href="login.php">AQUI</a></h2>
      <h2>PARA ACESSAR SUA CONTA</h2>
      <img src="../assets/personagem-cadastro.svg" alt="Menina fazendo login">
    </div>
    <img class="forma" src="../assets/cadastro-background.png" alt="Forma Verde">
    </div>
    <div class="formulario">
      <div class="form">
        <h1> Cadastro </h1>
        <h3> Preencha todos os campos </h3>
        <form action="cadastrar.php" method="POST">
          <input type="text" id="nome" name="nome" placeholder="NOME" class="errorInput">
          <input type="text" id="sobrenome" name="sobrenome" placeholder="SOBRENOME" class="errorInput">
          <input type="text" id="email" name="email" placeholder="EMAIL" class="errorInput">
          <input type="password" id="senha" name="senha" placeholder="SENHA" class="errorInput"><a><img onclick="verSenha()" id="icon" src="../assets/eyeview.png" class="errorInput">
            <div class="cadastrar">
              <input type="submit" id="enviar" value="Criar conta">
            </div>
        </form>
      </div>
    </div>
  </body>
  <script src="../js/script.js"></script>

  </html>
<?php
} else {
$email = mysqli_real_escape_string($connect, $_POST['email']);

$query = "SELECT Email FROM usuário WHERE Email = '{$email}'";

$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

$row = mysqli_num_rows($result);

if ($row == 1) {
  ?>

  <!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
  </head>

  <body>
    <div class="conteudo">
      <h2 id="principal"> JÁ POSSUI UM CADASTRO? CLIQUE <a href="login.php">AQUI</a></h2>
      <h2>PARA ACESSAR SUA CONTA</h2>
      <img src="../assets/personagem-cadastro.svg" alt="Menina fazendo login">
    </div>
    <img class="forma" src="../assets/cadastro-background.png" alt="Forma Verde">
    </div>
    <div class="formulario">
      <div class="form">
        <h1> Cadastro </h1>
        <h3> E-mail já cadastrado </h3>
        <form action="cadastrar.php" method="POST">
          <input type="text" id="nome" name="nome" placeholder="NOME">
          <input type="text" id="sobrenome" name="sobrenome" placeholder="SOBRENOME">
          <input type="text" id="email" name="email" placeholder="EMAIL" class="errorInput">
          <input type="password" id="senha" name="senha" placeholder="SENHA"><a><img onclick="verSenha()" id="icon" src="../assets/eyeview.png">
            <div class="cadastrar">
              <input type="submit" id="enviar" value="Criar conta">
            </div>
        </form>
      </div>
    </div>
  </body>
  <script src="../js/script.js"></script>

  </html>

  <?php
}else {
    $sql = "insert into usuário (nome, sobrenome, email, senha) values ('$nome', '$sobrenome', '$email', md5('$senha'))";
    $salvar = mysqli_query($connect, $sql);

    $linhas = mysqli_affected_rows($connect);
    if ($linhas == 1) {
      header('Location: regioes.php');
      exit();
    } else {
      header('Location: cadastro.php');
      exit();
    }
    mysqli_close($connect);
  }}
?>