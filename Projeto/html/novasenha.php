<?php
include_once 'conexao.php';

if (isset($_POST['acao']) && $_POST['acao'] == 'mudar') {
    $novaSenha = $_POST['Recsenha'];
    $atualizar = mysql_query("UPDATE 'usuário' SET 'Senha' = '$novaSenha'");
    if ($atualizar) {
        header('Location: login.php');
    } else {
?>

        <!DOCTYPE html>
        <html lang="pt-BR">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/login.css">
            <title>Recuperar senha</title>
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
                    <h2 id="recuperartext">Digite uma nova senha</h2>

                    <form action='' method="POST">
                        <input id="senha" type="password" name="Recsenha" placeholder="SENHA"><a><img id="icon" onclick=verSenha() src="../assets/eyeview.png" class="errorInput">

                            <div class="entrar">
                                <input type="submit" id="prosseguir" value="Trocar senha">
                                <input type="hidden" value="mudar" name="acao">
                    </form>
                </div>
            </div>
        </body>
        <script src="../js/scriptlogin.js"></script>

        </html>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Recuperar senha</title>
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
            <h2 id="recuperartext">Digite uma nova senha</h2>

            <form action='' method="POST">
                <input id="senha" type="password" name="Recsenha" placeholder="SENHA"><a><img id="icon" onclick=verSenha() src="../assets/eyeview.png">

                    <div class="entrar">
                        <input type="submit" id="prosseguir" value="Trocar senha">
                        <input type="hidden" value="mudar" name="acao">
            </form>
        </div>
    </div>
</body>
<script src="../js/scriptlogin.js"></script>

</html>