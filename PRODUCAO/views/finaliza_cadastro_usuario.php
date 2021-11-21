<!DOCTYPE html>
<html lang="pt_br">
<head>
<?php
	    include('../conexao.php');
        $id = $_GET['id'];
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    
    <title>Cadastro</title>
</head>
<body>
    <div class="img">
        <div class="container">
            <div class="corpo" style="height: 700px;">

                <form method="POST" action="../includes/cadastro_db.php">
                    <br>
                    <br>
                    <br>
                    <div >
                        <!-- src="https://image.flaticon.com/icons/png/512/17/17004.png"-->
                        
                    </div>
                    <img id="z1" src="../img/pergunta2.png" alt="" style="height: 250px; width: 250px;">
                    <p class="p1" style="font-size: 30px;"> Agora chame um responsavel para finalizar o seu cadastro de heroi</p> 
                  
                    <label class="label_class" for="data">Data de nascimento: </label><br>
                    <input class="input_date" id="data" required type="date" placeholder="Data de nascimento ..." name="nasc" id="nasc" /><br>
                    <br>
                    <input class="input_pergunta"  required type="text" placeholder="Digite um email..." name="email" id="email"> 
                    <input class="input_pergunta" required type="password" placeholder="Digite uma senha..." name="senha" id="senha">  
                    <input type="hidden"  value="<?php echo($id); ?>" name="id_heroi"  readonly>
                    <br>
                    <br>
                    <input class="input_quest" type="text" required placeholder="80 x 10" style="width: 60px; ">   <input type="submit" value="Cadastrar"> 
                </form>

            </div>
        </div>
    </div>
</body>
</html>


<script src="dialogo.js" defer> </script> 
   

</script>