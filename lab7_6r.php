<!DOCTYPE html>
<html lang="pt-br"> 
<head>
	<meta charset="utf-8">
	<title>Recuperando dados do formulario</title>
</head>
<body>
<?php

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$regiao = $_POST['regiao'];
	$opiniao = $_POST['opiniao'];		
	$receberEmail = $_POST['receberEmail'];	
	$escondido = $_POST['escondido'];

$mensagem_erro = "";
$erro = 0;

if ($nome == "") {
	$erro = $erro +1;
	$mensagem_erro = $mensagem_erro."o campo [nome] é de preenchimento obrigatorio.<br/>";
}	

if ($email == ""){
	$erro = $erro +1;
	$mensagem_erro = $mensagem_erro."o campo [email] é de preenchimento obrigatorio.<br/>";
}	

if ($erro >= 1) {
	print"<h3> Seu formulário contem $erro erro(s) descrito(s) a seguir</h3>";

	print$mensagem_erro;
	print"<br><input type = 'BUTTON' VALUE = 'corrigir erros' ONCLICK = 'javascript: history.go(-1)'>";

}

else{

print "Nome: <strong>$nome</strong><br/>";	
print "E-mail: <strong>$email</strong><br/>";
print "Sexo: <strong>$sexo</strong><br/>";
print "Regiao: <strong>$regiao</strong><br/>";
print "Opiniao<br/>";
print "<strong>$opiniao</strong><br/>";
print "Receber e-mail: <strong>$receberEmail</strong><br/>";
print "Não visualizado pelo usuario: <strong>$escondido</strong><br/>";

}

?>
</body>
</html>