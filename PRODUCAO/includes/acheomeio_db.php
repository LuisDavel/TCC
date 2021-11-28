<?php
	include('../conexao.php');
?>	
<?php
	$nota = $_POST['nota'];
    $id_usuario = $_POST['id_usuario'];
	
	if ($nota >= '6') {
        $sql = "INSERT INTO modulo
        VALUES (null, '$id_usuario' , '1', 'exercicio_ache_meio', 'S', '$nota')";
    } else {
        $sql = "INSERT INTO modulo
        VALUES (null, '$id_usuario' , '1', 'exercicio_ache_meio', 'N', '0')";
    }


	$query = mysqli_query($con, $sql);
	//echo $sql;
	if ($nota >= '6'){
    	if( $query  ){
		    header('Location: ../views/index.php');
	    }else{
            header('Location: ../views/index.php?erro');		
	    }
    }else{
        header('Location: ../views/acheomeio.php?erro');	
    }
    
	mysqli_close($con);
?>