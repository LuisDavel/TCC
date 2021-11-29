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
    <link rel="stylesheet" href="../css/lista_rank.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/lista_rank.css">
    <title>Cadastro</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
     
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
         <li class="nav-item active">
           <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="correcoes.php">Correções</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="lista_rank.php">Ranking</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="login.php?acao=sair">SAIR</a>
         </li>
       </ul>
     </div>
   </nav>

    <div class="fundo_background">
        
        <div class="container">
            <div class="conteudo">
                <div class="content_pergunta">
                	<table>
						<thead>
							<tr>
								
								<th>Nome</th>
								<th>Pontuação</th>
							</tr>
						</thead>
							<tbody>
								<?php
            				    	$sql = "SELECT a.cd_usuario,b.ds_nome_heroi, a.nome_exerc, sum(a.nota_exerc) nota
            				    	FROM modulo a JOIN usuario b ON (a.cd_usuario=b.cd_usuario)
            				    	group by b.ds_nome_heroi
            				    	order by  nota DESC";
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
										
										<td><?php echo $item['ds_nome_heroi']; ?></td>
										<td class="numero_td"><div class="progress-barr" style="--progress: <?php echo $item['nota']; ?>;"></div></td>
						
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

