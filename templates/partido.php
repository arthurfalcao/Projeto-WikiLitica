<?php
require_once 'config.php';
session_start();
if (!isLogado()) {
	echo "<script>alert('Entre para acessar.');</script>";
	echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Partidos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<section>
		<div class ="caixa" id="cadastro_partido">
			<a href="./partido.php"><img  class="imagemCaixa"  src="../static/img/logo c_partido.png" alt="logo" height="20px" width="80px"></a>
			<form class = "cadastroEstilo" name="cadastro" action="cadastro_partido.php" method="post">
				<input type="hidden" name="id_partido">
				<label for="nome" class="l1">Nome do Partido</label>
				<input required type="text" name="nome" id="nome">
				<label for="sigla" class="l1">Sígla</label>
				<input required type="text" name="sigla" id="sigla">
				<label for="espectro" class="l1">Espectro</label>
				<select class="l1" name="espectro" id="espectro">
					<option selected="selected">Selecione</option>
					<option value="direita">Direita</option>
					<option value="esquerda">Esquerda</option>
					<option value="neutro">Neutro</option>
				</select><br><br>
				<br>
				<br>
				<button type="submit" name="button" class="btn">Cadastrar</button>
			</form>
			<br>
		</div>
	</section>
	<?php include "rodape.php" ?>
</body>
</html>
