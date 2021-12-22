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
            <h2 id="recuperartext">Digite seu email cadastrado</h2>

            <form action='enviaremail.php' method="POST">
                <input id="emailrecuperar" name="recuperaremail" type="text" placeholder="EMAIL">

                <div class="entrar">
                    <input type="submit" id="prosseguir" value="Receber e-mail">
                    <input type="hidden" value="form" name="env">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../js/scriptlogin.js"></script>

</html>