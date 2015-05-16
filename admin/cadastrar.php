<?php
	include("../config.php");
	if(!isset($_POST['acao'])){
		header("Location: index.php");
	}else{
		$cod = $_POST['acao'];
		if($cod == "cadNoticia"){
			
			$titulo = $_POST['titulo'];
			$conteudo = $_POST['conteudo'];

			$NoticiaSQL = "INSERT INTO noticia(titulo,conteudo) VALUES ('".$titulo."','".$conteudo."')";
			$res = mysql_query($NoticiaSQL);
			if($res == null){
				echo "<script> alert('Notícia não cadastrada!'); </script>";
			}else{
				echo "<script> alert('Notícia cadastrada!'); </script>";
			}
		}
	}
	header("Location: index.php");
?>