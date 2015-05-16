<?php
	session_start();
	if(isset($_SESSION['logado'])){
		//echo "<a href='?logout=1'>Sair</a>";
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: login.php");
		}
	}else{
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Painel de administração!</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="styles/index.css" />
	</head>
	<body>
		<div class="frmNoticia">
			<h3>Cadastrar nova notícia</h3>
			<form action="cadastrar.php" method="post" id="cadNoticia">
				<input type="hidden" name="acao" id="acao" value="cadNoticia" />
				<label for="titulo">Título:</label>
				<input type="text" name="titulo" id="titulo" /><br />
				<label for="conteudo">Conteudo:</label><br />
				<textarea class="txtArea" form="cadNoticia" name="conteudo" id="conteudo"></textarea><br />
				
				<input type="submit" value="Cadastrar" />
			</form>
		</div>
		<a href='?logout=1'>Sair</a>
	</body>
</html>