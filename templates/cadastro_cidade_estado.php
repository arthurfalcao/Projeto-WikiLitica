<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro da Cidade Estado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../static/css/login.css">
	<link rel="stylesheet" type="text/css" href="../static/css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php" ?>
	<div class ="caixa" id="cadastro_candidato">
		<a href="./cadastro_cidade_estado.html">
			<img  class="imagem" src="../static/img/logo_c_cidade-estado.png" alt="logo">
		</a>
		<form name="cadastro" action="">
			<label class="l1">Tipo</label>
				<select class="l1" name="Tipo">
						<option value="selecione" selected="selected">Selecione</option>
						<option value="Cidade">Cidade</option>
						<option value="Estado">Estado</option>
					</select><br><br>
			<label class="l1">Nome</label><br>
			<input type="text" name="Nome"><br>
			<label class="l1">Quantidade de Deputados Estaduais</label><br>
			<input type="number" name="qto_dep"><br>
			<label class="l1">Quantidade de Deputados Federais</label><br>
			<input type="number" name="qto_dep"><br>
			<label class="l1">Quantidade de Vereadores</label><br>
			<input type="number" name="qto_"><br>
			<label class="l1">Habitantes</label><br>
			<input type="number" name="qto_dep"><br>
			<label class="l1">Governante</label>
				<select class="l1" name="Tipo">
						<option value="selecione" selected="selected">Selecione</option>
						<option value="Prefeito">Prefeito</option>
						<option value="Governador">Governador</option>
					</select><br><br>
			<label class="l1">Nome</label><br>
				<input type="text" name="Nome_2"><br>
			<label class="l1">Partido</label><br>
				<select class="l1" name="Partidos">
						<option value="selecione" selected="selected">Selecione</option>
						<option value="PT">PT</option>
						<option value="PSDB">PSDB</option>
						<option value="REDE">REDE</option>
				  </select><br><br>
			<br action="..\index.html">
			<input type="submit" class="bt" value="Cadastrar">
			<input type="reset" class="bt" value="Cancelar">
		</form>
		<br>
	</div>
	<?php include "rodape.php" ?>
</body>
</html>
