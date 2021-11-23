<?php
	include('../conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="stylesheet" type="text/css" href="site.css">
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Exercicio</th>
					<th>Nota</th>
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
					<td><?php echo $item['cd_usuario']; ?></td>
					<td><?php echo $item['ds_nome_heroi']; ?></td>
					<td><?php echo $item['nome_exerc']; ?></td>
                    <td><?php echo $item['nota']; ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
		Exitem <?php echo mysqli_num_rows($query); ?> Itens
	</body>
</html>
<?php
	mysqli_close($con);
?>        