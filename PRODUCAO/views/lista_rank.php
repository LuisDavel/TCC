<!DOCTYPE html>
<html lang="pt_br">
<?php
        include ('../conexao.php');
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dialogo.css">
    <link rel="stylesheet" href="../css/soma.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/lista_rank.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="fundo_background">
        
        <div class="container">
            <div class="conteudo">
                <div class="content_pergunta">
                	<table>
						<thead>
							<tr>
								<th>Pontuação</th>
								<th>Nome</th>
							</tr>
						</thead>
							<tbody>
								<?php
            				    	$sql = "SELECT a.cd_usuario,b.ds_nome_heroi, a.nome_exerc, sum(a.nota_exerc) nota
            				    	FROM modulo a JOIN usuario b ON (a.cd_usuario=b.cd_usuario)
            				    	group by a.nome_exerc
            				    	order by nota";
            				    	$query = mysqli_query($con, $sql);
            				   		if(!$query) {
           						 ?>
								<tr>
									<td colspan="3"><?php echo 'MySQL Erro: ' . mysqli_error($con); ?></td>
								</tr>
								<?php
									} else {
										while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
								?>
								<tr>
										<td><div class="progress-barr" style="--progress: <?php echo $item['nota']; ?>;">A</div></td>
										<td><?php echo $item['ds_nome_heroi']; ?></td>
						
								</tr>
								<?php
										}
									}
								?>
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

