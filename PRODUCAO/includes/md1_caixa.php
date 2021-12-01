<?php
	include('../conexao.php');
?>	
<?php
	$nota = $_POST['nota'];
    $id_usuario = $_POST['id_usuario'];
	
    if ($nota >= '6') {
        $sql = "INSERT INTO modulo
        VALUES (null, '$id_usuario' , '1', 'exercicio_caixa', 'S', '$nota')";
    } else {
        $sql = "INSERT INTO modulo
        VALUES (null, '$id_usuario' , '1', 'exercicio_caixa', 'N', '0')";
    }
   
	$query = mysqli_query($con, $sql);
	echo $sql;
    if ($nota >= '6'){
	    if( $query ){
	    	header('Location: ../views/maze.php');
	    }else{
            header('Location: ../views/md1_caixa.php?erro');		
	    }
    }else{
        header('Location: ../views/md1_caixa.php?erro');
    }

	mysqli_close($con);
?>