<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
	<title>Forms Php</title>
</head>
<body>
	<h1>Comunicação Php e Html</h1>
	<form method="post">
		<fieldset>
			<legend>Seus dados:</legend>
			<label for="nome"> Digite seu nome:</label>
				<input type="text" name="nome" size="29">
			<br>
			<label for="email"> Digite seu e-mail:</label>
				<input type="email" name="email" size="28">
			<br>
			<label for="dataN">Digite sua data de nascimento:</label>
				<input type="date" name="dataN">
			<br>
			<input type="submit">
		</fieldset>				
	</form>	
<?php
ini_set('default_charset', 'utf-8');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$data = $_POST['dataN'];

echo '<h3>Recebimento:</h3>';

echo '<h3>Olá '.$nome.', bem-vindo! Seu e-mail é:"'.$email.'". Sua data de nascimento é '.$data.'</h3>'
?>
</body>
</html>