<?php
	session_start();
	include('../conexao.php');
?>	
<?php
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	//$senha = $_POST['senha'];

	$btt = isset($_POST['btt_cadastro']) ? $_POST['btt_cadastro'] : null;

	if($btt == 'Cadastrar'){
		return header('Location: ../views/cadastro_nome_usuario.php');
	}
	
	$sql = "SELECT * FROM usuario WHERE ds_email = '$email' AND ds_senha = '$senha'";
	//$sql = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = MD5('{$senha}')";
	$query = mysqli_query($con, $sql);
	if( mysqli_num_rows($query) == 1 ){
		while ($row = mysqli_fetch_array($query)){
			$_SESSION['id'] = $row['CD_USUARIO'];
			$_SESSION['nome_heroi'] = $row['DS_NOME_HEROI'];
		}
		header('Location: ../views/index.php');
	}else{
		header('Location: ../views/login.php?retorno=red');
	}

	mysqli_close($con);
?>