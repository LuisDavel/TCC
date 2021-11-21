<?php
	include('../conexao.php');
?>
<?php

	$id = $_POST['id_heroi'];

	$nome_heroi     = strtoupper($_POST['nome_heroi']);

	if(isset($_POST['tp_heroi']) && $_POST['tp_heroi'] == 'check') {
		$tipo_heroi	= 'M';
	}else{
		$tipo_heroi	= 'F';
	}

	//$id = mysqli_insert_id($con);
	
    $sql = "UPDATE usuario SET ds_nome_heroi = '$nome_heroi', 
								tp_heroi = '$tipo_heroi'
	WHERE cd_usuario = '$id'";

	

    $query = mysqli_query($con, $sql);
	if($query) {
		header('Location: ../views/finaliza_cadastro_usuario.php?id=' . $id);
	} else {
		header('Location: ../views/finaliza_cadastro_usuario.php?erro=2&msg=' . mysqli_error($con));
	}

	//mysqli_close($con);
?>

