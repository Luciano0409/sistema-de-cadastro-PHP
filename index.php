<?php 
	$host = "localhost";
	$user = "root";
	$passwd = "";
	$database = "sistema";

	$con = mysqli_connect($host, $user, $passwd, $database) or die ("Erro conexão");

	if(isset($_POST['cadastrar'])){
		$nome = $_POST['nome'];
		$user = $_POST['user'];
		$senha = $_POST['senha'];
		$nivel = $_POST['nivel'];
		$query = mysqli_query($con,"INSERT INTO usuario (nome, user, senha, nivel) VALUES ('$nome','$user', '$senha', '$nivel')");

		if($query){
			echo "Cadastro realizado com sucesso!";
		} else {
			echo "Algo de errado não está certo";
		}
		
	}

?>

<html>
	<head>
		<title>Sistemas de cadastro</title>
	</head>
	<body>
		<form method="post">
			<label>Nome:</label><br/>
			<input type="text" name="nome"><br/>

                        <label>User:</label><br/>
                        <input type="text" name="user"><br/>

                        <label>Senha:</label><br/>
			<input type="password" name="senha"><br/>

			<label>Nivel:</label><br/>
			<select name="nivel">
				<option>User</option>
				<option>Admin</option>
			</select>	
			<button name="cadastrar">Cadastrar</button>
	</body>
</html>

