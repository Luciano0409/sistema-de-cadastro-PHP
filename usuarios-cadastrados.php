<?php
	$host = "localhost";
	$user = "root";
	$senha = "";
	$database = "sistema";


	$con = mysqli_connect($host, $user, $senha, $database) or die ("Erro de conexão");
	
?>
<style>
	table{border: 1px solid #000; border-spacing: 0px;}
	table td, th{border: 1px solid #000; padding: 5px;} 
</style>

<html>
	<head></head>
	<body>
		<table>
			<thead>
				<tr><th>#</th><th>Nome</th><th>User</th><th>Nivel</th></tr>
			</thead>
			<tbody>
				<?php
					$resultado = mysqli_query($con,"SELECT * FROM usuario");
					while($linha = mysqli_fetch_array($resultado)){
				?>
					<tr>
						<td><?php echo $linha['id']; ?></td>
						<td><?php echo $linha['nome']; ?></td>
						<td><?php echo $linha['user']; ?></td>
						<td><?php echo $linha['nivel']; ?></td>
						<td><a href="atualizar.php?id=<?php echo $linha ['id']; ?>">Editar</a></td></tr>
					</tr>
					
				<?php } ?>
			</tbody>	
		</table>
	
	</body>


</html>
