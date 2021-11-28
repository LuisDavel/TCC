<?php
	include('../conexao.php');
?>	
<?php
	$nota = $_POST['nota'];
    $id_usuario = $_POST['id_usuario'];
	
    if ($nota >= '6') {
        $sql = "INSERT INTO modulo
        VALUES (null, '$id_usuario' , '1', 'exercicio_soma_divertida', 'S', '$nota')";
    } else {
        $sql = "INSERT INTO modulo
        VALUES (null, '$id_usuario' , '1', 'exercicio_soma_divertida', 'N', '0')";
    }
   
	$query = mysqli_query($con, $sql);
	echo $sql;

    
    if ($nota >= '6'){
    	if( $query ){
		    header('Location: ../views/exercicio_fruta.php');
	    }else{
            header('Location: ../views/exercicio_fruta.php?erro');		
	    }
    }else{
        header('Location: ../views/exercicio_soma_divertida.php');	
    }


	mysqli_close($con);
?>