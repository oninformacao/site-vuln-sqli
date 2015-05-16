<?php
	if(isset($_POST['logar'])){
		include("../config.php");
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$loginSQL = "SELECT * FROM usuario WHERE login='".$login."'";
		$loginRes = mysql_query($loginSQL);
		$loginInfo = mysql_fetch_array($loginRes);

		if($login == $loginInfo[1] && md5($senha) == $loginInfo[2]){
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['id'] = $loginInfo[0];
			$_SESSION['logado'] = 1;
			header("Location: index.php");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Painel de administração</title>
		<meta charset="UTF-8" />
		<style>
			.frmLogin{
				background-color: black;
				color: white;
				width: 200px;
				height: 200px;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<div class="frmLogin">
			<h3>Administração</h3><br />
			<form action="login.php" method="post">
				<label for="login">Login:</label>
				<input type="text" id="login" name="login" /><br />
				<label for="senha">Senha:</label>
				<input type="password" id="senha" name="senha" /><br /><br />
				<input type="submit" value="Login" />
				<input type="hidden" value="1" name="logar" />
			</form>
		</div>
	</body>
</html>