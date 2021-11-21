<?php
	include('../conexao.php');
//	include('cadastro_nome_usuario.php');

?>
<?php
	$nome_usuario   = strtoupper($_POST['nome_usuario']);
	
	//echo('Não sei ?' . $nome_usuario);

	$sql = "INSERT INTO usuario
		VALUES (null,'null', '$nome_usuario' , 'null', '00/00/0000', 'null', 'N','A')";

    $query = mysqli_query($con, $sql);

	$id = mysqli_insert_id($con);

	if($query) {
		header('Location: ../views/cadastro_nome_heroi.php?id=' . $id);
	} else {
		header('Location: ../views/cadastro_nome_usuario.php?erro=2&msg=' . mysqli_error($con));
	}

?>

