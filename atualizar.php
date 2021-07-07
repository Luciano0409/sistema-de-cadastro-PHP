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
		<?php 
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$result = mysqli_query($con, "SELECT * FROM usuario WHERE id='$id'");
			foreach ($result as $linha){	
		?>
		<form method="post">
			<label>Nome:</label><br/>
			<input type="text" value="<?php echo $linha['nome']; ?>" name="nome"><br/>

                        <label>User:</label><br/>
			<input type="text" value="<?php echo $linha['user']; ?>" name="user"><br/>

                        <label>Senha:</label><br/>
			<input type="password" value="<?php echo $linha['senha']; ?>" name="senha"><br/>

			<label>Nivel:</label><br/>
			<select name="nivel">
				<option <?php if($linha['nivel'] =="User"){	echo 'SELECTED'; }?> >User</option>
				<option <?php if($linha['nivel'] =="Admin"){	echo 'SELECTED'; }?> >Admin</option>
			</select>	
			<button name="atualizar">Ataualizar</button>

		<?php } } ?>
	</body>
</html>

