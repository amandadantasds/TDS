<?php
session_start();
include('conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
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
				<h1 id="titlelogin"> Login </h1>
				<h3> Preencha todos os campos </h3>
				<form action='logar.php' method="POST">
					<input id="email" name="email" type="text" placeholder="EMAIL" class="errorInput">
					<input id="senha" type="password" name="senha" placeholder="SENHA" class="errorInput"><a><img id="icon" onclick=verSenha() src="../assets/eyeview.png">
						<a id="esqueceusenha" href="recuperarsenha.php"> Esqueceu sua senha?</a>

						<div class="entrar">
							<input type="submit" id="entrar" value="Entrar">
						</div>
				</form>
			</div>
		</div>
	</body>
	<script src="../js/scriptlogin.js"></script>

	</html>
	<?php
}
else{
$email = mysqli_real_escape_string($connect, $_POST['email']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "SELECT Email FROM usuário WHERE Email = '{$email}' AND Senha = md5('{$senha}')";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['Email'] = $email;
	header('Location: regioes.php');
	exit();
} else {
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
				<h1 id="titlelogin"> Login </h1>
				<h3> Email ou Senha inválidos </h3>
				<form action='logar.php' method="POST">
					<input id="email" name="email" type="text" placeholder="EMAIL" class="errorInput">
					<input id="senha" type="password" name="senha" placeholder="SENHA" class="errorInput"><a><img id="icon" onclick=verSenha() src="../assets/eyeview.png">
						<a id="esqueceusenha" href="recuperarsenha.php"> Esqueceu sua senha?</a>

						<div class="entrar">
							<input type="submit" id="entrar" value="Entrar">
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