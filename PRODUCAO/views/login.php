<!DOCTYPE html>
<html lang="pt_br">
<head>
<?php
	    include('../conexao.php');

        if (@$_GET['acao'] == "sair") {
            session_destroy();
        }

       
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
<?php
			$erro = isset($_GET['retorno']) ? $_GET['retorno'] : false;
			if($erro == 'red') {
			    	echo '<p class="erro" style="background-color:'.$erro.';">E-mail ou senha inválida!</p>';
            }
            if($erro == '2') {
                echo '<p class="erro" style="background-color:'.$erro.';">Cadastro feito com sucesso</p>';
        }
?>
    <div class="img">
        <div class="container">
            <div class="corpo" style="height: 580px;">

                <form action="../includes/login_db.php" method="POST">
                    <br>
                    <br><br>
                    
                    <div >
                        <!-- src="https://image.flaticon.com/icons/png/512/17/17004.png"-->
                        <img id="z1" src="../img/pergunta2.png" alt="" style="height: 250px; width: 250px;">
               
                    </div>
                    <p class="p1">Para entrar digite seu e-mail e senha</p>
                    <input class="input_pergunta" type="text" placeholder="Digite seu email..." name="email" id="email"> 
                    <input class="input_pergunta" type="password" placeholder="Digite seu senha..." name="senha" id="senha"> 
                    <br>
                    <br>
                    <input type="submit" value="Entrar"> 
                    <input type="submit" name="btt_cadastro" value="Cadastrar">
                </form>

            </div>
        </div>
    </div>
</body>
</html>

<script src="../js/dialogo.js" defer> </script> 
