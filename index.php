<?php
	include("config.php");
	
	if(!isset($_GET['id'])){
		$noticiaSQL = "SELECT * FROM `noticia`";
		$noticiaQUERY = mysql_query($noticiaSQL);
		while($noticia = mysql_fetch_array($noticiaQUERY)){
			echo "<hr>";
			echo "<h1><a href='index.php?id=".$noticia[0]."'>".$noticia[1]."</a></h1><br />";
			echo "<p>".$noticia[2]."</p><br />";
		}
	}else{
		$noticiaSQL = "SELECT * FROM `noticia` WHERE id=".$_GET['id'];
		$noticiaQUERY = mysql_query($noticiaSQL);
		$noticia = mysql_fetch_array($noticiaQUERY);

		echo "<h1>".$noticia[1]."</h1><br />";
		echo "<p>".$noticia[2]."</p><br />";
	}
?>