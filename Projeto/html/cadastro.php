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
            <form action="cadastrar.php" method="POST">
                <input type="text" id="nome" name="nome" placeholder="NOME">
                <input type="text" id="sobrenome" name="sobrenome" placeholder="SOBRENOME">
                <input type="text" id="email" name="email" placeholder="EMAIL">
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