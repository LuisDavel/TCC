<?php
	include('../conexao.php');
	
	$id = $_POST['id_heroi'];
	$email = strtoupper($_POST['email']);
	$senha = md5($_POST['senha']);
	$nascimento  = $_POST['nasc'];

	$sql = "UPDATE usuario  
			SET DS_EMAIL = '$email',
			DT_NASCIMENTO = '$nascimento',
			DS_SENHA = '$senha'
	WHERE CD_USUARIO = '$id'";

    $query = mysqli_query($con, $sql);
	if($query) {
		//echo($senha);
		header('Location: ../views/login.php?retorno=2');
	} else {
		header('Location: ../views/finaliza_cadastro_usuario.php?erro=2&msg=' . mysqli_error($con));
	}

	mysqli_close($con);
?>