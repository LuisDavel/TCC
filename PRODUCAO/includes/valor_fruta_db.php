<?php
	include('../conexao.php');
?>	
<?php
	$nota = $_POST['nota'];
	$modulo = $_POST['modulo'];
    $exercicio = $_POST['exercicio_fruta'];
	$validacao = $_POST['valida_exercicio'];
    $id_usuario = $_POST['id_usuario'];
	
    $sql = "INSERT INTO modulo
    VALUES (null, '$id_usuario' , '$modulo', '$exercicio', 'N', '$nota')";
    
	$query = mysqli_query($con, $sql);
	//echo $sql;

	if( $query ){
		header('Location: ../views/index.php?retorno=2');
	}else{
		echo mysqli_query($con, $sql);
	}

	mysqli_close($con);
?>