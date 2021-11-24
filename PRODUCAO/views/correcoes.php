<!DOCTYPE html>
<html lang="pt_br">
<?php
        include ('../conexao.php');
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/corecao.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/lista_rank.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="fundo_background">
        
        <div class="container">
            <div class="conteudo">
                <div class="content_pergunta" >
                	<table >
						<tbody>
								<?php
            				    	$sql = "SELECT modulo, NOME_EXERC FROM `modulo` WHERE `VERIFICA_ERRO_EXERC` = 'N'";
            				    	$query = mysqli_query($con, $sql);
            				   		if(!$query) {
           						 ?>
								
								<tr>
								<?php
									} else {
										while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
											if($item['modulo'] = 1){
								?>
									<td >
										<div class="card" style="width: 15rem;">
                                	    <a href="<?php echo $item['NOME_EXERC']; ?>.php" style="border: 1px solid black"><img class="card-img-top" src="../img/<?php echo $item['NOME_EXERC']; ?>.gif" alt="Card image cap"></a>
                                	    <div class="card-body">
                                	        <h5 class="card-title"><?php echo $item['NOME_EXERC']; ?></h5>
                                	        <p style="font-size: 20px" class="card-text"><?php if($item['NOME_EXERC'] == 'exercicio_soma_divertida') { 
												echo(' A soma em vertical deve estar correta, porem a soma horizontal também deve coencidir ');
												
											}elseif($item['NOME_EXERC'] == 'exercicio_soma'){
												echo(' Some a terceira coluna na vertical, e você obterá o resultado desejado.');
											}elseif($item['NOME_EXERC'] == 'exercicio_fruta'){
												echo('Fique atento aos sinais de mais e menos, a soma das frutas condiz com o valor dela');
											}elseif($item['NOME_EXERC'] == 'exercicio_soma'){
												echo(' Some a terceira coluna na vertical, e você obterá o resultado desejado.');
											}
											
											?></p>
                                	    </div>
                                	 </div>
									</td>  
								  
								<?php
									}elseif($item['modulo'] = 2){
								?>
									<td  >
										<div class="card" style="width: 15rem;">
                                	    <a href="<?php echo $item['NOME_EXERC']; ?>.php" style="border: 1px solid black"><img class="card-img-top" src="../img/<?php echo $item['NOME_EXERC']; ?>.gif" alt="Card image cap"></a>
                                	    <div class="card-body">
                                	        <h5 class="card-title"><?php echo $item['NOME_EXERC']; ?></h5>
                                	        <p style="font-size: 20px" class="card-text"><?php if($item['NOME_EXERC'] == 'exercicio_soma_divertida') { 
												echo(' A soma em vertical deve estar correta, porem a soma horizontal também deve coencidir ');
												
											}elseif($item['NOME_EXERC'] == 'exercicio_soma'){
												echo(' Some a terceira coluna na vertical, e você obterá o resultado desejado.');
											}elseif($item['NOME_EXERC'] == 'exercicio_fruta'){
												echo('Fique atento aos sinais de mais e menos, a soma das frutas condiz com o valor dela');
											}elseif($item['NOME_EXERC'] == 'exercicio_soma'){
												echo(' Some a terceira coluna na vertical, e você obterá o resultado desejado.');
											}
											
											?></p>
                                	    </div>
                                	 </div>
								</td>    


								<?php
											}
										}
									}
								?>
								</tr>
								</tr>
							</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script src="../js/dialogo_inicio.js" defer></script>
<script src="../js/script_soma.js" defer></script>

