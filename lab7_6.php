<!DOCTYPE html>
<html lang="pt-br"> 
<head>
	<meta charset="utf-8">
	<title>Criando um Formulario com PHP</title>
</head>
<body>
	<form method="post" action="lab7_6r.php">
		Nome:
		<input type="text" name="nome"><br/>

		E-mail:
		<input type="text" name="email"><br/>

		Sexo:
		<input type="radio" name="sexo" value="M">Masculino
		<input type="radio" name="sexo" value="F">Feminino<br/>	

		Em qual região você está:
		<select name="regiao">
			<option value="sul">Sul</option>
			<option value="norte">Norte</option>
			<option value="oeste">Oeste</option>
			<option value="leste">Leste</option>	
			<option value="centro">Centro</option>		
		</select>
		<br/><br/>

		Opine sobre o professor(Nada a declarar)
		<br/>

		<textarea name="opiniao" cols="50" rows="7"></textarea>
		<br/><br/>
		<input type="checkbox" name="receberEmail" value="sim">
		Desejo parabenizar o meu professor de PHP
		<br/><br/>
		<input type="submit" name="submit" value="enviar">
			<input type="reset" name="submit2" value="limpar dados">
				<input type=hidden name="escondido" value="Formulario de avaliação">

	</form>			

</body>
</html>