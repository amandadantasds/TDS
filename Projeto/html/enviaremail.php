<?php
include_once("conexao.php");
ini_set('smtp_port', '587');
$email = $_POST['email'];

if (empty($email)){
  ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Recuperar Senha</title>
</head>

<body>
    <img class="forma" src="../assets/login-background.png" alt="Forma Verde">
    <div class="conteudo">
        <h2 id="principal"> AINDA NÃO POSSUI UM LOGIN? CLIQUE <a href="cadastro.php">AQUI</a></h2>
        <h2>PARA CADASTRAR SUA CONTA</h2>
        <img src="../assets/login-personagem.svg" alt="Menina fazendo login">
    </div>

    <div class="formulario">
        <div class="form">
            <h1 id="recuperar">Recuperar Senha</h1>
            <h2 id="recuperartext">Preencha o campo</h2>

            <form action='enviaremail.php' method="POST">
                <input id="emailrecuperar" name="email" type="text" placeholder="EMAIL" class="errorInput">

                <div class="entrar">
                    <input type="submit" id="prosseguir" value="Receber e-mail">
                    <input type="hidden" value="form" name="acao">
                </div>
           </form>
        </div>
    </div>
</body>
<script src="../js/scriptlogin.js"></script>

</html>

<?php
}else{
$email = mysqli_real_escape_string($connect, $_POST['email']);

$query = "SELECT Nome, Senha FROM usuário WHERE Email = '{$email}'";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {

    $mensagem = '<p> Olá! Recebemos uma solicitação para recuperação de senha. Clique no link abaixo para redefinir sua senha. 
    Caso não seja você, desconsidere este e-mail<br/><a href="http://localhost/xampp/Projeto/html/novasenha.php">Recuperar Senha</a></p>';
    $email_remetente= 'ammandaedantas@gmail.com';
    $headers = "MIME-Version: 1.1\n";
    $headers = "Content-type: text/plain; charset=iso-8869-1\n";
    $headers = "From: $email_remetente\n";
    $headers = "Return-Path: $email_remetente\n";
    $headers = "Reply-To: $email\n";
    if(mail("$email", "Assunto", "$mensagem", $headers, "-f$email_remetente")or die(mysqli_error($connect))){
        if (empty($email)){
            ?>
          <!DOCTYPE html>
          <html lang="pt-BR">
          
          <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="../css/login.css">
              <title>Recuperar Senha</title>
          </head>
          
          <body>
              <img class="forma" src="../assets/login-background.png" alt="Forma Verde">
              <div class="conteudo">
                  <h2 id="principal"> AINDA NÃO POSSUI UM LOGIN? CLIQUE <a href="cadastro.php">AQUI</a></h2>
                  <h2>PARA CADASTRAR SUA CONTA</h2>
                  <img src="../assets/login-personagem.svg" alt="Menina fazendo login">
              </div>
          
              <div class="formulario">
                  <div class="form">
                      <h1 id="recuperar">Recuperar Senha</h1>
                      <h2 id="recuperartext">Um link de recuperação foi enviado para seu e-mail.</h2>
                          </div>
                     </form>
                  </div>
              </div>
          </body>
          <script src="../js/scriptlogin.js"></script>
          
          </html>
<?php     
}}}else{
  ?>
  <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>

<body>
    <img class="forma" src="../assets/login-background.png" alt="Forma Verde">
    <div class="conteudo">
        <h2 id="principal"> AINDA NÃO POSSUI UM LOGIN? CLIQUE <a href="cadastro.php">AQUI</a></h2>
        <h2>PARA CADASTRAR SUA CONTA</h2>
        <img src="../assets/login-personagem.svg" alt="Menina fazendo login">
    </div>

    <div class="formulario">
        <div class="form">
            <h1 id="recuperar">Recuperar Senha</h1>
            <h2 id="recuperartext">Digite um e-mail válido</h2>

            <form action='enviaremail.php' method="POST">
                <input id="emailrecuperar" name="email" type="text" placeholder="EMAIL" class="errorInput">

                <div class="entrar">
                    <input type="submit" id="prosseguir" value="Receber e-mail">
                    <input type="hidden" value="form" name="acao">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../js/scriptlogin.js"></script>

</html>
<?php
}}
?>
