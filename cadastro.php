<?php
$login = $_POST['login'];
$senha = md5($_POST['senha'];

//CRIANDO A CONEXÃO COM O BHANCO DE DADOS

//Criando a variavel

$connect = mysql_connect('localhost','root','123');
$db = mysql_select_db("db_php5", $connect);

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

//CRIANDO AS VALIDAÇÕES PARA OS CAMPOS

if ($login == "" || $login == null) {
	echo <script language = 'javascript' type = 'text/javascript'>alert('O campo login deve ser preenchido');
	window.location.href = 'cadastro.html'</script>

}else{
	if($logarray == $login){
		echo <script language = 'javascript' type = 'text/javascript'>alert('Esse login já existe'); 
		window.location.href = 'cadastro.html'</script>

	die();

}else{
	$query = "INSERT INTO usuarios (login,senha) VALUES ('$login,$senha')";

		$insert = mysql_query($query,$connect);
		if($insert){
		echo <script language = 'javascript' type = 'text/javascript'>alert('Usuario cadastrado com sucesso'); 
		window.location.href = 'cadastro.html'</script>

		}else{
		echo <script language = 'javascript' type = 'text/javascript'>alert('Não foi possivel cadastrar esse usuário'); 
		window.location.href = 'cadastro.html'</script>
	
		}		

	}

}
?>